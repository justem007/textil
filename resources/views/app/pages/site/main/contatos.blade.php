@section('styles-includes')
    @parent
@endsection

@extends('app.pages.site.main.main')

@section('title', 'Escreva seu title aqui')

@section('container-fluid')
    <div class="row">
        <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1 class="h1">
                            Contate-nos
                            <small>Sinta-se livre para contactar-nos</small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8" style="margin-top: 20px">
                        <div class="">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" class="form-control" id="name" placeholder="Seu Nome"
                                                   required="required"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="telefone">Telefone</label>
                                            <input type="text" class="form-control" id="telefone"
                                                   placeholder="Seu Telefone ou celular" required="required"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                E-mail</label>
                                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                       <input type="email" class="form-control" id="email" placeholder="Seu Email" required="required"/></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">
                                                Assunto</label>
                                            <select id="subject" name="subject" class="form-control"
                                                    required="required">
                                                <option value="na" selected="">Escolha um:</option>
                                                <option value="service">Tecidos e sublimação</option>
                                                <option value="suggestions">Camisas e silk-digital</option>
                                                <option value="product">Terceirizar serviços téxteis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Mensagem</label>
                                            <textarea name="message" id="message" class="form-control" rows="9"
                                                      cols="25" required="required"
                                                      placeholder="Mensagem">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                            Enviar Mensagem
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 20px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.912562570456!2d-42.970770049825006!3d-22.805703584989995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x999132e1868799%3A0x327af0d6437ac308!2sRossina+Estamparia+Digital!5e0!3m2!1spt-BR!2sbr!4v1489597695465"
                                width="370" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-8">
                        <form>
                            <legend style="color: white;"><span class="glyphicon glyphicon-globe"></span> Nossa Fábrica</legend>
                            <address>
                                <strong>NITISILK INDUSTRIA E COMERCIO DE ROUPAS LTDA - EPP</strong><br>
                                Avenida Presidente Roosevelt, 130 parte<br>
                                Vista Alegre - São Gonçalo <br>
                                Estado: Rio de Janeiro <br>
                                Cep: 24722-070 <br>
                                CNPJ: 05.035.305/0001-52 <br>
                                <abbr title="Telefone">
                                    Telefone:</abbr>
                                (21) 2602-7536
                            </address>
                            <address>
                                <strong>E-mail</strong><br>
                                <a href="mailto:#">vendas1@rossinaestamparia.com.br</a><br>
                                <strong>Skype</strong><br>
                                <a href="skype">Rossinaestamparia</a>
                            </address>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h1 class="text-center">Nossos Contatos</h1><br>
        <div class="row text-center">
            <div class="col-sm-3 col-xs-6 first-box">
                <h1><span class="glyphicon glyphicon-earphone"></span></h1>
                <h3>Telefone</h3>
                <p>+55 21 2602-7596</p><br>
            </div>
            <div class="col-sm-3 col-xs-6 second-box">
                <h1><span class="glyphicon glyphicon-home"></span></h1>
                <h3>Localização</h3>
                <p>Vista Alegre - São Gonçalo - RJ</p><br>
            </div>
            <div class="col-sm-3 col-xs-6 third-box">
                <h1><span class="glyphicon glyphicon-send"></span></h1>
                <h3>E-mail</h3>
                <p>vendas1@rossinaestamparia.com.br</p><br>
            </div>
            <div class="col-sm-3 col-xs-6 fourth-box">
                <h1><span class="glyphicon glyphicon-leaf"></span></h1>
                <h3>Web</h3>
                <p>https://rossinaestamparia.com.br</p><br>
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