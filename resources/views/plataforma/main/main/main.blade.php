<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=pt-br">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('dist/css/styles.css') }}">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('dist/js/excanvas.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('dist/js/prism.js') }}"></script>
    <script>
      (function () {
        var fabricUrl = '../dist/js/fabric.js';
        if (document.location.search.indexOf('load_fabric_from') > -1){
          var match = document.location.search.match(/load_fabric_from=([^&]*)/);
            if (match && match[1]){
              fabricUrl = match[1];
            }
        }
        document.write('<script src=" ' + fabricUrl + ' "><\/script>');
      })();
    </script>
    {{--<script src="{{ asset('dist/js/fabric.js') }}"></script>--}}
    <style>
        html, body {
            font-family: 'Roboto', 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    @yield('content')
</div>
{{--<a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/rossina-dot-com/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>--}}
{{--<script src=https://code.getmdl.io/1.2.0/material.min.js></script>--}}
    @include('plataforma.assets.js.js')
</body>
</html>
