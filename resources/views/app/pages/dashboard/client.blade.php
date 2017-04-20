@extends('app.main.index')

@section('title', 'Page TItle')

@section('content')
    <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-users">Clientes</h1>
        <div class="ls-box">
            <div class="ls-float-right ls-regroup">
                <a href="" class="ls-btn-primary" target="_blank">Acessar o Painel</a>
                <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                    <a href="#" class="ls-btn"></a>
                    <ul class="ls-dropdown-nav">
                        <li>
                            <a href="" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" class="domain-actions">Editar</a>
                        </li>
                        <li><a href="#" data-ls-module="modal" data-target="#editPassword">Alterar senha</a></li>
                        <li><a href="#">Desativar</a></li>
                    </ul>
                </div>
            </div>
            <form action="" class="ls-form row" data-ls-module="form">
                <fieldset id="domain-form" class="ls-form-disable ls-form-text">
                    <label class="ls-label col-md-6 col-lg-8">
                        <b class="ls-label-text">Nome</b>
                        <input type="text" value="Fulano de tal" required>
                    </label>
                    <label class="ls-label col-md-6 col-lg-8">
                        <b class="ls-label-text">login/E-mail:</b>
                        <input type="text" value="emaildocliente@cliente.com.br" required>
                    </label>
                    <label class="ls-label col-md-6 col-lg-8">
                        <b class="ls-label-text">Status:</b>
                        <input type="text" value="Ativo" required>
                    </label>
                    <label class="ls-label col-md-6 col-lg-8">
                        <b class="ls-label-text">Data de cadastro:</b>
                        <input type="text" value="18/05/1987" required>
                    </label>
                    <label class="ls-label col-md-6 col-lg-8">
                        <b class="ls-label-text">Informações:</b>
                        <textarea name="" id="" cols="30" rows="5">com Fulano de Tal no telefone: 11 5555-5555. Horários entre 12:00 e 16:00 dias úteis.</textarea>
                    </label>
                </fieldset>
                <div class="domain-actions ls-display-none">
                    <button type="submit" class="ls-btn-primary">Salvar</button>
                    <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
                </div>
            </form>
        </div>
        <div class="ls-box ls-board-box">
            <header class="ls-info-header">
                <h2 class="ls-title-3 col-md-6 ls-ico-calendar-check">
                    Período atual
                    <small>01/01/2014 a 01/01/2015</small>
                </h2>
                <div class="ls-actions-btn ls-float-right">
                    <a href="" data-ls-module="modal" data-target="#removeMessage" class="ls-btn">Remover envios</a>
                    <a href="" data-ls-module="modal" data-target="#addMessage" class="ls-btn-primary">Adicionar envios</a>
                </div>
            </header>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="ls-box">
                        <strong class="ls-board-info">9 <small>milhões</small></strong>
                        <small>Válido até 01/01/2014</small>
                        <a href="#" class="ls-btn-sm ls-btn">Comprar mais envios</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="ls-box">
                        <div class="ls-box-head">
                            <h6 class="ls-title-4">Avulso</h6>
                        </div>
                        <div class="ls-box-body">
                            <strong class="ls-board-info">0</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="ls-box">
                        <div class="ls-box-head">
                            <h6 class="ls-title-4">Distribuído</h6>
                        </div>
                        <div class="ls-box-body">
                            <strong class="ls-board-info">0</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="ls-box">
                        <div class="ls-box-head">
                            <h6 class="ls-title-4 color-default">Utilizados</h6>
                        </div>
                        <div class="ls-box-body">
                            <strong class="ls-board-info">10.743</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ls-box ls-board-box">
            <header class="ls-info-header">
                <h2 class="ls-title-3 col-md-6 ls-ico-calendar-more">
                    Próximo período
                    <small>01/01/2014 a 01/01/2015</small>
                </h2>
                <div class="ls-actions-btn ls-float-right ls-float-none-xs">
                    <a href="" data-ls-module="modal" data-target="#editAmount" class="ls-btn ls-btn-block-sm">Alterar quantidade</a>
                </div>
            </header>
            <div class="row ">
                <div class="col-sm-6 col-md-3">
                    <div class="ls-box">
                        <strong class="ls-board-info">9 <small>milhões</small></strong>
                        <small>Válido até 01/01/2014</small>
                    </div>
                </div>
                <div class="col-sm-6 col-md-9">
                    <div class="ls-box">
                        <p class="ls-txt-center-all">
                            <a href="">Cancelar recorrência</a>
                            <span class="ls-ico-help" data-ls-module="popover" data-trigger="hover" data-title="Cancelar recorrência" data-content="Ao desabilitar a recorrência, os envios desse cliente não serão renovados para os próximos períodos." data-placement="top"></span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-6">
                <h3 class="ls-title-3">Relatórios</h3>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="ls-group-btn ls-group-active ls-float-right">
                    <button type="button" data-ls-module="tabs" data-target=".child1" class="ls-btn ls-active ls-ico-chart-bar-up"></button>
                    <button type="button" data-ls-module="tabs" data-target=".child2" class="ls-btn ls-ico-table-alt"></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="ls-tabs-nav" id="awesome-tab">
                    <li class="ls-active"><a data-ls-module="tabs" href="#tab1">Contratação x uso</a></li>
                    <li><a data-ls-module="tabs" href="#tab2">Estatísticas de envios</a></li>
                </ul>
                <div class="ls-tabs-container" id="awesome-tab-content">
                    <div id="tab1" class="ls-tab-content ls-active">

                        <div class="ls-tab-content child1 ls-active">
                            <p>Contratação x uso</p>
                            <div id="panel-charts"></div>
                        </div>
                        <div class="ls-tab-content child2">
                            <table class="ls-table">
                                <thead>
                                <tr>
                                    <th class="ls-txt-center hidden-xs">Período</th>
                                    <th class="ls-txt-center">Contratados</th>
                                    <th class="ls-txt-center" colspan="2">Distribuídos</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="ls-txt-center hidden-xs">28/03/2014 a 27/04/2014</td>
                                    <td class="ls-txt-center">1000000</td>
                                    <td class="ls-txt-center">10741</td>
                                    <td class="ls-txt-center">1%</td>
                                </tr>
                                <tr>
                                    <td class="ls-txt-center hidden-xs">28/03/2014 a 27/04/2014</td>
                                    <td class="ls-txt-center">1000000</td>
                                    <td class="ls-txt-center">10741</td>
                                    <td class="ls-txt-center">1%</td>
                                </tr>
                                <tr>
                                    <td class="ls-txt-center hidden-xs">28/03/2014 a 27/04/2014</td>
                                    <td class="ls-txt-center">1000000</td>
                                    <td class="ls-txt-center">10741</td>
                                    <td class="ls-txt-center">1%</td>
                                </tr>
                                <tr>
                                    <td class="ls-txt-center hidden-xs">28/03/2014 a 27/04/2014</td>
                                    <td class="ls-txt-center">1000000</td>
                                    <td class="ls-txt-center">10741</td>
                                    <td class="ls-txt-center">1%</td>
                                </tr>
                                <tr>
                                    <td class="ls-txt-center hidden-xs">28/03/2014 a 27/04/2014</td>
                                    <td class="ls-txt-center">1000000</td>
                                    <td class="ls-txt-center">10741</td>
                                    <td class="ls-txt-center">1%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="tab2" class="ls-tab-content">
                        <div class="ls-tab-content child1 ls-active">
                            <p>Estatísticas de envios</p>
                            <div id="panel-charts-client"></div>
                        </div>
                        <div class="ls-tab-content child2">
                            <table class="ls-table">
                                <thead>
                                <tr>
                                    <th class="ls-txt-center">Data</th>
                                    <th class="ls-txt-center">Todos</th>
                                    <th class="ls-txt-center" colspan="2">Ativos</th>
                                    <th class="ls-txt-center hidden-xs" colspan="2">Desativados</th>
                                    <th class="ls-txt-center hidden-xs" colspan="2">Bloqueados por bounce</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="ls-txt-center">Hoje</td>
                                    <td class="ls-txt-center">29</td>
                                    <td class="ls-txt-center">26</td>
                                    <td class="ls-txt-center hidden-xs">89%</td>
                                    <td class="ls-txt-center hidden-xs">3</td>
                                    <td class="ls-txt-center hidden-xs">10%</td>
                                    <td class="ls-txt-center hidden-xs">0</td>
                                    <td class="ls-txt-center hidden-xs">0%</td>
                                </tr>
                                <tr>
                                    <td class="ls-txt-center">Hoje</td>
                                    <td class="ls-txt-center">29</td>
                                    <td class="ls-txt-center">26</td>
                                    <td class="ls-txt-center hidden-xs">89%</td>
                                    <td class="ls-txt-center hidden-xs">3</td>
                                    <td class="ls-txt-center hidden-xs">10%</td>
                                    <td class="ls-txt-center hidden-xs">0</td>
                                    <td class="ls-txt-center hidden-xs">0%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="ls-title-3">Histórico de transações</h2>
        <div class="ls-box-filter">
            <form action="" class="ls-form ls-form-inline">
                <label class="ls-label">
                    <b class="ls-label-text">Período</b>
                    <input type="text" name="cel2" class="datepicker">
                </label>

                <label class="ls-label">
                    <b class="ls-label-text">a</b>
                    <input type="text" name="cel2" class="datepicker">
                </label>
                <div class="ls-actions-btn">
                    <button type="button" class="ls-btn">Filtrar</button>
                </div>
            </form>
        </div>
        <table class="ls-table">
            <thead>
            <tr>
                <th>Descrição</th>
                <th>Ação</th>
                <th>Envios</th>
                <th class="hidden-xs">Data</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Crédito envios mensais</td>
                <td>Crédito</td>
                <td>10.000</td>
                <td class="hidden-xs">01/01/2012 - 15h00</td>
            </tr>
            <tr>
                <td>Crédito envios mensais</td>
                <td>Crédito</td>
                <td>10.000</td>
                <td class="hidden-xs">01/01/2012 - 15h00</td>
            </tr>
            <tr>
                <td>Crédito envios mensais</td>
                <td>Crédito</td>
                <td>10.000</td>
                <td class="hidden-xs">01/01/2012 - 15h00</td>
            </tr>
            <tr>
                <td>Crédito envios mensais</td>
                <td>Crédito</td>
                <td>10.000</td>
                <td class="hidden-xs">01/01/2012 - 15h00</td>
            </tr>
            <tr>
                <td>Crédito envios mensais</td>
                <td>Crédito</td>
                <td>10.000</td>
                <td class="hidden-xs">01/01/2012 - 15h00</td>
            </tr>
            </tbody>
        </table>
        <!-- Modal de senha -->
        <div class="ls-modal" id="editPassword">
            <form action="#change-password" class="ls-form">
                <div class="ls-modal-small">
                    <div class="ls-modal-header">
                        <button data-dismiss="modal">×</button>
                        <h4 class="ls-modal-title">Alterar senha</h4>
                    </div>
                    <div class="ls-modal-body">
                        <label class="ls-label">
                            <b class="ls-label-text">Senha *</b>
                            <input type="password" required />
                        </label>
                        <label class="ls-label">
                            <b class="ls-label-text">Confirmação de senha *</b>
                            <input type="password" required />
                        </label>
                    </div>
                    <div class="ls-modal-footer">
                        <button type="submit" class="ls-btn-primary">Salvar</button>
                        <a href="#atualizar-senha" class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal Adicionar envios -->
        <div class="ls-modal" id="addMessage">
            <form action="" class="ls-form">
                <div class="ls-modal-box">
                    <div class="ls-modal-header">
                        <button data-dismiss="modal">×</button>
                        <h4 class="ls-modal-title">Adicionar envios avulsos</h4>
                    </div>
                    <div class="ls-modal-body ls-form-inline">
                        <p>Os envios avulsos terão o mesmo prazo de expiração que os envios normais cadastrados para esse cliente. 07/05/2014</p>
                        <p>
                            <strong>Saldo disponível da sua revenda</strong>
                            <span>889.239</span>
                        </p>
                        <hr>
                        <label class="ls-label">
                            <b class="ls-label-text">Quantidade de envios avulsos a adicionar</b>
                            <input type="number" name="" required>
                        </label>
                    </div>
                    <div class="ls-modal-footer">
                        <button type="submit" class="ls-btn-primary">Adicionar</button>
                        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal Remover envios -->
        <div class="ls-modal" id="removeMessage">
            <form action="" class="ls-form">
                <div class="ls-modal-box">
                    <div class="ls-modal-header">
                        <button data-dismiss="modal">×</button>
                        <h4 class="ls-modal-title">Remover envios</h4>
                    </div>
                    <div class="ls-modal-body">
                        <p>Os envios serão removidos automaticamente após esta ação.</p>
                        <label class="ls-label">
                            <b class="ls-label-text">Saldo disponível do cliente</b>
                            <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
                        </label>
                        <label class="ls-label">
                            <b class="ls-label-text">Disponível para remoção até 27/04/2014</b>
                            <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
                        </label>
                        <label class="ls-label">
                            <b class="ls-label-text">Quantidade de envios a remover</b>
                            <input type="number" name="" required>
                        </label>
                    </div>
                    <div class="ls-modal-footer">
                        <button type="submit" class="ls-btn-primary">Remover</button>
                        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal Alterar quantidade -->
        <div class="ls-modal" id="editAmount">
            <form action="" class="ls-form">
                <div class="ls-modal-box">
                    <div class="ls-modal-header">
                        <button data-dismiss="modal">×</button>
                        <h4 class="ls-modal-title">Alterar quantidade de envios</h4>
                    </div>
                    <div class="ls-modal-body">
                        <p>O novo valor só entrará em vigor após a data de 08/05/2014</p>
                        <label class="ls-label">
                            <b class="ls-label-text">Saldo disponível da sua revenda</b>
                            <input type="number" disabled="disabled" readonly="readonly" name="" value="889.239" >
                        </label>

                        <label class="ls-label">
                            <b class="ls-label-text">Quantidade de envios</b>
                            <input type="number" name="" value="10" >
                        </label>
                    </div>
                    <div class="ls-modal-footer">
                        <button type="submit" class="ls-btn-primary">Alterar</button>
                        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection