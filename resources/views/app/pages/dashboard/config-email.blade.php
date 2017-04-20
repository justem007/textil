@extends('app.main.index')

@section('title', 'Page TItle')

@section('content')
    <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-cog">E-mail de remetente</h1>
        <p>Configure um domínio padrão para os links das mensagens e de acesso ao painel.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="ls-box">
                    <h2 class="ls-title-2">E-mail atual</h2>
                    <hr>
                    <form action="#" class="ls-form" data-ls-module="form">
                        <div class="row ls-form-disable" id="email-form">
                            <label class="ls-label col-md-5">
                                <span class="ls-label-text ls-hidden-accessible">email</span>
                                <input name="email" placeholder="email" required="" type="text" value="fulano@dominio.com">
                                <p><small>Status do e-mail: Aprovado</small></p>
                            </label>
                        </div>
                        <div id="email_actions" class="email-actions ls-display-none">
                            <button type="submit" class="ls-btn-primary">Salvar</button>
                            <button class="ls-btn" data-ls-fields-enable="#email-form" data-toggle-class="ls-display-none" data-target=".email-actions">Cancelar</button>
                        </div>
                        <button data-ls-fields-enable="#email-form" data-toggle-class="ls-display-none" data-target=".email-actions" class="ls-btn-primary email-actions">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection