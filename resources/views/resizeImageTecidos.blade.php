<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.2/fabric.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script src="http://malsup.github.com/jquery.form.js"></script>-->
    <script src="{{ asset('dist/js/image-size/image-size.js') }}"></script>
    <title>New Tecidos</title>
    <script>
        function addHandler() {
            var clickHandler = function() {
            this.style.backgroundColor = 'red';
        };
        (function() {
            var el = document.getElementById('el');
            el.onclick = clickHandler;
            })();
        }
        </script>
    <style>
        #test {
            width: 360px; /*height: 150px;*/
            background: silver;
        }

        #output {
            margin: 1em 0;
        }

        .coisa-col {
            background: #CCC;
            width: 28px;
            float: left;
            /*margin-left: 1px;*/
            /*height: 60px; width: 60px; background: black;*/
            /*z-index: 9999; float: left; margin-top: 40px;*/
        }

        .coisa-2 {
            float: left;
            margin: 0; /*background: black;*/
        }

        .coisa-3 {
            margin: 0; /*background: red;*/
        }

        .coisa-4 {
            float: left;
            margin: 0; /*background: yellow;*/
        }

        .coisa-5 {
            float: right;
        }

        .coisa-6 {
            background: #F5F5F5;
        }

        .col-md-8 {
            margin: 0;
            padding: 0;
        }

        #InputLargura {
            width: 65px;
        }

        #InputAltura {
            width: 70px;
        }

        table, th, td {
            border: 0;
        }

        .marquee {
            width: 750px;
            height: 390px;
            overflow: hidden;
            margin-top: 22px
        }

        .marquee canvas {
            position: absolute;;
        }

        .marquee canvas {
            transform: translateX(100%);
        }

        @keyframes left-one {
            0% {
                transform: translateX(100%);
            }
            25% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(0);
            }
            75% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        @keyframes left-two {
            0% {
                transform: translateX(-100%);
            }
            50% {
                transform: translateX(-100%);
            }
            60% {
                transform: translateX(0);
            }
            90% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .marquee canvas {
            transform: translateY(-100%);
        }

        @keyframes down-one {
            0% {
                transform: translateY(-100%);
            }
            10% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(50%);
            }
            100% {
                transform: translateY(-100%);
            }
        }

        @keyframes down-two {
            0% {
                transform: translateY(-100%);
            }
            50% {
                transform: translateY(-100%);
            }
            60% {
                transform: translateY(0);
            }
            90% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(100%);
            }
        }

        .marquee canvas:nth-child(1) {
            animation: down-one linear infinite;
            animation-duration: 2000s;
            /*animation-delay: 2s;*/
            /*animation-direction: reverse;*/
        }

        .marquee canvas:nth-child(2) {
            animation: down-two 20s ease infinite;
        }

        .coisa-7 {
            height: 48px;
            width: 550px;
            position: relative;
            margin-left: 68px;
        }

        .coisa-7 span {
            position: absolute;
            width: 555px;
            height: 100%;
            margin: 0;
            margin-top: 41px;
            /*line-height: 50px;*/
        }

        .coisa-7 span {
            transform: translateX(-100%);
        }

        .coisa-7 span:nth-child(1) {
            animation: left-one linear infinite;
            animation-duration: 2s;
            animation-delay: 2s;
            animation-direction: reverse;
            animation-iteration-count: 97;
        }

        .coisa-7 span:nth-child(2) {
            animation: left-two 15s linear infinite;
        }

        .maquina {
            width: 782px;
            height: 507px;
            background-image: url("{{ asset('images/impressora_frente-782-150-maior7.png') }}");
            background-repeat: no-repeat;
        }
        .progress { position:relative; width:336px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
        .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
        .percent { position:absolute; display:inline-block; top:3px; left:48%; }

    </style>
</head>
<body ng-app="demoApp">
{{--<div id="test"></div>--}}
<div class="container">
<div id="el">
    <p> Test misto </p>
</div>
    <h4 class="text-center text-primary">Redimensionar imagem para Tecidos</h4><br>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <main ng-controller="imageController">
            <div class="col-md-8 coisa-2">
                <div class="maquina">
                    {{--<strong>Manipulando Imagem:</strong>--}}
                    {{--<div class="coisa"></div>--}}
                    @if ($message = Session::get('success'))
                        <div class="coisa-7">
                            <span><img src="images/impressora_cabeca-40.png" height="30" alt=""></span>
                        </div>
                    @endif
                    {{--<div class="coisa-col">--}}
                    {{--<img src="{{ asset('images/regua_120_vertical_fundo_cinza_p_180.jpg') }}" alt="" width="28" height="400"--}}
                    {{--style="">--}}
                    {{--</div>--}}
                    {{--<marquee direction="down" width="752" height="400" behavior="scroll" truespeed="60" scrolldelay="485" vpsace="100%">--}}
                    {{--<canvas--}}
                    {{--id="ctecidos"--}}
                    {{--style="border: 1px dotted #CCC;">--}}
                    {{--</canvas>--}}
                    {{--</marquee>--}}
                    <div class="marquee">
                        <canvas
                                id="ctecidos"
                                style="margin-left: 83px;">
                        </canvas>
                    </div>
                    <img src="{{ asset('images/regua_180_ fundo_cinza2-180.jpg') }}" alt="" height="28" width="621" style="float: left; margin-left: 84px;">
                </div>
                @if ($message = Session::get('success'))
                    <figure image-dimensions>
                        <div class="col-md-4 coisa-3">
                            <p>
                                <strong class="text-center">Imagem Original</strong>
                            </p>
                            <img src="/uploadcamisa/{{ Session::get('imageName') }}" width="160"/>
                            <br><br>
                            <p>
                                <strong>Dimensões : </strong>@{{ naturalDimensions }}
                            </p>
                            <p>
                                <strong>Largura </strong><span id="largura">@{{ naturalWidth }}</span>
                            </p>
                            <p>
                                <strong>Altura </strong> @{{ naturalHeight }}
                            </p>
                        </div>
                    </figure>
                    <div class="col-md-4 coisa-4">
                        <p>
                            <strong class="text-center"> Amostra 20cm x 20cm</strong>
                        </p>
                        <canvas id="amostra">

                        </canvas>
                        <br>
                        <button type="button" class="btn btn-success" aria-label="Alinhar na esquerda"
                                style="border: 0;">
                            <strong>Adionar ao </strong><i class="fa fa-shopping-cart" aria-hidden="true"
                                                           style="font-size: 20px; color: darkolivegreen;"></i>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <label for="select111" class="control-label text-default text-center">
                            <strong>Escolha o Tecido</strong>
                        </label><br>
                        <select id="select111" class="form-control">
                            <option>MICROFIBRA PESADA, cor branca, 100% poliéster, 1,60 larg. 160gr/m2</option>
                            <option>MICROFIBRA FLEX, cor branca 92% poliéster/8%elastano, 1,50 larg., 124gr/m²
                            </option>
                            <option>SEDA DE POLIÉSTER FLUID, cor off white, 100% poliéster, 1,50 larg. 80gr/m2
                            </option>
                            <option>TRANSPARÊNCIA SILKY, cor cru, 100% poliéster, 1,48 larg. , 62gr/m2</option>
                            <option>CREPE DE CHINE, cor off white, 100% poliéster, 1,50 larg. 80gr/m2</option>
                            <option>CHIFFON, cor branca, 100% poliéster, 1,50 larg. 80gr/m2</option>
                            <option>OXFORD STRECH, cor branca, 100% poliéster, 1,50 larg. 160gr/m2</option>
                            <option>MALHA NEWPRENE, cor branca, 96% poliéster/4%elastano, 1,70 larg., 308gr/m²
                            </option>
                            <option>JERSEY, cor off white, 96% poliéster/4% elastano, 1,50 larg., 180gr/m²</option>
                            <option>HELANCA LIGHT, cor branca, 100% poliéster, 1,80 larg., 130gr/m²</option>
                        </select>
                        <br>
                        <p class="form-inline">
                            <strong> Quantidade : </strong><input type="number" class="form-control"
                                                                  style="width: 140px;">
                        </p>
                        <p>
                            Tecido plano, tinto em peça, construção cetim, formato por fios lisos de poliéster de
                            titulagem fina.
                        </p>
                        <button type="button" class="btn btn-success" aria-label="Alinhar na esquerda"
                                style="border: 0;">
                            <strong>Adionar ao </strong>
                            <i class="fa fa-shopping-cart"
                               aria-hidden="true"
                               style="font-size: 20px; color: darkolivegreen;">
                            </i>
                        </button>
                    </div>
                @endif
            </div>
        </main>
        <div class="col-md-4">
            <ul class="list-group" style="">
                {{--@if ($message = Session::get('success'))--}}
                {{--<div class="alert alert-success alert-block">--}}
                {{--<button type="button" class="close" data-dismiss="alert"><strong>X</strong></button>--}}
                {{--<strong>{{ $message }}</strong>--}}
                {{--</div>--}}
                {{--@endif--}}

                <li class="list-group-item coisa-6">
                    {!! Form::open(array('route' => 'resizeImagePost','enctype' => 'multipart/form-data')) !!}
                    <div class="row">
                        {{--<div class="col-md-12">--}}
                        {{--<br/>--}}
                        {{--{!! Form::text('title', null,array('class' => 'form-control','placeholder'=>'Adicionar Título')) !!}--}}
                        {{--</div>--}}
                        <div class="col-md-12">
                            <br/>
                            {!! Form::file('image', array('class' => 'image')) !!}
                        </div>
                        <div class="col-md-12">
                            <br/>
                            <button type="submit" class="btn btn-xs btn-primary">Enviar Imagem</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <br>
                    <h4 class="text-center">Banco de Imagens</h4>
                    <table class="table">
                        <tr>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                            <td><img src="/thumbnailcamisa/{{ Session::get('imageName') }}" width="50" alt=""></td>
                        </tr>
                    </table>
                    <p class="text-primary"><strong>Quero enviar o meu tecido.</strong></p>
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <p>
                                <label for="InputNome">Nome :</label>
                                <input type="text" class="form-control" id="InputNome" placeholder="Nome">
                            </p>
                        </div>
                        <br>
                        <div class="form-group">
                            <p>
                                <label for="InputComposicao">Composição :</label>
                                <input type="text" class="form-control" id="InputComposicao"
                                       placeholder="Composição">
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <label for="InputLargura">Largura</label>
                                <input type="number" class="form-control" id="InputLargura">
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <label for="InputAltura">Altura</label>
                                <input type="number" class="form-control" id="InputAltura">
                            </p>
                        </div>
                        <button type="button" class="btn btn-success" aria-label="Alinhar na esquerda"
                                style="border: 0;">
                            <strong>Adionar ao </strong><i class="fa fa-shopping-cart" aria-hidden="true"
                                                           style="font-size: 20px; color: darkolivegreen;"></i>
                        </button>
                    </form>
                </li>
                {{--<li class="list-group-item"><strong>Largura, Altura, Resolução</strong> @{{ naturalWidth }} pixel/pol</li>--}}
                {{--<li class="list-group-item"><strong>Altura da Imagem:</strong> @{{ naturalHeight }} pixel/pol</li>--}}
                {{--<li class="list-group-item"><strong>Dimensões : </strong> @{{ naturalDimensions }}</li>--}}
                {{--<li class="list-group-item"><strong>Resolução : </strong> 200 dpi</li>--}}
            </ul>
        </div>
    </div>
</div>
<script>
    // Instância inicial canvas
(function () {
   var canvas = this.__canvas = new fabric.Canvas('ctecidos', {
       width: 620,
       height: 2050
   });

   fabric.Object.prototype.transparentCorners = false;

   var padding = 0;

//        var imagem = new Image();
//        imagem.onload = function () {
//            var Height = this.naturalHeight,
//                Width  = this.naturalWidth;
//
//       $('#output').text('Largura: ' + Math.round((Width / 200) * 2.54) + ' cm | ' +
//        'Altura: ' + Math.round((Height / 200) * 2.54) + ' cm');

   var url = '/uploadcamisa/{{ Session::get('imageName') }}';

   fabric.Image.fromURL(url, function (img) {

  var image = {width: 26.400, height: 7.873333333333333 };

   var maxWidth = 2 * (parseInt(parseInt(1200 / (image.width * 150)) / 2) + 1);
   var maxHeight = canvas.height / img.height;
   var maxWidth2 = Math.round(maxWidth);

   console.log(maxWidth);
//   var calculoWidth = maxWidth;
   var img = img.scaleToWidth(50); //* img.scaleToWidth(100) * 100;

   var patternSourceCanvas = new fabric.StaticCanvas();
   patternSourceCanvas.add(img);

   var pattern = new fabric.Pattern({
       source: function () {
       patternSourceCanvas.setDimensions({
            width: img.getWidth() + padding,
            height: img.getHeight() + padding
        });
       return patternSourceCanvas.getElement();
     },
//            repeat: 'repeat'
   });

   canvas.add(new fabric.Rect({
       left: 0,
       top: 0,
       fill: pattern,
       width: 620,
       height: 2050,
       padding:10,
//       flipX:true,
//       flipY:true,
       hasControls:false,
       lockMovementX: false,
       lockMovementY: false,
       lockScalingY: false,
       lockScalingX: false,
       lockUniScaling:false,
   }));

//        canvas.add(new fabric.Polygon([
//           {x: 0, y: 0},
//           {x: 750, y: 0},
//           {x: 750, y: 750},
//           {x: 0, y: 750}], {
//           left: 0,
//           top: 0,
//           angle: 0,
//           padding: 0,
////        backgroundColor:,
//           fill: pattern,
//           objectCaching: false,
//           centeredRotation: true
//        }));
  document.getElementById('img-width').onchange = function () {
     img.scaleToWidth(parseInt(this.value, 10));
     canvas.renderAll();
   };
  document.getElementById('img-angle').onchange = function () {
     img.setAngle(this.value, 10);
     canvas.renderAll();
  };
  document.getElementById('img-padding').onchange = function () {
      padding = parseInt(this.value, 10);
      canvas.renderAll();
 };
  document.getElementById('img-offset-x').onchange = function () {
      pattern.offsetX = parseInt(this.value, 10);
      canvas.renderAll();
  };
  document.getElementById('img-offset-y').onchange = function () {
      pattern.offsetY = parseInt(this.value, 10);
      canvas.renderAll();
  };
  document.getElementById('img-repeat').onclick = function () {
      pattern.repeat = this.checked ? 'repeat' : 'no-repeat';
      canvas.renderAll();
  };
});
})();
</script>
<script>
    (function () {
        var canvas = this.__canvas = new fabric.Canvas('amostra', {
            width: 160,
            height: 160
        });

        fabric.Object.prototype.transparentCorners = false;

        var padding = 0;

        fabric.Image.fromURL('/uploadcamisa/{{ Session::get('imageName') }}', function (img) {

            var img = img.scaleToWidth(150); //* img.scaleToWidth(100) * 100;

            var patternSourceCanvas = new fabric.StaticCanvas();
            patternSourceCanvas.add(img);

            var pattern = new fabric.Pattern({
                source: function () {
                    patternSourceCanvas.setDimensions({
                        width: img.getWidth() + padding,
                        height: img.getHeight() + padding
                    });
                    return patternSourceCanvas.getElement();
                },
//            repeat: 'repeat'
            });

            canvas.add(new fabric.Rect({
                left: 0,
                top: 0,
                fill: pattern,
                width: 330,
                height: 330
            }));
        });
    })();
</script>
<script>
    $(function () {
        var imagem = new Image();

        imagem.onload = function () {
            var height = this.naturalHeight,
                width = this.naturalWidth;

            $('#output').text('Largura: ' + Math.round((width / 200) * 2.54) + ' cm | ' +
                    'Altura: ' + Math.round((height / 200) * 2.54) + ' cm');

            console.log('Width: ', (width / 72 ) * 2.54);
            console.log('Height: ', (height));
        }
        imagem.src = '/uploadcamisa/{{ Session::get('imageName') }}';
    });
</script>
{{--<script src="http://malsup.github.com/jquery.form.js"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>