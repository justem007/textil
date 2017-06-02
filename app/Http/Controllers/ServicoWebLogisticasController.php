<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\ServicoWebLogisticaCreateRequest;
use Textil\Http\Requests\ServicoWebLogisticaUpdateRequest;
use Textil\Repositories\ServicoWebLogisticaRepository;
use Textil\Repositories\ServicoWebLogisticaRepositoryEloquent;
use Textil\Validators\ServicoWebLogisticaValidator;


class ServicoWebLogisticasController extends Controller
{

    /**
     * @var ServicoWebLogisticaRepository
     */
    protected $repository;

    /**
     * @var ServicoWebLogisticaValidator
     */
    protected $validator;

    public function __construct(ServicoWebLogisticaRepositoryEloquent $repository, ServicoWebLogisticaValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     *
     */
    public function getIndex()
    {
        return view('app.pages.site.main.web-logistica');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $servicoWebLogisticas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoWebLogisticas,
            ]);
        }

        return view('servicoWebLogisticas.index', compact('servicoWebLogisticas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ServicoWebLogisticaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ServicoWebLogisticaCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $servicoWebLogistica = $this->repository->create($request->all());

            $response = [
                'message' => 'ServicoWebLogistica created.',
                'data'    => $servicoWebLogistica->toArray(),
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
        $servicoWebLogistica = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicoWebLogistica,
            ]);
        }

        return view('servicoWebLogisticas.show', compact('servicoWebLogistica'));
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

        $servicoWebLogistica = $this->repository->find($id);

        return view('servicoWebLogisticas.edit', compact('servicoWebLogistica'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ServicoWebLogisticaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ServicoWebLogisticaUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $servicoWebLogistica = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ServicoWebLogistica updated.',
                'data'    => $servicoWebLogistica->toArray(),
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
                'message' => 'ServicoWebLogistica deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ServicoWebLogistica deleted.');
    }
}
