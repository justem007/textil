<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Android</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=pt-br">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {{--<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.min.css">--}}
    <link rel="stylesheet" href="{{asset('dist/css/styles.css')}}">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="rossina-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="rossina-title mdl-layout-title">
            <img class="rossina-logo-image" src="{{asset('images/logo-rossina.png')}}">
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
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Camisas</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Tecidos</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Serviços</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Silk Digital</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Vídeos</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">A Empresa</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Faqs</a>
                </nav>
            </div>
            <span class="rossina-mobile-title mdl-layout-title">
            <img class="rossina-logo-image" src="{{asset('images/logo-rossina.png')}}">
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
          <img class="rossina-logo-image" src="{{asset('images/rossina-logo-white.png')}}">
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

    <div class="rossina-content mdl-layout__content">
        <a name="top"></a>
        <div class="rossina-be-together-section mdl-typography--text-center">
            <div class="logo-font rossina-slogan">be together. not the same.</div>
            <div class="logo-font rossina-sub-slogan">welcome to rossina... be yourself. do your thing. see what's going on.</div>
            <div class="logo-font rossina-create-character">
                <a href=""><img src="{{asset('images/andy.png')}}"> create your rossina character</a>
            </div>

            <a href="#screens">
                <button class="rossina-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                    <i class="material-icons">expand_more</i>
                </button>
            </a>
        </div>
        <div class="rossina-screen-section mdl-typography--text-center">
            <a name="screens"></a>
            <div class="mdl-typography--display-1-color-contrast">Powering screens of all sizes</div>
            <div class="rossina-screens">
                <div class="rossina-wear rossina-screen">
                    <a class="rossina-image-link" href="">
                        <img class="rossina-screen-image" src="{{asset('images/wear-silver-on.png')}}">
                        <img class="rossina-screen-image" src="{{asset('images/wear-black-on.png')}}">
                    </a>
                    <a class="rossina-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android Wear</a>
                </div>
                <div class="rossina-phone rossina-screen">
                    <a class="rossina-image-link" href="">
                        <img class="rossina-screen-image" src="{{asset('images/nexus6-on.jpg')}}">
                    </a>
                    <a class="rossina-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Phones</a>
                </div>
                <div class="rossina-tablet rossina-screen">
                    <a class="rossina-image-link" href="">
                        <img class="rossina-screen-image" src="{{asset('images/nexus9-on.jpg')}}">
                    </a>
                    <a class="rossina-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Tablets</a>
                </div>
                <div class="rossina-tv rossina-screen">
                    <a class="rossina-image-link" href="">
                        <img class="rossina-screen-image" src="{{asset('images/tv-on.jpg')}}">
                    </a>
                    <a class="rossina-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android TV</a>
                </div>
                <div class="rossina-auto rossina-screen">
                    <a class="rossina-image-link" href="">
                        <img class="rossina-screen-image" src="{{asset('images/auto-on.jpg')}}">
                    </a>
                    <a class="rossina-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left" href="">Coming Soon: Android Auto</a>
                </div>
            </div>
        </div>
        <div class="rossina-wear-section">
            <div class="rossina-wear-band">
                <div class="rossina-wear-band-text">
                    <div class="mdl-typography--display-2 mdl-typography--font-thin">The best of Google built in</div>
                    <p class="mdl-typography--headline mdl-typography--font-thin">
                        Android works perfectly with your favourite apps like Google Maps,
                        Calendar and YouTube.
                    </p>
                    <p>
                        <a class="mdl-typography--font-regular mdl-typography--text-uppercase rossina-alt-link" href="">
                            See what's new in the Play Store&nbsp;<i class="material-icons">chevron_right</i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="rossina-customized-section">
            <div class="rossina-customized-section-text">
                <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Customised by you, for you</div>
                <p class="mdl-typography--font-light">
                    Put the stuff that you care about right on your home screen: the latest news, the weather or a stream of your recent photos.
                    <br>
                    <a href="" class="rossina-link mdl-typography--font-light">Customise your phone</a>
                </p>
            </div>
            <div class="rossina-customized-section-image"></div>
        </div>
        <div class="rossina-more-section">
            <div class="rossina-section-title mdl-typography--display-1-color-contrast text-center">O que você procura ?</div>
            <div class="rossina-card-container mdl-grid">
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/more-from-1.png')}}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Get going on Android</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Make the switch
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/more-from-4.png')}}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Create your own Android character</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into you, your friends, anyone!</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            androidify.com
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/more-from-2.png')}}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Get a clean customisable home screen</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">A clean, simple, customisable home screen that comes with the power of Google Now: Traffic alerts, weather and much more, just a swipe away.</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Download now
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{{asset('images/more-from-3.png')}}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Millions to choose from</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">Hail a taxi, find a recipe, run through a temple – Google Play has all the apps and games that let you make your Android device uniquely yours.</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="rossina-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Find apps
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="rossina-footer mdl-mega-footer">
            <div class="mdl-mega-footer--top-section">
                <div class="mdl-mega-footer--left-section">
                    <button class="mdl-mega-footer--social-btn"></button>
                    &nbsp;
                    <button class="mdl-mega-footer--social-btn"></button>
                    &nbsp;
                    <button class="mdl-mega-footer--social-btn"></button>
                </div>
                <div class="mdl-mega-footer--right-section">
                    <a class="mdl-typography--font-light" href="#top">
                        Back to Top
                        <i class="material-icons">expand_less</i>
                    </a>
                </div>
            </div>

            <div class="mdl-mega-footer--middle-section">
                <p class="mdl-typography--font-light">Satellite imagery: © 2014 Astrium, DigitalGlobe</p>
                <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
            </div>

            <div class="mdl-mega-footer--bottom-section">
                <a class="rossina-link rossina-link-menu mdl-typography--font-light" id="version-dropdown">
                    Versions
                    <i class="material-icons">arrow_drop_up</i>
                </a>
                <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
                    <li class="mdl-menu__item">5.0 Lollipop</li>
                    <li class="mdl-menu__item">4.4 KitKat</li>
                    <li class="mdl-menu__item">4.3 Jelly Bean</li>
                    <li class="mdl-menu__item">Android History</li>
                </ul>
                <a class="rossina-link rossina-link-menu mdl-typography--font-light" id="developers-dropdown">
                    For Developers
                    <i class="material-icons">arrow_drop_up</i>
                </a>
                <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
                    <li class="mdl-menu__item">App developer resources</li>
                    <li class="mdl-menu__item">Android Open Source Project</li>
                    <li class="mdl-menu__item">Android SDK</li>
                    <li class="mdl-menu__item">Android for Work</li>
                </ul>
                <a class="rossina-link mdl-typography--font-light" href="">Blog</a>
                <a class="rossina-link mdl-typography--font-light" href="">Privacy Policy</a>
            </div>

        </footer>
    </div>
</div>
{{--<a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/rossina-dot-com/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>--}}
{{--<script src=https://code.getmdl.io/1.2.0/material.min.js></script>--}}
<script src="{{asset('dist/js/scripts.js')}}"></script>
</body>
</html>
