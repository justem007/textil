@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">Bem-vindo ao jogo mais divertido do mundo!</div>
                    <div class="panel-body">
                        @if($value = session('value'))
                            <div class="alert alert-success">
                                <h2>Parabens! {{ auth()->user()->name }}! Sua pontuação aumentou apenas {{ $value }}.</h2>
                                <h4>Sua pontuação atual é {{ auth()->user()->score }}</h4>
                            </div>
                        @endif
                        <h4 class="text-center">Clique em um cartão e escolha o seu destino.</h4>
                        <div class="row">
                            @foreach($cardes as $carde)
                                <div class="col-sm-4">
                                    <a href="{{ route('card', $carde->id) }}">
                                        <div class="card" style="background-color: {{$carde->color}}; height: 100px;"></div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel-heading">Você pode sempre <a href="/">leaderboard</a> verificar seu ranking.</div>
                </div>
            </div>
        </div>
    </div>
@endsection