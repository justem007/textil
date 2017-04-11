@extends('app.main.index')

@section('title', 'Page TItle')

@section('content')
    <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-cog">API</h1>
        <p>Utilize o ID da conta, a chave de acesso e a URL abaixo para autenticar suas chamadas na API.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="ls-box">
                    <p><strong>ID da conta</strong></p>
                    <p class="ls-break-text">5106f51636e1d9c770000001</p>
                    <hr>
                    <p><strong>Chave de acesso</strong></p>
                    <p class="ls-break-text">YFJPXDxzHthxgRY1uYs8FWJfqnpDjMEq1MFNyxEQVTAr</p>
                    <hr>
                    <p><strong>Endereço de URL</strong></p>
                    <p class="ls-break-text">https://emailmarketing.locaweb.com.br/api/v1</p>
                </div>
            </div>
        </div>
    </div>
@endsection