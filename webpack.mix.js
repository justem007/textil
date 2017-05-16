const { mix } = require('laravel-mix');

// compilar .js
mix.js('resources/assets/js/app.js', 'public/js/app.js');

//javascript do crie spoon
mix.copy('resources/assets/js/fabrica/javascript-spoon.js', 'public/assets/js/rossina.js');
mix.copy('resources/assets/js/fabrica/pinit.js', 'public/pinit.js');
mix.copy('resources/assets/js/fabrica/pinit_main.js', 'public/js/pinit_main.js');
mix.copy('resources/assets/js/jquery/jquery-2.1.0.min.js', 'public/js/dist/jquery.js');
//fim

//css do crie tecidos
mix.copy('resources/assets/css/rossina.css', 'public/css/rossina.css');

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
// mix.copy('node_modules/fullcalendar/dist/fullcalendar.js', 'public/js/fullcalendar/fullcalendar.js');
// mix.copy('node_modules/fullcalendar/dist/locale/pt-br.js', 'public/js/fullcalendar/fullcalendar-pt-br.js');
// mix.copy('node_modules/moment/moment.js', 'public/js/moment/moment.js');
// mix.copy('node_modules/moment/src/locale/pt-br.js', 'public/js/moment/moment-pt-br.js');
// mix.copy('node_modules/fabric/dist/fabric.js', 'public/js/dist/fabric.js');

//compilar scss
mix.sass('resources/assets/sass/app.scss', 'public/assets/css/bootstrap.css');
mix.copy('node_modules/font-awesome/fonts/*','public/assets/css/dist/fontawesome/fonts');

////////////////////////////////////////////////////////////////////////////////////////////////////
//compilar .css
mix.copy('resources/assets/css/app.css', 'public/assets/css/dist/app.css');
mix.copy('resources/assets/css/bootstrap.css', 'public/css/app.css');
mix.copy('node_modules/fullcalendar/dist/fullcalendar.css', 'public/css/fullcalendar/fullcalendar.css');
mix.copy('node_modules/normalize.css/normalize.css','public/css/dist/normalize.css');
mix.copy('node_modules/locawebstyle/dist/stylesheets/locastyle.css','public/css/dist/locastyle.css');
mix.copy('node_modules/locawebstyle/dist/stylesheets/fonts/*','public/fonts');
mix.copy('node_modules/locawebstyle/dist/stylesheets/fonts','public/css/dist/fonts');
mix.copy('resources/assets/css/app-locaweb.css','public/css/dist/app-locaweb.css');
/////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////
//assets desenho
//css
mix.copy('resources/assets/fabric/css/master.css', 'public/fabric/dist/css/master.css');
mix.copy('resources/assets/fabric/css/prism.css', 'public/fabric/dist/css/prism.css');
mix.copy('resources/assets/fabric/css/todos.css', 'public/fabric/dist/css/todos.css');
//js
mix.copy('resources/assets/fabric/js/excanvas.js', 'public/fabric/dist/js/excanvas.js');
mix.copy('resources/assets/fabric/js/fabric.js', 'public/fabric/dist/js/fabric.js');
mix.copy('resources/assets/fabric/js/Delicious.font.js', 'public/fabric/dist/js/Delicious.font.js');
mix.copy('resources/assets/fabric/js/jquery.js', 'public/fabric/dist/js/jquery.js');
mix.copy('resources/assets/fabric/js/bootstrap.js', 'public/fabric/dist/js/bootstrap.js');
mix.copy('resources/assets/fabric/js/paster.js', 'public/fabric/dist/js/paster.js');
mix.copy('resources/assets/fabric/js/prism.js', 'public/fabric/dist/js/prism.js');
mix.copy('resources/assets/fabric/js/font_definitions.js', 'public/fabric/dist/js/font_definitions.js');
mix.copy('resources/assets/fabric/js/utils.js', 'public/fabric/dist/js/utils.js');
mix.copy('resources/assets/fabric/js/app_config.js', 'public/fabric/dist/js/app_config.js');
mix.copy('resources/assets/fabric/js/controller.js', 'public/fabric/dist/js/controller.js');
////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////
//assets impressora
//js
mix.copy('resources/assets/impressora/js/image-size.js','public/impressora/dist/image-size.js');
////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////
//assets agendamento
//css
mix.copy('resources/assets/agendamento/css/fullcalendar.css', 'public/agendamento/css/fullcalendar.css');
//js
mix.copy('resources/assets/agendamento/js/moment.js', 'public/agendamento/js/moment.js');
mix.copy('resources/assets/agendamento/js/moment-pt-br.js', 'public/agendamento/js/moment-pt-br.js');
mix.copy('resources/assets/agendamento/js/fullcalendar.js', 'public/agendamento/js/fullcalendar.js');
mix.copy('resources/assets/agendamento/js/fullcalendar-pt-br.js', 'public/agendamento/js/fullcalendar-pt-br.js');
////////////////////////////////////////////////////////////////////////////////////////////////

//assets do checkout de camisas
mix.copy('resources/assets/css/checkout-camisas.css', 'public/css/dist/checkout-camisas.css');