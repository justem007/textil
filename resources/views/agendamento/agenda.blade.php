<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Faça seu Agendamento</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1 class="text-center">Agendamento</h1>
<div class="container">
    <div class="form-group">
        {!! Form::open(['action' => 'AgendarVisitasController@store']) !!}
        {{--<div class="form-group">--}}
            {{--<label for="evento">Descrição</label>--}}
            {{--<input type="text" class="form-control" id="evento" placeholder="Descrição">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputPassword1">Senha</label>--}}
            {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputFile">Entrada de arquivo</label>--}}
            {{--<input type="file" id="exampleInputFile">--}}
            {{--<p class="help-block">Exemplo de texto de ajuda em nível de bloco.</p>--}}
        {{--</div>--}}
        {{--<div class="checkbox">--}}
            {{--<label>--}}
                {{--<input type="checkbox"> Me selecione--}}
            {{--</label>--}}
        {{--</div>--}}
        <button type="submit" class="btn btn-default">Enviar</button>
        {!! Form::close() !!}
    </div>

</div>
<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
<script src="js/app.js"></script>
</body>
</html>
