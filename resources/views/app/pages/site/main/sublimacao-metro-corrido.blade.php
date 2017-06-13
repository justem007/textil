@section('styles-includes')
    @parent
    {{--<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/3rdparty/rm/clicklogger_namespace.1495659913733.js"></script>--}}
    {{--<script type="text/javascript">UOLRM.check(32);</script>--}}
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
        {{ $date }}<br>
        @if( $nome == 'Ricardo')
            Os dados estão corretos
        @else
            Os dados não estão corretos
        @endif
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
            <br><br>
            <div class="row">
                <img src="https://photos-5.dropbox.com/t/2/AABMzMBnIRjMAOHEzD69DmSsTg76LM4ylBOFkCQ6OgdAJA/12/673388052/png/32x32/1/_/1/2/babette-pattern.png/EL_L1cAFGHwgBygH/ruGbPg-1vaOC6EQJaPuhdE4rEL1w8T3uuftaeQWDhrU?size=1600x1200&size_mode=3" width="300" alt="">
                {!! app('captcha')->render(); !!}
            </div>
        </div>
        {{--Utilizando o Schema.Org--}}
    <div class="row" itemscope itemtype="http://schema.org/Service">
        <meta itemprop="serviceType" content="Home cleaning" />
        <span itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness">
            <span itemprop="name">Rossina Estamparia Digital</span>
        </span><br>
            Serviços de sublimação em tecidos a base de poliéster, silk digital DTG - Kornit e Web-Logística
        <br>
        <span itemprop="areaServed" itemscope itemtype="http://schema.org/State">
            <span itemprop="name">Rio de Janeiro</span>, incluindo
        </span>
        <ul itemprop="hasOfferCatalog" itemscope itemtype="http://schema.org/OfferCatalog">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">
                <span itemprop="name">Oferecemos os serviços de estamparia digital</span>
                <ul itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/Offer">
                        <div itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">
                            <span itemprop="name">Sublimação Metro Corrido</span>
                        </div>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/Offer">
                        <div itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">
                            <span itemprop="name">Sublimação Localizada ou Frente Total - Full Print</span>
                        </div>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/Offer">
                        <div itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">
                            <span itemprop="name">Silk Digital DTG</span>
                        </div>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/Offer">
                        <div itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">
                            <span itemprop="name">Web-Logística</span>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
@section('footer-section')
    @parent

@endsection

@endsection

@section('javascript-includes')
    @parent
@endsection
