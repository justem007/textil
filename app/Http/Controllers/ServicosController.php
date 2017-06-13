<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\ServicosCreateRequest;
use Textil\Http\Requests\ServicosUpdateRequest;
use Textil\Repositories\ServicosRepository;
use Textil\Repositories\ServicosRepositoryEloquent;
use Textil\Validators\ServicosValidator;


class ServicosController extends Controller
{

    /**
     * @var ServicosRepository
     */
    protected $repository;

    /**
     * @var ServicosValidator
     */
    protected $validator;

    public function __construct(ServicosRepositoryEloquent $repository, ServicosValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    public function getIndex()
    {
        return view('app.pages.site.main.servicos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $servicos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servicos,
            ]);
        }

        return view('servicos.index', compact('servicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ServicosCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ServicosCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $servico = $this->repository->create($request->all());

            $response = [
                'message' => 'Servicos created.',
                'data'    => $servico->toArray(),
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
        $servico = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $servico,
            ]);
        }

        return view('servicos.show', compact('servico'));
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

        $servico = $this->repository->find($id);

        return view('servicos.edit', compact('servico'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ServicosUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ServicosUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $servico = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Servicos updated.',
                'data'    => $servico->toArray(),
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
                'message' => 'Servicos deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Servicos deleted.');
    }
}
