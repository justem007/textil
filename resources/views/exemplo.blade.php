@section('styles-includes')
    @parent

@endsection

@extends('app.pages.site.main.main')

@section('title', 'Escreva seu title aqui')

@section('container-fluid')

    <h1 class="text-center">Título da página</h1>

    <div class="row">

    </div>

@section('footer-section')
    @parent

@endsection

@endsection

@section('javascript-includes')
    @parent

@endsection
