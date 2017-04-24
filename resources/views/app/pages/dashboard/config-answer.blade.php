@extends('app.main.index')

@section('title', 'Page TItle')

@section('content')
    <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-cog">Atendimento</h1>
        <p>Personalize as informações de atendimento que irá oferecer aos seus clientes.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="ls-box">

                    <h2 class="ls-title-3">Telefone de contato</h2>
                    <p>Cadastre um telefone para que seus clientes possam entrar em contato direto com você. Este telefone será exibido na barra de atendimento quando o seu cliente acessar o seu Email Marketing.</p>

                    <hr>
                    <form action="#" class="ls-form row" data-ls-module="form">
                        <label id="phone-form" class="ls-label col-md-5 ls-form-disable">
                            <b class="ls-label-text">Telefone</b>
                            <input class="ls-mask-phone_with_ddd" name="telefone" placeholder="Número do telefone" required="" type="text" value="(11) 99999-9999">
                        </label>
                        <div class="phone-actions ls-display-none">
                            <button type="submit" class="ls-btn-primary">Salvar</button>
                            <button class="ls-btn" data-ls-fields-enable="#phone-form" data-toggle-class="ls-display-none" data-target=".phone-actions" >Cancelar</button>
                        </div>
                        <button data-ls-fields-enable="#phone-form" data-toggle-class="ls-display-none" data-target=".phone-actions" class="ls-btn-primary phone-actions">Editar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ls-box ls-equal-height-box-2">
                    <h2 class="ls-title-3">Webdesk</h2>
                    <p>Configure a sua conta do WebDesk para atender as solicitaçoes dos seus clientes através de chamados.</p>
                    <hr>
                    <form action="#" class="ls-form" data-ls-module="form">
                        <div id="webdesk-form" class="ls-form-disable">
                            <label class="ls-label">
                                <div class="ls-prefix-group">
                                    <span class="ls-label-text-prefix">https://</span>
                                    <input type="text" placeholder="entregaemails">
                                    <span class="ls-label-text-prefix">.webdesklw.com.br</span>
                                </div>
                            </label>
                        </div>
                        <div class="webdesk-actions ls-display-none">
                            <button type="submit" class="ls-btn-primary">Salvar</button>
                            <button class="ls-btn" data-ls-fields-enable="#webdesk-form" data-toggle-class="ls-display-none" data-target=".webdesk-actions">Cancelar</button>
                        </div>
                        <button data-ls-fields-enable="#webdesk-form" data-toggle-class="ls-display-none" data-target=".webdesk-actions" class="ls-btn-primary webdesk-actions">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection