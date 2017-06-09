<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;

use Textil\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Textil\Http\Requests\CalendarsCreateRequest;
use Textil\Http\Requests\CalendarsUpdateRequest;
use Textil\Repositories\CalendarsRepository;
use Textil\Repositories\CalendarsRepositoryEloquent;
use Textil\Repositories\HorariosRepositoryEloquent;
use Textil\Repositories\PessoasRepositoryEloquent;
use Textil\Validators\CalendarsValidator;


class CalendarsController extends Controller
{

    /**
     * @var CalendarsRepository
     */
    protected $calendar;

    /**
     * @var CalendarsValidator
     */
    protected $validator;

    /**
     * @var HorariosRepositoryEloquent
     */
    protected $horario;

    /**
     * @var PessoasRepositoryEloquent
     */
    protected $pessoa;

    public function __construct(CalendarsRepositoryEloquent $calendar, CalendarsValidator $validator,
                                HorariosRepositoryEloquent $horario,  PessoasRepositoryEloquent $pessoa)
    {
        $this->calendar = $calendar;
        $this->validator  = $validator;
        $this->horario = $horario;
        $this->pessoa = $pessoa;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->calendar->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $calendar = $this->calendar->paginate(1);
        $horario = $this->horario->all();
        $pessoa = $this->pessoa->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $calendar,
                'horarios' => $horario,
                'pessoas' => $pessoa
            ]);
        }

        return view('app.pages.calendars.index', compact('calendar','horario', 'pessoa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CalendarsCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CalendarsCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $calendar = $this->calendar->create($request->all());

            $response = [
                'message' => 'Calendars created.',
                'data'    => $calendar->toArray(),
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
        $calendar = $this->calendar->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $calendar,
            ]);
        }

        return view('calendars.show', compact('calendar'));
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

        $calendar = $this->calendar->find($id);

        return view('calendars.edit', compact('calendar'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  CalendarsUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(CalendarsUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $calendar = $this->calendar->update($request->all(), $id);

            $response = [
                'message' => 'Calendars updated.',
                'data'    => $calendar->toArray(),
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
        $deleted = $this->calendar->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Calendars deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Calendars deleted.');
    }
}
