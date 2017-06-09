<?php

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('resizeImageTecidos', 'TecidosController@resizeImage');
Route::post('resizeImageTecidoPost', ['as' => 'resizeImageTecidoPost', 'uses' => 'TecidosController@resizeImagePost']);

Route::get('/', function () {
    return view('app.pages.site.main.index');
});
Route::group(['prefix' => 'servicos'], function (){
    Route::get('',['as' => 'servicos', 'uses' => 'ServicosController@getIndex']);
    Route::get('sublimacao-metro-corrido', 'ServicoSublimacaoMetroCorridosController@getIndex');
    Route::get('sublimacao-localizado-total-frente-full-print', 'ServicoSublimacaoLocalizadaFullPrintsController@getIndex');
    Route::get('silk-digital-dtg-kornit', 'ServicoSilkDigitalDtgKornitsController@getIndex');
    Route::get('web-logistica', 'ServicoWebLogisticasController@getIndex');
});
Route::get('faq', 'FaqsController@getIndex');
Route::get('agendamento', 'CalendarsController@index');
Route::get('contatos', 'ContatosController@getIndex');
Route::get('casa', function(){
    return view('casa.casa');
});

Route::get('tecidos','TecidosController@getIndex');

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
Route::post('resizeImagePost', 'ImageController@resizeImagePost')->name('resizeImagePost');

//Route::get('calendario', 'AgendarVisitasController@index');
//Route::get('agendamentos', 'AgendarVisitasController@create');
//Route::post('agendarPost', 'AgendarVisitasController@store');
Route::get('agendamentos', 'CalendarsController@index');

Route::get('google1a06754d50be5d0d.html', function() {
    return File::get(public_path() . 'google1a06754d50be5d0d.html');
});

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

Route::get('desenho', function (){
    return view('fabric.exemplos.desenho');
});

//Testando a api do Mercado Livre usando mercado pago, criando checkout
Route::get('mercadopago-checkout', 'MercadoPagoController@mercadoPago');

//Teste de api Mercado Livre, Testando a cotação de frete
Route::get('mercadoenvio-frete', function(){
    return view('mercadoenvio');
});

//Teste de api do Pagseguro, criando checkout
Route::get('pagseguro-checkout','PagseguroController@pagseguro')->name('pagseguro.redirect');

//Teste de api Pagseguro, recarga de celular
Route::get('pagseguro-recarga-celular', 'PagseguroController@recarga');

//Teste de api Pagseguro , vendo as minhas credenciais
Route::get('credenciais-pagseguro', 'PagseguroController@credencias');

//Teste de api Pagseguro, rota de retorno de notificação
Route::post('/pagseguro/notification', [
    'uses' => '\laravel\pagseguro\Platform\Laravel5\NotificationController@notification'
])->name('pagseguro.notification');

Route::get('fancybox', function(){
    return view('fancybox');
});

Route::get('cloudflare', function(){

    $zone_identifier = env('API_KEY_CLOUDFLARE');

    $client = new Cloudflare\Api('contato@rossinaestamparia.com.br',env('API_KEY_CLOUDFLARE'));

    $settings = new Cloudflare\Zone\Analytics($client);

    $settings->colos($zone_identifier);

    dd($settings);
});

Route::get('curl-cloudflare', function(){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.cloudflare.com/client/v4/user");

    $headers = [
        'X-Auth-Email: contato@rossinaestamparia.com.br',
        'X-Auth-Key: 4e5def0ef033c8e403f0e4e3e4138150b3dac',
        'Content-Type: application/json'
    ];

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    echo $result;
});
