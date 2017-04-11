<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <title>Meus Gráficos</title>

    {!! Charts::assets() !!}

</head>
<body>
<center>
    {!! $chart->render() !!}
    <br>
    <hr>
    <br>
    {!! $chart2->render() !!}
    <br>
    <hr>
    <br>
    {!! $chart3->render() !!}
    <br>
    <hr>
    <br>
    {!! $chart4->render() !!}
    <br>
    <hr>
    <br>
    {!! $chart5->render() !!}
    <br>
    <hr>
    <br>
    {!! $geo->render() !!}
    <br>
    <hr>
    <br>
    {!! $temp->render() !!}
</center>
</body>
</html>