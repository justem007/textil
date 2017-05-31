@section('styles-includes')
  @parent
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection

@extends('app.pages.site.main.main')

@section('title', 'Bases de Tecidos para Personalizar')

@section('container-fluid')

  <h1 class="text-center">Bases de Tecidos</h1>

  <div class="contatiner-fluid">
    <div class="clear" style="width:100%;height:30px;"></div>
    <div class="container-fluid">
      <header id="myCarousel" class="carousel slide">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/crepe-de-chine.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service One</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/ergonomic-flex.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service Two</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/gloss-light.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service Three</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/hi-multi-chiffon-classic.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service Four</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/malha-newprene.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service One</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/maui-plus-160.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service Two</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/oxford-stretch-tinto.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service Three</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <div class="col-img-responsive02"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></div>
                      <img src="{{ asset('images/rossina/tecidos/techno-light-160.jpg') }}" />
                    </div>
                    <div class="panel-body">
                      <h4>Service Four</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a class="btn btn-primary" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span  aria-hidden="true"><i class="fa fa-chevron-circle-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span  aria-hidden="true"><i class="fa fa-chevron-circle-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header>
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
                  else if (currYOffSet === yOffset) {
                      myNavBar.remove();
                  }

              }

              window.onscroll = function (e) {
                  offSetManager();
              };

              offSetManager();

          });
      </script>
@endsection
