@extends('plataforma.main.main.main')

@section('title', 'Rossina Estamparia Digital')

@section('content')

    {{--aqui está o arquivo do header--}}
    @include('plataforma.partial.header.header')

    <div class="rossina-content mdl-layout__content">
        <!-- FORM STARTS HERE -->
        <div class="rossina-more-section">
            <div class="rossina-section-title mdl-typography--font-regular text-center">
                <h1 class="display-4 text-uppercase mdl-color-text--blue-grey-600">
                    Sublimação metro corrido <br>
                    Tecidos Personalizados
                </h1>
                <img class="img-responsive"
                     src="{{asset('images/rossina/tecidos-lisos-estampados.jpg')}}" alt="">
                {{--<h2 class="display-4 text-uppercase" style="color: #069">--}}
                    {{--Pronta Entrega--}}
                {{--</h2>--}}
                <h3 class="rossina-title-funciona mdl-color-text--blue-grey-600">
                    Como funciona ?
                </h3>
                <p class="mdl-typography--body-1-force-preferred-font-color-contrast mdl-color-text--blue-grey-400">
                    Estamparia Digital em Metro Corrido Oferecemos bases de tecidos de poliéster para você imprimir a sua
                    ARTE e produzir vários produtos: blusas, vestidos, shorts, camisetas, camisas, bermudas, abadás,
                    cangas, lenços, bandanas, mochilas, necessaire, estojos, carteiras, bolsas, pastas, colchas, lençois,
                    almofadas, sofás, poltronas, cortinas, toalhas de mesa, guardanapos, capas, painéis, banners,
                    flâmulas, bandeiras, etc... <br>
                    Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem. <br>
                    Produção mínima 10 metros lineares.
                </p>
            </div>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--6dp">
                <div class="mdl-card__actions">
                    <ul class="nav nav-tabs mdl-color--red-600" style="margin-bottom: 15px;">
                        <li class="active"><a href="#home" data-toggle="tab">Tecido</a></li>
                        <li><a href="#profile" data-toggle="tab">Pedido e Orçamento</a></li>
                        <li><a href="#descricao" data-toggle="tab">Descrição</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <section class="section--center mdl-grid mdl-grid--no-spacing">
                                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--blue">
                                    <img src="{{asset('images/rossina/tecido/1-maui-plus-160.jpg')}}"
                                         width="260"
                                         {{--height="160" --}}
                                         style="margin-top: 10px">
                                </header>
                                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                                    <div class="mdl-card__supporting-text">
                                        <h2 class="rossina-h2-camisa mdl-color-text--red-800 mdl-typography--font-bold">
                                            MicroFibra Pesada <br><br>
                                            100% poliéster, 1,60 larg - 108gr/m2
                                        </h2>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="mockup-canvas-tecidos">
                                <canvas
                                        id="ctecidos"
                                        style="margin-top: 0; margin-left: 0; border: 1px dotted black;"
                                        width="355"
                                        height="450"
                                        mdl-color--blue-600  mdl-color-text--white>
                                </canvas>
                            </div>
                            <div class="painel-controle-2">
                                <div>
                                    <form class="form-horizontal" style="margin-top: 0;">
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div>
                                                        <p>
                                                            <label>Repetir padrão?</label>
                                                            <input type="checkbox" id="img-repeat" checked>
                                                        </p>
                                                        <p>
                                                            <label>Largura da imagem padrão</label>
                                                            <input type="range" min="0" max="1000" value="100" id="img-width">
                                                        </p>
                                                        <p>
                                                            <label>Padrão offset esquerdo</label>
                                                            <input type="range" min="0" max="500" value="250" id="img-offset-x">
                                                        </p>
                                                        <p>
                                                            <label>Padrão offset top</label>
                                                            <input type="range" min="0" max="500" value="250" id="img-offset-y">
                                                        </p>
                                                        <br>
                                                        <p>
                                                            <label>Pattern image angle</label>
                                                            <input type="range" min="-90" max="90" value="0" id="img-angle">
                                                        </p>
                                                        <p>
                                                            <label>Padrão de preenchimento de imagem</label>
                                                            <input type="range" min="-50" max="50" value="0" id="img-padding">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <p class="mdl-color--red-600  mdl-color-text--white">&nbsp;
                                                        Qual o tipo de atendimento ?
                                                    </p>
                                                    <div class="radio radio-primary">
                                                        <label>
                                                            <input type="radio" name="FazerOrcPed" id="Pedido"
                                                                   value="Fazer Pedido" checked="">
                                                            Fazer um pedido
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="FazerOrcPed" id="Orcamento"
                                                                   value="Fazer Orcamento">
                                                            Fazer um Orçamento
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: 0;">
                                                <div class="col-md-offset-0 col-md-12">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <p class="mdl-color--red-600  mdl-color-text--white">&nbsp;
                                                                Você é uma pessoa do  tipo ?
                                                            </p>
                                                            <div class="radio radio-primary">
                                                                <label>
                                                                    <input type="radio" name="Pessoa" id="BaseCamisa1"
                                                                           value="Pessoa Fisica" checked="">
                                                                    Pessoa Física
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="Pessoa" id="BaseCamisa2"
                                                                           value="Pessoa Juridica">
                                                                    Pessoa Jurídica
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <hr class="jumbotron-hr">
                                                        <p class="mdl-color--red-600  mdl-color-text--white">
                                                            Carregar seu arquivo
                                                        </p>
                                                        <div class="form-group">
                                                            <label for="inputFile" class="col-md-2 control-label">
                                                                Arquivo
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text" readonly="" class="form-control"
                                                                       placeholder="Carregar arquivo...">
                                                                <input type="file" id="inputFile" multiple="">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-10 col-md-offset-2">
                                                                    <button type="submit" class="btn btn-xs">
                                                                        upload
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <p class="mdl-color--red-600  mdl-color-text--white">&nbsp;
                                                                Escolha o Tecido
                                                            </p>
                                                            <div class="form-group">
                                                                <label for="select111" class="col-md-1 control-label">Tecido</label>
                                                                <div class="col-md-10">
                                                                    <select id="select111" class="form-control">
                                                                        <option>MICROFIBRA PESADA, cor branca, 100% poliéster, 1,60 larg. 160gr/m2</option>
                                                                        <option>MICROFIBRA FLEX, cor branca 92% poliéster/8%elastano, 1,50 larg., 124gr/m²</option>
                                                                        <option>SEDA DE POLIÉSTER FLUID, cor off white, 100% poliéster, 1,50 larg. 80gr/m2</option>
                                                                        <option>TRANSPARÊNCIA SILKY, cor cru, 100% poliéster, 1,48 larg. , 62gr/m2</option>
                                                                        <option>CREPE DE CHINE, cor off white, 100% poliéster, 1,50 larg. 80gr/m2</option>
                                                                        <option>CHIFFON, cor branca, 100% poliéster, 1,50 larg. 80gr/m2</option>
                                                                        <option>OXFORD STRECH, cor branca, 100% poliéster, 1,50 larg. 160gr/m2</option>
                                                                        <option>MALHA NEWPRENE, cor branca, 96% poliéster/4%elastano, 1,70 larg., 308gr/m²</option>
                                                                        <option>JERSEY, cor off white, 96% poliéster/4% elastano, 1,50 larg., 180gr/m²</option>
                                                                        <option>HELANCA LIGHT, cor branca, 100% poliéster, 1,80 larg., 130gr/m²</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label class="col-md-offset-0">&nbsp;&nbsp;&nbsp; Metros Linear</label>
                                                                    <label for="">
                                                                        <input type="number" style="width: 60px;">&nbsp;&nbsp;
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <p class="mdl-color--red-600  mdl-color-text--white">&nbsp;Pedir Amostra</p>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> 20x20cm
                                                        </label>
                                                        <br>
                                                        <label>
                                                            <input type="checkbox"> 40x60cm
                                                        </label>
                                                        <br>
                                                        <label>
                                                            <input type="checkbox"> 70x100cm
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-10 col-md-offset-2">
                                                    <button type="button" class="btn btn-default">Limpar Dados</button>
                                                    <button type="submit" class="btn mdl-color--red-900">Adicionar no Carrinho
                                                    </button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade rossina-table" id="descricao">
                            <table class="table table-responsive table-striped table-bordered mdl-color-text--blue-grey-600">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cor</th>
                                    <th>Tamanho e Peso</th>
                                    <th>Preço</th>
                                    <th>Imagem e Medidas</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Branca</td>
                                    <td>P-150gr, M-155gr
                                        G-168gr, GG-178gr
                                    </td>
                                    <td>R$:Consulte</td>
                                    <td rowspan="4">
                                        <img class="img-rounded"
                                             src="{{asset('images/rossina/camisa/grade/Camiseta-basica-branca-reforco-no-ombro-tabela-500.jpg')}}"
                                             alt="" width="255"
                                             title="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Branca</td>
                                    <td>XXG-196gr</td>
                                    <td>R$:Consulte</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Preta</td>
                                    <td>P-170gr, M-181gr
                                        G-192-gr, GG-202gr
                                    </td>
                                    <td>R$:Consulte</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Preta</td>
                                    <td>XXG-227gr</td>
                                    <td>R$:Consulte</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/1-maui-plus-160.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-tecido">MicroFibra Pesada</h2>
                        100% poliéster, 1,60 larg - 160gr/m2.<br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span>
                                <br>
                                <p>
                                    Acessórios, agasalhos, bermudas, bolsas, detalhes, jaquetas leves, macaquinhos, parkas, shorts, saias.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown1">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown2">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/2-techno-light-160.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h5 class="rossina-h2-tecido">MicroFibra Leve</h5>
                        100% poliéster, 1,60 larg - 108gr/m2 <br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home1" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile1" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade1" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown11" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown21" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home1">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade1">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span>
                                <br>
                                <p>
                                    Colocar utilização
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile1">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown11">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown21">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/3-gloss-light.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h5 class="rossina-h2-tecido">Gloss Light</h5>
                        100% poliéster, 1,50 larg - 80gr/m2 <br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home2" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile2" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade2" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown12" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown22" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home2">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade2">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span><br>
                                <p>
                                    Blusas, Camisas, Vestidos
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile2">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown12">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown22">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/4-crepe-de-chine.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h5 class="rossina-h2-tecido">Crepe de Chine</h5>
                        100% poliéster, 1,50 larg - 80gr/m2 <br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home3" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile3" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade3" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown13" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown23" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home3">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade3">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span><br>
                                <p>
                                    Blusas, camisas, shorts, saias, vetidos
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile3">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown13">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown23">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/5-hi-multi-chiffon-classic.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h5 class="rossina-h2-tecido">Chiffon Classic</h5>
                        100% poliéster, 1,50 larg - 80gr/m2 <br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home4" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile4" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade4" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown14" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown24" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home4">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade4">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span><br>
                                <p>
                                    Colocar utilização
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile4">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown14">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown24">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/6-oxford-stretch-tinto.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h5 class="rossina-h2-tecido">Oxford Strech</h5>
                        100% poliéster, 1,50 larg - 160gr/m2 <br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home5" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile5" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade5" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown15" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown25" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home5">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade5">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span><br>
                                <p>
                                    Acessórios, alfaiatarias, agasalhos, bermudas, fitness, blazers, costumes, calças, casacos, linha cama e colchas, sapatos, saias, ternos, vestidos.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile5">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown15">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown25">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/7-malha-newprene.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h5 class="rossina-h2-tecido">Malha Newprene</h5>
                        90% poliéster/4%elastano, 1,70 larg - rend. 1,90 m/k - 380gr/m2 <br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home6" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile6" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade6" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown16" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown26" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home6">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade6">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span><br>
                                <p>
                                    Acessórios, boleros, bermudas fitness, calças, coletes
                                    casaquetos, casacos, detalhes, jaquetas leves, legging,
                                    saias, tops, vestidos.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile6">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown16">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown26">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/tecido/8-ergonomic-flex.jpg')}}" width="260" height="360" style="margin-top: 10px">
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h5 class="rossina-h2-tecido">Ergonomic Flex</h5>
                        92% poliéster/8%elastano, 1,50 larg - 124gr/m2 <br><br>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home7" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile7" data-toggle="tab">Pedido</a></li>
                            <li><a href="#grade7" data-toggle="tab">Utilização</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html" data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown17" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown27" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home7">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade7">
                                <span class="rossina-span-tecido">
                                    Utilização
                                </span><br>
                                <p>
                                    Bermudas fitness, shorts.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile7">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown17">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown27">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
        </div>
        {{--aqui está o arquivo do footer--}}
        @include('plataforma.partial.footer.footer')
    </div>
@endsection