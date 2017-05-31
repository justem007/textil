<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\ServicoSublimacaoLocalizadaFullPrintCreateRequest;
use Textil\Http\Requests\ServicoSublimacaoLocalizadaFullPrintUpdateRequest;
use Textil\Repositories\ServicoSublimacaoLocalizadaFullPrintRepository;
use Textil\Repositories\ServicoSublimacaoLocalizadaFullPrintRepositoryEloquent;
use Textil\Validators\ServicoSublimacaoLocalizadaFullPrintValidator;


class ServicoSublimacaoLocalizadaFullPrintsController extends Controller
{

    /**
     * @var ServicoSublimacaoLocalizadaFullPrintRepository
     */
    protected $repository;

    /**
     * @var ServicoSublimacaoLocalizadaFullPrintValidator
     */
    protected $validator;

    public function __construct(ServicoSublimacaoLocalizadaFullPrintRepositoryEloquent $repository, ServicoSublimacaoLocalizadaFullPrintValidator $validator)
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
        $servicoSublimacaoLocalizadaFullPrints = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoSublimacaoLocalizadaFullPrints,
            ]);
        }

        return view('servicoSublimacaoLocalizadaFullPrints.index', compact('servicoSublimacaoLocalizadaFullPrints'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ServicoSublimacaoLocalizadaFullPrintCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ServicoSublimacaoLocalizadaFullPrintCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $servicoSublimacaoLocalizadaFullPrint = $this->repository->create($request->all());

            $response = [
                'message' => 'ServicoSublimacaoLocalizadaFullPrint created.',
                'data'    => $servicoSublimacaoLocalizadaFullPrint->toArray(),
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
        $servicoSublimacaoLocalizadaFullPrint = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoSublimacaoLocalizadaFullPrint,
            ]);
        }

        return view('servicoSublimacaoLocalizadaFullPrints.show', compact('servicoSublimacaoLocalizadaFullPrint'));
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

        $servicoSublimacaoLocalizadaFullPrint = $this->repository->find($id);

        return view('servicoSublimacaoLocalizadaFullPrints.edit', compact('servicoSublimacaoLocalizadaFullPrint'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ServicoSublimacaoLocalizadaFullPrintUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ServicoSublimacaoLocalizadaFullPrintUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $servicoSublimacaoLocalizadaFullPrint = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ServicoSublimacaoLocalizadaFullPrint updated.',
                'data'    => $servicoSublimacaoLocalizadaFullPrint->toArray(),
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
                'message' => 'ServicoSublimacaoLocalizadaFullPrint deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ServicoSublimacaoLocalizadaFullPrint deleted.');
    }
}
