@section('styles-includes')
    @parent
@endsection

@extends('app.pages.site.main.main')

@section('title', 'Escreva seu title aqui')

@section('container')

    <div class="container">
        <div class="row">
            <h2 class="text-center">Services Blocks</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin
                                nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum
                                elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus
                                finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo
                                consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis
                                sit amet neque.</p>
                            <br/>
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin
                                nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum
                                elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus
                                finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo
                                consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis
                                sit amet neque.</p>
                            <br/>
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin
                                nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum
                                elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus
                                finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo
                                consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis
                                sit amet neque.</p>
                            <br/>
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('footer-section')
    @parent

@endsection

@endsection

@section('javascript-includes')
    @parent
    <script>
      $(document).ready(function () {
        var myNavBar = {

          flagAdd: true,

          elements: [],

          init: function (elements) {
            this.elements = elements;
          },

          add: function () {
            if (this.flagAdd) {
              for (var i = 0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
              }
              this.flagAdd = false;
            }
          },

          remove: function () {
            for (var i = 0; i < this.elements.length; i++) {
              document.getElementById(this.elements[i]).className =
                document.getElementById(this.elements[i]).className.replace(/(?:^|\s)fixed-theme(?!\S)/g, '');
            }
            this.flagAdd = true;
          }

        };
        myNavBar.init([
          "header",
          "header-container",
          "brand"
        ]);

        function offSetManager() {

          var yOffset = 0;
          var currYOffSet = window.pageYOffset;

          if (yOffset < currYOffSet) {
            myNavBar.add();
          }
          else if (currYOffSet == yOffset) {
            myNavBar.remove();
          }

        }

        window.onscroll = function (e) {
          offSetManager();
        }

        offSetManager();

      });
    </script>
@endsection