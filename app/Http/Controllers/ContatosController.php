<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\ContatosCreateRequest;
use Textil\Http\Requests\ContatosUpdateRequest;
use Textil\Repositories\ContatosRepository;
use Textil\Repositories\ContatosRepositoryEloquent;
use Textil\Validators\ContatosValidator;


class ContatosController extends Controller
{

    /**
     * @var ContatosRepository
     */
    protected $repository;

    /**
     * @var ContatosValidator
     */
    protected $validator;

    public function __construct(ContatosRepositoryEloquent $repository, ContatosValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function getIndex()
    {
        return view('app.pages.site.main.contatos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $contatos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $contatos,
            ]);
        }

        return view('contatos.index', compact('contatos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContatosCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContatosCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $contato = $this->repository->create($request->all());

            $response = [
                'message' => 'Contatos created.',
                'data'    => $contato->toArray(),
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
        $contato = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $contato,
            ]);
        }

        return view('contatos.show', compact('contato'));
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

        $contato = $this->repository->find($id);

        return view('contatos.edit', compact('contato'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ContatosUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ContatosUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $contato = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Contatos updated.',
                'data'    => $contato->toArray(),
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
                'message' => 'Contatos deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Contatos deleted.');
    }
}
