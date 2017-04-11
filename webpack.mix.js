const { mix } = require("laravel-mix");
// require('laravel-elixir-vue-2');

// compilar .js
mix.js("resources/assets/js/app.js", "public/js/app.js");
mix.js("resources/assets/js/fabrica/jquery-spoon.js", "public/js/rossina.js");
mix.js("resources/assets/js/fabrica/pinit.js", "public/js/pinit.js");
mix.js("resources/assets/js/fabrica/pinit_main.js", "public/js/pinit_main.js");
mix.js("resources/assets/js/jquery/jquery-2.1.0.min.js", "public/js/dist/jquery.js");
// mix.js("resources/assets/js/locaweb/example.js", "public/js/dist/examplo.js");
// mix.js("resources/assets/js/locaweb/locastyle.js", "public/js/dist/locastyle.js");
// mix.js("resources/assets/js/locaweb/highcharts.js", "public/js/dist/highcharts.js");
// mix.js("resources/assets/js/locaweb/panel-charts.js", "public/js/dist/panel-charts.js");
// mix.js("resources/assets/js/locaweb/app.js", "public/js/dist/app.js");
mix.js("node_modules/bootstrap/dist/js/bootstrap.js", "public/js/site/bootstrap.js");
// mix.copy("resources/assets/js/bootstrap.min.js", "public/assets/js/bootstrap.min.js");
mix.js("node_modules/jquery/dist/jquery.js", "public/js/site/jquery.js");
mix.js("node_modules/tether/dist/js/tether.js", "public/js/site/tether.js");
mix.js("node_modules/fullcalendar/dist/fullcalendar.js", "public/js/fullcalendar/fullcalendar.js");
mix.js("node_modules/fullcalendar/dist/locale/pt-br.js", "public/js/fullcalendar/fullcalendar-pt-br.js");
mix.js("node_modules/moment/moment.js", "public/js/moment/moment.js");
mix.js("node_modules/moment/locale/pt-br.js", "public/js/moment/moment-pt-br.js");
mix.js("node_modules/fabric/dist/fabric.js", "public/js/dist/fabric.js");

//compilar scss
// mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/site/bootstrap.css');
mix.sass("resources/assets/sass/app.scss", "public/assets/css/bootstrap.css");
// mix.sass("node_modules/font-awesome/scss/font-awesome.scss","public/assets/css/dist/fontawesome/fontawesome.css");
// mix.copy("node_modules/font-awesome/fonts/*","public/assets/css/dist/fontawesome/fonts");

//compilar .css
mix.copy("resources/assets/css/app.css", "public/assets/css/dist/app.css");
mix.copy("resources/assets/css/bootstrap.css", "public/css/app.css");
mix.copy("node_modules/fullcalendar/dist/fullcalendar.css", "public/css/fullcalendar/fullcalendar.css");
mix.copy("resources/assets/css/rossina.css", "public/css/rossina.css");
mix.copy("node_modules/normalize.css/normalize.css","public/css/dist/normalize.css");
mix.copy("node_modules/locawebstyle/dist/stylesheets/locastyle.css","public/css/dist/locastyle.css");
mix.copy("node_modules/locawebstyle/dist/stylesheets/fonts/*","public/fonts");
mix.copy("node_modules/locawebstyle/dist/stylesheets/fonts","public/css/dist/fonts");
mix.copy("resources/assets/css/app-locaweb.css","public/css/dist/app-locaweb.css");