<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <title>Rossina Estamparia - @yield('title')</title>
    @section('styles-includes')
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dist/app.css') }}">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    @show
    <script>
      window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
    </script>
</head>
<body>
<div id="app">
    @section('header-section')
        <div class="alert-hr"></div>
        <nav id="header" class="navbar navbar-fixed-top" style="height: 52px">
            <div id="header-container" class="container navbar-container">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                        <li><a href="{{ route('register') }}" class="btn btn-success">
                                Registre-se
                            </a>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="/"><img src="{{ asset('images/rossina/background/logo-rossina.png') }}" alt="" width="160" style="padding-bottom: 10px"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Serviços</a></li>
                        <li><a href="/tecidos">Tecidos</a></li>
                        <li><a href="#contact">Camisas</a></li>
                        <li><a href="/agendamento">Agendamento</a></li>
                        <li><a href="#contact">Faqs</a></li>
                        <li><a href="/contatos">Contatos</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    @show
    <div class="container-fluid">
        @yield('container-fluid')
    </div>
        {{--<div class="container">--}}
        {{--<div id="disqus_thread"></div>--}}
        {{--<script>--}}
        {{--(function() { // DON'T EDIT BELOW THIS LINE--}}
        {{--var d = document, s = d.createElement('script');--}}
        {{--s.src = 'https://https-rossinaestamparia-com-br.disqus.com/embed.js';--}}
        {{--s.setAttribute('data-timestamp', +new Date());--}}
        {{--(d.head || d.body).appendChild(s);--}}
        {{--})();--}}
        {{--</script>--}}
        {{--</div>--}}
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    @section('footer-section')
            <div class="alert-consumidor" style="margin-top: 20px">
                <h3 class="text-center">
                Atendemos somente pessoas físicas e jurídicas que estão iniciando, produzam ou revendam produtos. <br>
                Não atendemos particulares ("consumidor final").
            </h3>
        </div>
        <div class="alert-hr"></div>
        <div style="margin-top: 0px">
            <footer class="footer-bs">
                <div class="row">
                    <div class="col-md-3 footer-brand animated fadeInLeft">
                        <h2>Rossina Estamparia</h2>
                        <p>Estamparia digital têxtil, camisas personalizadas, camisas masculinas, camisas femininas, impressão em tecidos, serviços de estamparia digital, silk digital DTG, tecidos metro corrido, produtos etc..</p>
                        <p>© 2017 Rossina Estamparia</p>
                    </div>
                    <div class="col-md-4 footer-nav animated fadeInUp">
                        <h4>Menu —</h4>
                        <div class="col-md-6">
                            <ul class="pages">
                                <li><a href="#">Serviços</a></li>
                                <li><a href="#">Tecidos</a></li>
                                <li><a href="#">Camisas</a></li>
                                <li><a href="#">Agendamento</a></li>
                                <li><a href="#">Faqs</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list">
                                <li><a href="#">Sobre nós</a></li>
                                <li><a href="#">Contatos</a></li>
                                <li><a href="#">Termos & Condições</a></li>
                                <li><a href="#">Política de Privacidade</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 footer-social animated fadeInDown">
                        <h4>Siga-nós</h4>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">RSS</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-ns animated fadeInRight">
                        <h4>Newsletter</h4>
                        <p>Assine nosso boletim de novidades.</p>
                        <p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Seu e-mail aqui">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                        </div><!-- /input-group -->
                        </p>
                    </div>
                </div>
            </footer>
        </div>
</div>
    @show
    @section('javascript-includes')
        <script src="{{ asset('js/app.js') }}"></script>
        {{--<script src="https://unpkg.com/vue/dist/vue.js"></script>--}}
    @show
</body>
</html>