<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\FaqCreateRequest;
use Textil\Http\Requests\FaqUpdateRequest;
use Textil\Repositories\FaqRepository;
use Textil\Validators\FaqValidator;


class FaqsController extends Controller
{

    /**
     * @var FaqRepository
     */
    protected $repository;

    /**
     * @var FaqValidator
     */
    protected $validator;

    public function __construct(FaqRepository $repository, FaqValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $faqs = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $faqs,
            ]);
        }

        return view('faqs.index', compact('faqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FaqCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FaqCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $faq = $this->repository->create($request->all());

            $response = [
                'message' => 'Faq created.',
                'data'    => $faq->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $faq,
            ]);
        }

        return view('faqs.show', compact('faq'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $faq = $this->repository->find($id);

        return view('faqs.edit', compact('faq'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  FaqUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(FaqUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $faq = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Faq updated.',
                'data'    => $faq->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Faq deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Faq deleted.');
    }
}
