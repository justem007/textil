<!DOCTYPE html>
<html lang="pt-br" ng-app="kitchensink">
<head>
    <meta charset="UTF-8">
    <title>Desenho Livre</title>
    <link rel="stylesheet" href="{{ asset('fabric/dist/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('fabric/dist/css/prism.css') }}">
    <style>
        pre { margin-left: 15px !important }
        .mockup{
            width: 400px;
            height: 530px;
            background-image: url("{{ asset('images/mackup.png') }}");
            background-color: #cccccc;
            background-repeat: no-repeat;
        }
        .canvas{
            /*margin-top:185px;*/
            /*margin-left:124px;*/
            /*border: 1px solid white;*/
        }
    </style>
    <!--[if lt IE 9]>
    <script src="{{ asset('fabric/dist/js/excanvas.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('fabric/dist/js/prism.js') }}"></script>
    <script>
        (function() {
            var fabricUrl = '../fabric/dist/js/fabric.js';
            if (document.location.search.indexOf('load_fabric_from=') > -1) {
                var match = document.location.search.match(/load_fabric_from=([^&]*)/);
                if (match && match[1]) {
                    fabricUrl = match[1];
                }
            }
            document.write('<script src="' + fabricUrl + '"><\/script>');
        })();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
</head>
<body>
<script>
    (function() {

        if (document.location.hostname === 'localhost') {
            var links = document.getElementById('header').getElementsByTagName('a');
            for (var i = 0, len = links.length; i < len; i++) {
                // very retarted fix but fuck it
                links[i].href = links[i].href.replace('fabricjs.com', 'localhost:4000');
            }
        }
        else {
            var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
            s.async = true;
            s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
            t.parentNode.insertBefore(s, t);

            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        }
    })();
