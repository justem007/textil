<?php

namespace Textil\Http\Controllers;

use DateTimeZone;
use Illuminate\Http\Request;

use Jenssegers\Date\Date;
use JsonLd\Context as JsonLd;
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
        $context = JsonLd::create('local_business',[
            'name' => 'Rossina Estamparia',
            'description' => 'Serviços de sublimação metro corrido, sublimação localizado, frente total, full print, silk digital DTG, web-logística',
            'telephone' => '21-2602-7536',
            'openingHours' => 'segunda-feira, terça-feira, quarta-feira, quinta-feira, sexta-feira',
            'address' => [
                'streetAddress' => 'AVENIDA PRESIDENTE ROOSEVELT, 130 PARTE',
                'addressLocality' => 'Vista Alegre, São Gonçalo',
                'addressRegion' => 'Rio de Janeiro',
                'postalCode' => '24722-070',
            ],
            'geo' => [
                'latitude' => '-22.805951',
                'longitude' => '-42.968565',
            ],
        ]);

        Date::setLocale('pt-BR');

        $timezone = new DateTimeZone('America/Sao_Paulo');

        $date = Date::now($timezone)->format('l j F Y H:i:s');

        $nome = 'Ricardo';

        return view('app.pages.site.main.sublimacao-metro-corrido', ['date' => $date, 'nome' => $nome, 'context' => $context]);
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
