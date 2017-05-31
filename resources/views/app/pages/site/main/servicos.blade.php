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
    </div>
@section('footer-section')
    @parent

@endsection

@endsection

@section('javascript-includes')
    @parent
    <script>
      $(document).ready( function() {
        $('#myCarousel').carousel({
          interval:   4000
        });

        var clickEvent = false;
        $('#myCarousel').on('click', '.nav-slide a', function() {
          clickEvent = true;
          $('.nav-slide li').removeClass('active');
          $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function(e) {
          if(!clickEvent) {
            var count = $('.nav-slide').children().length -1;
            var current = $('.nav-slide li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
              $('.nav-slide li').first().addClass('active');
            }
          }
          clickEvent = false;
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        var myNavBar = {

          flagAdd: true,

          elements: [],

          init: function (elements) {
            this.elements = elements;
          },

          add: function () {
            if (this.flagAdd) {
              for (var i = 0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
              }
              this.flagAdd = false;
            }
          },

          remove: function () {
            for (var i = 0; i < this.elements.length; i++) {
              document.getElementById(this.elements[i]).className =
                document.getElementById(this.elements[i]).className.replace(/(?:^|\s)fixed-theme(?!\S)/g, '');
            }
            this.flagAdd = true;
          }

        };
        myNavBar.init([
          "header",
          "header-container",
          "brand"
        ]);

        function offSetManager() {
          var yOffset = 0;
          var currYOffSet = window.pageYOffset;

          if (yOffset < currYOffSet) {
            myNavBar.add();
          }
          else if (currYOffSet == yOffset) {
            myNavBar.remove();
          }
        }

        window.onscroll = function (e) {
          offSetManager();
        }

        offSetManager();

      });
    </script>
@endsection