</script>
<div id="bd-wrapper" ng-controller="CanvasControls">
    {{--<h2><span>Fabric.js</span> &middot; Kitchensink</h2>--}}
    <!--[if IE]><script src={{ asset('fabric/dist/js/Delicious.font.js') }}></script><![endif]-->
    <script src={{ asset('fabric/dist/js/jquery.js') }}></script>
    <script src={{ asset('fabric/dist/js/bootstrap.js') }}></script>
    <script src={{ asset('fabric/dist/js/paster.js') }}></script>
    <link rel="stylesheet" href={{ asset('fabric/dist/css/todos.css') }}>

    <link href='http://fonts.googleapis.com/css?family=Plaster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
    <div style="position:relative;width:810px;float:left;" id="canvas-wrapper">

        <div id="canvas-controls">
            <div id="complexity">
                Canvas complexidade (número de caminhos):
                <strong>{[ canvas.complexity() ]}</strong>
            </div>

            <div id="canvas-background">
                <label for="canvas-background-picker">Canvas background:</label>
                <input type="color" bind-value-to="canvasBgColor">
            </div>
        </div>
        <div id="text-wrapper" style="margin-top: 1px; float:right; border: solid 2px #CCC; padding: 10px 10px 20px 0;" ng-show="getText()">
            <div id="text-controls">
                <textarea bind-value-to="text"></textarea>
                <label for="font-family" style="display:inline-block">Família de Fonte:</label>
                <select id="font-family" class="btn-object-action" bind-value-to="fontFamily">
                    <option value="arial">Arial</option>
                    <option value="helvetica" selected>Helvetica</option>
                    <option value="myriad pro">Myriad Pro</option>
                    <option value="delicious">Delicious</option>
                    <option value="verdana">Verdana</option>
                    <option value="georgia">Georgia</option>
                    <option value="courier">Courier</option>
                    <option value="comic sans ms">Comic Sans MS</option>
                    <option value="impact">Impact</option>
                    <option value="monaco">Monaco</option>
                    <option value="optima">Optima</option>
                    <option value="hoefler text">Hoefler Text</option>
                    <option value="plaster">Plaster</option>
                    <option value="engagement">Engagement</option>
                </select>
                <br>
                <label for="text-align" style="display:inline-block">Alinhar texto:</label>
                <select id="text-align" class="btn-object-action" bind-value-to="textAlign">
                    <option>Esquerda</option>
                    <option>Centro</option>
                    <option>Direita</option>
                    <option>Justificado</option>
                </select>
                <div>
                    <label for="text-bg-color">Cor de Fundo:</label>
                    <input type="color" value="" id="text-bg-color" size="10" class="btn-object-action"
                           bind-value-to="bgColor">
                </div>
                <div>
                    <label for="text-lines-bg-color">Cor de fundo do texto:</label>
                    <input type="color" value="" id="text-lines-bg-color" size="10" class="btn-object-action"
                           bind-value-to="textBgColor">
                </div>
                <div>
                    <label for="text-stroke-color">Cor forte:</label>
                    <input type="color" value="" id="text-stroke-color" class="btn-object-action"
                           bind-value-to="strokeColor">
                </div>
                <div>
                    <label for="text-stroke-width">Largura da borda:</label>
                    <input type="range" value="1" min="1" max="5" id="text-stroke-width" class="btn-object-action"
                           bind-value-to="strokeWidth">
                </div>
                <div>
                    <label for="text-font-size">Tamanho da fonte:</label>
                    <input type="range" value="" min="1" max="120" step="1" id="text-font-size" class="btn-object-action"
                           bind-value-to="fontSize">
                </div>
                <div>
                    <label for="text-line-height">Largura da linha:</label>
                    <input type="range" value="" min="0" max="10" step="0.1" id="text-line-height" class="btn-object-action"
                           bind-value-to="lineHeight">
                </div>
                <div>
                    <label for="text-char-spacing">Espaçamento de caracteres:</label>
                    <input type="range" value="" min="-200" max="800" step="10" id="text-char-spacing" class="btn-object-action" bind-value-to="charSpacing">
                </div>
            </div>
            <div id="text-controls-additional">
                <button type="button" class="btn btn-object-action"
                        ng-click="toggleBold()"
                        ng-class="{'btn-inverse': isBold()}">
                    Bold
                </button>
                <button type="button" class="btn btn-object-action" id="text-cmd-italic"
                        ng-click="toggleItalic()"
                        ng-class="{'btn-inverse': isItalic()}">
                    Italico
                </button>
                <button type="button" class="btn btn-object-action" id="text-cmd-underline"
                        ng-click="toggleUnderline()"
                        ng-class="{'btn-inverse': isUnderline()}">
                    Underline
                </button>
                <button type="button" class="btn btn-object-action" id="text-cmd-linethrough"
                        ng-click="toggleLinethrough()"
                        ng-class="{'btn-inverse': isLinethrough()}">
                    Linethrough
                </button>
                <button type="button" class="btn btn-object-action" id="text-cmd-overline"
                        ng-click="toggleOverline()"
                        ng-class="{'btn-inverse': isOverline()}">
                    Overline
                </button>
            </div>
        </div>
        <div class="mockup">
            <canvas id="canvas" class="canvas" width="140" height="250"></canvas>
        </div>
        <style>
            .canvas-container{
                border-color: none;
                /*background: #333;*/
                width: 1px;
                margin-top:185px;
                margin-left:124px;
            }
        </style>
        <div id="color-opacity-controls" ng-show="canvas.getActiveObject()">

            <label for="opacity">Opacidade: </label>
            <input value="100" type="range" bind-value-to="opacity">

            <label for="color" style="margin-left:10px">Cor: </label>
            <input type="color" style="width:40px" bind-value-to="fill">
        </div>
    </div>

    <div id="commands" ng-click="maybeLoadShape($event)">

        <ul class="nav nav-tabs">
            <li><a href="#simple-shapes" data-toggle="tab">Simples</a></li>
            <li><a href="#svg-shapes" data-toggle="tab">SVG</a></li>
            <li class="active"><a href="#object-controls-pane" data-toggle="tab">Controles</a></li>
            <li><a href="#load-svg-pane" data-toggle="tab">Load SVG</a></li>
            <li><a href="#execute-code" data-toggle="tab">Execute</a></li>
            <li><a href="#json-inout" data-toggle="tab">JSON</a></li>
            <!-- <li><a href="#transparency" data-toggle="tab">perPixelFind</a></li> -->
        </ul>
        <div class="tab-content">

            <div class="tab-pane" id="svg-shapes">
                <p>Adic. <strong>SVG formas</strong> para canvas:</p>

                <ul class="svg-shapes">
                    <style>
                        .btn {border-radius: 0px;}
                    </style>
                    <li><button class="btn btn-small btn-primary shape" id="shape25"><strong>36</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape36"><strong>41</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape58"><strong>54</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape59"><strong>57</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape8"><strong>65</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape151">Lighthouse (<strong>78</strong> paths)</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape17"><strong>87</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape2"><strong>90</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape69">HTML5 logo (<strong>96</strong> paths)</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape115"><strong>124</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape47"><strong>133</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape51"><strong>141</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape141"><strong>244</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape109"><strong>153</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape146"><strong>160</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape50"><strong>167</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape99"><strong>174</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape142"><strong>180</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape112"><strong>183</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape132"><strong>191</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape63"><strong>202</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape133"><strong>223</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape64"><strong>224</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape14"><strong>226</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape108"><strong>236</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape62"><strong>237</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape139"><strong>239</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape140"><strong>246</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape113"><strong>278</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape145"><strong>264</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape98"><strong>280</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape144"><strong>308</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape57"><strong>321</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape128"><strong>341</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape123"><strong>359</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape90"><strong>363</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape120"><strong>395</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape138"><strong>401</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape9"><strong>404</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape45"><strong>404</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape65"><strong>444</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape1"><strong>448</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape93"><strong>464</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape131"><strong>476</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape122"><strong>513</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape91"><strong>562</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape38"><strong>563</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape119"><strong>600</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape135"><strong>651</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape96"><strong>674</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape125"><strong>676</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape126"><strong>696</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape94"><strong>710</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape129"><strong>756</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape121"><strong>756</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape37"><strong>758</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape10"><strong>778</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape101"><strong>832</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape134"><strong>834</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape143"><strong>838</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape147"><strong>841</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape102"><strong>850</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape43"><strong>936</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape136"><strong>975</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape110"><strong>1004</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape7"><strong>1018</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape95"><strong>1066</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape97"><strong>1126</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape118"><strong>1173</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape116"><strong>1196</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape3"><strong>1197</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape26"><strong>1215</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape114"><strong>1269</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape77"><strong>1424</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape32"><strong>1515</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape13"><strong>1652</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape130"><strong>1800</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape71"><strong>1868</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape76"><strong>1944</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape53"><strong>1948</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape21"><strong>1972</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape5"><strong>2208</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape40"><strong>2394</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape55"><strong>2499</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape4"><strong>2742</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape29"><strong>3103</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape30"><strong>3566</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape61"><strong>3685</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape6"><strong>3921</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape23"><strong>4418</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape42"><strong>4583</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape31"><strong>4768</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape15"><strong>8325</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape22"><strong>9663</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape41"><strong>12361</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape67"><strong>12604</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape24"><strong>12866</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape27"><strong>13905</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape49"><strong>14174</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape33"><strong>17059</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape20"><strong>19035</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape35"><strong>19271</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape44"><strong>22375</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape72"><strong>29303</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape48"><strong>41787</strong> paths</button></li>
                    <li><button class="btn btn-small btn-primary shape" id="shape171">Yellow car</button></li>
                </ul>
            </div>

            <div class="tab-pane" id="simple-shapes">
                <p>Adic. <strong>formas simples</strong> para canvas:</p>
                <p>
                    <button type="button" class="btn rect" ng-click="addRect()">Rectangle</button>
                    <button type="button" class="btn circle" ng-click="addCircle()">Circle</button>
                    <button type="button" class="btn triangle" ng-click="addTriangle()">Triangle</button>
                    <button type="button" class="btn line" ng-click="addLine()">Line</button>
                    <button type="button" class="btn polygon" ng-click="addPolygon()">Polygon</button>
                </p>

                <p>
                    <button class="btn" ng-click="addText()">Add text</button>
                    <button class="btn" ng-click="addIText()">Add Itext</button>
                    <button class="btn" ng-click="addTextbox()">Add textbox</button>
                </p>

                <p>Adic. <strong>imagens</strong> para canvas:</p>
                <p>
                    <button type="button" class="btn image1" ng-click="addImage1()">Image 1 (pug)</button>
                    <button type="button" class="btn image2" ng-click="addImage2()">Image 2 (google)</button>
                    <button type="button" class="btn image3" n-click="addImage3()">Image 3 (printio)</button>
                </p>

                <p>Adic. <strong>gradient-based formas</strong> para canvas:</p>

                <p>
                    <button class="btn shape" id="shape74">Gradient 1</button>
                    <button class="btn shape" id="shape66">Gradient 2</button>
                    <button class="btn shape" id="shape75">Gradient 3</button>
                    <button class="btn shape" id="shape148">Gradient 4</button>
                </p>
                <p>Adic. <strong>arcos</strong> e misc to canvas:</p>

                <p>
                    <button class="btn shape" id="shape104">Arc(s) 1</button>
                    <button class="btn shape" id="shape105">Arc(s) 2</button>
                    <button class="btn shape" id="shape106">Arc(s) 3</button>
                    <button class="btn shape" id="shape107">Arc(s) 4</button>
                </p>
                <p>
                    <button class="btn shape" id="shape103">Transformar paths</button>
                </p>
                <p>
                    <button class="btn shape" id="shape54">Imagem</button>
                </p>
            </div>

            <div class="tab-pane active" id="object-controls-pane">
                <div id="global-controls">
                    <p>
                        Transformar canvas para
                        <button class="btn btn-success" id="rasterize" ng-click="rasterize()">
                            Image
                        </button>
                        <button class="btn btn-success" id="rasterize-svg" ng-click="rasterizeSVG()">
                            SVG
                        </button>
                        <button class="btn btn-success" id="rasterize-json" ng-click="rasterizeJSON()">
                            JSON
                        </button>
                        <button class="btn btn-danger clear" ng-click="confirmClear()">Limpar Palco</button>
                    </p>
                </div>
                <div class="object-controls" object-buttons-enabled="getSelected()">
                    <div style="margin-top:10px;">
                        <p>
                            <button class="btn btn-danger btn-object-action" id="remove-selected"
                                    ng-click="removeSelected()">
                                Remover o objeto/grupo selecionado
                            </button>
                        </p>

                        <button class="btn btn-lock btn-object-action"
                                ng-click="setHorizontalLock(!getHorizontalLock())"
                                ng-class="{'btn-inverse': getHorizontalLock()}">
                            {[ getHorizontalLock() ? 'Desbloquear movimento horizontal' : 'Bloquear movimento horizontal' ]}
                        </button>
                        <button class="btn btn-lock btn-object-action"
                                ng-click="setVerticalLock(!getVerticalLock())"
                                ng-class="{'btn-inverse': getVerticalLock()}">
                            {[ getVerticalLock() ? 'Desbloquear movimento vertical' : 'Lock vertical movement' ]}
                        </button>
                        <br>
                        <button class="btn btn-lock btn-object-action"
                                ng-click="setScaleLockX(!getScaleLockX())"
                                ng-class="{'btn-inverse': getScaleLockX()}">
                            {[ getScaleLockX() ? 'Desbloquear escala horizontal' : 'Bloquear a escala horizontal' ]}
                        </button>
                        <button class="btn btn-lock btn-object-action"
                                ng-click="setScaleLockY(!getScaleLockY())"
                                ng-class="{'btn-inverse': getScaleLockY()}">
                            {[ getScaleLockY() ? 'Desbloquear escalonamento vertical' : 'Bloquear a escala vertical' ]}
                        </button>
                        <button class="btn btn-lock btn-object-action"
                                ng-click="setRotationLock(!getRotationLock())"
                                ng-class="{'btn-inverse': getRotationLock()}">
                            {[ getRotationLock() ? 'Desbloquear rotação' : 'Bloquear rotação' ]}
                        </button>
                    </div>
                    <div style="margin-top:10px">
                        <p>
                            <span style="margin-right: 10px">Origin X: </span>
                            <label>
                                Esquerdo
                                <input type="radio" name="origin-x" class="origin-x btn-object-action" value="left"
                                       bind-value-to="originX">
                            </label>
                            <label>
                                Centro
                                <input type="radio" name="origin-x" class="origin-x btn-object-action" value="center"
                                       bind-value-to="originX">
                            </label>
                            <label>
                                Direita
                                <input type="radio" name="origin-x" class="origin-x btn-object-action" value="right"
                                       bind-value-to="originX">
                            </label>
                        </p>
                        <p>
                            <span style="margin-right: 10px">Origin Y: </span>
                            <label>
                                Top
                                <input type="radio" name="origin-y" class="origin-y btn-object-action" value="top"
                                       bind-value-to="originY">
                            </label>
                            <label>
                                Centro
                                <input type="radio" name="origin-y" class="origin-y btn-object-action" value="center"
                                       bind-value-to="originY">
                            </label>
                            <label>
                                Base
                                <input type="radio" name="origin-y" class="origin-y btn-object-action" value="bottom"
                                       bind-value-to="originY">
                            </label>
                        </p>
                        <p>
                            <label>
                                Cache:
                                <input type="checkbox" name="object-caching" class="btn-object-action"
                                       bind-value-to="objectCaching">
                            </label>
                            <label>
                                Sem cahe de escala:
                                <input type="checkbox" name="no-scale-cache" class="btn-object-action"
                                       bind-value-to="noScaleCache">
                            </label>
                            <label>
                                Controles:
                                <input type="checkbox" name="has-controls" class="btn-object-action"
                                       bind-value-to="hasControls">
                            </label>
                            <label>
                                Cantos transparentes:
                                <input type="checkbox" name="transparent-corners" class="btn-object-action"
                                       bind-value-to="transparentCorners">
                            </label>
                            <label>
                                Bordas:
                                <input type="checkbox" name="has-borders" class="btn-object-action"
                                       bind-value-to="hasBorders">
                            </label>
                        </p>
                    </div>
                    <div style="margin-top:10px;">
                        <button id="send-backwards" class="btn btn-object-action"
                                ng-click="sendBackwards()">Send backwards</button>
                        <button id="send-to-back" class="btn btn-object-action"
                                ng-click="sendToBack()">Enviar para trás</button>
                    </div>

                    <div style="margin-top:4px;">
                        <button id="bring-forward" class="btn btn-object-action"
                                ng-click="bringForward()">Trazer para a frente</button>
                        <button id="bring-to-front" class="btn btn-object-action"
                                ng-click="bringToFront()">Traga para frente</button>
                    </div>

                    <div style="margin-top:10px;">
                        <button id="gradientify" class="btn btn-object-action" ng-click="gradientify()">
                            Gradiente
                        </button>
                        <button id="shadowify" class="btn btn-object-action" ng-click="shadowify()">
                            Sombrear
                        </button>
                        <button id="patternify" class="btn btn-object-action" ng-click="patternify()">
                            Padronizar
                        </button>
                        <button id="clip" class="btn btn-object-action" ng-click="clip()">
                            Clip - Arredondar
                        </button>
                    </div>
                </div>
                <div style="margin-top:10px;" id="drawing-mode-wrapper">

                    <button id="drawing-mode" class="btn btn-info"
                            ng-click="setFreeDrawingMode(!getFreeDrawingMode())"
                            ng-class="{'btn-inverse': getFreeDrawingMode()}">
                        {[ getFreeDrawingMode() ? 'Sair do modo de desenho livre' : 'Entre no modo de desenho livre' ]}
                    </button>

                    <div id="drawing-mode-options" ng-show="getFreeDrawingMode()">
                        <label for="drawing-mode-selector">modo:</label>
                        <select id="drawing-mode-selector" bind-value-to="drawingMode">
                            <option>Pincel</option>
                            <option>Circulo</option>
                            <option>Spray</option>
                            <option>Padronizar</option>

                            <option>hlinha</option>
                            <option>vlinha</option>
                            <option>quadrado</option>
                            <option>diamante</option>
                            <option>textura</option>
                        </select>
                        <br>
                        <label for="drawing-line-width">Espessura da linha:</label>
                        <input type="range" value="30" min="0" max="150" bind-value-to="drawingLineWidth">
                        <br>
                        <label for="drawing-color">Cor da Linha:</label>
                        <input type="color" value="#005E7A" bind-value-to="drawingLineColor">
                        <br>
                        <label for="drawing-shadow-width">Largura da sombra da linha:</label>
                        <input type="range" value="0" min="0" max="50" bind-value-to="drawingLineShadowWidth">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="load-svg-pane">
      <textarea id="svg-console" bind-value-to="consoleSVG">
      </textarea>
                <button type="button" class="btn btn-info" ng-click="loadSVG()">
                    Load
                </button>
                <button type="button" class="btn" ng-click="loadSVGWithoutGrouping()">
                    Load without grouping
                </button>
            </div>

            <div class="tab-pane" id="execute-code">
        <textarea id="canvas-console" bind-value-to="console">
        </textarea>
                <button type="button" class="btn btn-info" ng-click="execute()">Executar</button>
            </div>

            <div class="tab-pane" id="json-inout">
      <textarea id="json-console" bind-value-to="consoleJSON">
      </textarea>
                <button type="button" class="btn btn-info" ng-click="loadJSON()">
                    Carregar
                </button>
                <button type="button" class="btn btn-info" ng-click="saveJSON()">
                    Salvar
                </button>
            </div>
        </div>
    </div>
    <script src="{{ asset('fabric/dist/js/font_definitions.js') }}"></script>
    <script>
        var kitchensink = { };
        var canvas = new fabric.Canvas('canvas');
    </script>
    <script src="{{ asset('fabric/dist/js/utils.js') }}"></script>
    <script src="{{ asset('fabric/dist/js/app_config.js') }}"></script>
    <script src="{{ asset('fabric/dist/js/controller.js') }}"></script>
    <script>
        (function() {
            function renderVieportBorders() {
                var ctx = canvas.getContext();

                ctx.save();

                ctx.fillStyle = 'rgba(0,0,0,0.1)';

                ctx.fillRect(
                    canvas.viewportTransform[4],
                    canvas.viewportTransform[5],
                    canvas.getWidth() * canvas.getZoom(),
                    canvas.getHeight() * canvas.getZoom());

                ctx.setLineDash([5, 5]);

                ctx.strokeRect(
                    canvas.viewportTransform[4],
                    canvas.viewportTransform[5],
                    canvas.getWidth() * canvas.getZoom(),
                    canvas.getHeight() * canvas.getZoom());

                ctx.restore();
            }

            canvas.on('mouse:wheel', function(opt) {
                var e = opt.e;
                if (!e.ctrlKey) {
                    return;
                }
                var newZoom = canvas.getZoom() + e.deltaY / 300;
                canvas.zoomToPoint({ x: e.offsetX, y: e.offsetY }, newZoom);

                renderVieportBorders();
                e.preventDefault();
                return false;
            });

            var viewportLeft = 0,
                viewportTop = 0,
                mouseLeft,
                mouseTop,
                _drawSelection = canvas._drawSelection,
                isDown = false;

            canvas.on('mouse:down', function(options) {
                if (options.e.altKey) {
                    isDown = true;

                    viewportLeft = canvas.viewportTransform[4];
                    viewportTop = canvas.viewportTransform[5];

                    mouseLeft = options.e.x;
                    mouseTop = options.e.y;
                    _drawSelection = canvas._drawSelection;
                    canvas._drawSelection = function(){ };
                    renderVieportBorders();
                }
            });

            canvas.on('mouse:move', function(options) {
                if (options.e.altKey && isDown) {
                    var currentMouseLeft = options.e.x;
                    var currentMouseTop = options.e.y;

                    var deltaLeft = currentMouseLeft - mouseLeft,
                        deltaTop = currentMouseTop - mouseTop;

                    canvas.viewportTransform[4] = viewportLeft + deltaLeft;
                    canvas.viewportTransform[5] = viewportTop + deltaTop;

                    canvas.renderAll();
                    renderVieportBorders();
                }
            });

            canvas.on('mouse:up', function() {
                canvas._drawSelection = _drawSelection;
                isDown = false;
            });
        })();

    </script>

