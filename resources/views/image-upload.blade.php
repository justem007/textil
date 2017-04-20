<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.2/fabric.js" type="text/javascript"></script>
    <title>Upload de Imagem</title>
</head>
<body>
<div class="container">
    <h1>Upload de Imagem de Camisas</h1>
    <div class="panel panel-primary">
        <div class="panel-heading"><h2>Upload imagem para camisetas</h2></div>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Houve alguns problemas com sua entrada. <br><br>
                <ul>
                    @foreach ($errors->all () as $errors)
                        <li>{{ $errors }}</li>
                    @endforeach
                </ul>
            </div>
         @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button class="button" type="button" data-dismiss>x</button> Imagem enviada com sucesso !
                <br>
            </div>
            {{--<canvas width="300" height="500" style="border: 1px solid black"></canvas>--}}
                <img src="/uploadcamisa/{{ Session::get('imageName') }}" alt="" width="300">
                <br><br>
        @endif

                <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <input type="file" name="image" />
                    </div>
                    <div class="col-md-12">
                        <br>
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>