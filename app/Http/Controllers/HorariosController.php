<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\HorariosCreateRequest;
use Textil\Http\Requests\HorariosUpdateRequest;
use Textil\Repositories\HorariosRepository;
use Textil\Validators\HorariosValidator;


class HorariosController extends Controller
{

    /**
     * @var HorariosRepository
     */
    protected $repository;

    /**
     * @var HorariosValidator
     */
    protected $validator;

    public function __construct(HorariosRepository $repository, HorariosValidator $validator)
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
        $horarios = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $horarios,
            ]);
        }

        return view('horarios.index', compact('horarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  HorariosCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(HorariosCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $horario = $this->repository->create($request->all());

            $response = [
                'message' => 'Horarios created.',
                'data'    => $horario->toArray(),
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
        $horario = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $horario,
            ]);
        }

        return view('horarios.show', compact('horario'));
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

        $horario = $this->repository->find($id);

        return view('horarios.edit', compact('horario'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  HorariosUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(HorariosUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $horario = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Horarios updated.',
                'data'    => $horario->toArray(),
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
                'message' => 'Horarios deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Horarios deleted.');
    }
}
