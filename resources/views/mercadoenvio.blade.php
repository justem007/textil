<?php
require_once ('/var/www/laravel-vue/web/vendor/mercadopago/sdk/lib/mercadopago.php');

$mp = new MP('5195691365546216', '5pCNJ2TQwYV6dfRM7sfMgscdLRcQChfR');

$params = array(
    "dimensions" => "30x30x30,1000",
    "zip_code" => "24722070",
    "item_price"=>"100.58",
//    "free_method" => "100009" // optional
);

$response = $mp->get("/shipping_options", $params);
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/dist/checkout-camisas.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <title>Calculador de frete Mercado Envio</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="text-info text-center">Calculo do Mercado Envio</h1>
        <hr>
        <div class="row">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="{{ asset('images/checkout/imagem-1.jpg') }}" /></div>
                                <div class="tab-pane" id="pic-2"><img src="{{ asset('images/checkout/imagem-3.jpg') }}" /></div>
                                <div class="tab-pane" id="pic-3"><img src="{{ asset('images/checkout/imagem-3.jpg') }}" /></div>
                                <div class="tab-pane" id="pic-4"><img src="{{ asset('images/checkout/imagem-1.jpg') }}" /></div>
                                <div class="tab-pane" id="pic-5"><img src="{{ asset('images/checkout/imagem-1.jpg') }}" /></div>
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('images/checkout/imagem-1.jpg') }}" /></a></li>
                                <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('images/checkout/imagem-3.jpg') }}" /></a></li>
                                <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ asset('images/checkout/imagem-3.jpg') }}" /></a></li>
                                <li><a data-target="#pic-4" data-toggle="tab"><img src="{{ asset('images/checkout/imagem-1.jpg') }}" /></a></li>
                                <li><a data-target="#pic-5" data-toggle="tab"><img src="{{ asset('images/checkout/imagem-1.jpg') }}" /></a></li>
                            </ul>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">Moda camisetas Masculina</h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="review-no"> 81 reviews</span>
                                </div>
                            </div>
                            <p class="product-description">Camisa 100% algodão , 30.1 penteado , super confortável e vestivél</p>
                            <h4 class="price">Preço atual: <span>R$35,90</span></h4>
                            <p class="vote"><strong>91%</strong> Dos compradores gostaram deste produto! <strong>(144 votos)</strong></p>
                            <div class="tamanhos">
                                <h5 class="sizes">
                                    cor, tamaho e quantidade, disponíveis no estoque: <br><br>
                                    <p>
                                        <a href="#"><span class="color mescla" data-toggle="tooltip" title="Acabou, cinza mescla"></span></a>
                                        <span class="size" data-toggle="tooltip" title="pequeno"><a href="#"><strong class="qtd">31</strong> p</a></span>
                                        <span class="size" data-toggle="tooltip" title="medio"><a href="#"><strong class="qtd">42</strong> m</a></span>
                                        <span class="size" data-toggle="tooltip" title="grande"><a href="#"><strong class="qtd">27</strong> g</a></span>
                                        <span class="size" data-toggle="tooltip" title="extra grande"><a href="#"><strong class="qtd">12</strong> xg</a></span>
                                        <span class="size" data-toggle="tooltip" title="super extra grande"><a href="#"><strong class="qtd">19</strong> xxg</a></span>
                                    </p>
                                    <p>
                                        <a href="#"><span class="color branco" data-toggle="tooltip" title="Acabou, cinza mescla"></span></a>
                                        <span class="size" data-toggle="tooltip" title="pequeno"><a href="#"><strong class="qtd">17</strong> p</a></span>
                                        <span class="size" data-toggle="tooltip" title="medio"><a href="#"><strong class="qtd">52</strong> m</a></span>
                                        <span class="size" data-toggle="tooltip" title="grande"><a href="#"><strong class="qtd">45</strong> g</a></span>
                                        <span class="size" data-toggle="tooltip" title="extra grande"><a href="#"><strong class="qtd">22</strong> xg</a></span>
                                        <span class="size" data-toggle="tooltip" title="super extra grande"><a href="#"><strong class="qtd">29</strong> xxg</a></span>
                                    </p>
                                    <p>
                                        <a href="#"><span class="color preto" data-toggle="tooltip" title="Acabou, cinza mescla"></span></a>
                                        <span class="size" data-toggle="tooltip" title="pequeno"><a href="#"><strong class="qtd">37</strong> p</a></span>
                                        <span class="size" data-toggle="tooltip" title="medio"><a href="#"><strong class="qtd">38</strong> m</a></span>
                                        <span class="size" data-toggle="tooltip" title="grande"><a href="#"><strong class="qtd">11</strong> g</a></span>
                                        <span class="size" data-toggle="tooltip" title="extra grande"><a href="#"><strong class="qtd">30</strong> xg</a></span>
                                        <span class="size" data-toggle="tooltip" title="super extra grande"><a href="#"><strong class="qtd">15</strong> xxg</a></span>
                                    </p>
                                </h5>
                            </div>
                            <div class="cores">
                                <h5 class="colors">
                                    Cor, Tamanho e Quantidade. Monte sua grade: <br><br>
                                    <p>
                                        <span class="color branco" data-toggle="tooltip" title="Nós temos essa cor"></span>
                                        p   <input type="number" class="form-tamanho-p">
                                        m   <input type="number" class="form-tamanho-m">
                                        g   <input type="number" class="form-tamanho-g">
                                        xg  <input type="number" class="form-tamanho-xg">
                                        xxg <input type="number" class="form-tamanho-xxg">
                                    </p>
                                    <p>
                                        <span class="color preto" data-toggle="tooltip" title="Nós temos essa cor"></span>
                                        p   <input type="number" class="form-tamanho-p">
                                        m   <input type="number" class="form-tamanho-m">
                                        g   <input type="number" class="form-tamanho-g">
                                        xg  <input type="number" class="form-tamanho-xg">
                                        xxg <input type="number" class="form-tamanho-xxg">
                                    </p>
                                    <p>
                                        <span class="color mescla" data-toggle="tooltip" title="Acabou essa cor"></span>
                                        p   <input type="number" class="form-tamanho-p">
                                        m   <input type="number" class="form-tamanho-m">
                                        g   <input type="number" class="form-tamanho-g">
                                        xg  <input type="number" class="form-tamanho-xg">
                                        xxg <input type="number" class="form-tamanho-xxg">
                                    </p>
                                </h5>
                            </div>
                            <div class="cores">
                                <h5 class="colors">
                                    Tamanho da Estampa, lados e etiquetas <br><br>
                                    <p>
                                        <span class="color branco" data-toggle="tooltip" title="Nós temos essa cor"></span>
                                        p   <input type="number" class="form-tamanho-p">
                                        m   <input type="number" class="form-tamanho-m">
                                        g   <input type="number" class="form-tamanho-g">
                                        xg  <input type="number" class="form-tamanho-xg">
                                        xxg <input type="number" class="form-tamanho-xxg">
                                    </p>
                                    <p>
                                        <span class="color preto" data-toggle="tooltip" title="Nós temos essa cor"></span>
                                        p   <input type="number" class="form-tamanho-p">
                                        m   <input type="number" class="form-tamanho-m">
                                        g   <input type="number" class="form-tamanho-g">
                                        xg  <input type="number" class="form-tamanho-xg">
                                        xxg <input type="number" class="form-tamanho-xxg">
                                    </p>
                                    <p>
                                        <span class="color mescla" data-toggle="tooltip" title="Acabou essa cor"></span>
                                        p   <input type="number" class="form-tamanho-p">
                                        m   <input type="number" class="form-tamanho-m">
                                        g   <input type="number" class="form-tamanho-g">
                                        xg  <input type="number" class="form-tamanho-xg">
                                        xxg <input type="number" class="form-tamanho-xxg">
                                    </p>
                                </h5>
                            </div>
                            <div class="action">
                                <button class="add-to-cart btn btn-warning" type="button" title="adicionar ao carrinho">Adionar ao carrinho</button>
                                <button class="like btn btn-default" type="button" title="Adicionar aos favoritos"><span class="fa fa-heart"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row cep-form col-sm-10 col-10 col-lg-10">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-cep-1">
                            <strong> - </strong>
                            <input type="text" class="form-cep-2">
                        </div>
                        <button type="submit" class="btn btn-success">Calcular Frete</button>
                    </form>
                </div>
            </div>
        </div>
        <form method="POST" action="YOUR_SERVER_URL" class="null" id="form">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th colspan="3">O frete é calculado usando a tabela dos correios.</th>
                </tr>
                <tr>
                    <th>Método de Envio</th>
                    <th>Dias Estimados</th>
                    <th>Custo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $shipping_options = $response['response']['options'];

                    foreach($shipping_options as $shipping_option) {

                    $value = $shipping_option['shipping_method_id'];
                    $name = $shipping_option['name'];
                    $checked = $shipping_option['display'] == "recommended" ? "checked='checked'" : "";

                    $shipping_speed = $shipping_option['estimated_delivery_time']['shipping'];
                    $estimated_delivery = $shipping_speed < 24 ? 1 : ceil($shipping_speed / 24); //from departure, estimated delivery time

                    $cost = $shipping_option['cost'];
                    $custo = number_format($cost, 2, ',', '.');
                    $cost = $cost == 0 ? "Grátis" : "R$ $custo";
                ?>
                <tr>
                    <td>
                        <input type='radio' name='shippingOption' id='<?=$value;?>' value='<?=$value;?>' <?=$checked;?>>
                        <label for='<?=$value;?>'><?=$name;?></label>
                    </td>
                    <td>
                        <?=$estimated_delivery;?>
                    </td>
                    <td>
                        <?="R$ " . $custo;?>
                    </td>
                </tr>
                    <?php
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            <strong>Entenda seu frete:</strong> 7 dias úteis para fabricação da camiseta + 1 dia útil de envio + 8 dias úteis para o frete selecionado acima.
                            <br>
                            Restrições de localidade, quantidade e tipo de frete podem ser aplicadas.
                        </td>
                    </tr>
                </tfoot>
            </table>
            {{--<input type="submit" class="btn btn-primary">--}}
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>