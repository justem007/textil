<!doctype html>
<html>
<head>
    <title>Laravel Form Validation!</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- load bootstrap -->
    {{--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('dist/css/styles.css')}}">
    <style>
        body    { }
        .focused {background: #abcdef;}
    </style>
</head>

<body class="container-fluid">

<div class="navbar navbar-info">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-material-light-blue-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">Brand</a>
        </div>
        <div class="navbar-collapse collapse navbar-material-light-blue-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:void(0)">Active</a></li>
                <li><a href="javascript:void(0)">Link</a></li>
                <li class="dropdown">
                    <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control col-sm-8" placeholder="Search">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0)">Link</a></li>
                <li class="dropdown">
                    <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Teste de Validação!</h1>
        </div>

        @if (count($errors) > 0)
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Verifique esses dados abaixo.</h3>
                </div>
                <div class="panel-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            </div>
    @endif

        <!-- FORM STARTS HERE -->
        <form method="POST" action="/ducks" id="editForm" novalidate>
            {{ csrf_field() }}
            <div class="form-group @if ($errors->has('name')) has-error @endif">
                <label for="name">Nome</label>
                <input type="text" id="name" class="form-control" name="name" value="{{ Illuminate\Support\Facades\Input::old('name') }}">
                <span class="help-block text-info">Favor colocar seu nome corretamente</span>
                <br>
                @if ($errors->has('name')) <p class="alert alert-dismissible alert-danger">
                    {{ $errors->first('name') }}
                </p> @endif
            </div>

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control" name="email"  value="{{ Illuminate\Support\Facades\Input::old('email') }}">
                <span class="help-block text-info">Por favor, colocar um email válido</span>
                <br>
                @if ($errors->has('email')) <p class="alert alert-dismissible alert-danger">{{ $errors->first('email') }}</p> @endif
            </div>

            <div class="form-group @if ($errors->has('password')) has-error @endif">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password">
                <span class="help-block text-info">colocar uma senha entre 6 e 15 caracteris</span>
                @if ($errors->has('password')) <p class="alert alert-dismissible alert-danger">{{ $errors->first('password') }}</p> @endif
            </div>

            <div class="form-group @if ($errors->has('password_confirm')) has-error @endif">
                <label for="password_confirm">Confirme Password</label>
                <input type="password" id="password_confirm" class="form-control" name="password_confirm">
                <span class="help-block text-info">repita a senha de cima</span>
                @if ($errors->has('password_confirm')) <p class="alert alert-dismissible alert-danger">{{ $errors->first('password_confirm') }}</p> @endif
                <br>
            </div>

            <button type="submit" class="btn btn-success">Testar Validação</button>

        </form>

        {{--<div class="form-group">--}}
            {{--{{ Form::submit('Click Me!', ['class'=> 'btn btn-success']) }}--}}
            {{--<br>--}}
            {{--{{ Form::selectRange('number', 10, 20) }}--}}
            {{--<br>--}}
            {{--{{ Form::checkbox('name', 'value',true) }}--}}
            {{--<br><br>--}}
            {{--{{ Form::label('email', Illuminate\Support\Facades\Input::old('email'), ['class' => 'awesome']) }}--}}
            {{--{{ Form::text('email',null, ['placeholder' => 'placeholder text','class' => 'form-control']) }}--}}
            {{--<br><br>--}}
            {{--<span class="span">alguma coisa{{ Form::text('email')  }}</span>--}}
            {{--{!! Form::open(['url' => 'ducks']) !!}--}}
            {{--{!! Form::close() !!}--}}

        {{--</div>--}}
        <a href="#" id="try" class="btn btn primary" data-link="{{ url('/test') }}">Try</a>

    </div>
</div>

</body>
<script src="{{asset('dist/js/scripts.js')}}"></script>
<script>
//    $( "#editForm" ).validate({
//        ignore: ".ignore :hidden", //id,classes, estados, etc... dos campos a serem ignorado na validação
//        rules: {
//            name: {
//                required: "Minha mensagem de validação",
//                depends: function(){
//                depends: function(){
//                    $("#name").css("border","2px red solid");
//                }
//            }
//        }
//    });
</script>
<script>
    $("#try").click(function(){
        var url = $(this).attr("data-link");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/test",
            type:"PUT",
            data: { testdata : 'testdatacontent' },
            success:function(data){
                console.log(data);
            },error:function(){
                console.log("error!!!!");
            }
        }); //end of ajax
    });
</script>
<script type="text/javascript">

    var Valores = $(this).serialize();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/ducks",
        type: "POST",
        dataType: 'json',
        data: Valores,
        success: function (data) {
            return console.log('alguma coisa aqui');
        }
    });
</script>
</html>