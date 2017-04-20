<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.2/fabric.min.js"></script>
    <title>New Camisas</title>
    <style>
        .mockup-canvas{
            width: 1000px;
            height: 1000px;
            float: left;
            background: url('../../images/rossina/Camiseta-basica-branca-reforco-no-ombro-frente-costa-1000.jpg') center top no-repeat;
            /*border: solid 1px #CCC;*/
        }
        .mockup-canvas img{
            /*max-width: 120px;*/
        }
        #my-img {
            width: 230px;
        }
        #my-img2 {
            width: 130px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Redimensionar imagem para camisetas</h1>
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

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        <div class="row">
            <div class="col-md-2">
                <strong>Imagem Original:</strong>
                <br/>
                <img src="/uploadcamisa/{{ Session::get('imageName')}} " width="200" class="thumbnail" id="logo"/>
                <strong id="mostraAltura"></strong>
            </div>
            <div class="col-md-8">
                <strong style="margin-left: 50px;">Manipulando Imagem:</strong>
                <div class="mockup-canvas">
                    <canvas
                            id="c"
                            width="230"
                            height="410"
                            style="border: 1px dotted black; margin-left: 117px; margin-top: 55px;">
                    </canvas>
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <strong style="margin-top: 30px;">Imagem em baixa resolução.</strong>
                    <br>
                    <img src="/uploadcamisa/{{ Session::get('imageName') }}" class="img-responsive" id="my-img"/>
                </div>
            </div>
        </div>
    @endif

    {!! Form::open(array('route' => 'resizeImagePost','enctype' => 'multipart/form-data')) !!}
    <div class="row">
        <div class="col-md-4">
            <br/>
            {!! Form::text('title', null,array('class' => 'form-control','placeholder'=>'Adicionar Título')) !!}
        </div>
        <div class="col-md-12">
            <br/>
            {!! Form::file('image', array('class' => 'image')) !!}
        </div>
        <div class="col-md-12">
            <br/>
            <button type="submit" class="btn btn-success">Upload Image</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

<script>
    var imagem = new Image();
    // evento disparado quando
    // a imagem terminou o carregamento
    imagem.onload = function() {
        var height = this.height,
                width = this.width;
        console.log('Width: ', width);
        console.log('Height: ', height);
    }
    imagem.src = "/uploadcamisa/{{ Session::get('imageName') }}";
</script>
<script>
    function showHeight( element, height ) {
        $( "div" ).text( "The height for the " + element + " is " + height + "px." );
    }
    $( "#mostraAltura" ).onload(function() {
        showHeight( "window".height() );
    });
</script>
<script>
    var canvas = new fabric.Canvas('c');
    var imgElement = document.getElementById('my-img');
    var imgInstance = new fabric.Image(imgElement, {
       left:0,
       top:0
    });
    canvas.add(imgInstance);
</script>

<script>
    $('img#logo').width();
    $('img#logo').height();
</script>

<script>
    // Instância inicial canvas
    (function() {
        var canvas = this.__canvas = new fabric.Canvas('ctecidos');
        fabric.Object.prototype.transparentCorners = false;

        var padding = 0;

        fabric.Image.fromURL('/thumbnailcamisa/{{ Session::get('imageName') }}', function(img) {

            var img = img.scaleToWidth(100); //* img.scaleToWidth(100) * 100;

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
                repeat: 'repeat'
            });

            canvas.add(new fabric.Polygon([
                {x: 0, y: 0},
                {x: 700, y: 0},
                {x: 700, y: 700},
                {x: 0, y: 700}], {
                left: 0,
                top: 0,
                angle: 0,
                padding: 0,
//        backgroundColor:,
                fill: pattern,
                objectCaching: false,
                centeredRotation: true
            }));

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
    function isElementInViewport(el) {
        if (!el)
            return false;
        var rect = el.getBoundingClientRect();
        return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function loadItemsInView() {
        //Select elements by the row id.
        $("#row [data-src]").each(function () {
            var isVisible = isElementInViewport(this);
            if (isVisible) {
                if ($(this).attr("src") == undefined) {
                    $(this).attr("src", $(this).data("src"));
                }
            }
        });
    }

    //Example of calling loadItemsInView() from within window.onscroll()
    $(window).on("scroll", function () {
        loadItemsInView();
    });

    //Keep the ribbon at the top of the page
    $('#s4-workspace').on("scroll", function () {
        loadItemsInView();
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>