{{--<a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/rossina-dot-com/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>--}}
{{--<script src=https://code.getmdl.io/1.2.0/material.min.js></script>--}}
<script>
    var canvas = new fabric.Canvas('canvas');
    var rect = new fabric.Rect({
        top : 60, left : 25, width : 70, height : 90, fill : 'red'
    });

    var rect2 = new fabric.Rect({
        top : 10, left : 90, width : 20, height : 25, fill : 'blue'
    });

    canvas.add(rect,rect2);

</script>

<script>
  var canvas = new fabric.Canvas('tecidos');
  var rect = new fabric.Rect({
    top : 60, left : 25, width : 70, height : 90, fill : 'red'
  });

  var rect2 = new fabric.Rect({
    top : 10, left : 90, width : 20, height : 25, fill : 'blue'
  });

  canvas.add(rect,rect2);
</script>

<script>
// Instância inicial canvas
  (function() {
    var canvas = this.__canvas = new fabric.Canvas('ctecidos');
    fabric.Object.prototype.transparentCorners = false;
//    inicializando o estancia do fabric para manipulação de imagens e redirecionamentos de arquivos

//    Começando com o enquadramento em 0
    var padding = 0;

//   Link do caminho da imagem para a padronagem
    fabric.Image.fromURL('../images/Neon.jpg', function(img) {

//  Inicializando a escala em 100% sem torcer ou esticar a imagem original
      var img = img.scaleToWidth(100); //* img.scaleToWidth(100) * 100;
//      img.scaleToHeader(100);

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

<script src="{{ asset('dist/js/scripts.js') }}"></script>
