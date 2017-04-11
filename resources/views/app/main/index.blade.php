<!DOCTYPE html>
<html lang="pt-br" class="ls-theme-gold">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/dashboard/ico-painel1.png">
  <link rel="apple-touch-icon" href="images/dashboard/ico-painel1.png">
  <title>Plataforma Têxtil - @yield('title')</title>
  <!-- build:css css/app.min.css -->
  <link rel="stylesheet" href="css/dist/normalize.css">
  <link rel="stylesheet" href="css/dist/locastyle.css" >
  <link rel="stylesheet" href="css/dist/app-locaweb.css">
  <!-- endbuild -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_home documentacao_exemplos_painel1_home_index documentacao_exemplos_painel1_new-client documentacao_exemplos_painel1_new-client_index">
<div class="ls-topbar ">
  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">
    <!-- Links de apoio -->
    <div class="ls-alerts-list">
      <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
      <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
      <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
    </div>
    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <img src="images/dashboard/image-teste.jpg" alt="" />
        <span class="ls-name">Xurupita Costa</span>
        (xurupitinha)
      </a>
      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Meus dados</a></li>
          <li><a href="#">Faturas</a></li>
          <li><a href="#">Planos</a></li>
          <li><a href="#">Sair</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <span class="ls-show-sidebar ls-ico-menu"></span>
  <a href="pre-painel"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>
  <!-- Nome do produto/marca com sidebar -->
  <h1 class="ls-brand-name">
    <a href="home" class="ls-ico-earth">
      <small>Uma descrição ou outro nome</small>
      O nome do Produto
    </a>
  </h1>
  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>
<aside class="ls-sidebar">
  <div class="ls-sidebar-inner">
    <a href="/app"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>
    <nav class="ls-menu">
      <ul>
        <li><a href="app" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
        <li><a href="clients" class="ls-ico-users" title="Clientes">Clientes</a></li>
        <li><a href="stats" class="ls-ico-stats" title="Relatórios da revenda">Relatórios da revenda</a></li>
        <li>
          <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
          <ul>
            <li><a href="config-domain">Domínios da Revenda</a></li>
            <li><a href="config-email">E-mail de Remetente</a></li>
            <li><a href="config-aspect">Aparência</a></li>
            <li><a href="config-answer">Atendimento</a></li>
            <li><a href="config-api">Chave de acesso para API</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<main class="ls-main ">
  {{--aqui vai o corpo do documento--}}
  @yield('content')
  <footer class="ls-footer" role="contentinfo">
    <nav class="ls-footer-menu">
      <h2 class="ls-title-footer">suporte e ajuda</h2>
      <ul class="ls-footer-list">
        <li>
          <a href="#" target="_blank" class="bg-customer-support">
            <span class="visible-lg">Atendimento</span>
          </a>
        </li>
        <li>
          <a href="#" target="_blank" class="bg-my-tickets">
            <span class="visible-lg">Meus Chamados</span>
          </a>
        </li>
        <li>
          <a href="#" target="_blank" class="bg-help-desk">
            <span class="visible-lg">Central de Ajuda (Wiki)</span>
          </a>
        </li>
        <li>
          <a href="#" target="_blank" class="bg-statusblog">
            <span class="visible-lg">Statusblog</span>
          </a>
        </li>
      </ul>
    </nav>
    <div class="ls-footer-info">
      <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
      <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
      <p class="ls-copy-right">Copyright © 1997-2017 Serviços de Internet S/A.</p>
    </div>
  </footer>
</main>
<aside class="ls-notification">
  <nav class="ls-notification-list" id="ls-notification-curtain">
    <h3 class="ls-title-2">Notificações</h3>
    <ul>
      <li class="ls-dismissable">
        <a href="#">Sint animi ut reiciendis quia aperiam odio rerum consequuntur omnis</a>
        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
      </li>
      <li class="ls-dismissable">
        <a href="#">Sint dolore velit veritatis sit dolores provident soluta dicta tempora sapiente consequatur</a>
        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
      </li>
      <li class="ls-dismissable">
        <a href="#">Sed sunt officiis esse est amet dolorem debitis impedit quis</a>
        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
      </li>
      <li class="ls-dismissable">
        <a href="#">Voluptatibus aliquid voluptatem enim est numquam possimus aut voluptatem</a>
        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
      </li>
      <li class="ls-dismissable">
        <a href="#">Sint neque tenetur voluptate quis eveniet aut est architecto nihil explicabo</a>
        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
      </li>
    </ul>
    <p class="ls-no-notification-message">Não há notificações.</p>
  </nav>
  <nav class="ls-notification-list" id="ls-help-curtain">
    <h3 class="ls-title-2">Feedback</h3>
    <ul>
      <li><a href="#">> magni enim veritatis rerum quia quas</a></li>
      <li><a href="#">> repellat quo vitae qui earum et</a></li>
    </ul>
  </nav>
  <nav class="ls-notification-list" id="ls-feedback-curtain">
    <h3 class="ls-title-2">Ajuda</h3>
    <ul>
      <li class="ls-txt-center hidden-xs">
        <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
      </li>
      <li><a href="#">> Guia</a></li>
      <li><a href="#">> Wiki</a></li>
    </ul>
  </nav>
</aside>
  <!-- build:js js/app.min.js -->
  <script src="js/dist/jquery.js"></script>
  <script src="js/dist/examplo.js"></script>
  <script src="js/dist/locastyle.js"></script>
  <script src="js/dist/highcharts.js"></script>
  <script src="js/dist/panel-charts.js"></script>
  <script src="js/dist/app.js"></script>
  <!-- endbuild -->
  <script type="text/javascript">
      $(window).on('load', function() {
          locastyle.browserUnsupportedBar.init();
      });
  </script>
</body>
</html>