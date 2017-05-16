<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FancyBox</title>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
</head>
<body>
    <a data-fancybox="gallery"  data-caption="animais" href="{{ asset('images/novas/animais.png') }}"><img src="{{ asset('images/novas/animais.png') }}" width="200" alt=""></a>
    <a data-fancybox="gallery" data-caption="babette" href="{{ asset('images/novas/babette.png') }}"><img src="{{ asset('images/novas/babette.png') }}" width="200" alt=""></a>
    <a data-fancybox="gallery" data-caption="geometrico" href="{{ asset('images/novas/geometrico.png') }}"><img src="{{ asset('images/novas/geometrico.png') }}" width="200" alt=""></a>
    <a data-fancybox="gallery" data-caption="kornit" href="{{ asset('images/novas/kornit.png') }}"><img src="{{ asset('images/novas/kornit.png') }}" width="200" alt=""></a>
    <a data-fancybox="gallery" data-caption="listras camufladas" href="{{ asset('images/novas/listras_camufladas.png') }}"><img src="{{ asset('images/novas/listras_camufladas.png') }}" width="200" alt=""></a>
    <a data-fancybox="gallery" data-caption="listras preto e branco" href="{{ asset('images/novas/listras_pb.png') }}"><img src="{{ asset('images/novas/listras_pb.png') }}" width="200" alt=""></a>
    <a data-fancybox="gallery" data-caption="papu" href="{{ asset('images/novas/papu.png') }}"><img src="{{ asset('images/novas/papu.png') }}" width="200" alt=""></a>
    <br>
    <hr>
    <p>
        1. <a data-fancybox data-type="ajax" data-src="http://codepen.io/fancyapps/pen/wgavbY.html" data-selector="#two" href="javascript:;">Use  "data-selector" attribute</a>
        <br />
        2. <a data-fancybox data-type="ajax" data-src="http://codepen.io/fancyapps/pen/wgavbY.html #two" href="javascript:;">Use selector from  "src" value</a>
        <br />
    </p>
</body>
<script type="text/javascript">
    $('[data-fancybox]').fancybox({
      image: {
        protect: true
      }
    })
</script>
</html>