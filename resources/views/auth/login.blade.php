@section('styles-includes')
    @parent

@endsection

@section('title', 'Login Rossina Estamparia')

@extends('app.pages.site.main.main')

@section('container-fluid')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-default login-panel">
                    <div class="panel-login-name">
                        <h2 class="text-center">
                            Faça Login
                            <i class="fa fa-unlock" aria-hidden="true" style="color: white"></i>
                        </h2>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="funkyradio">
                                        <div class="funkyradio-warning">
                                            <input type="checkbox" name="checkbox" id="checkbox1" checked {{ old('remember') ? 'checked' : '' }}/>
                                            <label for="checkbox1">Lembra-me</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-success btn3d">
                                        Login
                                    </button>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <i class="fa fa-unlock" aria-hidden="true"></i> Recuperar senha?
                                    </a>
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        <i class="fa fa-users" aria-hidden="true"></i> Registrar-me.
                                    </a>
                                </div>
                            </div>
                        </form>
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
