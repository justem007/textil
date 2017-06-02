<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\ServicoSublimacaoMetroCorridoCreateRequest;
use Textil\Http\Requests\ServicoSublimacaoMetroCorridoUpdateRequest;
use Textil\Repositories\ServicoSublimacaoMetroCorridoRepository;
use Textil\Repositories\ServicoSublimacaoMetroCorridoRepositoryEloquent;
use Textil\Validators\ServicoSublimacaoMetroCorridoValidator;


class ServicoSublimacaoMetroCorridosController extends Controller
{

    /**
     * @var ServicoSublimacaoMetroCorridoRepository
     */
    protected $repository;

    /**
     * @var ServicoSublimacaoMetroCorridoValidator
     */
    protected $validator;

    public function __construct(ServicoSublimacaoMetroCorridoRepositoryEloquent $repository, ServicoSublimacaoMetroCorridoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     *
     */
    public function getIndex()
    {
        return view ('app.pages.site.main.sublimacao-metro-corrido');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $servicoSublimacaoMetroCorridos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoSublimacaoMetroCorridos,
            ]);
        }

        return view('servicoSublimacaoMetroCorridos.index', compact('servicoSublimacaoMetroCorridos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ServicoSublimacaoMetroCorridoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ServicoSublimacaoMetroCorridoCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $servicoSublimacaoMetroCorrido = $this->repository->create($request->all());

            $response = [
                'message' => 'ServicoSublimacaoMetroCorrido created.',
                'data'    => $servicoSublimacaoMetroCorrido->toArray(),
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
        $servicoSublimacaoMetroCorrido = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoSublimacaoMetroCorrido,
            ]);
        }

        return view('servicoSublimacaoMetroCorridos.show', compact('servicoSublimacaoMetroCorrido'));
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

        $servicoSublimacaoMetroCorrido = $this->repository->find($id);

        return view('servicoSublimacaoMetroCorridos.edit', compact('servicoSublimacaoMetroCorrido'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ServicoSublimacaoMetroCorridoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ServicoSublimacaoMetroCorridoUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $servicoSublimacaoMetroCorrido = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ServicoSublimacaoMetroCorrido updated.',
                'data'    => $servicoSublimacaoMetroCorrido->toArray(),
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
                'message' => 'ServicoSublimacaoMetroCorrido deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ServicoSublimacaoMetroCorrido deleted.');
    }
}
