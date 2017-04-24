@extends('plataforma.main.main.main')

@section('title', 'Rossina Estamparia Digital')

@section('content')

    {{--aqui está o arquivo do header--}}
    @include('plataforma.partial.header.header')

    <div class="rossina-content mdl-layout__content">
        <!-- FORM STARTS HERE -->
        <div class="rossina-more-section">
            <div class="rossina-section-title mdl-typography--display-1-color-contrast text-center">
                <h1 class="display-4 text-uppercase">
                    Nossos Serviços
                </h1>
            </div>
            <div class="rossina-card-container mdl-grid">
                <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/rossina/tecidos-lisos-estampados.jpg')}}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text text-center">
                            Prestamos os serviços de:
                        </h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            <h2>
                                Sublimação Metro  Corrido.
                            </h2>
                            <p>
                                Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem.
                                Produção mínima 10 metros lineares.
                            </p>
                        </p>
                            <hr>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            <h2>Sublimação localizado, ideal para camisas e produtos</h2>
                            <p>
                                Área máxima de impressão 70cm x 100cm
                            </p>
                        </p>
                            <hr>
                        <p class="mdl-typography--font-light mdl-typography--subhead">
                            <h2>Silk Digital (DTG)</h2>
                            <p>Sem resíduos, sem utilização de água, sem limite de cores no formato máximo de 35cm x 45cm
                                podendo estampar peças abertas ou fechadas em malhas claras ou escuras nos gêneros adulto,
                                infantil, feminina.
                            </p>
                        </p>
                            <hr>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        {{--aqui está o arquivo do footer--}}
        @include('plataforma.partial.footer.footer')
    </div>
@endsection