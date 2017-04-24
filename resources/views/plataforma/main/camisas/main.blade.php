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
                    Camisas Personalizadas - Silk Digital DTG
                </h1>
                <img class="img-responsive"
                     src="{{asset('images/rossina/camisa/mockup/banner/camisas-mokup-banner.jpg')}}" alt="">
                <h2 class="display-4 text-uppercase" style="color: #069">
                    Pronta Entrega
                </h2>
                <h3 class="rossina-title-funciona mdl-color-text--blue-grey-600">
                    Como funciona ?
                </h3>
                <p class="mdl-typography--body-1-force-preferred-font-color-contrast mdl-color-text--blue-grey-400">
                    Baixe nossos gabaritos, aplique
                    sua imagem na proporção desejada para envio, <br>
                    preencha nosso formulário de pedido e selecione o tamanho de sua imagem (arquivo) para produção.
                    <br>
                    Aqui você irá criar a grade de seu pedido , tamanho, cor, quantidade, loguinho transfer
                    personalizada,
                    etiqueta transfer padrão INMETRO.
                </p>
            </div>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--6dp">
                <div class="mdl-card__actions">
                    <ul class="nav nav-tabs  mdl-color--yellow-800" style="margin-bottom: 15px;">
                        <li class="active"><a href="#home" data-toggle="tab">Camisa</a></li>
                        <li><a href="#profile" data-toggle="tab">Pedido e Orçamento</a></li>
                        <li><a href="#descricao" data-toggle="tab">Descrição</a></li>
                        <li><a href="#etiqueta" data-toggle="tab">Etiqueta interna Nylon</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <section class="section--center mdl-grid mdl-grid--no-spacing">
                                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--blue">
                                    <img src="{{asset('images/rossina/Camiseta-basica-branca-reforco-no-ombro-frente-costa-1000.jpg')}}"
                                         width="260" height="160" style="margin-top: 10px">
                                </header>
                                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                                    <div class="mdl-card__supporting-text">
                                        <h2 class="rossina-h2-camisa mdl-color-text--yellow-900 mdl-typography--font-bold">
                                            CAMISETA BÁSICA REFORÇO NO OMBRO <br><br>
                                            MALHA 30.1 PENTEADA 100% ALGODÃO
                                        </h2>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="mockup-canvas">
                                <canvas
                                        id="canvas"
                                        style="margin-top: 40px; margin-left: 67px; border: 1px dotted black;"
                                        width="120" height="200"
                              mdl-color--blue-600  mdl-color-text--white">
                                </canvas>
                            </div>
                            <div class="painel-controle-2 control-label">
                                <div>
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <p class="mdl-color--yellow-800  mdl-color-text--white">&nbsp;
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
                                                    <p class="mdl-color--yellow-800  mdl-color-text--white">&nbsp;
                                                        Você é uma pessoa do tipo ?
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
                                                    <p class="mdl-color--yellow-800  mdl-color-text--white">&nbsp;
                                                        Você é uma pessoa do tipo ?
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
                                                    <p class="mdl-color--yellow-800  mdl-color-text--white">&nbsp;
                                                        Cor da Camisa e Setup de Máquina
                                                    </p>
                                                    <div class="radio radio-primary">
                                                        <label>
                                                            <input type="radio" name="BaseCamisa"
                                                                   id="BaseCamisa1" value="Camisa Branca"
                                                                   checked="">
                                                            Camisa Branca
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="BaseCamisa"
                                                                   id="BaseCamisa2" value="Camisa Preta">
                                                            Camisa Preta
                                                        </label>
                                                    </div>
                                                    <hr>
                                                    <div class="radio radio-primary">
                                                        <label>
                                                            <input type="radio" name="optionsRadios"
                                                                   id="optionsRadios1" value="option1"
                                                                   checked="">
                                                            Tinta Branca + CMYK. Fundo escuro
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-primary">
                                                        <label>
                                                            <input type="radio" name="optionsRadios"
                                                                   id="optionsRadios2" value="option2">
                                                            Somente CMYK. Fundo claro
                                                        </label>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: 0;">
                                                <div class="col-md-12">
                                                    <p class="mdl-color--yellow-800  mdl-color-text--white">&nbsp;Carregar seu arquivo</p>
                                                    <div class="form-group">
                                                        <label for="inputFile" class="col-md-2 control-label">
                                                            Arquivo</label>
                                                        <div class="col-md-10">
                                                            <input type="text" readonly="" class="form-control"
                                                                   placeholder="Carregar arquivo...">
                                                            <input type="file" id="inputFile" multiple="">
                                                        </div>
                                                    </div>
                                                    <p class="mdl-color--yellow-800  mdl-color-text--white">&nbsp;Tamanho e Quantidade</p>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> A4 21X29,7cm<br>
                                                        </label>
                                                        <label><input type="checkbox"> frente</label>
                                                        <label><input type="checkbox"> costas</label>
                                                        <label for="">
                                                            <input type="number" style="width: 40px;">P &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">M &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">G &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">GG &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">XXG
                                                        </label>
                                                        <hr>
                                                        <label><input type="checkbox"> A3 29.7X42cm<br></label>
                                                        <label><input type="checkbox"> frente</label>
                                                        <label><input type="checkbox"> costas</label>
                                                        <label for="">
                                                            <input type="number" style="width: 40px;">P &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">M &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">G &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">GG &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">XXG
                                                        </label>
                                                        <hr>
                                                        <label><input type="checkbox"> MAX 35X45cm <br></label>
                                                        <label><input type="checkbox"> frente</label>
                                                        <label><input type="checkbox"> costas</label>
                                                        <label for="">
                                                            <input type="number" style="width: 40px;">P &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">M &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">G &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">GG &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">XXG
                                                        </label>
                                                        <hr>
                                                        <label><input type="checkbox"> LOCAL 10X15cm<br></label>
                                                        <label><input type="checkbox"> frente</label>
                                                        <label><input type="checkbox"> costas</label>
                                                        <label>
                                                            <input type="number" style="width: 40px;">P &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">M &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">G &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">GG &nbsp;&nbsp;
                                                            <input type="number" style="width: 40px;">XXG
                                                        </label>
                                                        <hr class="jumbotron-hr">
                                                        <p class="mdl-color--yellow-800  mdl-color-text--white">&nbsp;Etiquetas</p>
                                                        <div class="form-group">
                                                            <div class="col-md-10">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <img src="{{asset('images/rossina/camisa/etiqueta/etiqueta-Mbrancav2-para-web.jpg')}}"
                                                                             width="150"
                                                                             alt="ETIQUETA TRANSFER CNPJ PADRÃO INMETRO PERSONALIZADA"
                                                                             title="ETIQUETA TRANSFER CNPJ PADRÃO INMETRO PERSONALIZADA">
                                                                        <br>
                                                                    </label>
                                                                    <hr>
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <img src="{{asset('images/rossina/camisa/etiqueta/etiqueta-loguinho-Mbranco-cliente-258.jpg')}}"
                                                                             width="150"
                                                                             alt="LOGUINHO TRANSFER COSTAS INTERNO (AVESSO)"
                                                                             title="LOGUINHO TRANSFER COSTAS INTERNO (AVESSO)"><br>
                                                                    </label><br><br>
                                                                    <label for="inputFile1"
                                                                           class="col-md-2 control-label">Arquivo</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly=""
                                                                               class="form-control"
                                                                               placeholder="Carregar arquivo...">
                                                                        <input type="file" id="inputFile1" multiple="">
                                                                    </div>
                                                                    <hr class="jumbotron-hr">
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <img src="{{asset('images/rossina/camisa/etiqueta/loguinho-transfer-costas-externo.jpg')}}"
                                                                             width="150"
                                                                             alt="LOGUINHO TRANSFER COSTAS INTERNO (AVESSO)"
                                                                             title="LOGUINHO TRANSFER COSTAS INTERNO (AVESSO)"><br>
                                                                    </label><br><br>
                                                                    <label for="inputFile2"
                                                                           class="col-md-2 control-label">Arquivo</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly=""
                                                                               class="form-control"
                                                                               placeholder="Carregar arquivo...">
                                                                        <input type="file" id="inputFile2" multiple="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-10 col-md-offset-2">
                                                    <button type="button" class="btn btn-default">Limpar Dados</button>
                                                    <button type="submit" class="btn mdl-color--yellow-900">Adicionar no Carrinho
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
                        <div class="tab-pane fade" id="etiqueta">
                            <div class="tab-pane fade active in" id="home">
                                <section class="section--center mdl-grid mdl-grid--no-spacing">
                                    <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--blue">
                                        <img src="{{asset('images/rossina/camisa/etiqueta/etiqueta-costura-interna.jpg')}}"
                                             width="220"
                                             style="margin-top: 10px">
                                    </header>
                                    <div class="mdl-card--expand mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                                        <div class="mdl-card__supporting-text">
                                            <h2 class="rossina-h2-camisa">
                                                Etiqueta em nylon interna cnpj padrão do INMETRO personalizada <br>
                                                Pedido mínimo de 100 unidades por grade.
                                            </h2>
                                            <hr class="mdl-color--blue-800">
                                            <h2 class="rossina-h2-camisa">
                                                Preencha o formulários abaixo com as informações de sua Empresa e ficha
                                                técnica de seu tecido
                                            </h2>
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="focusedInput1">Digite aqui seu
                                                    CNPJ</label>
                                                <input class="form-control" id="focusedInput1" type="text">
                                                <p class="help-block">CNPJ que será impresso na etiqueta</p>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="focusedInput2">Razão Social</label>
                                                <input class="form-control" id="focusedInput2" type="text">
                                                <p class="help-block">Razão Social que será impresso na etiqueta</p>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="focusedInput3">Composição do
                                                    Tecido</label>
                                                <input class="form-control" id="focusedInput3" type="text">
                                                <p class="help-block">Composição do tecido de seu produto qua será
                                                    impresso na sua etiqueta</p>
                                            </div>
                                            <div class="form-group label-floating">
                                                <input type="file" id="inputFile4" multiple="">
                                                <div class="input-group">
                                                    <input type="text" readonly="" class="form-control"
                                                           placeholder="Carregar o arquivo de instruções de lavagem de seu tecido">
                                                    <span class="input-group-btn input-group-sm">
                                                        <button type="button" class="btn btn-fab btn-fab-mini">
                                                            <i class="material-icons">attach_file</i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <br><br>
                                            <hr class="mdl-color--blue-800">
                                            <p>
                                                Grade 1 - Camisa Adulto Masculino
                                            </p>
                                            <p>
                                                <label for="">
                                                    <input type="number" style="width: 40px;">PP &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">P &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">M &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">G &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">GG &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">XXG
                                                    <input type="number" style="width: 40px;">XXXG
                                                </label>
                                            </p>
                                            <hr>
                                            <p>
                                                Grade 2 - Camisa Adulto Feminino
                                            </p>
                                            <p>
                                                <label for="">
                                                    <input type="number" style="width: 40px;">PP &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">P &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">M &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">G &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">GG &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">XXG
                                                    <input type="number" style="width: 40px;">XXXG
                                                </label>
                                            </p>
                                            <hr>
                                            <p>
                                                Grade 3 - Camisa Infantil
                                            </p>
                                            <p>
                                                <label for="">
                                                    <input type="number" style="width: 40px;">PP &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">P &nbsp;
                                                    <input type="number" style="width: 40px;">M &nbsp;&nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">G &nbsp;&nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">GG &nbsp; <br><br>
                                                    <input type="number" style="width: 40px;">1 &nbsp;
                                                    <input type="number" style="width: 40px;">2 &nbsp;
                                                    <input type="number" style="width: 40px;">3 &nbsp;
                                                    <input type="number" style="width: 40px;">4 &nbsp;
                                                    <input type="number" style="width: 40px;">6 &nbsp;
                                                    <input type="number" style="width: 40px;">8 &nbsp;
                                                    <input type="number" style="width: 40px;">10 &nbsp;
                                                    <input type="number" style="width: 40px;">12 &nbsp;
                                                    <input type="number" style="width: 40px;">14 &nbsp;
                                                </label>
                                            </p>
                                            <hr>
                                            <p>
                                                Grade 4 - Tamanho Calça Adulto Masculino
                                            </p>
                                            <p>
                                                <label for="">
                                                    <input type="number" style="width: 40px;">36 &nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">38 &nbsp;
                                                    <input type="number" style="width: 40px;">40 &nbsp;&nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">42 &nbsp;&nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">44 &nbsp; <br><br>
                                                    <input type="number" style="width: 40px;">46 &nbsp;
                                                    <input type="number" style="width: 40px;">48 &nbsp;
                                                    <input type="number" style="width: 40px;">50 &nbsp;
                                                    <input type="number" style="width: 40px;">52 &nbsp;
                                                    <input type="number" style="width: 40px;">54 &nbsp;
                                                    <input type="number" style="width: 40px;">56 &nbsp;
                                                    <input type="number" style="width: 40px;">58 &nbsp;
                                                    <input type="number" style="width: 40px;">60 &nbsp;
                                                    <input type="number" style="width: 40px;">62 &nbsp;
                                                </label>
                                            </p>
                                            <hr>
                                            <p>
                                                Grade 4 - Tamanho Calça Adulto Feminino
                                            </p>
                                            <p>
                                                <label for="">
                                                    <input type="number" style="width: 40px;">36
                                                    <input type="number" style="width: 40px;">38 &nbsp;
                                                    <input type="number" style="width: 40px;">40 &nbsp;&nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">42 &nbsp;&nbsp;&nbsp;
                                                    <input type="number" style="width: 40px;">44 &nbsp; <br><br>
                                                    <input type="number" style="width: 40px;">46 &nbsp;
                                                    <input type="number" style="width: 40px;">48 &nbsp;
                                                    <input type="number" style="width: 40px;">50 &nbsp;
                                                    <input type="number" style="width: 40px;">52 &nbsp;
                                                    <input type="number" style="width: 40px;">54 &nbsp;
                                                    <input type="number" style="width: 40px;">56 &nbsp;
                                                    <input type="number" style="width: 40px;">58 &nbsp;
                                                    <input type="number" style="width: 40px;">60 &nbsp;
                                                    <input type="number" style="width: 40px;">62 &nbsp;
                                                </label>
                                            </p>
                                            <hr>
                                            <p>
                                                Grade 5 - Tamanhos Especiais
                                            </p>
                                            <p>
                                                <label for="">
                                                    <input type="number" style="width: 50px;">&nbsp;cm largura &nbsp X
                                                    &nbsp;
                                                    <input type="number" style="width: 50px;">&nbsp;cm comprimento
                                                    &nbsp;
                                                    <input type="number" style="width: 50px;"> Quantidade &nbsp;&nbsp;&nbsp;<br><br>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 col-md-offset-2">
                                                <button type="button" class="btn btn-default">Limpar Dados</button>
                                                <button type="submit" class="btn btn-info">Adicionar no Carrinho
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        {{--<div class="tab-pane fade" id="dropdown1">--}}
                        {{--<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's--}}
                        {{--organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify--}}
                        {{--pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy--}}
                        {{--hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred--}}
                        {{--pitchfork.</p>--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="dropdown2">--}}
                        {{--<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold--}}
                        {{--out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack--}}
                        {{--portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred--}}
                        {{--vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral--}}
                        {{--locavore cosby sweater.</p>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--blue">
                    <img src="{{asset('images/rossina/Camiseta-masculina-branca-gola-V-(-transpasse)-frente-costa-1000.jpg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/Camiseta-masculina-gola-V-(-transpasse-)-branca-500-tabela.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            CAMISETA MASCULINA GOLA V ( TRANSPASSE ) - MALHA 30.1 PENTEADA 100% ALGODÃO
                        </h2>

                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home1" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile1" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade1" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade1">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile1">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown11">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown21">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/Camiseta-raglan-branca-manga-preta-curta-frente-costa-1000.jpg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/Camiseta-raglan-branca-manga-curta-preta-500-tabela.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            CAMISETA RAGLAN MANGA CURTA - MALHA 30.1 PENTEADA 100% ALGODÃO
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home2" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile2" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade2" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade2">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile2">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown12">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown22">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/camisa-raglan-preto-com-mangas-brancas-frente-costa1000.jpeg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/camisa-raglan-preto-com-mangas-brancas-grade-1000.jpeg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            CAMISETA RAGLAN MANGA CURTA - MALHA 30.1 PENTEADA 100% ALGODÃO
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home3" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile3" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade3" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade3">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile3">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown13">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown23">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/Baby-look-gola-V-biquinho-branca-frente-verso-1000.jpg')}}"
                         width="260" height="150" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/Baby-look-gola-V-(-biquinho-)-branca-500-tabela.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            BABY LOOK GOLA V ( BIQUINHO ) - MALHA 30.1 PENTEADA 100% ALGODÃO
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home4" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile4" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade4" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade4">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile4">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown14">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown24">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/Baby-look-basica-branca-com-ribana-frente-costa-1000.jpg')}}"
                         width="260" height="150" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/Baby-look-basica-branca-500-tabela.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa text-uppercase">
                            Baby look básica com ribana - malha 30.1 penteada 100% algodão
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home5" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile5" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade5" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade5">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile5">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown15">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown25">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <hr>
            <div class="rossina-section-title mdl-typography--display-1-color-contrast text-center">
                <h1 class="display-4 text-uppercase">
                    Camisas Personalizadas
                </h1>
                <h2 class="display-4 text-uppercase" style="color: #069">
                    Sob Encomenda
                </h2>
            </div>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/Camiseta-basica-branca-reforco-no-ombro-frente-costa-1000.jpg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/Camiseta-basica-branca-reforco-no-ombro-tabela-private-label-500.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            CAMISETA BÁSICA REFORÇO NO OMBRO
                            MALHA 30.1 PENTEADA 100% ALGODÃO PRIVATE LABEL – 13 CORES
                            PEDIDO MÍNIMO 50 PEÇAS
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home6" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile6" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade6" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade6">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile6">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown16">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown26">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/Camiseta-masculina-private-label-frente-costa-1000.jpg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/tabela-camisa-gola-apareada-500-v2.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            CAMISETA BÁSICA PROMOCIONAL GOLA VIÉS
                            MALHA 30.1 CARDADA 100% ALGODÃO - TEMOS 26 CORES
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home6" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile6" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade6" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade6">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile6">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown16">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown26">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/camisa-masculina-poliester-sublimacao-frente-full-print.jpg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/camisa-masculina-sublimacao-malha-100-poliester-full-print-tabela-1000.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            CAMISETA BÁSICA GOLA COM VIÉS SUBLIMÁTICA FULL PRINT MALHA 100% POLIÉSTER
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home7" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile7" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade7" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
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
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade7">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile7">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown17">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown27">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/polo-masculina-malha-piquet-50-50-frente-costa.jpg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/polo-masculina-preta-malha-piquet-50-50-tabela-500.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            POLO MASCULINA MALHA PIQUET - 50% POLIÉSTER/50% ALGODÃO - TEMOS 17 CORES
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home8" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile8" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade8" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown18" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown28" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home8">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade8">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile8">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown18">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown28">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                    <img src="{{asset('images/rossina/polo-feminina-preta-malha-piquet-50-50-frente-costa-1000.jpg')}}"
                         width="260" height="160" style="margin-top: 10px">
                    <hr class="jumbotron-hr">
                    <span class="rossina-span-etiqueta">
                        <img class="img-rounded"
                             src="{{asset('images/rossina/camisa/grade/polo-feminina-preta-malha-piquet-50-50-tabela-500.jpg')}}"
                             alt="" width="255"
                             title="">
                    </span>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h2 class="rossina-h2-camisa">
                            POLO FEMININA MALHA PIQUET 50% ALGODÃO/50% POLIÉSTER
                        </h2>
                    </div>
                    <div class="mdl-card__actions">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#home9" data-toggle="tab">Crie</a></li>
                            <li><a href="#profile9" data-toggle="tab">Grade</a></li>
                            <li><a href="#grade9" data-toggle="tab">Descrição</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="bootstrap-elements.html"
                                   data-target="#">
                                    Mais Links <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown19" data-toggle="tab">Action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#dropdown29" data-toggle="tab">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home9">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                    carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                    voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="grade9">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="profile9">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                    anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                    cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                    mollit.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown19">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                    organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                    pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                    hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                    pitchfork.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown29">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                                    sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                    pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                    Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                                    viral locavore cosby sweater.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{--aqui está o arquivo do footer--}}
        @include('plataforma.partial.footer.footer')
    </div>
@endsection