</div>

<script>
    (function(){
        var mainScriptEl = document.getElementById('main');
        if (!mainScriptEl) return;
        var preEl = document.createElement('pre');
        var codeEl = document.createElement('code');
        codeEl.innerHTML = mainScriptEl.innerHTML;
        codeEl.className = 'language-javascript';
        preEl.appendChild(codeEl);
        document.getElementById('bd-wrapper').appendChild(preEl);
    })();
</script>
<script>
    (function() {
        var canvas = this.__canvas = new fabric.Canvas('cd');
        fabric.Object.prototype.transparentCorners = false;

        var Cross = fabric.util.createClass(fabric.Object, {
            initialize: function(options) {
                this.callSuper('initialize', options);
                this.animDirection = 'up';

                this.width = 100;
                this.height = 100;

                this.w1 = this.h2 = 100;
                this.h1 = this.w2 = 30;
            },

            animateWidthHeight: function () {
                var interval = 2;

                if (this.h2 >= 30 && this.h2 <= 100) {
                    var actualInterval = (this.animDirection === 'up' ? interval : -interval);
                    this.h2 += actualInterval;
                    this.w1 += actualInterval;
                }

                if (this.h2 >= 100) {
                    this.animDirection = 'down';
                    this.h2 -= interval;
                    this.w1 -= interval;
                }

                if (this.h2 <= 30){
                    this.animDirection = 'up';
                    this.h2 += interval;
                    this.w1 += interval;
                }
            },

            _render: function(ctx) {
                ctx.fillRect(-this.w1 / 2, -this.h1 / 2, this.w1, this.h1);
                ctx.fillRect(-this.w2 / 2, -this.h2 / 2, this.w2, this.h2);
            }
        });

        canvas.add(
            new Cross ({ top: 100, left: 10 }),
            new Cross ({ top: 10, left: 20 }),
            new Cross ({ top: 30, left: 20 }),
            new Cross ({ top: 40, left: 40 }),
            new Cross ({ top: 50, left: 40 })
        );

        setTimeout(function animate() {
            canvas.forEachObject(function (obj) { obj.animateWidthHeight() });
            canvas.renderAll();
            setTimeout(animate,  10);
        }, 10);
    })();
</script>
<script>
    (function(){
        var mainScriptEl = document.getElementById('main');
        if (!mainScriptEl) return;
        var preEl = document.createElement('pre');
        var codeEl = document.createElement('code');
        codeEl.innerHTML = mainScriptEl.innerHTML;
        codeEl.className = 'language-javascript';
        preEl.appendChild(codeEl);
        document.getElementById('bd-wrapper').appendChild(preEl);
    })();
</script>
<script>
    (function() {
        fabric.util.addListener(fabric.window, 'load', function() {
            var canvas = this.__canvas || this.canvas,
                canvases = this.__canvases || this.canvases;

            canvas && canvas.calcOffset && canvas.calcOffset();

            if (canvases && canvases.length) {
                for (var i = 0, len = canvases.length; i < len; i++) {
                    canvases[i].calcOffset();
                }
            }
        });
    })();
</script>
</body>
</html>