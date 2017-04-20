const { mix } = require('laravel-mix');

// compilar .js
mix.js('resources/assets/js/app.js', 'public/js/app.js');

//javascript do crie spoom
mix.copy('resources/assets/js/fabrica/javascript-spoon.js', 'public/assets/js/rossina.js');
mix.copy('resources/assets/js/fabrica/pinit.js', 'public/pinit.js');
mix.copy('resources/assets/js/fabrica/pinit_main.js', 'public/js/pinit_main.js');
mix.copy('resources/assets/js/jquery/jquery-2.1.0.min.js', 'public/js/dist/jquery.js');
//fim

//assets javascript do locawebstyle
mix.copy(
    [ 'resources/assets/js/locaweb/example.js',
      'resources/assets/js/locaweb/locastyle.js',
      'resources/assets/js/locaweb/highcharts.js',
      'resources/assets/js/locaweb/panel-charts.js',
      'resources/assets/js/locaweb/app.js' ],
      'public/js/dist/locaweb.js');
//fim

mix.copy('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/site/bootstrap.js');
mix.copy('node_modules/jquery/dist/jquery.js', 'public/js/site/jquery.js');
mix.copy('node_modules/tether/dist/js/tether.js', 'public/js/site/tether.js');
mix.copy('node_modules/fullcalendar/dist/fullcalendar.js', 'public/js/fullcalendar/fullcalendar.js');
mix.copy('node_modules/fullcalendar/dist/locale/pt-br.js', 'public/js/fullcalendar/fullcalendar-pt-br.js');
mix.copy('node_modules/moment/moment.js', 'public/js/moment/moment.js');
mix.copy('node_modules/moment/src/locale/pt-br.js', 'public/js/moment/moment-pt-br.js');
mix.copy('node_modules/fabric/dist/fabric.js', 'public/js/dist/fabric.js');

//compilar scss
mix.sass('resources/assets/sass/app.scss', 'public/assets/css/bootstrap.css')
mix.copy('node_modules/font-awesome/fonts/*','public/assets/css/dist/fontawesome/fonts');

//compilar .css
mix.copy('resources/assets/css/app.css', 'public/assets/css/dist/app.css');
mix.copy('resources/assets/css/bootstrap.css', 'public/css/app.css');
mix.copy('node_modules/fullcalendar/dist/fullcalendar.css', 'public/css/fullcalendar/fullcalendar.css');
mix.copy('resources/assets/css/rossina.css', 'public/css/rossina.css');
mix.copy('node_modules/normalize.css/normalize.css','public/css/dist/normalize.css');
mix.copy('node_modules/locawebstyle/dist/stylesheets/locastyle.css','public/css/dist/locastyle.css');
mix.copy('node_modules/locawebstyle/dist/stylesheets/fonts/*','public/fonts');
mix.copy('node_modules/locawebstyle/dist/stylesheets/fonts','public/css/dist/fonts');
mix.copy('resources/assets/css/app-locaweb.css','public/css/dist/app-locaweb.css');