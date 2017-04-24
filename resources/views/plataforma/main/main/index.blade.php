@extends('plataforma.main.main.main')

@section('title', 'Rossina Estamparia Digital')

@section('content')

    {{--aqui está o arquivo do header--}}
    @include('plataforma.partial.header.header')

    <div class="rossina-content mdl-layout__content">
        <a name="top"></a>
        <div class="rossina-be-together-section mdl-typography--text-center">
            <div class="logo-font rossina-slogan">
                <h1 class="rossina-h1">
                    Rossina Estamparia<br>
                    Impressão Digital
                </h1>
            </div>
            <div class="logo-font rossina-sub-slogan">
                <h2 class="rossina-h2">
                    Estamparia digital têxtil, serviços de sublimação metro corrido e localizado, tecidos personalizados,
                    silk digital DTG, produtos têxteis
                </h2>
            </div>
            <div class="logo-font rossina-create-character">
                <i class="material-icons rossina-icon-g">thumb_up</i>
                <h3 class="rossina-h3">
                    Transforme sua idéia e arte em produtos
                </h3>
            </div>
        </div>
        <div class="rossina-more-section">
            <div class="rossina-section-title mdl-typography--display-1-color-contrast text-center">
                <h2 class="rossina-h2 mdl-color-text--green-800">
                    O que você procura  ?
                </h2>
            </div>
            <div class="rossina-card-container mdl-grid">
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/rossina/maquinas-v2.jpg')}}">
                        <h2 class="mdl-card__title-text text_center2">
                            <span class="rossina-title-span mdl-color--blue-800">
                                Serviços
                            </span>
                        </h2>
                    </div>
                    <div class="mdl-card__supporting-text mdl-color-text--blue-900">
                        <span class="mdl-typography--font-light mdl-typography--subhead">
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Sublimação metro corrido.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Sublimação localizada e full print.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Silk digital (DTG). Impressão direta
                        </p>
                    <p class="mdl-typography--subhead" style="font-family: Times New Roman, Times, serif">
                        Trabalhe focado no que você sabe fazer de melhor : criar, produzir ou vender e terceirize conosco sua produção.
                    </p>
                    <p class="mdl-typography--subhead" style="font-family: Times New Roman, Times, serif">
                        EXPERIÊNCIA-PONTUALIDADE
                    </p>
                        </span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Saiba mais
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/rossina/crepe-de-chine.jpg')}}" height="241">
                        <h2 class="mdl-card__title-text">
                            <span class="rossina-title-span mdl-color--red-900">
                                Tecidos
                            </span>
                        </h2>
                    </div>
                    {{--<div class="mdl-card__title">--}}
                    {{--</div>--}}
                    <div class="mdl-card__supporting-text mdl-color-text--red-600">
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Impressão Digital em Tecidos de Poliéster ou Misturas.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Metro corrido (rolos).
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Desenhos com padronagem ou Full print.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Produção mínima 10 metros lineares.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Peças Costuradas (Full Print ou localizada).
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Peças Cortadas
                        </p>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            saiba mais
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/rossina/Camiseta-basica-branca-reforco-no-ombro-frente.jpg')}}" height="241">
                        <h2 class="mdl-card__title-text">
                            <span class="rossina-title-span  mdl-color--yellow-900">
                                Camisas
                            </span>
                        </h2>
                    </div>
                    {{--<div class="mdl-card__title">--}}
                    {{--</div>--}}
                    <div class="mdl-card__supporting-text mdl-color-text--yellow-900">
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            Impressão digital nas posições: frente-costas no formato máximo 35cm x 45cm em bases claras ou escuras.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Dedique seu tempo em CRIAR e VENDER não desperdice seu capital em estoque, máquinas, espaço físico.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Produzimos etiquetas
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Produção mínima 10 metros lineares.
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Peças Costuradas (Full Print ou localizada).
                        </p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            {{--<i class="material-icons icons-blue">done</i>--}}
                            Peças Cortadas
                        </p>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            saiba mais
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/rossina/almofadas-com-estampas.jpg')}}" class="largura-imagem" height="241">
                        <h2 class="mdl-card__title-text">
                            <span class="rossina-title-span  mdl-color--green-700">
                                Produtos
                            </span>
                        </h2>
                    </div>
                    <div class="mdl-card__supporting-text mdl-color-text--green-800">
                        <span class="mdl-typography--font-light mdl-typography--subhead">
                            <p class="mdl-typography--font-light mdl-typography--subhead">
                                {{--<i class="material-icons icons-blue">done</i>--}}
                                Papel sublimático estampado em rolo.
                            </p>
                            <p class="mdl-typography--font-light mdl-typography--subhead">
                                {{--<i class="material-icons icons-blue">done</i>--}}
                                Banners, faixas e painéis em qualquer tamanho.
                            </p>
                            <p class="mdl-typography--font-light mdl-typography--subhead">
                                {{--<i class="material-icons icons-blue">done</i>--}}
                                Camisas (básicas, raglan manga curta, gola v, baby look...).
                            </p>
                            <p class="mdl-typography--font-light mdl-typography--subhead">
                                {{--<i class="material-icons icons-blue">done</i>--}}
                                Cangas.
                            </p>
                            <p class="mdl-typography--font-light mdl-typography--subhead">
                                {{--<i class="material-icons icons-blue">done</i>--}}
                                Lenços.
                            </p>
                            <p class="mdl-typography--font-light mdl-typography--subhead">
                                {{--<i class="material-icons icons-blue">done</i>--}}
                                Echarpes.
                            </p>
                            <p class="mdl-typography--font-light mdl-typography--subhead">
                                {{--<i class="material-icons icons-blue">done</i>--}}
                                Capas de almofadas.
                            </p>
                    <p class="mdl-typography--font-light mdl-typography--subhead"  style="font-family: Times New Roman, Times, serif">
                        Venha desenvolver o seu produto conosco, e entregue diretamente para o seu cliente
                    </p>
                        </span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            saiba mais
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--aqui está o arquivo do footer--}}
        @include('plataforma.partial.footer.footer')
    </div>
@endsection