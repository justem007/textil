<div class="rossina-header mdl-layout__header mdl-layout__header--waterfall">
    <div class="mdl-layout__header-row">
          <span class="rossina-title mdl-layout-title">
            <a href="/">
                {{ Html::image('images/exemplo/logo-rossina.png', 'logo rossina estamparia',
                    ['class' => 'rossina-logo-image', 'title'=>'logo rossina']
                 )}}
            </a>
          </span>
        <!-- Add spacer, to align navigation to the right in desktop -->
        <div class="rossina-header-spacer mdl-layout-spacer"></div>
        <div class="rossina-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
        </div>
        <!-- Navigation -->
        <div class="rossina-navigation-container">
            <nav class="rossina-navigation mdl-navigation">
                {{ Html::link('site/servicos', 'Serviços',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase color_link_1')) }}
                {{ Html::link('site/tecidos', 'Tecidos',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase color_link_2')) }}
                {{ Html::link('site/camisas', 'Camisas',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase color_link_3')) }}
                {{ Html::link('site/produtos', 'Produtos',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase color_link_4')) }}
                {{ Html::link('site/web-logistica', 'Agendar Visita',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase')) }}
                {{ Html::link('site/faqs', 'Faqs',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase')) }}
                {{ Html::link('site/faqs', 'Contato',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase')) }}
                {{--{{ Html::link('site/silk-digital', 'Silk Digital',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase')) }}--}}
                {{--{{ Html::link('site/videos', 'Vídeos',array('class' => 'mdl-navigation__link mdl-typography--text-uppercase')) }}--}}
            </nav>
        </div>

        <span class="rossina-mobile-title mdl-layout-title">
            <img class="rossina-logo-image" src="{{asset('images/exemplo/logo-rossina.png')}}">
          </span>
        <button class="rossina-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">5.0 Lollipop</li>
            <li class="mdl-menu__item">4.4 KitKat</li>
            <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
            <li class="mdl-menu__item">Android History</li>
        </ul>
    </div>
</div>
<div class="rossina-drawer mdl-layout__drawer">
    <span class="mdl-layout-title">
        <img class="rossina-logo-image" src="{{asset('images/exemplo/logo-rossina.png')}}">
    </span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Phones</a>
        <a class="mdl-navigation__link" href="">Tablets</a>
        <a class="mdl-navigation__link" href="">Wear</a>
        <a class="mdl-navigation__link" href="">TV</a>
        <a class="mdl-navigation__link" href="">Auto</a>
        <a class="mdl-navigation__link" href="">One</a>
        <a class="mdl-navigation__link" href="">Play</a>
        <div class="rossina-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Versions</span>
        <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
        <a class="mdl-navigation__link" href="">KitKat 4.4</a>
        <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
        <a class="mdl-navigation__link" href="">Android history</a>
        <div class="rossina-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Resources</span>
        <a class="mdl-navigation__link" href="">Official blog</a>
        <a class="mdl-navigation__link" href="">Android on Google+</a>
        <a class="mdl-navigation__link" href="">Android on Twitter</a>
        <div class="rossina-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">For developers</span>
        <a class="mdl-navigation__link" href="">App developer resources</a>
        <a class="mdl-navigation__link" href="">Android Open Source Project</a>
        <a class="mdl-navigation__link" href="">Android SDK</a>
    </nav>
</div>