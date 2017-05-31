<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\ServicoSilkDigitalDtgKornitCreateRequest;
use Textil\Http\Requests\ServicoSilkDigitalDtgKornitUpdateRequest;
use Textil\Repositories\ServicoSilkDigitalDtgKornitRepository;
use Textil\Repositories\ServicoSilkDigitalDtgKornitRepositoryEloquent;
use Textil\Validators\ServicoSilkDigitalDtgKornitValidator;


class ServicoSilkDigitalDtgKornitsController extends Controller
{

    /**
     * @var ServicoSilkDigitalDtgKornitRepository
     */
    protected $repository;

    /**
     * @var ServicoSilkDigitalDtgKornitValidator
     */
    protected $validator;

    public function __construct(ServicoSilkDigitalDtgKornitRepositoryEloquent $repository, ServicoSilkDigitalDtgKornitValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     *
     */
    public function getIndex()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $servicoSilkDigitalDtgKornits = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoSilkDigitalDtgKornits,
            ]);
        }

        return view('servicoSilkDigitalDtgKornits.index', compact('servicoSilkDigitalDtgKornits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ServicoSilkDigitalDtgKornitCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ServicoSilkDigitalDtgKornitCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $servicoSilkDigitalDtgKornit = $this->repository->create($request->all());

            $response = [
                'message' => 'ServicoSilkDigitalDtgKornit created.',
                'data'    => $servicoSilkDigitalDtgKornit->toArray(),
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
        $servicoSilkDigitalDtgKornit = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoSilkDigitalDtgKornit,
            ]);
        }

        return view('servicoSilkDigitalDtgKornits.show', compact('servicoSilkDigitalDtgKornit'));
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

        $servicoSilkDigitalDtgKornit = $this->repository->find($id);

        return view('servicoSilkDigitalDtgKornits.edit', compact('servicoSilkDigitalDtgKornit'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ServicoSilkDigitalDtgKornitUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ServicoSilkDigitalDtgKornitUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $servicoSilkDigitalDtgKornit = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ServicoSilkDigitalDtgKornit updated.',
                'data'    => $servicoSilkDigitalDtgKornit->toArray(),
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
                'message' => 'ServicoSilkDigitalDtgKornit deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ServicoSilkDigitalDtgKornit deleted.');
    }
}
