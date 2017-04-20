@extends('app.main.index')
@section('title', 'Page TItle')
@section('content')
    <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-users">Cadastrar cliente</h1>
        <form action="client" class="ls-form">
            <legend class="ls-title-2">Identificação</legend>
            <div class="row">
                <label class="ls-label col-md-6">
                    <span class="ls-label-text">Nome</span>
                    <input type="text" name="name">
                </label>
            </div>
            <div class="row">
                <label class="ls-label col-md-6">
                    <span class="ls-label-text">Email</span>
                    <input type="text" name="email">
                </label>
            </div>
            <div class="row">
                <label class="ls-label col-md-3">
                    <span class="ls-label-text">Senha</span>
                    <input type="password" name="password">
                </label>
                <label class="ls-label col-md-3">
                    <span class="ls-label-text">Confirmação de senha</span>
                    <input type="password" name="password-confirmation">
                </label>
            </div>
            <div class="row">
                <label class="ls-label col-md-6">
                    <span class="ls-label-text">Informação</span>
                    <textarea rows="4"></textarea>
                    <p class="ls-helper-text">Preencha informações adicionais do seu cliente. Ex.: Dados de contato, endereço, etc.</p>
                </label>
            </div>
            <hr>
            <h2 class="ls-title-2">Envios</h2>
            <p>Verifique o seu saldo de revenda e adicione envios para seu cliente.</p>
            <div class="ls-box ls-box-gray">
                <div class="row">
                    <label class="ls-label col-md-6">
                        <span class="ls-label-text">Saldo disponível</span>
                        <input type="text" name="total-value" value="100.000" readonly>
                    </label>
                    <label class="ls-label col-md-6">
                        <span class="ls-label-text">Quantidade de envios à adicionar</span>
                        <input type="text" name="add-value" placeholder="0">
                    </label>
                </div>
                <hr>
                <label class="ls-label ls-label-inline ">
                    <input type="checkbox" name="nome" placeholder="Nome e sobrenome"/>
                    <span class="ls-label-text">Tornar essa quantidade de envios recorrente.</span>
                </label>
            </div>
            <p>Os envios têm data de expiração de 30 dias a partir da data que foram creditados.</p>
            <hr>
            <button type="submit" class="ls-btn-primary">Salvar</button>
            <a href="no-clients" class="ls-btn">Cancelar</a>
        </form>
    </div>
@endsection