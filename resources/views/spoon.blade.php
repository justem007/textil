<!DOCTYPE html>
<html dir="ltr" lang="pt-BR" xmlns:og="https://ogp.me/ns#">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta property="og:type" content='product' />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rapport de Tecido</title>
    <?php header('Link: <css/rossina.css>; rel=preload; as=style'); ?>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,900,300italic,400italic,900italic&subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rossina.css') }}">
        <style>
            #imagem{border: 3px solid #CCC;} 
            #imagem:hover{border:2px solid lightseagreen;} 
            .h1_servicos_tecidos{font-family: Verdana;font-size: 16px}
        </style>
        <script src="{{ asset('assets/js/rossina.js') }}"></script>
        <script type="text/javascript">
            function goBack() {
                window.history.back();
            }
        </script>
</head>

<body id="designs_show" class="old_body_class nomo designs_show">
    <div id="dimmer" class="dimmer"></div>
    <!--<a class="screen-reader screen-reader-focusable screen-reader-top" href="#main">Skip to the main content</a>-->
    <!--<header class="site_header">
    <div class="h_bar">
        <div id="hBar" class="h_bar-container is-collapsed">
            <a href="http://www.spoonflower.com/welcome" class="spoonflower_logo" title="Spoonflower">
                <span class="visuallyhidden">Spoonflower</span>
            </a>
            <a href="http://www.spoonflower.com/session/new?design_id=6087566-papu-2-150" class="btn btn-xs btn-login">log in</a>
            <button class="h_bar-btn user_btn">
                <span class="icon icon-user" aria-hidden="true"></span>
            </button>
            <button class="h_bar-btn studio_btn">
                <span class="icon icon-studio" aria-hidden="true"></span>
            </button>
            <button class="h_bar-btn promos_btn">
                <span class="icon icon-bullhorn" aria-hidden="true"></span>
                <span class="item_count">2</span>
            </button>
            <!-- Cart button (mobile) -->
    <!--<a href="http://www.spoonflower.com/cart" class="h_bar-btn cart_btn">
                <span class="visuallyhidden">Cart</span>
                <span class="icon icon-cart" aria-hidden="true"></span>
                <span class="item_count"></span>
            </a>
            <div id="navToggle" class="menu_toggle">
                <button><span class="visuallyhidden">Menu</span><span class="icon-menu" aria-hidden="true"></span></button>
            </div>
            <div id="searchModule-desktop" class="search_module search_desktop">
                <form accept-charset="UTF-8" action="/shop" id="search_form-desktop" method="get" name="search_form-desktop" class="search_form">
                    <input class="search_filter" id="desktop_filter" name="type" type="hidden" value="fabric"/>
                    <input class="view" id="view" name="view" type="hidden" value="designs"/>
                    <input class="search_shop" id="desktop_shop" name="shop" type="hidden" value="fabric"/>
                    <div class="search_select-wrapper screen-reader-focus" tabindex="0">
                        <div class="search_selected" data-filter="fabric">fabric</div>
                    </div>
                    <ul class="search_select-dropdown">
                        <li class="search_select-item" data-filter="fabric" tabindex="0"><span>Fabric</span></li>
                        <li class="search_select-item" data-filter="wallpaper" tabindex="0"><span>Wallpaper</span></li>
                        <li class="search_select-item" data-filter="gift_wrap" tabindex="0"><span>Gift Wrap</span></li>
                        <li class="search_select-item" data-filter="designers" tabindex="0"><span>Designers</span></li>
                        <li class="search_select-item" data-filter="collections" tabindex="0"><span>Collections</span></li>
                    </ul>
                    <input autocomplete="off" class="search_input" id="t" name="t" size="30" type="text"/>
                    <button class="btn btn-search screen-reader-focus" name="commit" type="submit" value="Search"></button>
                </form>
            </div>
        </div>
        <a href="#navigation" onclick="$('.a11y-focus').focus();" class="visuallyhidden screen-reader screen-reader-focusable screen-reader-top">
            Jump to navigation
        </a>
    </div>
</header>-->
    <!--<div class="u_bar mobile_hide">
    <div class="u_bar-container" tabindex="-1">
        <ul class="u_sites nav">
            <li>
                <a href="https://sproutpatterns.com/?utm_source=spoonflower.com&amp;utm_medium=referral&amp;utm_campaign=sister-brand" target="blank">
                    <img alt="Sprout Patterns" class="sprout_patterns_logo" src="//d3u3xhd9tobx8a.cloudfront.net/static/global/sprout_logo.svg"/>
                </a>
            </li>
            <li>
                <a href="https://roostery.com/?utm_source=spoonflower.com&amp;utm_medium=referral&amp;utm_campaign=sister-brand" class="screen-reader-focus" target="blank">
                    <img alt="Roostery Home Decor" class="roostery_logo" src="//d3u3xhd9tobx8a.cloudfront.net/static/global/roostery_logo_teal.svg"/>
                </a>
            </li>
        </ul>
        <ul class="u_nav nav">
            <li><a href="http://www.spoonflower.com/session/new?design_id=6087566-papu-2-150" class="link-login"> log in</a></li>
            <li><a href="http://www.spoonflower.com/get_started" class="screen-reader-focus">Join</a></li>
            <li class="has_subnav">
                <a href="http://www.spoonflower.com/cart" class="nav-link-primary cart_btn">
                    <span class="visuallyhidden">Cart</span>
                    <span class="icon icon-cart" aria-hidden="true"></span>
                </a>
                <button class="btn-open-subnav" aria-label="Toggle submenu"></button>
                <div id="cart_pop_replace">
                    <div class="cart_pop cart_menu_mobile" style="display: none;">
                        <div class="cart_pop_show" style="display:none;">
                            <a class="screen-reader screen-reader-focusable link_close" tabindex="0">Close</a>
                            <div class="cart_pop_title">Most recently added items</div>
                            <div class="cart_pop_title_add" style="display: none">1 item was added to your cart</div>
                            <div class="cart_pop_contents">
                                <div><div class="cart_empty">Your cart seems to be empty.</div></div>
                                <div style="float:right; font-size:12px; margin: 0 8px 8px 0">
                                    <span class="cart_pop_quantity" style="font-weight:bold; font-size:15px">0</span>
                                    ITEMS IN YOUR CART<br/>
                                    <div style="float:right">
                                        SUBTOTAL: <span style="font-weight:bold; font-size:15px">R$0.00</span>
                                    </div>
                                </div>
                            </div>
                            <a href="http://www.spoonflower.com/cart" class="btn btn-full btn-view-cart">View Cart</a>
                        </div> <!-- End of cart show -->
    <!--</div>-->
    <!--</div>-->
    <!-- End of Cart -->
    <!--</li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
    <!--<script>
    $("#message_envelope").click(function () {
        location.href = 'http://www.spoonflower.com/messages';
    });
    $("#cart_item_total").click(function () {
        location.href = 'http://www.spoonflower.com/cart';
    });
