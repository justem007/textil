<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="templateEditor/ckeditor/ckeditor.js"></script>
    <title>Editor de Texto</title>
</head>
<body>
<textarea id="editor1" class="ckeditor"></textarea>

<script type="text/javascript">
    var editor = CKEDITOR.replace( 'editor1' );
    CKFinder.setupCKEditor( editor );
</script>
</body>
</html>