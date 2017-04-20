<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

use function foo\func;

Route::get('/', function () {
    return view('app.pages.site.main.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('tecidos','TecidosController@getIndex');
Route::get('agendamento', 'CalendarsController@index');
Route::get('contatos', 'ContatosController@getIndex');

//Dashboard
Route::get('app', function (){
    return view('app.pages.dashboard.main');
});
Route::get('clients', function (){
    return view('app.pages.dashboard.clients');
});
Route::get('new-client', function (){
    return view('app.pages.dashboard.new-client');
});
Route::get('no-clients', function (){
    return view('app.pages.dashboard.no-clients');
});
Route::get('client', function (){
    return view('app.pages.dashboard.client');
});
Route::get('stats', function (){
    return view('app.pages.dashboard.stats');
});
Route::get('config-domain', function (){
    return view('app.pages.dashboard.config-domain');
});
Route::get('pre-painel', function (){
    return view('app.pages.dashboard.pre-painel');
});
Route::get('home-admin', function (){
    return view('app.pages.dashboard.home');
});
Route::get('config-email', function(){
    return view('app.pages.dashboard.config-email');
});
Route::get('config-aspect', function (){
    return view('app.pages.dashboard.config-aspect');
});
Route::get('config-answer', function (){
    return view('app.pages.dashboard.config-answer');
});
Route::get('config-api', function (){
    return view('app.pages.dashboard.config-api');
});
//Route::get('login', function (){
//    return view('app.login.login-screen');
//});
//Fim de Dashboard

Route::get('nao-encontrado', function (){
    return view('app.404.not-found');
});

Route::get('info', function(){
    echo phpinfo();
});

Route::get('crie','ImageController@index');
Route::post('resizeImagePost', ['as' => 'resizeImagePost', 'uses' => 'ImageController@resizeImagePost']);

Route::get('calendario', 'AgendarVisitasController@index');
Route::get('agendamentos', 'AgendarVisitasController@create');
Route::post('agendarPost', 'AgendarVisitasController@store');

Route::get('google1a06754d50be5d0d.html', function() {
    return File::get(public_path() . 'google1a06754d50be5d0d.html');
});

Route::get('calendar', 'FullCalendarController@index');

Route::get('pixabay', function(){
    return view('pixabay');
});

Route::post('/send','CalendarsController@sendmail');

Route::get('/home', 'HomeController@index');

Route::get('enviar', 'CalendarsController@enviar');

Route::get('email-camisas', function (){
    return view('vendor.mail.html.promotion.camisas');
});

Route::get('transform', 'CalendarsController@transform');

Route::middleware('auth')->name('card')->get('/cards/{card}', 'CardeController@show');
Route::get('/leaderboard', 'CardeController@leaderboard');

Route::get('canvas', function(){

    $img = Image::canvas(300, 200, '#ddd');

    $img->circle(100, 50, 50, function ($draw){
        $draw->background('#0000ff');
    });

    return $img;
});

Route::get('flip', function (){
    $img = Image::make('uploadcamisa/1492093501.png');

// flip image vertically
    $img->crop(100, 100, 25, 25);
});
