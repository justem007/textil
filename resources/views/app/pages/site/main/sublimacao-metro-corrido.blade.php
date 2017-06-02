@section('styles-includes')
    @parent

@endsection

@extends('app.pages.site.main.main')

@section('title', 'Sublimação Metro Corrido - Rolo a Rolo')

@section('container-fluid')
    <header>
        <h1 class="text-center" style="font-size: 30px; font-weight: 300; margin-bottom: 40px">Sublimação Metro Corrido</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-md-6 text-info" style="border: dotted 2px #CCC; padding: 5px">
                <p>
                    Vendemos somente o papel estampado em Impressão Digital ou<br>
                    Prestamos o Serviço imprimindo qualquer tecido de poliéster com ou sem elastano ou paetê
                </p>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 col-sm-12 col-md-6 text-info" style="border: dotted 2px #CCC; padding: 5px">
                Metro corrido (rolos).<br>
                Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem. <br>
                Produção mínima 10 metros lineares.
            </div>
        </div>
        <div class="row">
            <div class="modal fade" id="modal-mensagem">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                              <h4 class="modal-title">Título da mensagem</h4>
                          </div>
                          <div class="modal-body">
                              <iframe width="565" name="InlineFrame1" src="https://pagseguro.uol.com.br/desenvolvedor/simulador_de_frete.jhtml?CepOrigem=24722070&Peso=0.300&Valor=69,90#rmcl">

                              </iframe>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-mensagem">Exibir cálculo de frete</button>
            <!-- INICIO CODIGO PAGSEGURO -->
            <a href="https://pagseguro.uol.com.br/desenvolvedor/simulador_de_frete.jhtml?CepOrigem=24722070&Peso=0.300&Valor=69,90#rmcl" id="ps_freight_simulator" target="InlineFrame1">
                <img src="https://p.simg.uol.com.br/out/pagseguro/i/user/imgCalculoFrete.gif" id="imgCalculoFrete" alt="Cálculo automático de frete" border="0" />
            </a>
            <script type="text/javascript" src="https://p.simg.uol.com.br/out/pagseguro/j/simulador_de_frete.js"></script>
            <!-- FINAL CODIGO PAGSEGURO -->
        </div>
    </div>

@section('footer-section')
    @parent

@endsection

@endsection

@section('javascript-includes')
    @parent
@endsection
