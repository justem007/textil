@section('styles-includes')
    @parent
@endsection

@extends('app.pages.site.main.main')

@section('title', 'Escreva seu title aqui')

@section('container-fluid')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://placehold.it/1200x400/16a085/ffffff&text=Silk Digital DTG - kornit">
                    <div class="carousel-caption">
                        <h3>Silk Digital DTG - kornit</h3>
                        <p>
                            Impressão digital nas posições: frente-costas-mangas no formato máximo 35cm x 45cm em bases claras ou escuras.
                        </p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Sulimação Metro Corrido">
                    <div class="carousel-caption">
                        <h3>Sulimação Metro Corrido</h3>
                        <p>
                            Desenhos com padronagem ou Full print.
                            Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem.
                            Produção mínima 10 metros lineares.
                        </p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Serviços Texteis Digital">
                    <div class="carousel-caption">
                        <h3>Serviços Texteis Digital</h3>
                        <p>
                            Na Rossina Estamparia você pode comprar o produto pronto ou terceirizar
                            parcialmente de acordo com o seu volume de produção.
                        </p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Agendar Visita na Fábrica">
                    <div class="carousel-caption">
                        <h3>Agendar Visita na Fábrica</h3>
                        <p>
                            Faça um agendamento, veja e sinta a qualidade de nossos serviços. <br>
                            Garanta que seu cliente receba o melhor da impressão digital têxtil.
                        </p>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Carousel Inner -->
            <ul class="nav-slide nav-pills nav-justified nav-slide-pills text-center nav-slide-justified">
                <li data-target="#myCarousel" data-slide-to="0" class="active">
                    <a href="#">Silk Digital DTG<small>Máquina Kornit</small></a>
                </li>
                <li data-target="#myCarousel" data-slide-to="1">
                    <a href="#">Sublimação<small>Metro Corrido e Localizado</small></a>
                </li>
                <li data-target="#myCarousel" data-slide-to="2">
                    <a href="#">Serviços<small>Impressão digital em tecidos e camisas</small></a>
                </li>
                <li data-target="#myCarousel" data-slide-to="3">
                    <a href="#">Agendamento<small>Agende uma visita na Fábrica</small></a>
                </li>
            </ul>
        </div>
        <!-- End Carousel -->
    </div>

    <div class=" site-wrapper">
            <h2 class="text-center chamada"
                style="text-transform: uppercase; font-weight: 200;">
                Quanto vale seu tempo ? <br>
                Terceirize Conosco
            </h2>
            <div class="container">
                <div class="row" style="margin-bottom: 1px">
                    <div class="col-md-4 box-color" style="border-top: 0;text-align: center;font-size: 12px;">
                        <div style="background-color: #FFF">
                            <div style="width: 100%; background-color: #68ceee; height: 50px; margin-top: 90px"> </div>
                            <div class="box-center">
                                <div class="flex-box">
                                    <img src="images/rossina/background/maquinas.jpg" class="img-circle" height="200">
                                </div>
                            </div>
                            <p  style="font-size: 34px; font-weight: 200;">
                                Serviços Têxteis
                            </p>
                            <p style="font-size: 14px;  padding: 0 5px 5px 5px; margin-top: 1px; height: 205px;">
                                Venha conhecer nossa estrutura e converse direto com o Rossina, conheça nossa equipe e veja como é fácil iniciar o seu novo negócio diminuindo custos terceirizando a sua produção.
                                <br><br>
                                Trabalhe focado no que você sabe fazer de melhor : criar, produzir ou vender e terceirize conosco sua produção.
                                <br><br>
                            </p>
                            <a href="#" class="btn btn-block btn-primary">Saiba mais</a>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-4 box-color"
                         style="border-top: 0;text-align: center;font-size: 12px;">
                        <div style="background-color: #FFF">
                            <div style="width: 100%; background-color: #68ceee; height: 50px; margin-top: 90px"> </div>
                            <div class="box-center">
                                <div class="flex-box">
                                    <img src="images/rossina/background/rosa.jpg" class="img-circle" width="200" height="200">
                                </div>
                            </div>
                            <p  style="font-size: 34px; font-weight: 200;">
                                Tecidos Estampados
                            </p>
                            <p style="font-size: 14px;  height: 205px; padding: 0 5px 5px 5px;">
                                Estamparia Digital em Metro Corrido Oferecemos bases de tecidos de poliéster para você imprimir a sua ARTE e produzir vários produtos.
                                <br><br>
                                Desenhos com padronagem ou Full print. <br><br>
                                Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem. <br><br>
                                Produção mínima 10 metros lineares
                            </p>
                            <a href="#" class="btn btn-block btn-primary">Saiba mais</a>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-4 box-color"
                         style="border-top: 0;text-align: center;font-size: 12px;">
                        <div style="background-color: #FFF">
                            <div style="width: 100%; background-color: #68ceee; height: 50px; margin-top: 90px"> </div>
                            <div class="box-center">
                                <div class="flex-box">
                                    <img src="images/rossina/background/coruja-pt.jpg" class="img-circle" width="200" height="200">
                                </div>
                            </div>
                            <p  style="font-size: 34px; margin-top: 10px; font-weight: 200;">
                                Camisas Estampadas
                            </p>
                            <p style="font-size: 14px; margin-top: 5px; height: 205px;  padding: 0 5px 5px 5px;">
                                Camisas lisas para personalização ou customização sob demanda de acordo com suas especificações
                                Camisas personalizadas masculinas e femininas.
                                <br><br>
                                Impressão digital nas posições: frente-costas-mangas no formato máximo 35cm x 45cm em bases claras ou escuras.
                                <br><br>
                                Dedique seu tempo em CRIAR e VENDER não desperdice seu capital em estoque, máquinas, espaço físico.
                            </p>
                            <a href="#" class="btn btn-block btn-primary">Saiba mais</a>
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
@endsection