@section('styles-includes')
    @parent
@endsection

@extends('app.pages.site.main.main')

@section('title', 'Escreva seu title aqui')

@section('container-fluid')
    <div class=" site-wrapper">
        <h1 class="text-center chamada" style="text-transform: uppercase; font-weight: 200;">
            Sublimação - Silk Digital DTG - Web Logística
        </h1>
        <div class="container">
            <div class="row" style="margin-bottom: 1px">
                <div class="col-md-3 box-color" style="border-top: 0;text-align: center;font-size: 12px;">
                    <div style="background-color: #FFF">
                        <div style="width: 100%; background-color: #68ceee; height: 50px; margin-top: 90px"> </div>
                        <div class="box-center">
                            <div class="flex-box">
                                <img src="{{ asset('images/rossina/background/servicos/sublimacao-metro-corrido.jpg') }}" class="img-circle" height="200">
                            </div>
                        </div>
                        <h2  style="font-size: 24px; font-weight: 200;">
                            Sublimação Metro Corrido
                        </h2>
                        <p style="font-size: 14px;  padding: 0 5px 5px 5px; margin-top: 1px; height: 205px;">
                            Estamparia Digital em Metro Corrido Oferecemos bases de tecidos de poliéster para você imprimir a sua
                            ARTE e produzir vários produtos.
                            <br><br>
                            Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem. <br><br>
                            Produção mínima 10 metros lineares
                        </p>
                        <a href="{{ url('servicos/sublimacao-metro-corrido') }}" class="btn btn-block btn-primary">Comprar / Orçamento</a>
                        <br>
                    </div>
                </div>
                <div class="col-md-3 box-color"
                     style="border-top: 0;text-align: center;font-size: 12px;">
                    <div style="background-color: #FFF">
                        <div style="width: 100%; background-color: #68ceee; height: 50px; margin-top: 90px"> </div>
                        <div class="box-center">
                            <div class="flex-box">
                                <img src="{{ asset('images/rossina/background/servicos/sublimacao-localizada.jpg') }}" class="img-circle" width="200" height="200">
                            </div>
                        </div>
                        <h2  style="font-size: 24px; font-weight: 200;">
                            Sublimação Localizado <br>
                            Full Print - Total Frente
                        </h2>
                        <p style="font-size: 14px;  height: 205px; padding: 0 5px 5px 5px;">
                            Estamparia Digital localizado, full print - total frente, em bases de tecidos de poliéster para você imprimir
                            a sua ARTE e produzir vários produtos.
                            <br><br>
                            Tamanhos que podem variar de 5x5cm para um etiqueta até placas 70x100cm <br><br>
                        </p>
                        <a href="{{ url('servicos/sublimacao-localizado-total-frente-full-print') }}" class="btn btn-block btn-primary">
                            Comprar / Orçamento
                        </a>
                        <br>
                    </div>
                </div>
                <div class="col-md-3 box-color"
                     style="border-top: 0;text-align: center;font-size: 12px;">
                    <div style="background-color: #FFF">
                        <div style="width: 100%; background-color: #68ceee; height: 50px; margin-top: 90px"></div>
                        <div class="box-center">
                            <div class="flex-box">
                                <img src="{{ asset('images/rossina/background/servicos/silk-digital-dtg.jpg') }}" class="img-circle" width="200" height="200">
                            </div>
                        </div>
                        <h2 style="font-size: 24px; margin-top: 10px; font-weight: 200;">
                            Silk Digital DTG <br>
                        </h2>
                        <p style="font-size: 14px; margin-top: 5px; height: 205px;  padding: 0 5px 5px 5px;">
                            Impressão direta para fibras naturais e fibras sintéticas. Algodão, couro, poliéster <br><br>
                            Serviço mais usado para impressão em camisas 100% algodão.<br><br>
                            Impressão digital nas posições: frente-costas-mangas no formato máximo 35cm x 45cm em bases claras ou escuras.
                        </p>
                        <br>
                        <a href="{{ url('servicos/silk-digital-dtg-kornit') }}" class="btn btn-block btn-primary">Comprar / Orçamento</a>
                        <br>
                    </div>
                </div>
                <div class="col-md-3 box-color"
                     style="border-top: 0;text-align: center;font-size: 12px;">
                    <div style="background-color: #FFF">
                        <div style="width: 100%; background-color: #68ceee; height: 50px; margin-top: 90px"> </div>
                        <div class="box-center">
                            <div class="flex-box">
                                <img src="{{ asset('images/rossina/background/servicos/web-logistica.jpg') }}" class="img-circle" width="200" height="200">
                            </div>
                        </div>
                        <h2 style="font-size: 24px; margin-top: 10px; font-weight: 200;">
                            Web Logística <br>
                        </h2>
                        <p style="font-size: 14px; margin-top: 5px; height: 205px;  padding: 0 5px 5px 5px;">
                            Venda sob demanda e entregamos diretamente para o seu cliente um produto personalizado com a sua marca.
                            <br>
                            <br>
                            Dedique seu tempo em CRIAR e VENDER não desperdice seu capital em estoque, máquinas, espaço físico.
                        </p>
                        <br>
                        <a href="{{ url('servicos/web-logistica') }}" class="btn btn-block btn-primary">Comprar / Orçamento</a>
                    </div>
                </div>
            </div>
        </div>
        <script type="application/ld+json">
            {
                "@context": "http://schema.org/",
                "@type": "Service",
                "serviceType": "Sublimação - Silk Digital DTG - Web Logística",
                "provider": {
                    "@type": "LocalBusiness",
                    "name": "ACME Home Cleaning"
                },
                "areaServed": {
                    "@type": "State",
                    "name": "Rio de Janeiro"
                },
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Cleaning services",
                    "itemListElement": [
                        {
                            "@type": "OfferCatalog",
                            "name": "House Cleaning",
                            "itemListElement": [
                            {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Apartment light cleaning"
                            }
                            },
                            {
                            "@type": "Offer",
                            "itemOffered": {
                            "@type": "Service",
                            "name": "House light cleaning up to 2 bedrooms"
                            }
                            },
                            {
                            "@type": "Offer",
                            "itemOffered": {
                            "@type": "Service",
                            "name": "House light cleaning 3+ bedrooms"
                            }
                        }
                    ]
                },
                {
                    "@type": "OfferCatalog",
                        "name": "One-time services",
                        "itemListElement": [
                    {
                    "@type": "Offer",
                        "itemOffered": {
                        "@type": "Service",
                        "name": "Window washing"
                    }
                },
                    {
                    "@type": "Offer",
                        "itemOffered": {
                        "@type": "Service",
                        "name": "Carpet cleaning"
                    }
                },
                    {
                    "@type": "Offer",
                        "itemOffered": {
                        "@type": "Service",
                        "name": "Move in/out cleaning"
                    }
                }
                      ]
                }
                      ]
                }
            }
        </script>
    </div>
@section('footer-section')
    @parent

@endsection

@endsection

@section('javascript-includes')
    @parent
@endsection