</script>-->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <main id="main" class="main" tabindex="-1">
        <!--<div class="outer_container definition_container">
        <dl id="whatIsSpoonflower" class="spoonflower_definition">
            <dt class="screen-reader-focus" tabindex="0">
                Custom printed <span>fabric and more</span>
            </dt>
            <dd class="display_none">
                <p>Supporting independent designers as the world's largest Marketplace for eco-friendly,
                    <span class="nowrap">printed-on-demand:</span>
                </p>
                <a href="http://www.spoonflower.com/shop?shop=fabric" class="btn-primary">Fabric</a>
                <a href="http://www.spoonflower.com/shop?shop=wallpaper" class="btn-primary">Wallpaper</a>
                <a href="http://www.spoonflower.com/shop?shop=giftwrap" class="btn-primary">Gift Wrap</a>
                <ol>
                    <li>Pick Your Design</li>
                    <li>Choose Your Material</li>
                    <li>Checkout</li>
                </ol>
            </dd>
        </dl>
    </div>-->
        <!--<div class="notification_area">
        <div id="flash_notice"></div>
    </div>
    <div class="white_box outer_container" id="unauth_design_warning" style="border: 2px solid #D9531E; text-align: center; margin-bottom: 10px">
        <b>NOTE:</b>
        <a href="http://www.spoonflower.com/register/new?design_id=6087566&amp;user_id=4192874" data-method="get">Create an account</a> or
        <a href="http://www.spoonflower.com/session/new?design_id=6087566">log in</a>
            to save this design to your design library. Otherwise, you may not be able to access this design for future orders.
    </div>
    <div id="shop_overlay" style=""></div>-->
        <!-- javascript for setting white boxes to the same height on the design page -->
        <script type="text/javascript">
            function fixH(one, two, three) {
                if (document.getElementById(one)) {
                    var rh = document.getElementById(two).offsetHeight;
                    var ph = document.getElementById(three).offsetHeight;
                    var nh = Math.max(rh - (ph + 28));
                    document.getElementById(one).style.minHeight = nh + "px";
                }
            }
            window.onload = function () {
                fixH('one', 'two', 'three');
            }
        </script>
        <!--<div id='whole_page' class="yui-ge outer_container">
        <div style="width: 180px; margin-right:8px; float:left;">
            <div class="white_box">
                <h3>Design Tips</h3>
                <p>Make the most of your Spoonflower experience</p>
                <ul style="line-height: 20px; padding: 0; margin-left: 15px">
                    <li>
                        <a href="https://support.spoonflower.com/hc/en-us/articles/204444610-How-big-should-my-image-be-" target="_blank">
                            Sizing Your Image
                        </a>
                    </li>
                    <li>
                        <a href="https://support.spoonflower.com/hc/en-us/articles/204444620-How-can-I-make-sure-my-design-is-the-color-I-want-" target="_blank">
                            Color: A Beginner's Guide
                        </a>
                    </li>
                    <li>
                        <a href="https://support.spoonflower.com/hc/en-us/articles/204444600-What-kind-of-files-can-I-upload-" target="_blank">
                            Accepted File Formats
                        </a>
                    </li>
                    <li>
                        <a href="https://support.spoonflower.com/hc/en-us/articles/204444630-Why-should-I-test-my-design-before-ordering-" target="_blank">
                            Testing Your Design
                        </a>
                    </li>
                    <li>
                        <a href="https://support.spoonflower.com/hc/en-us/articles/204444650-What-are-the-repeat-options-" target="_blank">
                            Repeats
                        </a><br/>
                    <li>
                        <a href="https://support.spoonflower.com/hc/en-us/articles/204266954-How-to-use-the-color-changer-tool" target="_blank">
                            Using the Color Changer
                        </a>
                    </li>
                </ul>
            </div>
            <div class="white_box">
                <h3>Spoonflower Blog</h3>
                <p>Tutorials, inspiration, and giveaways</p>
                <p>
                    <a href="http://blog.spoonflower.com/" target="_blank">
                        <img src="/assets/Unauthenticated/Blog_unauth.jpg" width="170px" height="60px">
                    </a>
                </p>
            </div>
        </div>
         Design Info, Canvas area, and Add to Cart for Design page -->
        <h2 style="text-align: center; color:#069; margin-bottom: 10px;">
            Serviços Têxteis - Terceirize sua Produção - Sublimação metro corrido
        </h2>
        <div class="row">
            <h1 class="h1_servicos_tecidos">
                Vendemos somente o papel estampado em Impressão Digital ou Prestamos o Serviço imprimindo qualquer
                tecido de poliéster com ou sem elastano ou paetê nos padrões abaixo:
            </h1>
            <p>Metro corrido (rolos).</p>
            <p>
                Desenhos com padronagem ou Full print.
                Temos dois padrões até 1,50m de largura e acima até 1,76m sem limite de metragem.
                Produção mínima 10 metros lineares.
            </p>
        </div>
        <div id="two" class="white_box" style="float: left; width: 1190px; margin-bottom: 8px; min-height:550px">
            <div class="yui-u first" style="width: 600px; float: left">
                <div class="yui-gd">
                    <div class="yui-u" style="float:left; width: 870px">
                        <div style="width:310px; float:left; height:25px;">
                            <h2 class="shopping_header" style="font-size: 130%; margin-top: 1px; padding: 0;">
                                {{-- imagem --}}
                            </h2>
                        </div>
                        <div id="roomview_wallpaper" style="float:right; padding-left: 10px; width:130px; display:none">
                            <div style="float:left;">
                                <a id="change_view_room" onclick="console.log(&#x27;botão do quarto pressionado&#x27;);
    				                document.getElementById(&#x27;change_room_button&#x27;).src = &#x27;images/outros/View_ON.png&#x27;;
    				                document.getElementById(&#x27;change_design_button&#x27;).src = &#x27;images/outros/View_OFF.png&#x27;;
    				                document.getElementById(&#x27;wall_overlay&#x27;).style.display = &#x27;block&#x27;;">
                                    <img alt="View_off" id="change_room_button" src="images/outros/View_OFF.png" />
                                    </a>
                            </div>
                            <div style="float:left; margin:5px 5px 0 2px; font-size:10px;">QUARTO</div>
                            <div style="float:left;">
                                <a id="change_view_design" onclick="document.getElementById(&#x27;change_design_button&#x27;).src = &#x27;/images/outros/View_ON.png&#x27;;
    				                document.getElementById(&#x27;change_room_button&#x27;).src = &#x27;images/outros/View_OFF.png&#x27;;
    				                document.getElementById(&#x27;wall_overlay&#x27;).style.display = &#x27;none&#x27;;">
                                    <img alt="View_on" id="change_design_button" src="images/outros/View_ON.png" />
                                    </a>
                            </div>
                            <div style="float:left; margin:5px 0 0 2px; font-size:10px;">Desenho</div>
                        </div>
                        <div id="giftwrap_box_view" style="float:right; width:160px; display:none">
                            <div style="float:left;">
                                <a id="change_view_box" onclick="document.getElementById(&#x27;change_box_button&#x27;).src = &#x27;/images/outros/View_ON.png&#x27;;
				                    var newImage = new Image();
				                    newImage.src = &#x27;link?&#x27; + new Date().getTime();
				                    document.getElementById(&#x27;giftpreview&#x27;).src = newImage.src;
            	                    document.getElementById(&#x27;change_box_button2&#x27;).src = &#x27;images/outros/View_OFF.png&#x27;;
            	                    document.getElementById(&#x27;box_overlay&#x27;).style.display = &#x27;block&#x27;;
            	                    document.getElementById(&#x27;canvas_div&#x27;).style.display = &#x27;none&#x27;;
            	                    fixH(&#x27;one&#x27;,&#x27;two&#x27;, &#x27;three&#x27;);">
                                    <img alt="View_off" id="change_box_button" src="images/outros/View_OFF.png" />
                                    </a>
                            </div>
                            <div style="float:left; margin:5px 5px 0 2px; font-size:10px;">GIFT BOX</div>
                            <div style="float:left;">
                                <a id="change_view_design" onclick="document.getElementById(&#x27;change_box_button2&#x27;).src = &#x27;/images/outros/View_ON.png&#x27;;
          	                        document.getElementById(&#x27;change_box_button&#x27;).src = &#x27;images/outros/View_OFF.png&#x27;;
          	                        document.getElementById(&#x27;box_overlay&#x27;).style.display = &#x27;none&#x27;;
          	                        document.getElementById(&#x27;canvas_div&#x27;).style.display = &#x27;block&#x27;;
          	                        fixH(&#x27;one&#x27;,&#x27;two&#x27;, &#x27;three&#x27;);">
                                    <img alt="View_on" id="change_box_button2" src="images/outros/View_ON.png" />
                                    </a>
                            </div>
                            <div style="float:left; margin:5px 0 0 2px; font-size:10px;">DESIGN</div>
                        </div>
                        <div style="max-width:670px">
                            <!-- This div is for the project/fabric images below the canvas. It replaces the canvas with a jpg.
                            Este div é para as imagens do projeto / tecido abaixo da lona. Ele substitui a tela por um jpg.-->
                            <div style="position:relative; margin-bottom:5px; display:none;" id="project_container">
                                <div id="project_large" style="z-index: 3; display: none; width:470px; height:403px; margin-bottom: 5px;">
                                    <a href="" id="project_link">
                                        <img alt="Papu-2-150_shop_preview" id="project_large_image" src="" style="width:670px" />
                                    </a>
                                </div>
                            </div>
                            <!-- Isto é para a exibição de papel de parede. Ele substitui a tela. -->
                            <div style="position:relative; z-index: 20">
                                <div id="wall_overlay" style="display:none; z-index:100; position:absolute; top: 28px">
                                    <img alt="" id="wall_image" src="" width="670" />
                                </div>
                            </div>
                            <div style="position:relative; z-index: 10">
                                <div id="loading" style="margin-bottom:2px">
                                    <img alt="" src="" width="470" />
                                </div>
                            </div>
                            <!-- Isto é para o display gift_wrap. Ele substitui a tela. -->
                            <div style="position:relative; z-index: 20">
                                <div id="box_overlay" style="display:none; float:left; top: 26px; width:670px; height:470px">
                                    <img alt="Show_image" id="giftpreview" src="" width="470"
                                    />
                                </div>
                            </div>
                            <script>
                                function toggle_preview() {
                                    var oDiv = document.getElementById('preview_tooltip')
                                    var oBtn = document.getElementById('button_preview')
                                    if (oDiv.style.display == 'none') {
                                        oDiv.style.display = 'block'
                                        oBtn.value = 'HIDE'
                                    } else {
                                        oDiv.style.display = 'none'
                                        oBtn.value = 'SHOW'
                                    }
                                }
                            </script>
                            <!-- CANVAS -->
                            <div id="canvas_div" style="z-index:15; line-height: 1">
                                <canvas id="design_preview" width="870" height="470" style="display:none;">
                                </canvas>
                                <canvas id="mobile_preview" style="display:none;">
                                </canvas>
                            </div>
                        </div>
                        <div class="preview-info">
                            <div class="mobile_hide">
                                <!-- <p style="display:inline;"> #1  page views</p> | -->
                                <a onclick="document.getElementById(&#x27;whole_page&#x27;).style.display = &#x27;none&#x27;;
                                    document.getElementById(&#x27;zoom&#x27;).style.display = &#x27;block&#x27;;">
                                        Ver Original
                                </a>
                            </div>
                            <div class="mobile_hide">
                                <a href="#" onclick="$(&#x27;#embed_text&#x27;).toggle(); return false;">Incorporar</a>
                            </div>
                            <div id='flex_size_message' class="tablet_hide">
                                <a id="button_preview" onclick="toggle_preview()">Pré-visualização</a>
                            </div>
                            <p class="preview_scale">Ver Escala: 21.0 x 18.0 inches</p>
                        </div>
                        <div id='embed_text' style="display: none">
                            <div style="border: 1px solid #e3e3e3; font-size: 14px; padding: 10px">
                                Para incorporar isso, corte e cole o seguinte html em sua página da web:
                                <p>
                                    <textarea cols="55" rows="6">&lt;a href=&#x27;link&#x27;
                                        title = &#x27;colocar alum texto aqui para exemplo&#x27;&gt;&lt;
                                        img src=&#x27;caminho para a imagem&#x27;
                                        alt=&#x27;nome da imagem&#x27;/&gt;&lt;/a&gt;
                                    </textarea>
                                </p>
                            </div>
                        </div>
                        <div id="preview_tooltip" style="background-color: #efefef; padding: 10px; display:none; margin-top: 10px;margin-bottom: 5px; font-size:12px;">
                            <span style='float:right;line-height:1em;font-size:10px'>
                                <a onclick="document.getElementById(&#x27;preview_tooltip&#x27;).style.display = &#x27;none&#x27;;"><b>X</b></a>
                            </span>
                            <div>
                                Esta visualização é precisa em termos de repetição e escala. O que você vê aqui é o que vai imprimir.
                                <a href="link" target="_blank">
                                    Saiba mais sobre a pré-visualização.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="console_container">
                <div id="console_controls">
                    <div style="float: right; width: 277px; margin-top: 0; padding-top: 0">
                        <div id="fabric_tab" class="substrate_tab selected">
                            <a href="/designs/6087566-papu-2-150?substrate=fabric" data-remote="true">Tecido</a>
                        </div>
                        <div id="wallpaper_tab" class="substrate_tab">
                            <a href="/designs/6087566-papu-2-150?substrate=wallpaper" data-remote="true">Papel de Parede</a>
                        </div>
                        <div id="gift_wrap_tab" class="substrate_tab">
                            <a href="/designs/6087566-papu-2-150?substrate=gift_wrap" data-remote="true">Para Presente</a>
                        </div>
                        <div id="substrate_pane" class="substrate_pane" style="float:left; border-radius: 0 3px 3px 3px">
                            <div id="substrate_partial">
                                <div id='fabric_pane'>
                                    <script type="text/javascript">
                                        if (!window.console) console = {
                                            log: function () {}
                                        };
                                        console.log('Iniciado o  script');
                                        document.getElementById('project_large').style.display = 'none';
                                        document.getElementById('project_container').style.display = 'none';
                                        document.getElementById('giftwrap_box_view').style.display = 'none';
                                        document.getElementById('box_overlay').style.display = 'none';
                                        document.getElementById('wall_overlay').style.display = 'none';
                                        document.getElementById('roomview_wallpaper').style.display = "none";
                                        if (document.getElementById('roomview_wallpaper').style.display == 'block') {
                                            if (document.getElementById('change_design_button').src != 'View_ON.png') {
                                                document.getElementById('wall_overlay').style.display = 'block';
                                            }
                                        }
                                        if (document.getElementById('design_preview').style.display == 'inline') {
                                            document.getElementById('canvas_div').style.display = 'block';
                                        } else {
                                            document.getElementById('loading').style.display = 'block';
                                        }

                                        var yards = 0;

                                        function onKeyUpChangeTotal() {
                                            var total = document.getElementById("total");
                                            var discount_message = document.getElementById("discount");
                                            var yards = document.getElementById('dynamic_fabric_count').value;
                                            var price;
                                            var size;
                                            var fabricId;
                                            var discount = false;
                                            $("input[name*=fabric_id]").each(function (index, element) {
                                                if (element.checked) {
                                                    fabricId = element.value;
                                                }
                                            });
                                            $("input[name*=fabric_size_id]").each(function (index, element) {
                                                if (element.checked) {
                                                    price_name = "fabric_price_" + element.value + "_" +
                                                        fabricId;
                                                    size_name = "fabric_size_" + element.value + "_" + fabricId;
                                                    //alert("childnodes 1")
                                                    price = document.getElementById(price_name).childNodes[0].data;
                                                    size = document.getElementById(size_name).childNodes[0].data;
                                                    if (element.value == '0') {
                                                        discount = true;
                                                        $("input[name*=dynamic_fabric_yards]").each(function (
                                                            index, element) {
                                                            element.value = yards;
                                                        });
                                                    } else {
                                                        $("input[name*=dynamic_fabric_yards]").each(function (
                                                            index, element) {
                                                            element.value = "";
                                                        });
                                                    }
                                                }
                                            });
                                            if ((isNaN(parseInt(yards))) || (parseInt(yards) == 0)) {
                                                var cost = 0;
                                            } else {
                                                if (size != "Amostra de teste (8\" x 8\")" && size != "Amostra (8\" x 8\")") {
                                                    var cost = parseFloat(parseFloat(price) * parseInt(yards) * 90) /
                                                        100;
                                                    var diff = (parseFloat(price) * parseInt(yards)) - cost;
                                                    discount_message.style.display = "block";
                                                    discount_message.childNodes[0].data = 'R$' + diff.toFixed(2) +
                                                        ' economizado com desconto de designer.';
                                                } else {
                                                    var cost = parseFloat(price) * parseInt(yards);
                                                    discount_message.style.display = "none";
                                                }
                                            }
                                            //alert("childnodes 2")
                                            total.childNodes[0].data = 'Total: R$' + cost.toFixed(2);
                                        }

                                        function checkQty() {
                                            var qty = $('#dynamic_fabric_count').val();
                                            console.log("A dtd é " + qty);
                                            if (qty % 1 != 0 || isNaN(parseInt(qty))) {
                                                //if not a number or whole number
                                                $('#qty_alert').show();
                                                $('#add_to_cart_button').hide();
                                            } else if (qty > 200) {
                                                $('#qty_alert-over_limit').show();
                                                $('#add_to_cart_button').hide();
                                            } else {
                                                $('.qty_alert').hide();
                                                $('#add_to_cart_button').show();
                                            }
                                        }
                                        var flexFabSize = 0;

                                        function onClickSelectRadioButton(e, yards_boolean) {
                                            var total = document.getElementById("total");
                                            $("input[name*=swatch]").each(function (index, element) {
                                                element.value = '';
                                            });
                                            $("input[name*=fatq]").each(function (index, element) {
                                                element.value = '';
                                            });
                                            $("input[name*=yards]").each(function (index, element) {
                                                element.value = '';
                                            });

                                            var count_holder = document.getElementById('dynamic_fabric_count')
                                            count_holder.value = 1;
                                            if (!e.target) {
                                                $("input[name*=fabric_id]").each(function (index, element) {
                                                    if (element.checked) {
                                                        fabricId = element.value;
                                                    }
                                                });
                                                e.srcElement.value = '1';
                                                size_finder = "size_" + e.srcElement.id;
                                                size = document.getElementById(size_finder).childNodes[0].data;
                                                yard_test = "" + e.srcElement.id;
                                                $("input[name*=fabric_size_id]").each(function (index, element) {
                                                    if (element.value == size) {
                                                        element.click()
                                                    } else if (index == 2 && yard_test == ('dynamic_fabric_yards_' + fabricId)) {
                                                        flexFabSize = size;
                                                        element.click()
                                                    }
                                                });
                                            } else {
                                                e.target.value = '1';
                                                flexFabSize = e.target.previousElementSibling.childNodes[0].data;
                                                e.target.parentNode.previousElementSibling.click()
                                            }
                                            onKeyUpChangeTotal();
                                        }
                                        var fabricSizes = {
                                            1: [8.0, 8.0],
                                            2: [21.0, 18.0],
                                            3: [42.0, 36.0],
                                            4: [42.0, 72.0],
                                            5: [42.0, 108.0],
                                            6: [42.0, 144.0],
                                            7: [42.0, 180.0],
                                            8: [8.0, 8.0],
                                            9: [26.0, 18.0],
                                            10: [52.0, 36.0],
                                            11: [52.0, 72.0],
                                            12: [52.0, 108.0],
                                            18: [8.0, 8.0],
                                            19: [28.0, 18.0],
                                            20: [56.0, 36.0],
                                            21: [56.0, 72.0],
                                            22: [56.0, 108.0],
                                            23: [52.0, 144.0],
                                            24: [52.0, 180.0],
                                            27: [56.0, 144.0],
                                            28: [56.0, 180.0],
                                            32: [8.0, 8.0],
                                            33: [28.0, 18.0],
                                            34: [56.0, 36.0],
                                            35: [56.0, 72.0],
                                            36: [56.0, 108.0],
                                            37: [56.0, 144.0],
                                            38: [56.0, 180.0],
                                            40: [8.0, 8.0],
                                            41: [26.0, 18.0],
                                            42: [52.0, 36.0],
                                            43: [52.0, 72.0],
                                            44: [52.0, 108.0],
                                            45: [52.0, 144.0],
                                            46: [52.0, 180.0],
                                            49: [52.0, 720.0],
                                            53: [8.0, 8.0],
                                            54: [29.0, 18.0],
                                            55: [58.0, 36.0],
                                            56: [58.0, 72.0],
                                            57: [58.0, 108.0],
                                            58: [58.0, 144.0],
                                            59: [58.0, 180.0],
                                            60: [8.0, 8.0],
                                            61: [27.0, 18.0],
                                            62: [8.0, 8.0],
                                            63: [27.0, 18.0],
                                            64: [54.0, 36.0],
                                            65: [54.0, 72.0],
                                            66: [54.0, 108.0],
                                            67: [54.0, 144.0],
                                            68: [54.0, 180.0],
                                            206: [8.0, 8.0],
                                            207: [26.0, 18.0],
                                            208: [53.0, 36.0],
                                            209: [53.0, 72.0],
                                            210: [53.0, 108.0],
                                            211: [53.0, 144.0],
                                            212: [53.0, 180.0],
                                            398: [8.0, 8.0],
                                            399: [8.0, 8.0],
                                            400: [8.0, 8.0],
                                            401: [21.0, 18.0],
                                            402: [42.0, 36.0],
                                            403: [42.0, 72.0],
                                            404: [42.0, 108.0],
                                            405: [42.0, 144.0],
                                            406: [42.0, 180.0],
                                            452: [8.0, 8.0],
                                            453: [8.0, 8.0],
                                            454: [27.0, 18.0],
                                            455: [54.0, 36.0],
                                            456: [54.0, 72.0],
                                            457: [54.0, 108.0],
                                            458: [54.0, 144.0],
                                            459: [54.0, 180.0],
                                            726: [8.0, 8.0],
                                            727: [20.0, 18.0],
                                            728: [40.0, 36.0],
                                            729: [40.0, 72.0],
                                            730: [40.0, 108.0],
                                            731: [40.0, 144.0],
                                            732: [40.0, 180.0],
                                            790: [24.0, 12.0],
                                            791: [24.0, 144.0],
                                            792: [5.0, 5.0],
                                            793: [15.0, 15.0],
                                            794: [30.0, 30.0],
                                            796: [8.0, 8.0],
                                            797: [21.0, 18.0],
                                            798: [42.0, 36.0],
                                            799: [42.0, 72.0],
                                            800: [42.0, 108.0],
                                            801: [42.0, 144.0],
                                            802: [42.0, 180.0],
                                            965: [8.0, 8.0],
                                            966: [21.0, 18.0],
                                            967: [42.0, 36.0],
                                            968: [42.0, 72.0],
                                            969: [42.0, 108.0],
                                            970: [42.0, 144.0],
                                            971: [42.0, 180.0],
                                            1282: [8.0, 8.0],
                                            1283: [21.0, 18.0],
                                            1284: [42.0, 36.0],
                                            1285: [42.0, 72.0],
                                            1286: [42.0, 108.0],
                                            1287: [42.0, 144.0],
                                            1288: [42.0, 180.0],
                                            1509: [26.0, 72.0],
                                            1594: [8.0, 8.0],
                                            1595: [21.0, 18.0],
                                            1596: [42.0, 36.0],
                                            1597: [42.0, 72.0],
                                            1598: [42.0, 108.0],
                                            1599: [42.0, 144.0],
                                            1600: [42.0, 180.0],
                                            1765: [26.0, 72.0],
                                            1841: [8.0, 8.0],
                                            1842: [28.0, 18.0],
                                            1843: [56.0, 36.0],
                                            1844: [56.0, 72.0],
                                            1845: [56.0, 108.0],
                                            1846: [56.0, 144.0],
                                            1847: [56.0, 180.0],
                                            1850: [8.0, 8.0],
                                            1851: [25.0, 18.0],
                                            1852: [50.0, 36.0],
                                            1853: [50.0, 72.0],
                                            1854: [50.0, 108.0],
                                            1855: [50.0, 144.0],
                                            1856: [50.0, 180.0],
                                            1857: [8.0, 8.0],
                                            1858: [27.0, 18.0],
                                            1859: [54.0, 36.0],
                                            1860: [54.0, 72.0],
                                            1861: [54.0, 108.0],
                                            1862: [54.0, 144.0],
                                            1863: [54.0, 180.0],
                                            1933: [4.25, 5.5],
                                            1942: [8.0, 8.0],
                                            1943: [28.0, 18.0],
                                            1944: [56.0, 36.0],
                                            1945: [56.0, 72.0],
                                            1946: [56.0, 108.0],
                                            1947: [56.0, 144.0],
                                            1948: [56.0, 180.0],
                                            1997: [8.0, 8.0],
                                            1998: [21.0, 18.0],
                                            1999: [42.0, 36.0],
                                            2000: [42.0, 72.0],
                                            2001: [42.0, 108.0],
                                            2002: [42.0, 144.0],
                                            2003: [42.0, 180.0],
                                            2074: [8.0, 8.0],
                                            2075: [27.0, 18.0],
                                            2076: [54.0, 36.0],
                                            2100: [8.0, 8.0],
                                            2101: [21.0, 18.0],
                                            2102: [42.0, 36.0],
                                            2103: [42.0, 72.0],
                                            2104: [42.0, 108.0],
                                            2105: [42.0, 144.0],
                                            2106: [42.0, 180.0],
                                            2189: [8.0, 8.0],
                                            2190: [28.0, 18.0],
                                            2191: [56.0, 36.0],
                                            2192: [56.0, 72.0],
                                            2193: [56.0, 108.0],
                                            2194: [56.0, 144.0],
                                            2195: [56.0, 180.0],
                                            2358: [8.0, 8.0],
                                            2359: [27.0, 18.0],
                                            2360: [54.0, 36.0],
                                            2361: [54.0, 72.0],
                                            2362: [54.0, 108.0],
                                            2363: [54.0, 144.0],
                                            2364: [54.0, 180.0],
                                            2407: [8.0, 8.0],
                                            2408: [28.0, 18.0],
                                            2409: [56.0, 36.0],
                                            2410: [56.0, 72.0],
                                            2411: [56.0, 108.0],
                                            2412: [56.0, 144.0],
                                            2413: [56.0, 180.0],
                                            2538: [8.0, 8.0],
                                            2539: [54.0, 36.0],
                                            2540: [54.0, 72.0],
                                            2541: [54.0, 108.0],
                                            2542: [54.0, 144.0],
                                            2543: [54.0, 180.0],
                                            2561: [8.0, 8.0],
                                            2562: [54.0, 36.0],
                                            2563: [54.0, 72.0],
                                            2564: [54.0, 108.0],
                                            2565: [54.0, 144.0],
                                            2566: [54.0, 180.0],
                                            2567: [27.0, 18.0],
                                            2568: [27.0, 18.0],
                                            2570: [8.0, 8.0],
                                            2571: [28.0, 18.0],
                                            2572: [56.0, 36.0],
                                            2573: [56.0, 72.0],
                                            2574: [56.0, 108.0],
                                            2575: [56.0, 144.0],
                                            2576: [56.0, 180.0],
                                            2582: [8.0, 8.0],
                                            2583: [28.0, 18.0],
                                            2584: [56.0, 36.0],
                                            2585: [56.0, 72.0],
                                            2586: [56.0, 108.0],
                                            2587: [56.0, 144.0],
                                            2588: [56.0, 180.0],
                                            2692: [24.0, 12.0],
                                            2693: [24.0, 144.0],
                                            2834: [8.0, 8.0],
                                            2835: [52.0, 36.0],
                                            2836: [52.0, 72.0],
                                            2838: [52.0, 108.0],
                                            2839: [52.0, 144.0],
                                            2840: [52.0, 180.0],
                                            2842: [8.0, 8.0],
                                            2843: [54.0, 36.0],
                                            2844: [54.0, 72.0],
                                            2845: [54.0, 108.0],
                                            2846: [54.0, 144.0],
                                            2847: [54.0, 180.0],
                                            2852: [26.0, 18.0],
                                            2853: [27.0, 18.0],
                                            2938: [8.0, 8.0],
                                            2997: [8.0, 8.0],
                                            2998: [54.0, 36.0],
                                            2999: [54.0, 72.0],
                                            3000: [54.0, 108.0],
                                            3001: [54.0, 144.0],
                                            3002: [54.0, 180.0],
                                            3003: [27.0, 18.0],
                                            3025: [8.0, 8.0],
                                            3026: [21.0, 18.0],
                                            3027: [42.0, 36.0],
                                            3028: [42.0, 72.0],
                                            3029: [42.0, 108.0],
                                            3030: [42.0, 144.0],
                                            3031: [42.0, 180.0],
                                            3198: [8.0, 8.0],
                                            3200: [29.0, 18.0],
                                            3201: [58.0, 36.0],
                                            3202: [58.0, 72.0],
                                            3203: [58.0, 108.0],
                                            3204: [58.0, 144.0],
                                            3205: [58.0, 180.0],
                                            3355: [8.0, 8.0],
                                            3356: [27.0, 18.0],
                                            3357: [54.0, 36.0],
                                            3358: [54.0, 72.0],
                                            3359: [54.0, 108.0],
                                            3360: [54.0, 144.0],
                                            3361: [54.0, 180.0],
                                            3437: [8.0, 8.0],
                                            3438: [28.0, 18.0],
                                            3439: [56.0, 36.0],
                                            3440: [56.0, 72.0],
                                            3441: [56.0, 108.0],
                                            3442: [56.0, 144.0],
                                            3443: [56.0, 180.0],
                                            3444: [56.0, 180.0],
                                            3527: [8.0, 8.0],
                                            3529: [21.0, 18.0],
                                            3530: [42.0, 36.0],
                                            3531: [42.0, 72.0],
                                            3532: [42.0, 108.0],
                                            3533: [42.0, 144.0],
                                            3534: [42.0, 180.0],
                                            3566: [8.0, 8.0],
                                            3567: [56.0, 36.0],
                                            3568: [28.0, 18.0],
                                            3569: [56.0, 72.0],
                                            3570: [56.0, 108.0],
                                            3571: [56.0, 144.0],
                                            3572: [56.0, 180.0],
                                            3856: [28.0, 18.0],
                                            3857: [56.0, 36.0],
                                            3899: [8.0, 8.0],
                                            3900: [8.0, 8.0],
                                            3901: [8.0, 8.0],
                                            3902: [28.0, 18.0],
                                            3903: [56.0, 36.0],
                                            3904: [56.0, 72.0],
                                            3905: [56.0, 108.0],
                                            3906: [56.0, 144.0],
                                            3907: [56.0, 180.0],
                                            4032: [8.0, 8.0],
                                            4033: [21.0, 18.0],
                                            4034: [42.0, 36.0],
                                            4035: [42.0, 72.0],
                                            4036: [42.0, 108.0],
                                            4037: [42.0, 144.0],
                                            4038: [42.0, 180.0],
                                            4101: [8.0, 8.0],
                                            4102: [27.0, 18.0],
                                            4103: [54.0, 36.0],
                                            4104: [54.0, 72.0],
                                            4105: [54.0, 108.0],
                                            4106: [54.0, 144.0],
                                            4107: [54.0, 180.0],
                                            4209: [8.0, 8.0],
                                            4210: [29.0, 18.0],
                                            4211: [58.0, 36.0],
                                            4212: [58.0, 72.0],
                                            4213: [58.0, 108.0],
                                            4214: [58.0, 144.0],
                                            4215: [58.0, 180.0],
                                            4352: [8.0, 8.0],
                                            4353: [30.0, 18.0],
                                            4354: [60.0, 36.0],
                                            4355: [60.0, 72.0],
                                            4356: [60.0, 108.0],
                                            4357: [60.0, 144.0],
                                            4358: [60.0, 180.0],
                                            4461: [8.0, 8.0],
                                            4462: [28.0, 18.0],
                                            4463: [56.0, 36.0],
                                            4467: [56.0, 72.0],
                                            4468: [56.0, 108.0],
                                            4469: [56.0, 144.0],
                                            4470: [56.0, 180.0],
                                            4542: [26.0, 72.0],
                                            4696: [8.0, 8.0],
                                            4697: [21.0, 18.0],
                                            4698: [42.0, 36.0],
                                            4699: [42.0, 72.0],
                                            4700: [42.0, 108.0],
                                            4701: [42.0, 144.0],
                                            4702: [42.0, 180.0],
                                            4900: [8.0, 8.0],
                                            4901: [21.0, 18.0],
                                            4902: [42.0, 36.0],
                                            4903: [42.0, 72.0],
                                            4904: [42.0, 108.0],
                                            4905: [42.0, 144.0],
                                            4906: [42.0, 180.0],
                                            5255: [24.0, 12.0],
                                            5256: [24.0, 144.0],
                                            5263: [8.0, 8.0],
                                            5264: [29.0, 18.0],
                                            5265: [58.0, 36.0],
                                            5266: [8.0, 8.0],
                                            5267: [58.0, 72.0],
                                            5268: [58.0, 108.0],
                                            5269: [58.0, 144.0],
                                            5270: [58.0, 180.0],
                                            5329: [24.0, 12.0],
                                            5330: [24.0, 144.0],
                                            5388: [8.0, 8.0],
                                            5389: [30.0, 18.0],
                                            5390: [60.0, 36.0],
                                            5391: [60.0, 72.0],
                                            5392: [60.0, 108.0],
                                            5393: [60.0, 144.0],
                                            5394: [60.0, 180.0],
                                            5759: [8.0, 8.0],
                                            5760: [24.0, 12.0],
                                            5761: [24.0, 324.0],
                                            6240: [56.0, 36.0],
                                            6242: [56.0, 72.0],
                                            6249: [56.0, 144.0],
                                            6250: [54.0, 36.0],
                                            6251: [56.0, 180.0],
                                            6356: [60.0, 36.0],
                                            6357: [60.0, 72.0],
                                            6358: [60.0, 108.0],
                                            6359: [60.0, 144.0],
                                            6360: [60.0, 180.0],
                                            6361: [30.0, 18.0],
                                            6458: [8.0, 8.0],
                                            6459: [30.0, 18.0],
                                            6460: [67.0, 36.0],
                                            6461: [67.0, 72.0],
                                            6462: [67.0, 108.0],
                                            6463: [67.0, 144.0],
                                            6464: [67.0, 180.0],
                                            6465: [8.0, 8.0],
                                            6466: [29.0, 18.0],
                                            6467: [58.0, 36.0],
                                            6468: [58.0, 72.0],
                                            6469: [58.0, 108.0],
                                            6470: [58.0, 144.0],
                                            6471: [58.0, 180.0],
                                            6602: [56.0, 324.0],
                                            6974: [56.0, 72.0],
                                            7448: [56.0, 108.0],
                                            7449: [56.0, 216.0],
                                            7564: [56.0, 324.0],
                                            7594: [56.0, 288.0]
                                        };

                                        var image = {
                                            width: 7.8733333333333,
                                            height: 7.94
                                        };
                                        // IN ORDER TO SPEED UP THE CANVAS BROWSE, THE PREVIEWER USES COMPOSITE REPEATS THAT ARE
                                        // GENERATED BY IMAGEMAGICK ON THE SERVER FOR ALL IMAGES SMALLER THAN 4"
                                        // THE SERVER GENERATES MIRROR, BRICK, DROP, AND BASIC REPEAT COMPOSITES.
                                        // THESE COMPOSITES WILL ALWAYS BE SIZED TO 1 REPEAT GREATER THAN 8"
                                        // THIS FORMULA CALCULATES NUMBER OF REPEATS IN THE COMPOSITE
                                        // A fim de acelerar a navegação CANVAS, o visualizador usa REPETIÇÕES COMPOSTAS QUE SÃO
                                        // GERADO POR IMAGEMAGICK SOBRE O SERVIDOR PARA TODAS AS IMAGENS MENORES DE 4
                                        // O SERVIDOR GERA O ESPELHO, O TIJOLO, A GOTA E OS COMPOSTOS DE REPETIÇÃO BÁSICA.
                                        // ESTES COMPOSTOS SERÃO SEMPRE TALHADOS PARA 1 REPETIR MAIOR QUE 8"
                                        // ESTA FÓRMULA CÁLCULA NÚMERO DE REPETIDAS NO COMPOSTO
                                        if (image.width < 4 || image.height < 4) {
                                            if (image.height > image.width) {
                                                composite_repeats = 2 * (parseInt(parseInt(1200 / (image.width * 150)) /
                                                    2) + 1);
                                            } else {
                                                composite_repeats = 2 * (parseInt(parseInt(1200 / (image.height * 150)) /
                                                    2) + 1);
                                            }
                                        } else {
                                            composite_repeats = 0;
                                        }

                                        console.log();
                                        // Eval the successful result of ajax_cart
                                        //$(window).load(function() {
                                        //    window.alert("init1");
                                        //    $("#ajax_cart").bind('ajax:success', function(evt, data, status, xhr) {
                                        //      window.alert("status: " + status);
                                        //      window.alert("about to eval: " + data);
                                        //      eval('(' + data + ')');
                                        //    });
                                        //  });
                                        //$(document).ajaxSuccess(function(evt, xhr, settings) {
                                        //  if (settings.url.indexOf("/designs/") != -1) {
                                        //    window.alert("about to eval: " + xhr.responseText);
                                        //    eval('(' + xhr.responseText + ')');
                                        //  }
                                        //});
                                    </script>
                                    <script type="text/javascript">
                                        $(function () {
                                            var previewImage = new Image();
                                            var highresImage = new Image();
                                            var compositeMirrorImage = new Image();
                                            var compositeBrickImage = new Image();
                                            var compositeDropImage = new Image();
                                            var compositeCenterImage = new Image();

                                            $('html').click(function () {
                                                $('#fabric_drop_down').hide();
                                                $("#size_drop_down_5").hide();
                                                $("#size_drop_down_10").hide();
                                                $("#size_drop_down_13").hide();
                                                $("#size_drop_down_17").hide();
                                                $("#size_drop_down_18").hide();
                                                $("#size_drop_down_21").hide();
                                                $("#size_drop_down_23").hide();
                                                $("#size_drop_down_30").hide();
                                                $("#size_drop_down_31").hide();
                                                $("#size_drop_down_32").hide();
                                                $("#size_drop_down_33").hide();
                                                $("#size_drop_down_34").hide();
                                                $("#size_drop_down_37").hide();
                                                $("#size_drop_down_39").hide();
                                                $("#size_drop_down_43").hide();
                                                $("#size_drop_down_44").hide();
                                                $("#size_drop_down_45").hide();
                                                $("#size_drop_down_46").hide();
                                                $("#size_drop_down_47").hide();
                                                $("#size_drop_down_48").hide();
                                                $("#size_drop_down_49").hide();
                                                $("#size_drop_down_50").hide();
                                                $("#size_drop_down_51").hide();
                                                $("#size_drop_down_52").hide();
                                                $("#size_drop_down_53").hide();
                                                $("#size_drop_down_54").hide();
                                                $("#size_drop_down_55").hide();
                                                $("#size_drop_down_56").hide();
                                                $("#size_drop_down_59").hide();
                                                $("#size_drop_down_60").hide();
                                                $("#size_drop_down_61").hide();
                                                $("#size_drop_down_62").hide();
                                                $("#size_drop_down_63").hide();
                                                $("#size_drop_down_65").hide();
                                                $("#size_drop_down_66").hide();
                                                $("#size_drop_down_67").hide();
                                                $("#size_drop_down_68").hide();
                                                $("#size_drop_down_69").hide();
                                                $("#size_drop_down_70").hide();
                                            });
                                            $('#fabric_selector').click(function (event) {
                                                event.stopPropagation();
                                            });
                                            $('#size_selector').click(function (event) {
                                                event.stopPropagation();
                                            });

                                            var showFabricSizes = function () {
                                                var fabric;
                                                console.log("dentro de mostrar tecido");
                                                $("input[name*=fabric_id]").each(function (index, element) {
                                                    if (element.checked) {
                                                        fabric = element.value;
                                                    }
                                                });
                                                if (fabric != 5) {
                                                    $("#fabric_5_size").hide();
                                                } else {
                                                    $("#fabric_5_size").show();
                                                }
                                                if (fabric != 10) {
                                                    $("#fabric_10_size").hide();
                                                } else {
                                                    $("#fabric_10_size").show();
                                                }
                                                if (fabric != 13) {
                                                    $("#fabric_13_size").hide();
                                                } else {
                                                    $("#fabric_13_size").show();
                                                }
                                                if (fabric != 17) {
                                                    $("#fabric_17_size").hide();
                                                } else {
                                                    $("#fabric_17_size").show();
                                                }
                                                if (fabric != 18) {
                                                    $("#fabric_18_size").hide();
                                                } else {
                                                    $("#fabric_18_size").show();
                                                }
                                                if (fabric != 21) {
                                                    $("#fabric_21_size").hide();
                                                } else {
                                                    $("#fabric_21_size").show();
                                                }
                                                if (fabric != 23) {
                                                    $("#fabric_23_size").hide();
                                                } else {
                                                    $("#fabric_23_size").show();
                                                }
                                                if (fabric != 30) {
                                                    $("#fabric_30_size").hide();
                                                } else {
                                                    $("#fabric_30_size").show();
                                                }
                                                if (fabric != 31) {
                                                    $("#fabric_31_size").hide();
                                                } else {
                                                    $("#fabric_31_size").show();
                                                }
                                                if (fabric != 32) {
                                                    $("#fabric_32_size").hide();
                                                } else {
                                                    $("#fabric_32_size").show();
                                                }
                                                if (fabric != 33) {
                                                    $("#fabric_33_size").hide();
                                                } else {
                                                    $("#fabric_33_size").show();
                                                }
                                                if (fabric != 34) {
                                                    $("#fabric_34_size").hide();
                                                } else {
                                                    $("#fabric_34_size").show();
                                                }
                                                if (fabric != 37) {
                                                    $("#fabric_37_size").hide();
                                                } else {
                                                    $("#fabric_37_size").show();
                                                }
                                                if (fabric != 39) {
                                                    $("#fabric_39_size").hide();
                                                } else {
                                                    $("#fabric_39_size").show();
                                                }
                                                if (fabric != 43) {
                                                    $("#fabric_43_size").hide();
                                                } else {
                                                    $("#fabric_43_size").show();
                                                }
                                                if (fabric != 44) {
                                                    $("#fabric_44_size").hide();
                                                } else {
                                                    $("#fabric_44_size").show();
                                                }
                                                if (fabric != 45) {
                                                    $("#fabric_45_size").hide();
                                                } else {
                                                    $("#fabric_45_size").show();
                                                }
                                                if (fabric != 46) {
                                                    $("#fabric_46_size").hide();
                                                } else {
                                                    $("#fabric_46_size").show();
                                                }
                                                if (fabric != 47) {
                                                    $("#fabric_47_size").hide();
                                                } else {
                                                    $("#fabric_47_size").show();
                                                }
                                                if (fabric != 48) {
                                                    $("#fabric_48_size").hide();
                                                } else {
                                                    $("#fabric_48_size").show();
                                                }
                                                if (fabric != 49) {
                                                    $("#fabric_49_size").hide();
                                                } else {
                                                    $("#fabric_49_size").show();
                                                }
                                                if (fabric != 50) {
                                                    $("#fabric_50_size").hide();
                                                } else {
                                                    $("#fabric_50_size").show();
                                                }
                                                if (fabric != 51) {
                                                    $("#fabric_51_size").hide();
                                                } else {
                                                    $("#fabric_51_size").show();
                                                }
                                                if (fabric != 52) {
                                                    $("#fabric_52_size").hide();
                                                } else {
                                                    $("#fabric_52_size").show();
                                                }
                                                if (fabric != 53) {
                                                    $("#fabric_53_size").hide();
                                                } else {
                                                    $("#fabric_53_size").show();
                                                }
                                                if (fabric != 54) {
                                                    $("#fabric_54_size").hide();
                                                } else {
                                                    $("#fabric_54_size").show();
                                                }
                                                if (fabric != 55) {
                                                    $("#fabric_55_size").hide();
                                                } else {
                                                    $("#fabric_55_size").show();
                                                }
                                                if (fabric != 56) {
                                                    $("#fabric_56_size").hide();
                                                } else {
                                                    $("#fabric_56_size").show();
                                                }
                                                if (fabric != 59) {
                                                    $("#fabric_59_size").hide();
                                                } else {
                                                    $("#fabric_59_size").show();
                                                }
                                                if (fabric != 60) {
                                                    $("#fabric_60_size").hide();
                                                } else {
                                                    $("#fabric_60_size").show();
                                                }
                                                if (fabric != 61) {
                                                    $("#fabric_61_size").hide();
                                                } else {
                                                    $("#fabric_61_size").show();
                                                }
                                                if (fabric != 62) {
                                                    $("#fabric_62_size").hide();
                                                } else {
                                                    $("#fabric_62_size").show();
                                                }
                                                if (fabric != 63) {
                                                    $("#fabric_63_size").hide();
                                                } else {
                                                    $("#fabric_63_size").show();
                                                }
                                                if (fabric != 65) {
                                                    $("#fabric_65_size").hide();
                                                } else {
                                                    $("#fabric_65_size").show();
                                                }
                                                if (fabric != 66) {
                                                    $("#fabric_66_size").hide();
                                                } else {
                                                    $("#fabric_66_size").show();
                                                }
                                                if (fabric != 67) {
                                                    $("#fabric_67_size").hide();
                                                } else {
                                                    $("#fabric_67_size").show();
                                                }
                                            };
                                            var onYardChange = function () {
                                                $("input[name*=fabric_size_id]").each(function (index,
                                                    element) {
                                                    if (element.checked) {
                                                        if (element.value == '0') {
                                                            makePreview();
                                                        }
                                                    }
                                                });
                                            };

                                            var makeFabricSizes = function () {
                                                var fabric;
                                                console.log("Dentro de makeFabricSizes");
                                                $("input[name*=fabric_id]").each(function (index, element) {
                                                    if (element.checked) {
                                                        fabric = element.value;
                                                    }
                                                });
                                                if (fabric != 66) {
                                                    console.log("escondido_" + "ac");
                                                    $("#fabric_66_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "ac");
                                                    console.log("#fabric_66_size");
                                                    $("#fabric_66_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_66_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("6458 = " + element.value);
                                                        if (6458 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 65) {
                                                    console.log("escondido_" + "aw");
                                                    $("#fabric_65_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "aw");
                                                    console.log("#fabric_65_size");
                                                    $("#fabric_65_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_65_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("5759 = " + element.value);
                                                        if (5759 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 63) {
                                                    console.log("escondido_" + "aj");
                                                    $("#fabric_63_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "aj");
                                                    console.log("#fabric_63_size");
                                                    $("#fabric_63_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_63_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("5388 = " + element.value);
                                                        if (5388 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 30) {
                                                    console.log("escondido_" + "bu");
                                                    $("#fabric_30_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "bu");
                                                    console.log("#fabric_30_size");
                                                    $("#fabric_30_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_30_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2100 = " + element.value);
                                                        if (2100 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 17) {
                                                    console.log("escondido_" + "cc");
                                                    $("#fabric_17_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "cc");
                                                    console.log("#fabric_17_size");
                                                    $("#fabric_17_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_17_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("1282 = " + element.value);
                                                        if (1282 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 43) {
                                                    console.log("escondido_" + "st");
                                                    $("#fabric_43_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "st");
                                                    console.log("#fabric_43_size");
                                                    $("#fabric_43_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_43_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2997 = " + element.value);
                                                        if (2997 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 51) {
                                                    console.log("escondido_" + "cu");
                                                    $("#fabric_51_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "cu");
                                                    console.log("#fabric_51_size");
                                                    $("#fabric_51_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_51_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("4032 = " + element.value);
                                                        if (4032 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 44) {
                                                    console.log("escondido_" + "kc");
                                                    $("#fabric_44_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "kc");
                                                    console.log("#fabric_44_size");
                                                    $("#fabric_44_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_44_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("3025 = " + element.value);
                                                        if (3025 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 59) {
                                                    console.log("escondido_" + "pu");
                                                    $("#fabric_59_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "pu");
                                                    console.log("#fabric_59_size");
                                                    $("#fabric_59_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_59_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("4900 = " + element.value);
                                                        if (4900 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 33) {
                                                    console.log("escondido_" + "pp");
                                                    $("#fabric_33_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "pp");
                                                    console.log("#fabric_33_size");
                                                    $("#fabric_33_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_33_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2407 = " + element.value);
                                                        if (2407 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 39) {
                                                    console.log("escondido_" + "pc");
                                                    $("#fabric_39_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "pc");
                                                    console.log("#fabric_39_size");
                                                    $("#fabric_39_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_39_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2834 = " + element.value);
                                                        if (2834 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 47) {
                                                    console.log("escondido_" + "cl");
                                                    $("#fabric_47_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "cl");
                                                    console.log("#fabric_47_size");
                                                    $("#fabric_47_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_47_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("3527 = " + element.value);
                                                        if (3527 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 23) {
                                                    console.log("escondido_" + "df");
                                                    $("#fabric_23_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "df");
                                                    console.log("#fabric_23_size");
                                                    $("#fabric_23_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_23_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("1857 = " + element.value);
                                                        if (1857 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 21) {
                                                    console.log("escondido_" + "pk");
                                                    $("#fabric_21_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "pk");
                                                    console.log("#fabric_21_size");
                                                    $("#fabric_21_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_21_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("1841 = " + element.value);
                                                        if (1841 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 67) {
                                                    console.log("escondido_" + "lt");
                                                    $("#fabric_67_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "lt");
                                                    console.log("#fabric_67_size");
                                                    $("#fabric_67_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_67_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("6465 = " + element.value);
                                                        if (6465 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 31) {
                                                    console.log("escondido_" + "mj");
                                                    $("#fabric_31_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "mj");
                                                    console.log("#fabric_31_size");
                                                    $("#fabric_31_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_31_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2189 = " + element.value);
                                                        if (2189 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 55) {
                                                    console.log("escondido_" + "cj");
                                                    $("#fabric_55_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "cj");
                                                    console.log("#fabric_55_size");
                                                    $("#fabric_55_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_55_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("4352 = " + element.value);
                                                        if (4352 == element.value) {
                                                            console.log("o elemeto é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 56) {
                                                    console.log("escondido_" + "fl");
                                                    $("#fabric_56_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "fl");
                                                    console.log("#fabric_56_size");
                                                    $("#fabric_56_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_56_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("4461 = " + element.value);
                                                        if (4461 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 52) {
                                                    console.log("escondido_" + "lp");
                                                    $("#fabric_52_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "lp");
                                                    console.log("#fabric_52_size");
                                                    $("#fabric_52_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_52_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("4101 = " + element.value);
                                                        if (4101 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 49) {
                                                    console.log("escondido_" + "ku");
                                                    $("#fabric_49_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "ku");
                                                    console.log("#fabric_49_size");
                                                    $("#fabric_49_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_49_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("3566 = " + element.value);
                                                        if (3566 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 48) {
                                                    console.log("escondido_" + "su");
                                                    $("#fabric_48_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "su");
                                                    console.log("#fabric_48_size");
                                                    $("#fabric_48_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_48_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("3437 = " + element.value);
                                                        if (3437 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 46) {
                                                    console.log("escondido_" + "mk");
                                                    $("#fabric_46_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "mk");
                                                    console.log("#fabric_46_size");
                                                    $("#fabric_46_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_46_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("3355 = " + element.value);
                                                        if (3355 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 37) {
                                                    console.log("escondido_" + "kp");
                                                    $("#fabric_37_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "kp");
                                                    console.log("#fabric_37_size");
                                                    $("#fabric_37_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_37_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2582 = " + element.value);
                                                        if (2582 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 5) {
                                                    console.log("escondido_" + "ok");
                                                    $("#fabric_5_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "ok");
                                                    console.log("#fabric_5_size");
                                                    $("#fabric_5_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_5_size input").each(function (index, element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("32 = " + element.value);
                                                        if (32 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 60) {
                                                    console.log("escondido_" + "tu");
                                                    $("#fabric_60_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "tu");
                                                    console.log("#fabric_60_size");
                                                    $("#fabric_60_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_60_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("5263 = " + element.value);
                                                        if (5263 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 53) {
                                                    console.log("escondido_" + "tz");
                                                    $("#fabric_53_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "tz");
                                                    console.log("#fabric_53_size");
                                                    $("#fabric_53_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_53_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("4209 = " + element.value);
                                                        if (4209 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 50) {
                                                    console.log("escondido_" + "sl");
                                                    $("#fabric_50_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "sl");
                                                    console.log("#fabric_50_size");
                                                    $("#fabric_50_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_50_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("3901 = " + element.value);
                                                        if (3901 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 45) {
                                                    console.log("escondido_" + "tp");
                                                    $("#fabric_45_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "tp");
                                                    console.log("#fabric_45_size");
                                                    $("#fabric_45_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_45_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("5266 = " + element.value);
                                                        if (5266 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 34) {
                                                    console.log("escondido_" + "ec");
                                                    $("#fabric_34_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "ec");
                                                    console.log("#fabric_34_size");
                                                    $("#fabric_34_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_34_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2538 = " + element.value);
                                                        if (2538 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 32) {
                                                    console.log("escondido_" + "fs");
                                                    $("#fabric_32_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "fs");
                                                    console.log("#fabric_32_size");
                                                    $("#fabric_32_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_32_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("2358 = " + element.value);
                                                        if (2358 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                if (fabric != 10) {
                                                    console.log("escondido_" + "sk");
                                                    $("#fabric_10_size").hide();
                                                } else {
                                                    console.log("mostrando_" + "sk");
                                                    console.log("#fabric_10_size");
                                                    $("#fabric_10_size").show();
                                                    var element_clicked = false;
                                                    $("#fabric_10_size input").each(function (index,
                                                        element) {
                                                        console.log("loop de tamanho interno");
                                                        console.log("dentro da declaração a não ser");
                                                        console.log("400 = " + element.value);
                                                        if (400 == element.value) {
                                                            console.log("o elemento é " + element);
                                                            element_clicked = true;
                                                            element.click();
                                                        }
                                                        if (!element_clicked && element.value == 0) {
                                                            element.click();
                                                        }
                                                    });
                                                }
                                                makePreview();
                                            };
                                            var makePreview = function () {
                                                var fabricSizeId;
                                                var fabricSizeIndex;
                                                var fabricId;
                                                var fabricIndex;
                                                var repeat;
                                                var user_dpi;
                                                $("input[name*=fabric_id]").each(function (index, element) {
                                                    if (element.checked) {
                                                        fabricId = element.value;
                                                        console.log("Fabric_id: " + fabricId);
                                                        fabric_info = "fabric_name_" + fabricId;
                                                        document.getElementById('fabric_selected').innerHTML =
                                                            document.getElementById(fabric_info).childNodes[
                                                                0].data
                                                    }
                                                });
                                                $("input[name*=fabric_size_id]").each(function (index,
                                                    element) {
                                                    if (element.checked) {
                                                        fabricSizeId = element.value;
                                                        console.log("fabric_size_" + fabricSizeId + "_" + fabricId);
                                                        size_info = "fabric_size_" + fabricSizeId + "_" + fabricId;
                                                        size_select = 'size_selected_' + fabricId;
                                                        document.getElementById(size_select).innerHTML =
                                                            document.getElementById(size_info).childNodes[
                                                                0].data
                                                    }
                                                });
                                                $("#fabric_item_repeat_type > option").each(function (index,
                                                    element) {
                                                    if (element.selected) {
                                                        repeat = element.value;
                                                        repeat_element_HTML = element.innerHTML;
                                                        $(".repeat_select").each(function (index,
                                                            element) {
                                                            type = element.name;
                                                            if (type == repeat_element_HTML) {
                                                                element.firstChild.src =
                                                                    type + '_HOVER.png';
                                                                document.getElementById(
                                                                        'des_rep').innerHTML =
                                                                    type;
                                                            }
                                                        });
                                                        console.log("repetir: " + repeat)
                                                    }
                                                });
                                                $("input[name*=dpi]").each(function (index, element) {
                                                    if (element.checked) {
                                                        user_dpi = element.value;
                                                    }
                                                });
                                                console.log("FABRICA: " + fabricId + " FABRICA_TAMANHO: " +
                                                    fabricSizeId + " REPETIR: " + repeat + " DPI: " +
                                                    user_dpi);

                                                // document.getElementById('boldStuff').innerHTML = 'Fred Flinstone';
                                                // The arguments to drawPreview:
                                                // previewImage is a file (currently created by imagescience, 400px on the long dimension
                                                // and ? whatever preserves the aspect ratio on the other dimension)
                                                // the next 4 arguments are the width and height of the fabric in inches,
                                                // and the width and height of the provided design image in inches.
                                                // The final argument is an integer (0-4) indicating which repeat option was chosen.

                                                // Os argumentos para drawPreview:
                                                // previewImage é um arquivo (atualmente criado por imagescience, 400px na dimensão longa
                                                // e? Tudo o que preserva a relação de aspecto na outra dimensão)
                                                // os próximos 4 argumentos são a largura e a altura do tecido em polegadas,
                                                // e a largura e altura da imagem de design fornecida em polegadas.
                                                // O argumento final é um inteiro (0-4) indicando qual opção de repetição foi escolhida.

                                                // The user has the option of setting a dpi other than 150.  Our image width and height are set in inches
                                                // assuming 150 dpi.  If the user chooses something different, we need to create a conversion factor
                                                // to create a new width and height for the rendered image in fabric inches.

                                                // O usuário tem a opção de definir um dpi diferente de 150. Nossa largura e altura da imagem são definidas em polegadas
                                                // assumindo 150 dpi. Se o usuário escolhe algo diferente, precisamos criar um fator de conversão
                                                // para criar uma nova largura e altura para a imagem renderizada em polegadas de tecido.
                                                var h_conversion = (150 / user_dpi);
                                                var w_conversion = (150 / user_dpi);

                                                // To see the values of these arguments, uncomment one of the following lines:

                                                // var alertmessage = "fabric width " + fabricSizes[fabricSizeId].width + " inches, fabric height " +
                                                //             fabricSizes[fabricSizeId].height + " inches, image width " +
                                                //             w_conversion * image.width + " inches, image height " +
                                                //             h_conversion * image.height + " inches, repeat is " + repeat +
                                                //             " and user_dpi is " + user_dpi

                                                // var alertmessage = "image width " +
                                                //             image.width + " inches, image height " +
                                                //             image.height + " inches"
                                                //        alert(alertmessage);


                                                // fabricSizeId is set to 0 when the user has chosen a flex fabric size
                                                // When this is true, we must set flexFabSize as the size.  This is the 5 yard
                                                // size for whichever fabric the user has chosen.  flexFabSize is set by
                                                // an onclick event handler which calls onClickSet5yards, a function at the
                                                // top of this file.  We must also display the user message at the bottom of
                                                // the canvas element that explains 5 yards is displayed for all flex sizes
                                                // fabricSizeId é definido como 0 quando o usuário escolheu um tamanho de tecido flexível
                                                // Quando isso é verdade, devemos definir flexFabSize como o tamanho. Este é o quintal
                                                // tamanho para qualquer tecido que o usuário tenha escolhido. FlexFabSize é definido por
                                                // um manipulador de eventos onclick que chama onClickSet5yards, uma função no
                                                // parte superior desse arquivo. Também precisamos exibir a mensagem do usuário na parte
                                                // o elemento de tela que explica 5 jardas é exibido para todos os tamanhos de flex
                                                fabricHeight = 0;
                                                if (typeof (fabricSizeId) == "undefined") {
                                                    console.log("Tamanho da tela não definido, configuração para o primeiro item");
                                                    fabricSizeId = 0;
                                                }

                                                if (fabricSizeId == 0) {
                                                    var yards = document.getElementById(
                                                        'dynamic_fabric_count').value;
                                                    // checks to see if a flexfabsize is set, if not sets to 1YD, if yards is blank sets to 1YD without click, else sets
                                                    // to what the flexsize is
                                                    // verifica se um flexfabsize está definido, se não for definido como 1YD, se yards estiver em branco define para 1YD sem clicar, else sets
                                                    // para o que o flexsize é
                                                    dynamic_fabric_yards_element = document.getElementById(
                                                        "dynamic_fabric_yards_" + fabricId);
                                                    if (dynamic_fabric_yards_element != null) {
                                                        if (flexFabSize == 0) {

                                                            dynamic_fabric_yards_element.click();
                                                            fabricSizeId = document.getElementById(
                                                                "size_dynamic_fabric_yards_" + fabricId
                                                            ).childNodes[0].data;
                                                        } else if (yards == "") {

                                                            fabricSizeId = document.getElementById(
                                                                "size_dynamic_fabric_yards_" + fabricId
                                                            ).childNodes[0].data
                                                            fabricHeight = fabricSizes[fabricSizeId][1]
                                                        } else {
                                                            console.log(
                                                                "O tamanho da tela é definido como tamanho flexível"
                                                            );
                                                            fabricSizeId = flexFabSize;
                                                        }

                                                    }
                                                    // checks the height of the length, if no yards is blank sets to 1YD, if yards less than 6 varies, and greater is set to 5
                                                    // verifica a altura do comprimento, se nenhuma jarda estiver em branco define para 1YD, se jardas menores que 6 varia, e maior é ajustado para 5
                                                    if (yards == "") {
                                                        fabricHeight = fabricSizes[fabricSizeId][1]
                                                    } else if (yards < 6) {
                                                        fabricHeight = fabricSizes[fabricSizeId][1] * yards
                                                    } else {
                                                        fabricHeight = fabricSizes[fabricSizeId][1] * 5
                                                    }
                                                } else {
                                                    fabricHeight = fabricSizes[fabricSizeId][1]
                                                }
                                                makeRepeatCounts(fabricSizes[fabricSizeId][0], fabricHeight,
                                                    w_conversion * image.width, h_conversion * image.height
                                                );

                                                // COMPOSITE IMAGES ARE CREATED SERVER SIDE IN DESIGN.RB: MAKE_THUMBNAILS
                                                // IMAGENS COMPOSTAS SÃO CREADOS LADO DE SERVIDOR EM DESIGN.RB: MAKE_THUMBNAILS
                                                // COMPOSITE IMAGES ARE CREATED SERVER SIDE IN DESIGN.RB: MAKE_THUMBNAILS
                                                // IMAGENS COMPOSTAS SÃO CREADOS LADO DE SERVIDOR EM DESIGN.RB: MAKE_THUMBNAILS

                                                if (image.width < 4 || image.height < 4) {
                                                    if (repeat == 4) {
                                                        compositeImage = compositeMirrorImage;
                                                    }
                                                    if (repeat == 3) {
                                                        compositeImage = compositeBrickImage;
                                                    }
                                                    if (repeat == 2) {
                                                        compositeImage = compositeDropImage;
                                                    }
                                                    if (repeat == 1) {
                                                        compositeImage = previewImage;
                                                    }
                                                    if (repeat == 0) {
                                                        compositeImage = compositeCenterImage;
                                                    }

                                                } else {
                                                    compositeImage = previewImage;
                                                    composite_repeats = 0;
                                                }
                                                WaterMark = 0;
                                                drawPreview(previewImage, highresImage, compositeImage,
                                                    fabricSizes[fabricSizeId][0],
                                                    fabricHeight,
                                                    w_conversion * image.width,
                                                    h_conversion * image.height,
                                                    repeat, composite_repeats, user_dpi, WaterMark);
                                                fixH('one', 'two', 'three');
                                            };
                                            // this onload function is what triggers the display to the user
                                            // we need to trigger it off the design image that has been loaded
                                            // or the user will get a blank design page
                                            // esta função onload é o que aciona o display para o usuário
                                            // precisamos de acionar a imagem de design que foi carregada
                                            // ou o usuário receberá uma página de design em branco
                                            previewImage.onload = function () {
                                                $("input[name*=repeat]").bind('click', makePreview);
                                                $("input[name*=dpi]").bind('click', makePreview);
                                                $("input[name*=fabric_size_id]").bind('click', makePreview);
                                                $("input[name*=fabric_id]").bind('click', makeFabricSizes);
                                                $("#fabric_item_repeat_type").change(makePreview);
                                                $(".repeat_select").click(makePreview);

                                                $("#dynamic_fabric_count").bind('keyup', onYardChange);

                                                document.getElementById('fabric_options').style.display =
                                                    "inline";
                                                if ((image.width > 10) || (image.height > 10)) {
                                                    highresImage.src =
                                                        'images/flamingo/flamingo-mirror-4.jpg';
                                                } else {
                                                    highresImage = previewImage;
                                                }
                                                $("#fabric_item_repeat_type > option").each(function (index,
                                                    element) {
                                                    if (1 == element.value) {
                                                        element.selected = true;
                                                    }
                                                });
                                                $("input[name*=fabric_size_id]").each(function (index,
                                                    element) {
                                                    if (2101 == element.value) {
                                                        element.click();
                                                        $("input[name*=fabric_id]").each(function (
                                                            index, element) {

                                                            if (30 == element.value) {
                                                                element.checked = true;
                                                            }
                                                        });
                                                    } else {
                                                        $("input[name*=fabric_id]").each(function (
                                                            index, element) {

                                                            if (30 == element.value) {
                                                                element.checked = true;
                                                            }
                                                        });
                                                    }
                                                });
                                                try {
                                                    showFabricSizes();
                                                    makePreview();
                                                    fixH('one', 'two', 'three');
                                                } catch (e) {
                                                    console.log("Exceção: " + e.name);
                                                    console.log("Mensagem: " + e.message);
                                                }
                                                if ((image.width < 4) || (image.height < 4)) {
                                                    compositeMirrorImage.src =
                                                        'images/flamingo/flamingo-mirror-4.jpg';
                                                    compositeBrickImage.src =
                                                        'images/flamingo/flamingo-mirror-4.jpg';
                                                    compositeDropImage.src =
                                                        'images/flamingo/flamingo-mirror-4.jpg';
                                                    compositeCenterImage.src =
                                                        'images/flamingo/flamingo-mirror-4.jpg';
                                                }
                                                document.getElementById('loading').style.display = "none";
                                                document.getElementById('design_preview').style.display =
                                                    "inline";
                                            }

                                            $("input[name*=dpi]").each(function (index, element) {
                                                if (index == 0) {
                                                    element.value = 150;
                                                    element.click();
                                                }
                                            });

                                            highresImage.onload = function () {
                                                makePreview();
                                                document.getElementById('loading').style.display = "none";
                                                document.getElementById('design_preview').style.display =
                                                    "inline";
                                            }

                                            if ((image.width < 4) || (image.height < 4)) {
                                                console.log("Visualização A imagem é inferior a 4");
                                                previewImage.src =
                                                    '/uploadcamisa/{{ Session::get('imageName') }}';
                                            } else if ((image.width > 72) || (image.height > 72)) {
                                                console.log("Visualizar imagem > de 72");
                                                highresImage.src =
                                                    '/uploadcamisa/{{ Session::get('imageName') }}';
                                                previewImage.src =
                                                    '/uploadcamisa/{{ Session::get('imageName') }}';
                                            } else {
                                                console.log("4 < vizualização imagem < 72");
                                                previewImage.src =
                                                    '/uploadcamisa/{{ Session::get('imageName') }}';
                                            }
                                        });
                                    </script>
                                    <!-- CAIXA DO TOPO DOS CONTROLOS -->
                                    {{--<form accept-charset="UTF-8" action="http://www.spoonflower.com/designs/6087566-papu-2-150?contest_id=" class="edit_fabric_item" id="ajax_cart" method="post">--}}
                                        <div style="margin:0;padding:0;display:inline">
                                            <input name="utf8" type="hidden" value="&#x2713;" />
                                            <input name="_method" type="hidden" value="put" />
                                        </div>
                                        <meta charset="utf-8">
                                        <div>
                                            <!-- OPÇÕES DE CONFORTO PARA TAMANHO -->
                                            <div style='display: none'>
                                                Opções de Escala de Design: <br/>
                                                <span id='scale_66'></span>
                                                <span id='scale_65'></span>
                                                <span id='scale_63'></span>
                                                <span id='scale_30'></span>
                                                <span id='scale_17'></span>
                                                <span id='scale_43'></span>
                                                <span id='scale_51'></span>
                                                <span id='scale_44'></span>
                                                <span id='scale_59'></span>
                                                <span id='scale_33'></span>
                                                <span id='scale_39'></span>
                                                <span id='scale_47'></span>
                                                <span id='scale_23'></span>
                                                <span id='scale_21'></span>
                                                <span id='scale_67'></span>
                                                <span id='scale_31'></span>
                                                <span id='scale_55'></span>
                                                <span id='scale_56'></span>
                                                <span id='scale_52'></span>
                                                <span id='scale_49'></span>
                                                <span id='scale_48'></span>
                                                <span id='scale_46'></span>
                                                <span id='scale_37'></span>
                                                <span id='scale_5'></span>
                                                <span id='scale_60'></span>
                                                <span id='scale_53'></span>
                                                <span id='scale_50'></span>
                                                <span id='scale_45'></span>
                                                <span id='scale_34'></span>
                                                <span id='scale_32'></span>
                                                <span id='scale_10'></span>
                                                <input checked="checked" id="fabric_item_dpi_150" name="fabric_item[dpi]" type="radio" value="150" />
                                                <label for="fabric_item_fabric_dpi_150">Tamanho Base (150 DPI)</label>
                                                <br/>
                                            </div>
                                            <div class="designer_controls">
                                                {!! Form::open(array(
                                                    'route' => 'resizeImagePost',
                                                    'enctype' => 'multipart/form-data',
                                                    'id' => 'form-import-file',
                                                    'files' => true)) !!}
                                                    <strong style="margin-top:5px;">1. Carregar desenho</strong>
                                                {!! Form::file('image', array('class' => 'image', 'id' => 'form-field-filename')) !!}
                                                    <button type="submit" class="btn btn-primary" style="margin-top:5px;">Enviar Imagem</button>
                                                {!! Form::close() !!}
                                                <script type="text/javascript">
                                                  $("#form-import-file").submit(function() {
                                                    if($('#form-field-filename').val() !="") {
                                                      return true;
//                                                      window.location.replace("https://textil.dev/crie");
                                                    }
                                                    return false;
                                                  });
                                                </script>
                                                <div style="margin-top: 10px;">
                                                <h4><strong>Banco de imagens</strong></h4>
                                                    <img src="{{ asset('images/novas/animais.png') }}" width="55">
                                                    <img src="{{ asset('images/novas/papu.png') }}" width="55">
                                                    <img src="{{ asset('images/novas/geometrico.png') }}" width="55">
                                                    <img src="{{ asset('images/novas/kornit.png') }}" width="55">
                                                    <img src="{{ asset('images/novas/listras_camufladas.png') }}" width="55">
                                                    <img src="{{ asset('images/novas/listras_pb.png') }}" width="55">
                                                </div>
                                                <div id='fabric_options'>
                                                    <!-- <strong>Mudar posição do módulo.</strong> -->
                                                    <div style="margin-top:10px; float:left; font-size: 7px; text-align:center" id="myForm">
                                                        <div style="width:46px; float:left; margin-right: 6px;">
                                                            <a href="#" class="repeat_select" id="repeat_select_basic" name="BASICO">
                                                                <img alt="Basic_off" src="{{ asset('images/outros/Basic_OFF.png') }}" id="imagem"/>
                                                            </a>
                                                            BASICO
                                                        </div>
                                                        <div style="width:46px; float:left; margin-right: 6px">
                                                            <a href="#" class="repeat_select" id="repeat_select_half" name="VERTICAL">
                                                                <img alt="Half_off" src="{{ asset('images/outros/Half_OFF.png') }}" id="imagem"/>
                                                            </a>
                                                            VERTICAL
                                                        </div>
                                                        <div style="width:46px; float:left; margin-right: 6px">
                                                            <a href="#" class="repeat_select" id="repeat_select_brick" name="HORIZONTAL">
                                                                <img alt="Brick_off" src="{{ asset('images/outros/Brick_OFF.png') }}" id="imagem"/>
                                                            </a>
                                                            HORIZONTAL
                                                        </div>
                                                        <div style="width:46px; float:left; margin-right: 6px">
                                                            <a href="#" class="repeat_select" id="repeat_select_center" name="CENTRO">
                                                                <img alt="Center_off" src="{{ asset('images/outros/Center_OFF.png') }}" id="imagem"/>
                                                            </a>
                                                            CENTRO
                                                        </div>
                                                        <div style="width:46px; float:left;">
                                                            <a href="#" class="repeat_select" id="repeat_select_mirror" name="ESPELHADO">
                                                                <img alt="Mirror_off" src="{{ asset('images/outros/Mirror_OFF.png') }}" id="imagem"/>
                                                            </a>
                                                            ESPELHADO
                                                        </div>
                                                    </div>
                                                    <div style="float:left; width: 360px; margin-left: 4px; margin-top: 5px">
                                                        <div style='margin-top:5px; display:none'>
                                                            <!-- PROBLEMA NESTA DIV -->
                                                            <select id="fabric_item_repeat_type" name="fabric_item[repeat_type]">
                                                                <option value="0">CENTRO</option>
                                                                <option value="1">BASICO</option>
                                                                <option value="2">VERTICAL</option>
                                                                <option value="3">HORIZONTAL</option>
                                                                <option value="4">ESPELHADO</option>
                                                            </select>
                                                        </div>
                                                        <!-- MUDANÇA TAMANHO DO DESIGN VIA MAIS GRANDE / MENOR OU DPI -->
                                                        <span id='edit_res_link' style="margin-bottom:5px; float:left; width: 250px;">
                                                            <a onclick="document.getElementById(&#x27;edit_res_link&#x27;).style.display = &#x27;inline&#x27;;
                                                                        document.getElementById(&#x27;res_hr&#x27;).style.display = &#x27;inline&#x27;;
                                                                        document.getElementById(&#x27;edit_res&#x27;).style.display = &#x27;inline&#x27;;">
                                                                <span style="font-size: 12px; margin-top: 10px;" class="brown_button small_button">MUDAR PROPORÇÃO-DPI DO MÓDULO</span>
                                                            </a>
                                                       <!-- <hr style="line-height:3em;"/> -->
                                                        </span>

                                                        <span id='res_hr' style='display:none;'></span>
                                                        <div style="float:left; width:250px; margin-top:5px;">
                                                            <a class="brown_button small_button"
                                                                id="rep_smaller" onclick="smaller()"
                                                                style="float:left; margin-right: 5px; font-size:11px ">
                                                                REDUZIR MÓDULO
                                                            </a>
                                                            <a class="brown_button small_button float_left" id="rep_bigger" onclick="bigger()" style="float:left;display:none; font-size:11px ">
                                                                AMPLIAR MÓDULO
                                                            </a><br>
                                                            <span id='x150_warning' style='padding: 3px 0 0 5px;display:block; font-weight: 900;'></span>
                                                        </div>
                                                        <div id='edit_res' style='display:none;'>
                                                            <div style='float:right;line-height:2em;font-size:14px; text-decoration: underline;'>
                                                                <a onclick="document.getElementById(&#x27;edit_res_link&#x27;).style.display = &#x27;block&#x27;;
                                                                            document.getElementById(&#x27;res_hr&#x27;).style.display = &#x27;none&#x27;;
                                                                            document.getElementById(&#x27;edit_res&#x27;).style.display = &#x27;none&#x27;;" style="color:red;">
                                                                    x-fechar
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <br>
                                                                <strong style="font-weight: normal; font-size: 12px;">MUDAR PROPORÇÃO-DPI</strong><br>
                                                                <label for="fabric_item_fabric_dpi_150" style="font-size:13px">
                                                                    Mínimo de 150 DPI
                                                                </label><br>
                                                                <input id="change_dpi" name="change[dpi]" size="10" style="float:left; background: lightgreen;" type="text" />
                                                                <input id="rep_new_dpi" onclick="new_dpi();"
                                                                        style="float:left; width: 80px; height: 24px; margin-left:5px; font-size:16px;margin-bottom: 10px;"
                                                                        type="button"
                                                                        value="Mudar" class="btn btn-info"/>
                                                            </div>
                                                            <!-- <br style="line-height:2em;" /> -->
                                                        </div>
                                                        <div class="small_text" style="clear: both; font-size:13px;">
                                                            <strong style="font-weight: 400;">Tamanho do Módulo </strong><br>
                                                            <span id='sum_rep_size'>7.87pol x 7.94pol</span>,
                                                            <span id='rep_dpi'>150</span> pixels/pol,
                                                            <span id='des_rep' style="color: darkred;"></span>
                                                            <br style="line-height:2em;" />
                                                        </div><br>
                                                        <hr style="margin: 5px 0; width:250px; float:left" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fabric_select">
                                                <div style="margin-bottom:5px">
                                                    <strong>2. Escolha um tecido</strong>
                                                    <div id="fancybox_link" class="mobile_hide" style="display:inline-block; margin-left:8px">
                                                        <a href="#" class="btn-info btn-xs" id="help_me_choose_fabric" onclick="$(&#x27;#product_information_link&#x27;).click();">
                                                            Ajuda
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Novos controles de console -->
                                                <div id="fabric_selector" class="add_to_cart_select">
                                                    <div id="fabric_header" class="header"
                                                         onclick="var fabDrop = document.getElementById('fabric_drop_down');
                                                         if (fabDrop.style.display != 'block'){fabDrop.style.display = 'block';}
                                                         else{fabDrop.style.display = 'none';}">
                                                        <div id="fabric_selected" class="drop_item_selected" style="float:left;">
                                                            <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                        </div>
                                                        <div class="drop_arrow">
                                                            <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                        </div>
                                                    </div>
                                                    <div id="fabric_drop_down" class="drop_list">
                                                        <input checked="checked" id="fabric_button_30" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0"
                                                            type="radio" value="30" />
                                                        <div id="fabric_name_30" style="display:none">
                                                            Algodão Básico Ultra (R$17.50/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_30').click()">
                                                            Algodão Básico Ultra (R$17.50/mt)
                                                        </div>
                                                        <input id="fabric_button_43" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="43" />
                                                        <div id="fabric_name_43" style="display:none">
                                                            Cetim (R$18.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_43').click()">
                                                            Cetim (R$18.00/mt)
                                                        </div>
                                                        <input id="fabric_button_51" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="51" />
                                                        <div id="fabric_name_51" style="display:none">
                                                            Kona® Algodão Ultra (R$19.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_51').click()">
                                                            Kona® Algodão Ultra (R$19.00/mt)
                                                        </div>
                                                        <input id="fabric_button_59" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="59" />
                                                        <div id="fabric_name_59" style="display:none">
                                                            Algodão Poplin Ultra (R$20.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_59').click()">
                                                            Algodão Poplin Ultra (R$20.00/mt)
                                                        </div>
                                                        <input id="fabric_button_33" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="33" />
                                                        <div id="fabric_name_33" style="display:none">
                                                            Performance Piqué (R$20.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_33').click()">
                                                            Performance Piqué (R$20.00/mt)
                                                        </div>
                                                        <input id="fabric_button_39" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="39" />
                                                        <div id="fabric_name_39" style="display:none">
                                                            Poly Crepe de Chine (R$23.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_39').click()">
                                                            Poly Crepe de Chine (R$23.00/mt)
                                                        </div>
                                                        <input id="fabric_button_23" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="23" />
                                                        <div id="fabric_name_23" style="display:none">
                                                            Silky Faille (R$24.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_23').click()">
                                                            Silky Faille (R$24.00/mt)
                                                        </div>
                                                        <input id="fabric_button_21" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="21" />
                                                        <div id="fabric_name_21" style="display:none">
                                                            Performance Knit (R$24.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_21').click()">
                                                            Performance Knit (R$24.00/mt)
                                                        </div>
                                                        <input id="fabric_button_67" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="67" />
                                                        <div id="fabric_name_67" style="display:none">
                                                            Lightweight Cotton Twill (R$26.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_67').click()">
                                                            Lightweight Cotton Twill (R$26.00/mt)
                                                        </div>
                                                        <input id="fabric_button_31" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="31" />
                                                        <div id="fabric_name_31" style="display:none">Modern Jersey (R$26.50/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_31').click()">
                                                            Modern Jersey (R$26.50/mt)
                                                        </div>
                                                        <input id="fabric_button_55" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="55" />
                                                        <div id="fabric_name_55" style="display:none">Cotton Spandex Jersey (R$26.75/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_55').click()">
                                                            Cotton Spandex Jersey (R$26.75/mt)
                                                        </div>
                                                        <input id="fabric_button_56" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="56" />
                                                        <div id="fabric_name_56" style="display:none">
                                                            Fleece (R$27.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_56').click()">
                                                            Fleece (R$27.00/mt)
                                                        </div>
                                                        <input id="fabric_button_52" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="52" />
                                                        <div id="fabric_name_52" style="display:none">
                                                            Linen Cotton Canvas Ultra (R$27.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_52').click()">
                                                            Linen Cotton Canvas Ultra (R$27.00/mt)
                                                        </div>
                                                        <input id="fabric_button_49" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="49" />
                                                        <div id="fabric_name_49" style="display:none">
                                                            Organic Cotton Knit Ultra (R$27.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_49').click()">
                                                            Organic Cotton Knit Ultra (R$27.00/mt)
                                                        </div>
                                                        <input id="fabric_button_48" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="48" />
                                                        <div id="fabric_name_48" style="display:none">
                                                            Organic Cotton Sateen Ultra (R$27.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_48').click()">
                                                            Organic Cotton Sateen Ultra (R$27.00/mt)
                                                        </div>
                                                        <input id="fabric_button_46" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="46" />
                                                        <div id="fabric_name_46" style="display:none">
                                                            Minky (R$27.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_46').click()">
                                                            Minky (R$27.00/mt)
                                                        </div>
                                                        <input id="fabric_button_50" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="50" />
                                                        <div id="fabric_name_50" style="display:none">
                                                            Sport Lycra (R$32.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_50').click()">
                                                            Sport Lycra (R$32.00/mt)
                                                        </div>
                                                        <input id="fabric_button_45" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="45" />
                                                        <div id="fabric_name_45" style="display:none">
                                                            Heavy Cotton Twill (R$32.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_45').click()">
                                                            Heavy Cotton Twill (R$32.00/mt)
                                                        </div>
                                                        <input id="fabric_button_34" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="34" />
                                                        <div id="fabric_name_34" style="display:none">
                                                            Eco Canvas (R$32.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_34').click()">
                                                            Eco Canvas (R$32.00/mt)
                                                        </div>
                                                        <input id="fabric_button_32" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="32" />
                                                        <div id="fabric_name_32" style="display:none">
                                                            Faux Suede (R$34.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_32').click()">
                                                            Faux Suede (R$34.00/mt)
                                                        </div>
                                                        <input id="fabric_button_10" name="fabric_item[fabric_id]" style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                            value="10" />
                                                        <div id="fabric_name_10" style="display:none">
                                                            Silk Crepe de Chine (R$38.00/mt)
                                                        </div>
                                                        <div class="drop_item" onclick="document.getElementById('fabric_drop_down').style.display = 'none'; document.getElementById('fabric_button_10').click()">
                                                            Silk Crepe de Chine (R$38.00/mt)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="button_fabric" class="mobile_hide show_help_button">
                                                    <a onclick="toggle_fabric()"><img alt="Help_icon" src="{{ asset('images/outros/help_icon.png') }}" /></a>
                                                </div>
                                                <div id='fabric_help' style='display:none;'>
                                                    <div style="background-color: #FAF9F3; padding: 10px; clear: both; margin-top: 4px; margin-bottom: 4px">
                                                        <span style='line-height:1em;font-size:10px; float: right'>
                                                            <a onclick="document.getElementById(&#x27;fabric_help&#x27;).style.display = &#x27;none&#x27;;"><b>X</b></a>
                                                        </span>
                                                        <div style="font-size: 12px">
                                                            Tem vários tecidos em que para imprimir qualquer design, sedas e produtos orgânicos. Nossos tecidos são grandes para quilting,
                                                            vestuário, estofos e muito mais.
                                                            <a href="http://www.spoonflower.com/spoonflower_fabrics" target="_blank">
                                                                Encontre descrições de nossos tecidos e encomende amostras não impressas aqui.
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="size_selector" class="size_select">
                                                <div id="purchase_controls" style="margin-top: 3px; margin-top: 5px;">
                                                    <div style="margin: 5px 3px; padding-top: 5px">
                                                        <strong>3. Escolha um tamanho e uma quantidade</strong>
                                                    </div>
                                                    <div class="qty_alert" id="qty_alert">
                                                        Quantidade deve ser um número inteiro!
                                                    </div>
                                                    <div class="qty_alert" id="qty_alert-over_limit">
                                                        Adicione itens ao seu carrinho em quantidades de até 200 ou menos.
                                                    </div>
                                                    <div style="float:left; width: 42px">
                                                        <input id="dynamic_fabric_count" type="text" size="3" maxlength="3" name="dynamic_fabric_count" style="display:inline-block; text-align:center; height:28px"
                                                            onkeypress="return onKeyPressBlockAlphas(event);" onkeyup="onKeyUpChangeTotal(); checkQty();"
                                                            onblur="if(this.value == ''){this.value = '1'}">
                                                            <div style="float:left; font-size: 7px; text-align:center; width:38px; margin-top: 2px">
                                                                QUANTIDADE
                                                            </div>
                                                    </div>
                                                    <div id="fabric_66_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_66" onclick="var sizedrop = document.getElementById('size_drop_down_66');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_66" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_66" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_6458" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_66&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="6458" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_66').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_66').click()">
                                                                <span id="size_dynamic_fabric_swatch_66" style='display:none;'>
                                                                    6458
                                                                </span>
                                                                <input id="dynamic_fabric_swatch_66" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_6458_66' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_6458_66' style='display:none;'>3.5</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_6459" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_66&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="6459" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_66').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_66').click()">
                                                                <span id="size_dynamic_fabric_fatq_66" style='display:none;'>6459</span>
                                                                <input id="dynamic_fabric_fatq_66" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_6459_66' style="">Quarto gordo (30&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_6459_66' style='display:none;'>4.93</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_66&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_66').style.display = 'none'; document.getElementById('dynamic_fabric_yards_66').click()">
                                                                <span id="size_dynamic_fabric_yards_66" style='display:none;'>6460</span>
                                                                <input id="dynamic_fabric_yards_66" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_66' style="">Jardas (67" largura)</span>
                                                                <span id='fabric_price_0_66' style='display:none;'>9.86</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_65_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_65" onclick="var sizedrop = document.getElementById('size_drop_down_65');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_65" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_65" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_5759" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_65&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="5759" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_65').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_65').click()">
                                                                <span id="size_dynamic_fabric_swatch_65" style='display:none;'>5759</span>
                                                                <input id="dynamic_fabric_swatch_65" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_5759_65' style="">Swatch (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_5759_65' style='display:none;'>3.5</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_6361" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_65&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="6361" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_65').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_65').click()">
                                                                <span id="size_dynamic_fabric_fatq_65" style='display:none;'>6361</span>
                                                                <input id="dynamic_fabric_fatq_65" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_6361_65' style="">Quarto gordo (30&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_6361_65' style='display:none;'>4.93</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_65&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_65').style.display = 'none'; document.getElementById('dynamic_fabric_yards_65').click()">
                                                                <span id="size_dynamic_fabric_yards_65" style='display:none;'>6356</span>
                                                                <input id="dynamic_fabric_yards_65" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_65' style="">Jardas (60" largura)</span>
                                                                <span id='fabric_price_0_65' style='display:none;'>9.86</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_63_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_63" onclick="var sizedrop = document.getElementById('size_drop_down_63');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_63" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_63" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_5388" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_63&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="5388" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_63').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_63').click()">
                                                                <span id="size_dynamic_fabric_swatch_63" style='display:none;'>5388</span>
                                                                <input id="dynamic_fabric_swatch_63" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_5388_63' style="">Swatch (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_5388_63' style='display:none;'>3.5</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_5389" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_63&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="5389" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_63').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_63').click()">
                                                                <span id="size_dynamic_fabric_fatq_63" style='display:none;'>5389</span>
                                                                <input id="dynamic_fabric_fatq_63" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_5389_63' style="">Quarto gordo (30&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_5389_63' style='display:none;'>4.93</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_63&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_63').style.display = 'none'; document.getElementById('dynamic_fabric_yards_63').click()">
                                                                <span id="size_dynamic_fabric_yards_63" style='display:none;'>5390</span>
                                                                <input id="dynamic_fabric_yards_63" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_63' style="">Jardas (67" largura)</span>
                                                                <span id='fabric_price_0_63' style='display:none;'>9.86</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_30_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_30" onclick="var sizedrop = document.getElementById('size_drop_down_30');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_30" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_30" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2100" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_30&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2100" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_30').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_30').click()">
                                                                <span id="size_dynamic_fabric_swatch_30" style='display:none;'>2100</span>
                                                                <input id="dynamic_fabric_swatch_30" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2100_30' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2100_30' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_2101" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_30&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2101" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_30').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_30').click()">
                                                                <span id="size_dynamic_fabric_fatq_30" style='display:none;'>2101</span>
                                                                <input id="dynamic_fabric_fatq_30" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2101_30' style="">Quarto gordo (21&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_2101_30' style='display:none;'>10.5</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_30&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_30').style.display = 'none'; document.getElementById('dynamic_fabric_yards_30').click()">
                                                                <span id="size_dynamic_fabric_yards_30" style='display:none;'>2102</span>
                                                                <input id="dynamic_fabric_yards_30" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_30' style="">Jardas (42" largura)</span>
                                                                <span id='fabric_price_0_30' style='display:none;'>17.5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_17_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_17" onclick="var sizedrop = document.getElementById('size_drop_down_17');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_17" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_17" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_1282" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_17&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="1282" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_17').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_17').click()">
                                                                <span id="size_dynamic_fabric_swatch_17" style='display:none;'>1282</span>
                                                                <input id="dynamic_fabric_swatch_17" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_1282_17' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_1282_17' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_1283" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_17&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="1283" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_17').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_17').click()">
                                                                <span id="size_dynamic_fabric_fatq_17" style='display:none;'>1283</span>
                                                                <input id="dynamic_fabric_fatq_17" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_1283_17' style="">Quarto gordo (21&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_1283_17' style='display:none;'>10.5</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_17&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_17').style.display = 'none'; document.getElementById('dynamic_fabric_yards_17').click()">
                                                                <span id="size_dynamic_fabric_yards_17" style='display:none;'>1284</span>
                                                                <input id="dynamic_fabric_yards_17" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_17' style="">Jardas (42" largura)</span>
                                                                <span id='fabric_price_0_17' style='display:none;'>17.5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_43_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_43" onclick="var sizedrop = document.getElementById('size_drop_down_43');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_43" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_43" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2997" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_43&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2997" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_43').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_43').click()">
                                                                <span id="size_dynamic_fabric_swatch_43" style='display:none;'>2997</span>
                                                                <input id="dynamic_fabric_swatch_43" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2997_43' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2997_43' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3003" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_43&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3003" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_43').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_43').click()">
                                                                <span id="size_dynamic_fabric_fatq_43" style='display:none;'>3003</span>
                                                                <input id="dynamic_fabric_fatq_43" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3003_43' style="">Quarto gordo (27&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3003_43' style='display:none;'>11.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_43&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_43').style.display = 'none'; document.getElementById('dynamic_fabric_yards_43').click()">
                                                                <span id="size_dynamic_fabric_yards_43" style='display:none;'>2998</span>
                                                                <input id="dynamic_fabric_yards_43" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_43' style="">Jardas (54" largura)</span>
                                                                <span id='fabric_price_0_43' style='display:none;'>18.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_51_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_51" onclick="var sizedrop = document.getElementById('size_drop_down_51');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_51" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_51" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_4032" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_51&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4032" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_51').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_51').click()">
                                                                <span id="size_dynamic_fabric_swatch_51" style='display:none;'>4032</span>
                                                                <input id="dynamic_fabric_swatch_51" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4032_51' style="">Swatch (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_4032_51' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_4033" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_51&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4033" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_51').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_51').click()">
                                                                <span id="size_dynamic_fabric_fatq_51" style='display:none;'>4033</span>
                                                                <input id="dynamic_fabric_fatq_51" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4033_51' style="">Quarto gordo (21&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_4033_51' style='display:none;'>11.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_51&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_51').style.display = 'none'; document.getElementById('dynamic_fabric_yards_51').click()">
                                                                <span id="size_dynamic_fabric_yards_51" style='display:none;'>4034</span>
                                                                <input id="dynamic_fabric_yards_51" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_51' style=""> Jardas (42" largura)</span>
                                                                <span id='fabric_price_0_51' style='display:none;'>19.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_44_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_44" onclick="var sizedrop = document.getElementById('size_drop_down_44');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_44" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_44" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_3025" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_44&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3025" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_44').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_44').click()">
                                                                <span id="size_dynamic_fabric_swatch_44" style='display:none;'>3025</span>
                                                                <input id="dynamic_fabric_swatch_44" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3025_44' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_3025_44' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3026" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_44&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3026" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_44').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_44').click()">
                                                                <span id="size_dynamic_fabric_fatq_44" style='display:none;'>3026</span>
                                                                <input id="dynamic_fabric_fatq_44" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3026_44' style="">Quarto gordo (21&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3026_44' style='display:none;'>11.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_44&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_44').style.display = 'none'; document.getElementById('dynamic_fabric_yards_44').click()">
                                                                <span id="size_dynamic_fabric_yards_44" style='display:none;'>3027</span>
                                                                <input id="dynamic_fabric_yards_44" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_44' style="">Jardas (42" largura)</span>
                                                                <span id='fabric_price_0_44' style='display:none;'>19.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_59_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_59" onclick="var sizedrop = document.getElementById('size_drop_down_59');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_59" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_59" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_4900" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_59&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4900" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_59').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_59').click()">
                                                                <span id="size_dynamic_fabric_swatch_59" style='display:none;'>4900</span>
                                                                <input id="dynamic_fabric_swatch_59" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4900_59' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_4900_59' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_4901" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_59&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4901" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_59').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_59').click()">
                                                                <span id="size_dynamic_fabric_fatq_59" style='display:none;'>4901</span>
                                                                <input id="dynamic_fabric_fatq_59" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4901_59' style="">Quarto gordo (21&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_4901_59' style='display:none;'>12.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_59&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_59').style.display = 'none'; document.getElementById('dynamic_fabric_yards_59').click()">
                                                                <span id="size_dynamic_fabric_yards_59" style='display:none;'>4902</span>
                                                                <input id="dynamic_fabric_yards_59" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_59' style="">Jardas (42" largura)</span>
                                                                <span id='fabric_price_0_59' style='display:none;'>20.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_33_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_33" onclick="var sizedrop = document.getElementById('size_drop_down_33');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_33" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_33" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2407" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_33&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2407" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_33').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_33').click()">
                                                                <span id="size_dynamic_fabric_swatch_33" style='display:none;'>2407</span>
                                                                <input id="dynamic_fabric_swatch_33" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2407_33' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2407_33' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_2408" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_33&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2408" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_33').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_33').click()">
                                                                <span id="size_dynamic_fabric_fatq_33" style='display:none;'>2408</span>
                                                                <input id="dynamic_fabric_fatq_33" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2408_33' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_2408_33' style='display:none;'>12.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_33&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_33').style.display = 'none'; document.getElementById('dynamic_fabric_yards_33').click()">
                                                                <span id="size_dynamic_fabric_yards_33" style='display:none;'>2409</span>
                                                                <input id="dynamic_fabric_yards_33" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_33' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_33' style='display:none;'>20.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_39_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_39" onclick="var sizedrop = document.getElementById('size_drop_down_39');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_39" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_39" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2834" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_39&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2834" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_39').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_39').click()">
                                                                <span id="size_dynamic_fabric_swatch_39" style='display:none;'>2834</span>
                                                                <input id="dynamic_fabric_swatch_39" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2834_39' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2834_39' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_2852" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_39&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2852" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_39').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_39').click()">
                                                                <span id="size_dynamic_fabric_fatq_39" style='display:none;'>2852</span>
                                                                <input id="dynamic_fabric_fatq_39" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2852_39' style="">Quarto gordo (26&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_2852_39' style='display:none;'>13.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_39&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_39').style.display = 'none'; document.getElementById('dynamic_fabric_yards_39').click()">
                                                                <span id="size_dynamic_fabric_yards_39" style='display:none;'>2835</span>
                                                                <input id="dynamic_fabric_yards_39" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_39' style="">Jardas (52" largura)</span>
                                                                <span id='fabric_price_0_39' style='display:none;'>23.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_47_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_47" onclick="var sizedrop = document.getElementById('size_drop_down_47');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_47" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_47" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_3527" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_47&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3527" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_47').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_47').click()">
                                                                <span id="size_dynamic_fabric_swatch_47" style='display:none;'>3527</span>
                                                                <input id="dynamic_fabric_swatch_47" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3527_47' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_3527_47' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3529" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_47&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3529" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_47').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_47').click()">
                                                                <span id="size_dynamic_fabric_fatq_47" style='display:none;'>3529</span>
                                                                <input id="dynamic_fabric_fatq_47" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3529_47' style="">Quarto gordo (21&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3529_47' style='display:none;'>13.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_47&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_47').style.display = 'none'; document.getElementById('dynamic_fabric_yards_47').click()">
                                                                <span id="size_dynamic_fabric_yards_47" style='display:none;'>3530</span>
                                                                <input id="dynamic_fabric_yards_47" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_47' style="">Jardas (42" largura)</span>
                                                                <span id='fabric_price_0_47' style='display:none;'>24.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_23_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_23" onclick="var sizedrop = document.getElementById('size_drop_down_23');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_23" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_23" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_1857" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_23&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="1857" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_23').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_23').click()">
                                                                <span id="size_dynamic_fabric_swatch_23" style='display:none;'>1857</span>
                                                                <input id="dynamic_fabric_swatch_23" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_1857_23' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_1857_23' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_1858" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_23&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="1858" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_23').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_23').click()">
                                                                <span id="size_dynamic_fabric_fatq_23" style='display:none;'>1858</span>
                                                                <input id="dynamic_fabric_fatq_23" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_1858_23' style="">Quarto gordo (27&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_1858_23' style='display:none;'>13.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_23&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_23').style.display = 'none'; document.getElementById('dynamic_fabric_yards_23').click()">
                                                                <span id="size_dynamic_fabric_yards_23" style='display:none;'>1859</span>
                                                                <input id="dynamic_fabric_yards_23" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_23' style="">Jardas (54" largura)</span>
                                                                <span id='fabric_price_0_23' style='display:none;'>24.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_21_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_21" onclick="var sizedrop = document.getElementById('size_drop_down_21');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_21" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_21" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_1841" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_21&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="1841" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_21').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_21').click()">
                                                                <span id="size_dynamic_fabric_swatch_21" style='display:none;'>1841</span>
                                                                <input id="dynamic_fabric_swatch_21" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_1841_21' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_1841_21' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_1842" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_21&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="1842" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_21').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_21').click()">
                                                                <span id="size_dynamic_fabric_fatq_21" style='display:none;'>1842</span>
                                                                <input id="dynamic_fabric_fatq_21" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_1842_21' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_1842_21' style='display:none;'>13.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_21&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_21').style.display = 'none'; document.getElementById('dynamic_fabric_yards_21').click()">
                                                                <span id="size_dynamic_fabric_yards_21" style='display:none;'>1843</span>
                                                                <input id="dynamic_fabric_yards_21" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_21' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_21' style='display:none;'>24.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_67_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_67" onclick="var sizedrop = document.getElementById('size_drop_down_67');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_67" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_67" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_6465" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_67&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="6465" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_67').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_67').click()">
                                                                <span id="size_dynamic_fabric_swatch_67" style='display:none;'>6465</span>
                                                                <input id="dynamic_fabric_swatch_67" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_6465_67' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_6465_67' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_6466" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_67&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="6466" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_67').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_67').click()">
                                                                <span id="size_dynamic_fabric_fatq_67" style='display:none;'>6466</span>
                                                                <input id="dynamic_fabric_fatq_67" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_6466_67' style="">Quarto gordo (29&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_6466_67' style='display:none;'>13.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_67&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_67').style.display = 'none'; document.getElementById('dynamic_fabric_yards_67').click()">
                                                                <span id="size_dynamic_fabric_yards_67" style='display:none;'>6467</span>
                                                                <input id="dynamic_fabric_yards_67" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_67' style="">Jardas (58" largura)</span>
                                                                <span id='fabric_price_0_67' style='display:none;'>26.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_31_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_31" onclick="var sizedrop = document.getElementById('size_drop_down_31');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_31" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_31" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2189" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_31&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2189" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_31').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_31').click()">
                                                                <span id="size_dynamic_fabric_swatch_31" style='display:none;'>2189</span>
                                                                <input id="dynamic_fabric_swatch_31" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2189_31' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2189_31' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_2190" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_31&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2190" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_31').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_31').click()">
                                                                <span id="size_dynamic_fabric_fatq_31" style='display:none;'>2190</span>
                                                                <input id="dynamic_fabric_fatq_31" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2190_31' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_2190_31' style='display:none;'>13.5</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_31&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_31').style.display = 'none'; document.getElementById('dynamic_fabric_yards_31').click()">
                                                                <span id="size_dynamic_fabric_yards_31" style='display:none;'>2191</span>
                                                                <input id="dynamic_fabric_yards_31" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_31' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_31' style='display:none;'>26.5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_55_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_55" onclick="var sizedrop = document.getElementById('size_drop_down_55');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_55" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_55" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_4352" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_55&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4352" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_55').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_55').click()">
                                                                <span id="size_dynamic_fabric_swatch_55" style='display:none;'>4352</span>
                                                                <input id="dynamic_fabric_swatch_55" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4352_55' style="">Swatch (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_4352_55' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_4353" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_55&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4353" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_55').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_55').click()">
                                                                <span id="size_dynamic_fabric_fatq_55" style='display:none;'>4353</span>
                                                                <input id="dynamic_fabric_fatq_55" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4353_55' style="">Quarto gordo (30&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_4353_55' style='display:none;'>13.75</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_55&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_55').style.display = 'none'; document.getElementById('dynamic_fabric_yards_55').click()">
                                                                <span id="size_dynamic_fabric_yards_55" style='display:none;'>4354</span>
                                                                <input id="dynamic_fabric_yards_55" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_55' style="">Jardas (60" largura)</span>
                                                                <span id='fabric_price_0_55' style='display:none;'>26.75</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_56_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_56" onclick="var sizedrop = document.getElementById('size_drop_down_56');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_56" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_56" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_4461" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_56&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4461" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_56').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_56').click()">
                                                                <span id="size_dynamic_fabric_swatch_56" style='display:none;'>4461</span>
                                                                <input id="dynamic_fabric_swatch_56" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4461_56' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_4461_56' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_4462" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_56&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4462" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_56').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_56').click()">
                                                                <span id="size_dynamic_fabric_fatq_56" style='display:none;'>4462</span>
                                                                <input id="dynamic_fabric_fatq_56" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4462_56' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_4462_56' style='display:none;'>14.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_56&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_56').style.display = 'none'; document.getElementById('dynamic_fabric_yards_56').click()">
                                                                <span id="size_dynamic_fabric_yards_56" style='display:none;'>4463</span>
                                                                <input id="dynamic_fabric_yards_56" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_56' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_56' style='display:none;'>27.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_52_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_52" onclick="var sizedrop = document.getElementById('size_drop_down_52');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_52" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_52" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_4101" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_52&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4101" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_52').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_52').click()">
                                                                <span id="size_dynamic_fabric_swatch_52" style='display:none;'>4101</span>
                                                                <input id="dynamic_fabric_swatch_52" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4101_52' style="">Swatch (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_4101_52' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_4102" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_52&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4102" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_52').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_52').click()">
                                                                <span id="size_dynamic_fabric_fatq_52" style='display:none;'>4102</span>
                                                                <input id="dynamic_fabric_fatq_52" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4102_52' style="">Quarto gordo (27&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_4102_52' style='display:none;'>14.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_52&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_52').style.display = 'none'; document.getElementById('dynamic_fabric_yards_52').click()">
                                                                <span id="size_dynamic_fabric_yards_52" style='display:none;'>4103</span>
                                                                <input id="dynamic_fabric_yards_52" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_52' style="">Jardas (54" largura)</span>
                                                                <span id='fabric_price_0_52' style='display:none;'>27.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_49_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_49" onclick="var sizedrop = document.getElementById('size_drop_down_49');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_49" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_49" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_3566" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_49&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3566" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_49').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_49').click()">
                                                                <span id="size_dynamic_fabric_swatch_49" style='display:none;'>3566</span>
                                                                <input id="dynamic_fabric_swatch_49" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3566_49' style="">Swatch (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_3566_49' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3568" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_49&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3568" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_49').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_49').click()">
                                                                <span id="size_dynamic_fabric_fatq_49" style='display:none;'>3568</span>
                                                                <input id="dynamic_fabric_fatq_49" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3568_49' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3568_49' style='display:none;'>14.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_49&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_49').style.display = 'none'; document.getElementById('dynamic_fabric_yards_49').click()">
                                                                <span id="size_dynamic_fabric_yards_49" style='display:none;'>3567</span>
                                                                <input id="dynamic_fabric_yards_49" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_49' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_49' style='display:none;'>27.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_48_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_48" onclick="var sizedrop = document.getElementById('size_drop_down_48');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_48" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_48" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_3437" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_48&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3437" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_48').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_48').click()">
                                                                <span id="size_dynamic_fabric_swatch_48" style='display:none;'>3437</span>
                                                                <input id="dynamic_fabric_swatch_48" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3437_48' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_3437_48' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3438" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_48&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3438" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_48').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_48').click()">
                                                                <span id="size_dynamic_fabric_fatq_48" style='display:none;'>3438</span>
                                                                <input id="dynamic_fabric_fatq_48" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3438_48' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3438_48' style='display:none;'>14.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_48&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_48').style.display = 'none'; document.getElementById('dynamic_fabric_yards_48').click()">
                                                                <span id="size_dynamic_fabric_yards_48" style='display:none;'>3439</span>
                                                                <input id="dynamic_fabric_yards_48" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_48' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_48' style='display:none;'>27.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_46_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_46" onclick="var sizedrop = document.getElementById('size_drop_down_46');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_46" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_46" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_3355" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_46&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3355" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_46').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_46').click()">
                                                                <span id="size_dynamic_fabric_swatch_46" style='display:none;'>3355</span>
                                                                <input id="dynamic_fabric_swatch_46" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3355_46' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_3355_46' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3356" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_46&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3356" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_46').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_46').click()">
                                                                <span id="size_dynamic_fabric_fatq_46" style='display:none;'>3356</span>
                                                                <input id="dynamic_fabric_fatq_46" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3356_46' style="">Quarto gordo (27&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3356_46' style='display:none;'>14.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_46&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_46').style.display = 'none'; document.getElementById('dynamic_fabric_yards_46').click()">
                                                                <span id="size_dynamic_fabric_yards_46" style='display:none;'>3357</span>
                                                                <input id="dynamic_fabric_yards_46" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_46' style="">Jardas (54" largura)</span>
                                                                <span id='fabric_price_0_46' style='display:none;'>27.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_37_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_37" onclick="var sizedrop = document.getElementById('size_drop_down_37');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_37" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_37" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2582" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_37&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2582" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_37').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_37').click()">
                                                                <span id="size_dynamic_fabric_swatch_37" style='display:none;'>2582</span>
                                                                <input id="dynamic_fabric_swatch_37" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2582_37' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2582_37' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_2583" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_37&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2583" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_37').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_37').click()">
                                                                <span id="size_dynamic_fabric_fatq_37" style='display:none;'>2583</span>
                                                                <input id="dynamic_fabric_fatq_37" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2583_37' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_2583_37' style='display:none;'>14.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_37&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_37').style.display = 'none'; document.getElementById('dynamic_fabric_yards_37').click()">
                                                                <span id="size_dynamic_fabric_yards_37" style='display:none;'>2584</span>
                                                                <input id="dynamic_fabric_yards_37" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_37' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_37' style='display:none;'>27.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_5_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_5" onclick="var sizedrop = document.getElementById('size_drop_down_5');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_5" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_5" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_32" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_5&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="32" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_5').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_5').click()">
                                                                <span id="size_dynamic_fabric_swatch_5" style='display:none;'>32</span>
                                                                <input id="dynamic_fabric_swatch_5" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_32_5' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_32_5' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_33" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_5&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="33" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_5').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_5').click()">
                                                                <span id="size_dynamic_fabric_fatq_5" style='display:none;'>33</span>
                                                                <input id="dynamic_fabric_fatq_5" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_33_5' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_33_5' style='display:none;'>14.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_5&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_5').style.display = 'none'; document.getElementById('dynamic_fabric_yards_5').click()">
                                                                <span id="size_dynamic_fabric_yards_5" style='display:none;'>34</span>
                                                                <input id="dynamic_fabric_yards_5" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_5' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_5' style='display:none;'>27.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_60_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_60" onclick="var sizedrop = document.getElementById('size_drop_down_60');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_60" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_60" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_5263" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_60&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="5263" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_60').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_60').click()">
                                                                <span id="size_dynamic_fabric_swatch_60" style='display:none;'>5263</span>
                                                                <input id="dynamic_fabric_swatch_60" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_5263_60' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_5263_60' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_5264" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_60&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="5264" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_60').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_60').click()">
                                                                <span id="size_dynamic_fabric_fatq_60" style='display:none;'>5264</span>
                                                                <input id="dynamic_fabric_fatq_60" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_5264_60' style="">Quarto gordo (29&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_5264_60' style='display:none;'>17.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_60&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_60').style.display = 'none'; document.getElementById('dynamic_fabric_yards_60').click()">
                                                                <span id="size_dynamic_fabric_yards_60" style='display:none;'>5265</span>
                                                                <input id="dynamic_fabric_yards_60" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_60' style="">Jardas (58" largura)</span>
                                                                <span id='fabric_price_0_60' style='display:none;'>32.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_53_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_53" onclick="var sizedrop = document.getElementById('size_drop_down_53');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_53" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_53" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_4209" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_53&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4209" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_53').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_53').click()">
                                                                <span id="size_dynamic_fabric_swatch_53" style='display:none;'>4209</span>
                                                                <input id="dynamic_fabric_swatch_53" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4209_53' style="">Swatch (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_4209_53' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_4210" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_53&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="4210" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_53').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_53').click()">
                                                                <span id="size_dynamic_fabric_fatq_53" style='display:none;'>4210</span>
                                                                <input id="dynamic_fabric_fatq_53" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_4210_53' style="">Quarto gordo (29&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_4210_53' style='display:none;'>17.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_53&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_53').style.display = 'none'; document.getElementById('dynamic_fabric_yards_53').click()">
                                                                <span id="size_dynamic_fabric_yards_53" style='display:none;'>4211</span>
                                                                <input id="dynamic_fabric_yards_53" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_53' style="">Jardas (58" largura)</span>
                                                                <span id='fabric_price_0_53' style='display:none;'>32.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_50_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_50" onclick="var sizedrop = document.getElementById('size_drop_down_50');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_50" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_50" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_3901" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_50&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3901" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_50').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_50').click()">
                                                                <span id="size_dynamic_fabric_swatch_50" style='display:none;'>3901</span>
                                                                <input id="dynamic_fabric_swatch_50" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3901_50' style="Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_3901_50' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3902" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_50&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3902" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_50').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_50').click()">
                                                                <span id="size_dynamic_fabric_fatq_50" style='display:none;'>3902</span>
                                                                <input id="dynamic_fabric_fatq_50" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3902_50' style="">Quarto gordo (28&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3902_50' style='display:none;'>17.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_50&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_50').style.display = 'none'; document.getElementById('dynamic_fabric_yards_50').click()">
                                                                <span id="size_dynamic_fabric_yards_50" style='display:none;'>3903</span>
                                                                <input id="dynamic_fabric_yards_50" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_50' style="">Jardas (56" largura)</span>
                                                                <span id='fabric_price_0_50' style='display:none;'>32.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_45_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_45" onclick="var sizedrop = document.getElementById('size_drop_down_45');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_45" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_45" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_5266" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_45&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="5266" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_45').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_45').click()">
                                                                <span id="size_dynamic_fabric_swatch_45" style='display:none;'>5266</span>
                                                                <input id="dynamic_fabric_swatch_45" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_5266_45' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_5266_45' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_3200" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_45&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="3200" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_45').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_45').click()">
                                                                <span id="size_dynamic_fabric_fatq_45" style='display:none;'>3200</span>
                                                                <input id="dynamic_fabric_fatq_45" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_3200_45' style="">Quarto gordo (29&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_3200_45' style='display:none;'>17.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_45&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_45').style.display = 'none'; document.getElementById('dynamic_fabric_yards_45').click()">
                                                                <span id="size_dynamic_fabric_yards_45" style='display:none;'>3201</span>
                                                                <input id="dynamic_fabric_yards_45" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_45' style="">Jardas (58" largura)</span>
                                                                <span id='fabric_price_0_45' style='display:none;'>32.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_34_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_34" onclick="var sizedrop = document.getElementById('size_drop_down_34');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_34" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_34" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2538" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_34&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2538" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_34').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_34').click()">
                                                                <span id="size_dynamic_fabric_swatch_34" style='display:none;'>2538</span>
                                                                <input id="dynamic_fabric_swatch_34" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2538_34' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2538_34' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_2568" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_34&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2568" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_34').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_34').click()">
                                                                <span id="size_dynamic_fabric_fatq_34" style='display:none;'>2568</span>
                                                                <input id="dynamic_fabric_fatq_34" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2568_34' style="">Quarto gordo (27&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_2568_34' style='display:none;'>17.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_34&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_34').style.display = 'none'; document.getElementById('dynamic_fabric_yards_34').click()">
                                                                <span id="size_dynamic_fabric_yards_34" style='display:none;'>2539</span>
                                                                <input id="dynamic_fabric_yards_34" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_34' style="">Jardas (54" largura)</span>
                                                                <span id='fabric_price_0_34' style='display:none;'>32.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_32_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_32" onclick="var sizedrop = document.getElementById('size_drop_down_32');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_32" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_32" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_2358" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_32&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2358" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_32').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_32').click()">
                                                                <span id="size_dynamic_fabric_swatch_32" style='display:none;'>2358</span>
                                                                <input id="dynamic_fabric_swatch_32" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2358_32' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_2358_32' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_2359" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_32&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="2359" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_32').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_32').click()">
                                                                <span id="size_dynamic_fabric_fatq_32" style='display:none;'>2359</span>
                                                                <input id="dynamic_fabric_fatq_32" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_2359_32' style="">Quarto gordo (27&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_2359_32' style='display:none;'>17.5</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_32&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_32').style.display = 'none'; document.getElementById('dynamic_fabric_yards_32').click()">
                                                                <span id="size_dynamic_fabric_yards_32" style='display:none;'>2360</span>
                                                                <input id="dynamic_fabric_yards_32" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_32' style="">Jardas (54" largura)</span>
                                                                <span id='fabric_price_0_32' style='display:none;'>34.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fabric_10_size" class="add_to_cart_select">
                                                        <div class="size_selector header" id="size_header_10" onclick="var sizedrop = document.getElementById('size_drop_down_10');if (sizedrop.style.display != 'block'){sizedrop.style.display = 'block';}else{sizedrop.style.display = 'none';}">
                                                            <div id="size_selected_10" class="drop_item_selected" style="float:left;">
                                                                <!-- Suporte para o tecido selecionado. Será preenchido com javascript -->
                                                            </div>
                                                            <div class="drop_arrow">
                                                                <img alt="Carrot_brown" id="carrot_tag" src="{{ asset('images/outros/Carrot_Brown.jpg') }}" />
                                                            </div>
                                                        </div>
                                                        <div id="size_drop_down_10" class="size_drop_down drop_list">
                                                            <input id="fabric_item_fabric_size_id_400" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_swatch_10&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="400" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_10').style.display = 'none'; document.getElementById('dynamic_fabric_swatch_10').click()">
                                                                <span id="size_dynamic_fabric_swatch_10" style='display:none;'>400</span>
                                                                <input id="dynamic_fabric_swatch_10" type="hidden" size="1" name="dynamic_fabric_swatch" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_400_10' style="">Amostra de teste (8&quot; x 8&quot;)</span>
                                                                <span id='fabric_price_400_10' style='display:none;'>5.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_401" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_fatq_10&#x27;).click();"
                                                                style="display:none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="401" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_10').style.display = 'none'; document.getElementById('dynamic_fabric_fatq_10').click()">
                                                                <span id="size_dynamic_fabric_fatq_10" style='display:none;'>401</span>
                                                                <input id="dynamic_fabric_fatq_10" type="hidden" size="1" name="dynamic_fabric_fatq" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event); document.getElementById('dynamic_fabric_count').disabled = false;">
                                                                <span id='fabric_size_401_10' style="">Quarto gordo (21&quot; x 18&quot;)</span>
                                                                <span id='fabric_price_401_10' style='display:none;'>19.0</span>
                                                            </div>
                                                            <input id="fabric_item_fabric_size_id_0" name="fabric_item[fabric_size_id]" onclick="document.getElementById(&#x27;dynamic_fabric_yards_10&#x27;).click();"
                                                                style="display: none; float:left; margin:5px 5px 0 0" type="radio"
                                                                value="0" />
                                                            <div class="drop_item" onclick="document.getElementById('size_drop_down_10').style.display = 'none'; document.getElementById('dynamic_fabric_yards_10').click()">
                                                                <span id="size_dynamic_fabric_yards_10" style='display:none;'>402</span>
                                                                <input id="dynamic_fabric_yards_10" type="hidden" size="1" name="dynamic_fabric_yards" onkeyup="onKeyUpChangeTotal()" onclick="onClickSelectRadioButton(event);">
                                                                <span id='fabric_size_0_10' style="">Jardas (42" largura)</span>
                                                                <span id='fabric_price_0_10' style='display:none;'>38.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    function toggle() {
                                                        var oDiv = document.getElementById('size_help');
                                                        var oBtn = document.getElementById('size_button');
                                                        if (oDiv.style.display == 'none') {
                                                            oDiv.style.display = 'block';
                                                            oBtn.value = 'HIDE'
                                                        } else {
                                                            oDiv.style.display = 'none';
                                                            oBtn.value = 'SHOW'
                                                        }
                                                    }
                                                </script>
                                                <div id="size_button" class="mobile_hide show_help_button">
                                                    <a onclick="toggle()">
                                                        <img alt="Help_icon" src="{{ asset('images/outros/help_icon.png') }}" /></a>
                                                </div>
                                                <div id='size_help' style='clear: both;display:none; background-color: #FAF9F3; padding: 10px; margin-top: 40px; margin-bottom: 4px; overflow:hidden'>
                                                    <div style='line-height:1em;font-size:10px; float: right'>
                                                        <a onclick="document.getElementById(&#x27;size_help&#x27;).style.display = &#x27;none&#x27;;"><b>X</b></a>
                                                    </div>
                                                    <div style="font-size: 12px">
                                                        Pedir uma amostra de teste é uma boa idéia! A cor pode olhar muito diferente na tela do que o que você vê em seu monitor
                                                        e não há simplesmente nenhum substituto a ver seu projeto na tela
                                                        <a href="https://support.spoonflower.com/">
                                                            Entre outras razões.
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End of console controls -->
                                            </div>
                                            <!-- DESIGN SCALE OPTIONS -->
                                            <div style='display: none;'>
                                                <input id="fabric_item_dpi_150" name="fabric_item[dpi]" type="radio" value="200" />
                                                <label for="fabric_item_fabric_dpi_150">Tamanho base (150 DPI)</label>
                                                <br/><span id='image_width'>1</span>
                                                <br/><span id='image_height'>1</span>
                                                <br/><span id='fabric_width'>1</span>
                                                <br/><span id='fabric_height'>1</span><br/>
                                                <span style='float:left;width:80px'>Horizontal: </span>
                                                <strong><span id='x_rep_count' style="width: 150px;">1</span></strong><br/>
                                                <span style='float:left;width:80px'>Vertical: </span>
                                                <strong><span id='y_rep_count' style="width: 150px;">1</span></strong>
                                            </div>
                                            <!-- Necessary to launch the Ajax call.  In the future we can eliminate this when Ajax becomes the predominant method-->
                                            <input id="ajax_submit" name="ajax_submit" style="display:none" type="text" value="" />
                                            <!-- CHECK OUT -->
                                            <div id="shop_total" class="shop_total">
                                                <div id="total">Total: R$0.00</div>
                                                <div id="discount" class="dicount">Desconto</div>
                                                <div id="add_to_cart_button">
                                                    <input class="btn-primary shop_submit btn-checkout" name="commit" onclick="document.getElementById(&#x27;ajax_submit&#x27;).value=&#x27;ajax_cart&#x27;;spoonflower.fireAjaxCart();return false;"
                                                        type="submit" value="Adiconar ao carrinho" />
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#help_me_choose_fabric').on('click', function () {
                                            ga('send', 'event', 'Me ajude a escolher', 'click',
                                                'Me ajude a escolher');
                                        });
                                    });
                                </script>
                                <script type="text/javascript">
                                    function toggle_fabric() {
                                        var oDiv = document.getElementById('fabric_help');
                                        var oBtn = document.getElementById('button_fabric');
                                        if (oDiv.style.display == 'none') {
                                            oDiv.style.display = 'block';
                                            oBtn.value = 'HIDE'
                                        } else {
                                            oDiv.style.display = 'none';
                                            oBtn.value = 'SHOW'
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a style="display:none" id="calculator_link" class="various" href="#calculator">Iframe</a>
            <div id="outer_calculator" style="display: none">
                <div id="calculator">
                    <div class="wallpaper_coverage_calculator modal">
                        <h2 class="float_left"> Calculadora de cobertura de papel de parede</h2>
                        <div style="float: right; height:35px; width:25px;">
                            <span class="icon-close" onclick="parent.jQuery.fancybox.close();" style="border:none;"></span>
                        </div>
                        <div class="wp_calculator">
                            <p>
                                Com base nas dimensões fornecidas, esta calculadora determinará o número de seções de papel personalizadas que você precisará
                                para cobrir qualquer superfície. Se a altura da sua superfície varia, insira a dimensão mais
                                alta para que o padrão se alinhe corretamente.
                            </p>
                            <p class="help_text" style="padding-top: 10px;">
                                Insira suas dimensões em pés (1 pé é 30.48 cm).
                            </p>
                            <form accept-charset="UTF-8" action="/wallpaper/6087566-papu-2-150/coverage_calculator" class="responsive_inline" data-remote="true"
                                method="get">
                                <div style="margin:0;padding:0;display:inline">
                                    <input name="utf8" type="hidden" value="&#x2713;" />
                                </div>
                                <div class="number border_bottom">
                                    <label for="height">Altura da parede mais alta</label>
                                    <label class="secondary" for="height" style="width: 28px;">Ft</label>
                                    <input class="height" id="height" name="height" onchange="$(&#x27;#height&#x27;).val( Math.round( $(&#x27;#height&#x27;).val() ) );"
                                        onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number">
                                    <label for="width_1">Largura da parede (1)</label>
                                    <label class="secondary" for="width_1" style="width: 28px;">Ft</label>
                                    <input id="width_1" name="width_1" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number w2 display_none">
                                    <label for="width_2">Largura da parede (2)</label>
                                    <label class="secondary" for="width_2" style="width: 28px;">Ft
                                    <span class="remove2"><a class="remove_wall_link" onclick="removeWall(&#x27;div.w2&#x27;);">X</a></span>
                                </label>
                                    <input id="width_2" name="width_2" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number w3 display_none">
                                    <label for="width_3">Largura da parede (3)</label>
                                    <label class="secondary" for="width_3" style="width: 28px;">Ft
                                    <span class="remove3"><a class="remove_wall_link" onclick="removeWall(&#x27;div.w3&#x27;);">X</a></span>
                                </label>
                                    <input id="width_3" name="width_3" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number w4 display_none">
                                    <label for="width_4">Largura da parede (4)</label>
                                    <label class="secondary" for="width_4" style="width: 28px;">Ft
                                    <span class="remove4"> <a class="remove_wall_link" onclick="removeWall(&#x27;div.w4&#x27;);">X</a></span>
                                </label>
                                    <input id="width_4" name="width_4" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number w5 display_none">
                                    <label for="width_5">Largura da parede (5)</label>
                                    <label class="secondary" for="width_5" style="width: 28px;">Ft
                                    <span class="remove5"> <a class="remove_wall_link" onclick="removeWall(&#x27;div.w5&#x27;);">X</a></span>
                                </label>
                                    <input id="width_5" name="width_5" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number w6 display_none">
                                    <label for="width_6">Largura da parede (6)</label>
                                    <label class="secondary" for="width_6" style="width: 28px;">Ft
                                    <span class="remove6"> <a class="remove_wall_link" onclick="removeWall(&#x27;div.w6&#x27;);">X</a></span>
                                </label>
                                    <input id="width_6" name="width_6" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number w7 display_none">
                                    <label for="width_7">Largura da parede (7)</label>
                                    <label class="secondary" for="width_7" style="width: 28px;">Ft
                                    <span class="remove7"><a class="remove_wall_link" onclick="removeWall(&#x27;div.w7&#x27;);">X</a></span>
                                </label>
                                    <input id="width_7" name="width_7" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <div class="number w8 display_none">
                                    <label for="width_8">Largura da parede (8)</label>
                                    <label class="secondary" for="width_8" style="width: 28px;">Ft
                                    <span class="remove8"><a class="remove_wall_link" onclick="removeWall(&#x27;div.w8&#x27;);">X</a></span>
                                </label>
                                    <input id="width_8" name="width_8" onfocus="$(this).val(&quot;&quot;);" onkeypress="return onKeyPressBlockAlphas(event);"
                                        type="text" value="0" />
                                </div>
                                <p class="add_wall">
                                    <a class="add_wall_link" onclick="addWall(&#x27;div.w2&#x27;);">+ Add a Wall</a>
                                </p>
                                <div class="heavy_border">&nbsp;</div>
                                <div class="full_width float_left">
                                    <h2 class="float_left"> Área Total: </h2>
                                    <h2 class="total_area float_right">0 Ft</h2>
                                </div>
                                <div class="full_width float_left">
                                    <h2 class="float_left"> Total Preço: </h2>
                                    <h2 class="total_price float_right">R$0.00</h2>
                                </div>
                                <div>
                                    <a href="#" class="wp_cancel float_left" onclick="parent.jQuery.fancybox.close(); dropCoverageCalculator();">cancelar</a>
                                    <a class="btn-primary float_right disabled_button" id="update_dimensions" onclick="updateDimensions();">Use essas dimensões</a>
                                </div>
                                </form>
                        </div>
                        <div class="wallpaper_left">
                            <div class="more_wallpaper_info">
                                <img alt="Measure-wall" src="{{ asset('images/outros/measure-wall.jpg') }}" />
                                <ul>
                                    <li>Digite uma parede ou superfície de cada vez</li>
                                    <li>Medir toda a área da parede</li>
                                    <li>Incluem portas e janelas</li>
                                    <li>Medidas redondas até ao pé mais próximo</li>
                                    <li>O padrão repetirá perfeitamente entre os painéis</li>
                                    <li>
                                        <a href="https://support.spoonflower.com/hc/en-us/articles/204279574-How-to-Install-Spoonflower-Water-Activated-Wallpaper"
                                            target="_blank">
                                            Instruções de Instalação com Água Ativada
                                            </a>
                                    </li>
                                    <li>
                                        <a href="https://support.spoonflower.com/hc/en-us/articles/204279854-How-to-Install-Spoonflower-Peel-and-Stick-Wallpaper"
                                            target="_blank">
                                            Peel and Stick Instruções de Instalação
                                            </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function setFabricId(e) {
                    var fabricId;
                    $("input[name*=fabric_id]").each(function (index, element) {
                        if (element.checked) {
                            fabricId = element.value;
                            console.log("Fabric_id: " + fabricId);
                            fabric_info = "fabric_name_" + fabricId;
                            document.getElementById('fabric_selected').innerHTML = document.getElementById(
                                fabric_info).childNodes[0].data
                        }
                    });
                    return fabricId;
                }

                function addHeight() {
                    //increases height of fancy box by 14 px
                    current_height = $(".fancybox-inner").height();
                    new_height = current_height + 14;
                    $(".fancybox-inner").height(new_height);
                }

                function decreaseHeight() {
                    //decreases height of fancy box by 28 px
                    current_height = $(".fancybox-inner").height();
                    new_height = current_height - 28;
                    $(".fancybox-inner").height(new_height);
                }

                function addWall(div) {
                    //this function adds a new space for a wall
                    string = div;
                    remove = parseInt(string.replace("div.w", "")) - 1;
                    $(div).each(function (i, div) {
                        if ($(div).hasClass('display_none')) {
                            //if the wall isn't currently visible
                            div.classList.toggle('display_none');
                            $(string + " input").focus();
                            new_div = parseInt(string.replace("div.w", "")) + 1;
                            final_div = "div.w" + new_div;
                            if (string == "div.w8") {
                                //if mostrando__ wall 8, remove add wall link
                                $("a.add_wall_link").each(function (i, a) {
                                    $(a).hide();
                                });
                            } else {
                                // if mostrando__ all others, increase height of fancybox
                                addHeight();
                            }
                        }
                    });
                    //remove X from previous wall, as long as previous wall isn't first wall
                    if (remove != 1) {
                        remove_div = "span.remove" + remove;
                        $(remove_div).each(function (i, r) {
                            r.classList.toggle('display_none');
                        });
                    }
                    //change function to be the next wall. ie. if mostrando__ 2, change it to show 3
                    $("a.add_wall_link").each(function (i, a) {
                        $(a).attr("onclick", "addWall('" + final_div + "')");
                    });
                };

                function removeWall(div) {
                    //this function removes a wall
                    string = div;
                    remove = parseInt(string.replace("div.w", "")) - 1;
                    $(div).each(function (i, div) {
                        div.classList.toggle('display_none');
                    });
                    //add X to last wall, as long as last wall isn't first wall
                    if (remove != 1) {
                        remove_div = "span.remove" + remove;
                        $(remove_div).each(function (i, r) {
                            //hide the div
                            r.classList.toggle('display_none');
                        });
                    }

                    //Makes the input 0 & calls for total to be recalculated
                    input = 'input#width_' + string.replace("div.w", "");
                    console.log("this is input: " + input);
                    $(input).each(function (i, w) {
                        $(w).val(0);
                        $(w).keyup();
                    });

                    if (string == "div.w8") {
                        //if mostrando__ wall 8, add back add wall link
                        $("a.add_wall_link").each(function (i, a) {
                            $(a).show();
                        });
                    } else {
                        // if mostrando__ all others, decrease height of fancybox
                        decreaseHeight();
                    }
                    //change function to be the previous wall. ie. if mostrando__ 3, change it to show 2
                    console.log("this is div: " + div);
                    $("a.add_wall_link").each(function (i, a) {
                        console.log("about to change add wall link");
                        $(a).attr("onclick", "addWall('" + div + "')");
                    });
                };

                function calcNumberOfRolls(fabricId, total_width) {
                    console.log("inside number of rolls");
                    var width = widthOfRoll(fabricId);
                    console.log("found width of roll is " + width);
                    var rolls_needed = parseInt(Math.ceil((total_width * 12) / (width * 12)));
                    console.log('Dentro do rolo calc - número de rolos necessários é ' + rolls_needed);
                    return rolls_needed;
                }

                function updateTotalPrice(fabricId, roll_count, height) {
                    console.log("Back in updatePrice -- fabricId is " + fabricId + " height is " + height);
                    var ppf = pricePerFoot(fabricId);
                    var price = roll_count * (ppf * height);
                    console.log("price is " + price + " height is " + height + " roll count is " + roll_count +
                        " ppf is " + ppf);

                    var cost = 0.00;
                    cost = parseFloat(parseFloat(price) * 90) / 100;
                    console.log("cost " + cost);

                    if (isNaN(cost)) {
                        $('.total_price').each(function (i, p) {
                            $(p).text("");
                        });
                    } else {
                        $('.total_price').each(function (i, p) {
                            $(p).text("nowrapR$" + cost.toFixed(2));
                        });
                    }
                    return price;
                }

                function updateHiddenFields(height, roll_width, roll_count) {
                    $("#dynamic_wall_width").val(roll_width);
                    $("#dynamic_wall_height").val(height);
                    $("#calculator_wall_height").text(height);
                    $("#calculator_roll_quantity").text(roll_count);
                    var roll_sqft = roll_width * height;
                    console.log("roll sq ft is " + roll_sqft);
                    $("#calculator_roll_sqft").text(roll_sqft);
                    $("#dynamic_wall_roll_count").val(roll_count);
                }

                function updateFieldsOnRecalculate(event) {
                    coverageCalculator(event);
                }

                $(document).ready(function () {
                    var $inputs = $('input');
                    var $w_inputs = $('input[name*="width_"]');

                    $inputs.keyup(function () {
                        math = 0;
                        var height = $("input.height").eq(1).val();
                        if (height === undefined) {
                            var height = $("input.height").eq(0).val();
                            if (height > 15) {
                                $("input.height").eq(0).val(15);
                                height = 15
                            }
                        } else if (height > 15) {
                            $("input.height").eq(1).val(15);
                            height = 15
                        }
                        //Grab all other inputs and add them together -- non-edited should be 0 and should not change real width
                        var sum = 0;
                        $w_inputs.each(function () {
                            sum += Number($(this).val());
                        });

                        if (sum == 0) {
                            $(".total_area").each(function (i, p) {
                                $(p).text("0 Ft");
                            });
                        } else if (height == 0) {
                            $(".total_area").each(function (i, p) {
                                $(p).text("");
                            });
                        } else if (height > 15) {
                            $(".total_area").each(function (i, p) {
                                $(p).text("A altura deve ser 15 ou menos.");
                            });
                        } else {
                            math = sum * height;
                            $(".total_area").each(function (i, p) {
                                if (isNaN(math)) {
                                    $(p).text("Por favor, coloque um número.");
                                } else {
                                    $(p).text(math + " Ft");
                                }
                            });
                        }
                        $("a#update_dimensions").each(function (i, a) {
                            console.log("esta é altura: " + height + " isso é matemática: " + math);
                            console.log($(a).hasClass("disabled_button"));
                            if (height > 0 && math > 0 && $(a).hasClass("disabled_button")) {
                                a.classList.toggle('disabled_button');
                            } else if (height == 0 || math == 0 && !$(a).hasClass(
                                    "disabled_button")) {
                                a.classList.toggle('disabled_button');
                            }
                        });
                        console.log("Ficando pronto para definir tecido");
                        var fabricId = parseInt(setFabricId());
                        if ($("#size_selected_" + fabricId).text() == 'Use a Calculadora de Cobertura') {
                            console.log("Tecido encontrado. Preparando-se para calc rolls. A identificação da tela é " +
                                fabricId);
                            var roll_count = calcNumberOfRolls(fabricId, sum);
                            var price = updateTotalPrice(fabricId, roll_count, height);
                            updateHiddenFields(height, widthOfRoll(fabricId), roll_count);
                            onKeyUpChangeWall(fabricId, height, roll_count, price, sum);
                        }
                    });
                });

                function updateDimensions(e) {
                    // onKeyUpChangeWall(event, true);
                    //only allow whole numbers for height in feet
                    $('#height').val(Math.round($('#height').val()));
                    $("#wp_calculator_button").hide();
                    $("#maths").show();
                    document.getElementById('quantity_input').style.display = 'inline-block';
                    $('#quantity_label').show();
                    $('#shop_total').show();
                    $('#dynamic_wall_description').show();
                    $('#fancybox_recalculate_link').show();
                    parent.jQuery.fancybox.close();
                }
            </script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".various").fancybox({
                        maxWidth: 700,
                        autoSize: true,
                        autoCenter: false,
                        fitToView: true,
                        padding: 5,
                        helpers: {
                            overlay: {
                                css: {
                                    'background': 'rgba(0, 0, 0, 0.6)'
                                }
                            }
                        }
                    });
                });
            </script>
            <script>
                $(document).ready(function () {
                    spoonflower.initRepeatSelections();
                    $.ajax({
                        async: true,
                        type: 'get',
                        dataType: 'html',
                        url: "/product_information?ajax=true&amp;designs_page_load=true&amp;substrate=fabric",
                        success: function (newData) {
                            if ($("#modal_container").length) {
                                $("#modal_container").empty();
                            } else {
                                $("#console_controls").append('<div id="modal_container"></div>')
                            }
                            $("#modal_container").html(newData);
                        }
                    });
                });
            </script>
            <div class="free_swatch_container"></div>
        </div>
        </div>
        </div>
        <div id="zoom" style="display:none;">
            <div class="white_box outer_container">
                <a onclick="document.getElementById(&#x27;whole_page&#x27;).style.display = &#x27;block&#x27;; document.getElementById(&#x27;zoom&#x27;).style.display = &#x27;none&#x27;;">
                Back
            </a>
                <br/><br/>
                <a onclick="document.getElementById(&#x27;whole_page&#x27;).style.display = &#x27;block&#x27;; document.getElementById(&#x27;zoom&#x27;).style.display = &#x27;none&#x27;;">
                    <img alt="papu-2-150" src="{{ asset('/images/outros/papu-2-150_shop_preview.jpg') }}"
                        title="click to go back" />
                </a>
                <br/><br/>
                <a onclick="document.getElementById(&#x27;whole_page&#x27;).style.display = &#x27;block&#x27;; document.getElementById(&#x27;zoom&#x27;).style.display = &#x27;none&#x27;;">
                Back
            </a>
                <br/><br/>
            </div>
        </div>
        <div class="comments_tags">
            <!--<div class="white_box btags">
            <h3>More
                <a href="http://www.spoonflower.com/tags/mermaid?iref=clk-xs-fab-tag-title">
                    mermaid
                </a>
                    fabric you might like:
            </h3>-->
            <!--<div>-->
            <!--<div class="polaroid_outer">
                    <div class="polaroid_design_container">
                        <div class="polaroid_design hoverable" id="design_5368780">
                            <a href="http://www.spoonflower.com/fabric/5368780-oh-hue-manatee-updated-by-spottedpepperdesigns?iref=clk-xs-fab-tag"><img
                                    alt="Oh, the Hue-Manatee *Updated* " height="173"
                                    src="http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0536/8780/rrSavethemanatee.ai_shop_thumb.png"
                                    title="Oh, the Hue-Manatee *Updated*  by spottedpepperdesigns" width="173"/>
                            </a>
                            <div class="polaroid_hover" id="hover_5368780">
                                <div class="hover_favorite" id="5368780_favorite">
                                    <div class="favorite" data-status=disabled>
                                        <a href="#" onclick="return false;"><span class="icon-heart" title="Log in to favorite this design"></span></a>
                                        <div class="favorite_count">522</div>
                                    </div>
                                </div>
                                <!--If we decide to use the react_component here, we will need to amend the create and delete actions in favorites_contoller-->
            <!--<div class="hover_quick_look" id="5368780_1_quickview">
                                    <button class="quicklook_button icon-magnifier"
                                            onclick="spoonflower.overlayContent(&#x27;/shop/overlay?ajax=true&#x27;, {&quot;overlay_id&quot;:5368780,&quot;shop&quot;:&quot;fabric&quot;}); return false;"
                                            title="Click for quick look"></button>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class="polaroid_design_name">
                                <a href="/fabric/5368780-oh-hue-manatee-updated-by-spottedpepperdesigns">
                                    Oh, the Hue-Manatee *Up...
                                </a>
                            </div>
                            <div class="polaroid_designer_name">
                                by
                                <a href="/profiles/spottedpepperdesigns">
                                    spottedpepperdesigns
                                </a>
                            </div>
                        </div>
                    </div>
                </div>-->
            <!--<div class="polaroid_outer">
                    <div class="polaroid_design_container">
                        <div class="polaroid_design hoverable" id="design_4260818">
                            <a href="http://www.spoonflower.com/fabric/4260818-final-mermaid-pattern-larger-by-nikki_upsher?iref=clk-xs-fab-tag">
                                <img alt="Final_Mermaid_Pattern_larger" height="173"
                                    src="http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0426/0818/cute_mermaid_repeat_13.5_.ai_shop_thumb.png"
                                    title="Final_Mermaid_Pattern_larger by nikki_upsher" width="173"/>
                            </a>
                            <div class="polaroid_hover" id="hover_4260818">
                                <div class="hover_favorite" id="4260818_favorite">
                                    <div class="favorite" data-status=disabled>
                                        <a href="#" onclick="return false;">
                                            <span class="icon-heart" title="Log in to favorite this design"></span>
                                        </a>
                                        <div class="favorite_count">451</div>
                                    </div>
                                </div>
                                <!--If we decide to use the react_component here, we will need to amend the create and delete actions in favorites_contoller-->
            <!--<div class="hover_quick_look" id="4260818_1_quickview">
                                    <button class="quicklook_button icon-magnifier"
                                            onclick="spoonflower.overlayContent(&#x27;/shop/overlay?ajax=true&#x27;, {&quot;overlay_id&quot;:4260818,&quot;shop&quot;:&quot;fabric&quot;}); return false;"
                                            title="Click for quick look">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class="polaroid_design_name">
                                <a href="/fabric/4260818-final-mermaid-pattern-larger-by-nikki_upsher">
                                    Final Mermaid Pattern l...
                                </a>
                            </div>
                            <div class="polaroid_designer_name">
                                by
                                <a href="/profiles/nikki_upsher">
                                    nikki_upsher
                                </a>
                            </div>
                        </div>
                    </div>
                </div>-->
            <!--<div class="polaroid_outer">
                    <div class="polaroid_design_container">
                        <div class="polaroid_design hoverable" id="design_4938143">
                            <a href="http://www.spoonflower.com/fabric/4938143-red-headed-mermaid-cut-sew-doll-by-elladorine?iref=clk-xs-fab-tag">
                                <img alt="Red-Headed Mermaid Cut &amp; Sew Doll" height="173"
                                    src="http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0493/8143/rred-headed-mermaid-doll_shop_thumb.png"
                                    title="Red-Headed Mermaid Cut &amp; Sew Doll by elladorine" width="173"/>
                            </a>
                            <div class="polaroid_hover" id="hover_4938143">
                                <div class="hover_favorite" id="4938143_favorite">
                                    <div class="favorite" data-status=disabled>
                                        <a href="#" onclick="return false;">
                                            <span class="icon-heart" title="Log in to favorite this design"></span></a>
                                        <div class="favorite_count">124</div>
                                    </div>
                                </div>
                                <!--If we decide to use the react_component here, we will need to amend the create and delete actions in favorites_contoller-->
            <!--<div class="hover_quick_look" id="4938143_1_quickview">
                                    <button class="quicklook_button icon-magnifier"
                                            onclick="spoonflower.overlayContent(&#x27;/shop/overlay?ajax=true&#x27;, {&quot;overlay_id&quot;:4938143,&quot;shop&quot;:&quot;fabric&quot;}); return false;"
                                            title="Click for quick look">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class="polaroid_design_name">
                                <a href="/fabric/4938143-red-headed-mermaid-cut-sew-doll-by-elladorine">Red-Headed Mermaid Cut ...</a>
                            </div>
                            <div class="polaroid_designer_name">
                                by <a href="/profiles/elladorine">
                                elladorine
                            </a>
                            </div>
                        </div>
                    </div>
                </div>-->
            <!--<div class="polaroid_outer">
                    <div class="polaroid_design_container">
                        <div class="polaroid_design hoverable" id="design_1486853">
                            <a href="http://www.spoonflower.com/fabric/1486853-mermaid-scales-aqua-by-bonnie_phantasm?iref=clk-xs-fab-tag">
                                <img alt="Mermaid Scales - Aqua" height="173"
                                    src="http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0148/6853/rrrMermaidAquaScales_shop_thumb.png"
                                    title="Mermaid Scales - Aqua by bonnie_phantasm" width="173"/>
                            </a>
                            <div class="polaroid_hover" id="hover_1486853">
                                <div class="hover_favorite" id="1486853_favorite">
                                    <div class="favorite" data-status=disabled>
                                        <a href="#" onclick="return false;">
                                            <span class="icon-heart" title="Log in to favorite this design"></span></a>
                                        <div class="favorite_count">249</div>
                                    </div>
                                </div>
                                <!--If we decide to use the react_component here, we will need to amend the create and delete actions in favorites_contoller-->
            <!--<div class="hover_quick_look" id="1486853_1_quickview">
                                    <button class="quicklook_button icon-magnifier"
                                            onclick="spoonflower.overlayContent(&#x27;/shop/overlay?ajax=true&#x27;, {&quot;overlay_id&quot;:1486853,&quot;shop&quot;:&quot;fabric&quot;}); return false;"
                                            title="Click for quick look">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class="polaroid_design_name">
                                <a href="/fabric/1486853-mermaid-scales-aqua-by-bonnie_phantasm">Mermaid Scales - Aqua</a>
                            </div>
                            <div class="polaroid_designer_name">
                                by
                                <a href="/profiles/bonnie_phantasm">
                                bonnie_phantasm
                            </a>
                            </div>
                        </div>
                    </div>
                </div>-->
            <!--</div>-->
            <!--</div>-->
            <div id='comments'>
            </div>
        </div>
        <!--<script type="text/javascript">
        //<![CDATA[
        $(document).ready(function () {
            url = 'http://www.spoonflower.com/designs/6087566?r=comments';
            $.ajax({
                url: url,
                data: '',
                dataType: 'script'
            });
        });
        //]]>
    </script>-->
        <!--<script type="text/javascript">
        //<![CDATA[
        $(document).ready(function () {
            url = 'http://www.spoonflower.com/designs/6087566?t=tags';
            console.log("url: " + url);
            $.ajax({
                url: url,
                data: '',
                dataType: 'script'
            });
        });
        //]]>
    </script>-->
    </main>
    <!--<footer class="site_footer">
    <p id="back-top">
        <a href="#top">
            <span aria-hidden="true" class="icon-arrow-up"></span>
            Back to Top
        </a>
    </p>
    <div class="outer_container">
        <div class="footer_main">
            <div id="email_subscribe" class="email_subscribe">
                <script>
                    function sfValidateEmail() {
                        var email = $("#email_sign_up").val();
                        if (/^\d+@yahoo\.com/.test(email)) {
                            return false;
                        } else {
                            return true;
                        }
                    }
                </script>
                <form name="sf_bronto_webform" id="sf_bronto_webform" action="http://email.spoonflower.com/public/webform/process/" method="post" autocomplete="off">
                    <input type="hidden" name="delid" value=""/>
                    <input type="hidden" name="subid" value=""/>
                    <input type="hidden" name="td" value=""/>
                    <input type="hidden" name="formtype" value="addcontact"/>
                    <script type="text/javascript">
                        var fieldMaps = {};
                    </script>
                    <label for="email_sign_up" class="screen-reader screen-reader-focusable">subscribe to community emails</label>
                    <input type="text" class="email_subscribe-input" id="email_sign_up" size="35" name="26148" value="subscribe to community emails" onclick="value =''"/>
                    <input type="submit" name="submit" value="Sign Up" id="submit" class="btn btn-sm btn-footer screen-reader-focus" onclick="return sfValidateEmail(event);">
                    <input type="hidden" name="26151[364744]" value="true"/>
                </form>
            </div>
        </div>
    </div>
    <!-- there is no email address configured for this:
      <a class="screen-reader screen-reader-focusable screen-reader-bottom" href="mailto:accessibility@spoonflower.com?subject=Accessibility%20Feedback">Accessibility Feedback</a> -->
    <!--</footer>-->
    <script>
        function footer_toggle(section) {
            if ($(window).width() > 767) {
                if (section == "create") {
                    window.location = 'http://www.spoonflower.com/create'
                } else if (section == "shop") {
                    window.location = 'http://www.spoonflower.com/shop'
                } else if (section == "connect") {
                    window.location = 'http://www.spoonflower.com/connect'
                } else if (section == "my_studio") {
                    window.location = 'http://www.spoonflower.com/'
                }
            } else {
                s = document.getElementById(section + "_ft");
                cross = document.getElementById(section + "_cross");
                h = document.getElementById(section + "_header");
                w = document.getElementById(section + "_header_words");
                if (s.style.display == "none" || s.style.display == "") {
                    s.style.display = "block";
                    cross.innerHTML = "-"
                    $('#' + section + '_header').css({
                        backgroundColor: 'gray'
                    });
                    $('#' + section + '_header').animate({
                        backgroundColor: "rgba(255,255,255,0)"
                    }, 100);
                    cross.style.color = "#D9531E";
                    w.style.color = "#D9531E";
                } else {
                    s.style.display = "none";
                    cross.innerHTML = "+";
                    cross.style.color = "#968972";
                    w.style.color = "#968972"
                    $('#' + section + '_header').css({
                        backgroundColor: 'gray'
                    });
                    $('#' + section + '_header').animate({
                        backgroundColor: "rgba(255,255,255,0)"
                    }, 100);
                }
            }
        };

        function emailSubscribe() {
            $("#email_subscribe").show();
            $("#email_sign_up").focus();
            document.getElementById('email_subscribe').scrollIntoView();
        }
    </script>
    <!-- For all pages on the website that don't need the chrome: printing gift certificates at home, modules, etc. -->
    <!--overlay fancybox-->
    <a style="display:none" id="quicklook_link" class="quicklook_iframe" href="#ql_box">Iframe</a>
    <div id="outer_quicklook" style="display:none">
        <div id="ql_box">
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".quicklook_iframe").fancybox({
                width: 750,
                height: 560,
                autoSize: false,
                autoCenter: false,
                fitToView: false,
                scrolling: "no",
                padding: 5,
                helpers: {
                    overlay: {
                        css: {
                            'background': 'rgba(0, 0, 0, 0.6)'
                        }
                    }
                }
            });
        });
    </script>
    <a style="display:none" id="react-fancy-box-link" class="react-get-fancy" href="#react-fancy-box">Iframe</a>
    <div id="outer-react-fancy-box" style="display:none">
        <div id="react-fancy-box">
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".react-get-fancy").fancybox({
                width: 750,
                height: 560,
                autoSize: false,
                autoCenter: false,
                fitToView: false,
                padding: 5,
                helpers: {
                    overlay: {
                        css: {
                            'background': 'rgba(0, 0, 0, 0.6)'
                        }
                    }
                }
            });
        });
    </script>
    <!-- Adroll Tracking -->
    <!--<script type="text/javascript">
    adroll_adv_id = "5BADO6ISONEB5L72PGOPKC";
    adroll_pix_id = "OVPBDDSRFVBUXDAZD3OPST";
    (function () {
        var _onload = function () {
            if (document.readyState && !/loaded|complete/.test(document.readyState)) {
                setTimeout(_onload, 10);
                return
            }
            if (!window.__adroll_loaded) {
                __adroll_loaded = true;
                setTimeout(_onload, 50);
                return
            }
            var scr = document.createElement("script");
            var host = "//s.adroll.com";
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
            document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {
            window.addEventListener('load', _onload, false);
        }
        else {
            window.attachEvent('onload', _onload)
        }
    }());
</script>-->
    <!-- Send Google Analytics Page View -->
    <!--<script>
        ga('set', 'dimension1', '4192874');
        ga('set', 'dimension2', 'N/A');
        ga('set', 'dimension4', 'false');
        ga('set', 'dimension5', 'false');
        ga('set', 'dimension6', 'false');
        ga('set', 'dimension7', '0d');
        ga('set', 'dimension8', '0');
        ga('set', 'dimension9', 'false');
        ga('send', 'pageview');
    </script>-->
    <script>
    var myArray = ['um', 'dois', 'quatro', 'cinco', 'seis'];
    $.each(myArray, function (index, value) {
        console.log(index + '-' + ' ' + value);
        });
    </script>
</body>

</html>
