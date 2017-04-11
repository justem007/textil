@extends('app.main.index')

@section('title', 'Page TItle')

@section('content')
<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-dashboard">Dashboard</h1>
    <div class="ls-box ls-board-box">
        <header class="ls-info-header">
            <p class="ls-float-right ls-float-none-xs ls-small-info">Valido até <strong>01.05.2017</strong></p>
            <h2 class="ls-title-3">Consumo de envios</h2>
        </header>
        <div id="sending-stats" class="row">
            <div class="col-sm-6 col-md-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4">Contratado</h6>
                    </div>
                    <div class="ls-box-body">
          <span class="ls-board-data">
            <strong>1 <small>milhão</small></strong>
          </span>
                    </div>
                    <div class="ls-box-footer">
                        <a href="#" class="ls-btn ls-btn-xs">Alterar plano</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4">Avulso</h6>
                    </div>
                    <div class="ls-box-body">
          <span class="ls-board-data">
            <strong>0</strong>
          </span>
                    </div>
                    <div class="ls-box-footer">
                        <a href="#" class="ls-btn ls-btn-xs">Contratar mais envios</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4">Distribuído</h6>
                    </div>
                    <div class="ls-box-body">
          <span class="ls-board-data">
            <strong>10.743</strong>
          </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4 color-default">Disponível</h6>
                    </div>
                    <div class="ls-box-body">
          <span class="ls-board-data">
            <strong class="ls-color-theme">81%</strong>
            <small>989.257</small>
          </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ls-box">
        <header class="ls-info-header">
            <h2 class="ls-title-3">Clientes que mais contrataram</h2>
            <a href="#" class="ls-btn ls-btn-sm">Ver mais relatórios</a>
        </header>
        <div id="panel-charts"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="ls-box">
                <header class="ls-info-header">
                    <h2 class="ls-title-3">Clientes que mais contrataram</h2>
                    <a href="#" class="ls-btn ls-btn-sm">Ver todos</a>
                </header>

                <table class="ls-table">
                    <thead>
                    <th>Nome do cliente</th>
                    <th>Data de expiração</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="client">João da Silva</a> </td>
                        <td>10.04.2014</td>
                    </tr>
                    <tr>
                        <td><a href="client">João da Silva</a> </td>
                        <td>10.04.2014</td>
                    </tr>
                    <tr>
                        <td><a href="client">João da Silva</a> </td>
                        <td>10.04.2014</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="ls-box">
                <a href="#" class="ls-lnk-nav ls-ico-chevron-right">Política da conta</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ls-box">
                <header class="ls-info-header">
                    <h2 class="ls-title-3">Clientes bloqueados por bounce</h2>
                    <a href="clients" class="ls-btn ls-btn-sm">Ver todos</a>
                </header>
                <table class="ls-table">
                    <thead>
                    <th>Nome do cliente</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="client">João da Silva</a> </td>
                    </tr>
                    <tr>
                        <td><a href="client">João da Silva</a> </td>
                    </tr>
                    <tr>
                        <td><a href="client">João da Silva</a> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="ls-box">
                <a href="#" class="ls-lnk-nav ls-ico-chevron-right">Política de bounce</a>
            </div>
        </div>
    </div>
</div>
    @endsection