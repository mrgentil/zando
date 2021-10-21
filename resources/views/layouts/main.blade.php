<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface supports-pointerevents">
<head>

    @include('partials.head-meta')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">

  {{-- <link rel="stylesheet" href="{{asset('cart_style/style.css')}}" media="all" >--}}
    @if(!request()->is('buy-or-sell') && !request()->is('search'))
        <link href="{{asset('assets/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
    @endif

    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/rating.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/timber.scss.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/theme.scss.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/themepunch.revolution.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/digital-world.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('cart_style/css/font-awesome.css')}}" media="all"/>
    <link rel="stylesheet" href="{{asset('cart_style/css/themify-icons.css')}}" media="all" />

    @stack('css')
    <link rel="shortcut icon" href="{{asset('assets/images/icon.png')}}">
    <style>
        #filter-area .filter-tag-group .tag-group ul.collapse li a.check:before{
            content: "\f14a" !important;
        }
        .navbar-header a, .navbar-header i{
            color: #FFF !important;
        }
        .pagination {
            height: 36px;
            margin: 0;
            padding: 0;
        }

        .pager, .pagination ul {
            margin-left: 0;
            *zoom: 1
        }

        .pagination ul {
            padding: 0;
            display: inline-block;
            *display: inline;
            margin-bottom: 0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .05)
        }

        .pagination li {
            display: inline
        }

        .pagination a {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0
        }

        .pagination .active a, .pagination a:hover {
            background-color: #f5f5f5;
            color: #94999E
        }

        .pagination .active a {
            color: #94999E;
            cursor: default
        }

        .pagination .disabled a, .pagination .disabled a:hover, .pagination .disabled span {
            color: #94999E;
            background-color: transparent;
            cursor: default
        }

        .pagination li:first-child a, .pagination li:first-child span {
            border-left-width: 1px;
            -webkit-border-radius: 3px 0 0 3px;
            -moz-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px
        }

        .pagination li:last-child a {
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0
        }

        .pagination-centered {
            text-align: center
        }

        .pagination-right {
            text-align: right
        }

        .pager {
            margin-bottom: 18px;
            text-align: center
        }

        .pager:after, .pager:before {
            display: table;
            content: ""
        }

        .pager li {
            display: inline
        }

        .pager a {
            display: inline-block;
            padding: 5px 12px;
            background-color: #fff;
            border: 1px solid #ddd;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px
        }

        .pager a:hover {
            text-decoration: none;
            background-color: #f5f5f5
        }

        .pager .next a {
            float: right
        }

        .pager .previous a {
            float: left
        }

        .pager .disabled a, .pager .disabled a:hover {
            color: #999;
            background-color: #fff;
            cursor: default
        }

        .pagination .prev.disabled span {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 1px;
        }

        .pagination .next.disabled span {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0
        }

        .pagination li.active, .pagination li.disabled {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0
        }

        .pagination li.active {
            background: #364E63;
            color: #fff;
        }

        .pagination li:first-child {
            border-left-width: 1px;
        }

        #spinner {
            position: absolute;
            top: 20%;
            right: 50%;
            z-index: 99999;
        }

        .loading-wrapper:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: block;
            z-index: 99998;
        }

        .single-entry-item > div {
            margin-top: 30px;
        }

        .single-comment-list {
            background: #fff;
            border: 1px solid #f1f1f1;
            border-top: none;
        }

        .single-comment-list > h3 {
            background: #fcfcfc;
            border-bottom: 1px solid #f1f1f1;
            padding: 24px 30px;
            text-transform: capitalize;
        }

        .comment-list > h3 span {
            color: #1570B7;
        }

        .single-comment-list .comments-list {
            margin: 0;
            padding: 0;
        }

        .single-comment-list ol {
            list-style: none;
        }

        .single-comment-list ol li {
            list-style: none;
        }

        .single-comment-list .comments-list .comment .comment-avatar, .single-comment-list .comments-list > li .comment-avatar {
            width: 80px;
            border-radius: 50%;
            margin-right: 30px;
        }

        .kopa-pull-left {
            float: left;
        }

        .single-comment-list .comments-list .comment .comment-avatar img, .single-comment-list .comments-list > li .comment-avatar img {
            border-radius: 50%;
        }

        .single-comment-list .comments-list .comment .comment-content, .single-comment-list .comments-list > li .comment-content {
            overflow: hidden;
            position: relative;
        }

        .entry-meta.style-01 {
            margin: 0;
            list-style: none;
            padding: 0;
            font-size: 12px;
            line-height: 20px;
            position: relative;
        }

        .entry-meta.style-01 > p:first-child {
            margin-left: 0;
        }

        .entry-meta.style-01 > p {
            display: inline-block;
            margin: 0 0 13px 60px;
            position: relative;
        }
        .wrapper{
            max-width: 1420px;
        }
        .btn-badge{
            padding: 9px;
        }
    </style>
    {{--   <script>
           window.theme = window.theme || {};
           theme.strings = {
               zoomClose: "Close (Esc)",
               zoomPrev: "Previous (Left arrow key)",
               zoomNext: "Next (Right arrow key)",
              /* moneyFormat: "\u003cspan class=money\u003e${{amount}}\u003c\/span\u003e"*/
           };
           theme.settings = {
               cartType: "drawer",
               gridType: "collage",
               zoomEnable: true
           };
       </script>
   --}}
    @livewireStyles
    <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.easytabs.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.elevateZoom-3.0.8.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/tada.js') }}" type="text/javascript"></script>
</head>


<body id="digital-world-store" class="template-index">
<div id="NavDrawer" class="drawer drawer--left">
    <div id="html-section-drawer-menu" class="html-section">
        <div data-section-id="drawer-menu" data-section-type="drawer-menu-section">
            <div class="drawer__fixed-header">
                <div class="drawer__header">
                    <div class="drawer__close drawer__close--left">
                        <button type="button" class="icon-fallback-text drawer__close-button js-drawer-close">
                            <span class="icon icon-x" aria-hidden="true"></span>
                            <span class="fallback-text">Close menu</span>
                        </button>
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="position: absolute;right: 24px;top: 14px;height: 46px;">
                    </div>
                </div>
            </div>
            <div class="drawer__inner">
                <ul class="mobile-nav">
                    <li class="mobile-nav__item">
                        <a href="{{ route('home') }}" class="mobile-nav__link">Accueil</a>
                    </li>

                    <li class="mobile-nav__item"><a
                            href="{{ route('buy') }}"><i class="mobile-nav__link"></i>Vente/Achat</a>
                    </li>
                    <li class="mobile-nav__item"><a
                            href="{{ route('repair.index') }}"><i class="mobile-nav__link"></i>Réparation</a>
                    </li>
                    <li class="mobile-nav__item">
                        <a class="mobile-nav__link" href="{{ route('blog.index') }}">News</a>

                    </li>
                    @if(auth()->check())
                        <li class="mobile-nav__item">
                            <a href="{{route('dashboard.home')}}"><i
                                    class="mobile-nav__link"></i>Mon compte</a></li>
                        <li class="mobile-nav__item"><a
                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="mobile-nav__link"></i>Déconnexion</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="mobile-nav__item"><a
                                href="{{ route('login') }}"><i class="mobile-nav__link"></i>Connexion</a>
                        </li>

                        <li class="mobile-nav__item"><a
                                href="{{ route('register') }}"><i
                                    class="mobile-nav__link"></i>Inscription</a></li>
                    @endif
                    @auth
                        <li class="mobile-nav__item">
                            <a class="mobile-nav__link" href="{{route('cart.index')}}">
                                <span class="icon-fallback-text">
                                    <span class="icon icon-cart" style="color:#FFF" aria-hidden="true">
                                        {{ \Cart::session(auth()->user()->id)->getTotalQuantity() }} panier
                                    </span>
                                </span>
                            </a>
                        </li>
                    @endauth

                </ul>
                <form action="{{ route('search') }}" method="get"
                      class="input-group search-bar search-bar--drawer" role="search" style="position: relative;">
                    <input type="search" name="query" value="" placeholder="Rechercher quelque chose"
                           class="input-group-field"
                           aria-label="Rechercher quelque chose" autocomplete="off" style="height: 40px;">
                    <span class="input-group-btn">
                        <button type="submit" class="btn--secondary icon-fallback-text">
                            <span class="icon icon-search" aria-hidden="true"></span>
                            <span class="fallback-text">Recherchez</span>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="PageContainer" class="is-moved-by-drawer">
    <div id="html-section-header" class="html-section">
        <div data-section-id="header" data-section-type="header-section header-style-1"
             class="header-section header-style-1">
            <div class="header-wrapper">
                <header class="site-header">
                    <div class="wrapper main-header-wrapper">
                        <div class="grid--full grid--table">
                            <div class="grid__item large--hide medium-down--one-quarter small--one-sixth">
                                <div class="site-nav--mobile">
                                    <button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left"
                                            aria-controls="NavDrawer" aria-expanded="false">
                                        <span class="icon icon-hamburger" aria-hidden="true"></span>
                                        <span class="fallback-text">Site navigation</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid__item large--hide medium-down--two-quarter small--three-fifths"
                            >
                                <a href="{{url('/')}}" class="site-header__logo-image">
                                    <img src="{{asset('assets/images/logo.png')}}"  alt="Logo">
                                </a>
                            </div>
                            @auth
                                <li class="grid__item large--hide medium-down--one-quarter small--one-sixth">
                                    <a class="site-nav--mobile text-right" href="{{route('cart.index')}}">
                                            <span class="icon-fallback-text">
                                                <span class="icon icon-cart" style="color:#FFF" aria-hidden="true">
                                                    {{ \Cart::session(auth()->user()->id)->getTotalQuantity() }}
                                                </span>
                                            </span>
                                    </a>
                                </li>
                            @endauth
                            {{-- @auth
                             <div class="grid__item large--hide medium-down--one-quarter small--one-sixth">
                                 <div class="site-nav--mobile text-right">
                                     <a href="{{route('cart.index')}}" class="site-nav__link cart-link js-drawer-open-right"
                                        aria-controls="CartDrawer" aria-expanded="false">
                                                 <span class="icon-fallback-text">
                                                     <span class="icon icon-cart" aria-hidden="true"></span>
                                                     <span class="fallback-text">{{ \Cart::session(auth()->user()->id)->getTotalQuantity() }}panier</span>
                                                 </span>
                                         <span class="cart-link__bubble"></span>
                                     </a>
                                 </div>
                             </div>
                             @endauth--}}
                            <div class="grid__item large--show medium-down--hide smal--hide">
                                <div class="header-logo grid__item large--one-fifth" style="padding-top: 0">
                                    <a href="{{ route('home') }}" class="site-header__logo-image">
                                        <img src="{{asset('assets/images/logo.png')}}" style="height: 35px" alt="Logo">
                                    </a>
                                </div>
                                <div class="grid__item header-search large--two-fifths medium-down--one-half small--hide" style="width: 25%;">
                                    <form action="{{ route('search') }}"
                                          method="get" class="input-group search-bar " role="search"
                                          style="position: relative;">
                                        <input type="search" name="query" value=""
                                               placeholder="Rechercher quelque chose"
                                               class="input-group-field" aria-label="Rechercher quelque chose"
                                               autocomplete="off" style="color: #333">
                                        <span class="input-group-btn">
                                                <button type="submit" class=" icon-fallback-text">
                                                    <span class="icon icon-search" aria-hidden="true"></span>
                                                    <span class="fallback-text">Recherchez</span>
                                                </button>
                                            </span>
                                    </form>
                                </div>

                                <div class="grid__item large--two-fifths large--text-right small--hide" style="width: 50%;">
                                    <ul class="navbar-header">
                                        <li class="site-nav__item site-nav__expanded-item"><a
                                                href="{{ route('buy') }}">Vente/Achat</a>
                                        </li>
                                        <li class="site-nav__item site-nav__expanded-item"><a
                                                href="{{ route('repair.index') }}">Réparation</a>
                                        </li>

                                        <li class="site-nav__item site-nav__expanded-item"><a
                                                href="{{ route('about') }}">A propos</a>
                                        </li>
                                        <li class="site-nav__item nav-currency">
                                            <a href="{{ route('blog.index') }}">News</a>
                                        </li>
                                        <li class="site-nav__item site-nav__expanded-item"><a
                                                href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        @auth
                                            <li class="site-nav__item site-nav__expanded-item" title="Mon compte"><a
                                                    href="{{route('dashboard.home')}}">
                                                    <i
                                                        class="ti-settings"></i></a></li>
                                            <li class="site-nav__item site-nav__expanded-item" title="Déconnexion">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                                        class="ti-share-alt"></i></a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                            <li class="site-nav__item" title="Le panier">
                                                <a href="{{route('cart.index')}}">
                                                    <span class="icon-fallback-text">
                                                        <span class="icon icon-cart" aria-hidden="true">
                                                            {{ \Cart::session(auth()->user()->id)->getTotalQuantity() }} <!--panier-->
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="site-nav__item site-nav__expanded-item" title="Connexion">
                                                <a href="{{ route('login') }}"><i class="ti-user"></i><!--Connexion--></a>
                                            </li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>

        <div class="navigation-style-1">
            <div class="navigation-bar menu-bar navigation1">
                <div class="wrapper">
                    <div class="grid--full grid--table">
                        <div class="grid__item large--one-whole medium-down--hide">
                            <ul class="custom-menu-icons grid--full grid--table">
                                @foreach($categories as $category)
                                    <li class="grid__item icon-element icon-1">
                                        <a href="{{route('phone.index', $category->slug)}}">
                                            <img class="icon-img" src="{{ Voyager::image($category->icon) }}" alt="">
                                            <div class="icon-name">{{ $category->name }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

<div id="html-section-footer" class="html-section">
    <footer class="site-footer footer1 text-left" role="contentinfo">
        <div class="footer-top">
            <div class="footer_information">
                <div class="wrapper">
                    <div class="grid" >

                        <div class="fi-links grid__item three-thirds">
                            <div class="fi-about-block grid__item large--one-third small--one-whole medium--one-whole">
                                <div class="fi-title">
                                    Contact
                                </div>
                                <div class="fi-content">
                                    <ul class="group_information">
                                        <li>
                                            <i class="fa fa-envelope"></i><strong>Email: </strong>contact@umojatechnology.com
                                        </li>
                                        <li><i class="fa fa-phone"></i><strong>Téléphone: </strong>(+243) 826 004 888</li>
                                        <li><i class="fa fa-map-marker"></i><strong>Adresse: </strong> 02 Lokengo, C/ Mont-Ngafula Q/Herady, Arrêt Chambre Froide</li>
                                    </ul>
                                    <div class="footer-social">
                                        <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="google" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-links grid__item one-third small--one-whole medium--one-whole">
                                <div class="fi-title">
                                    Navigation
                                </div>
                                <div class="fi-content">
                                    <ul class="grid__item">
                                        <li>
                                            <a href="{{ route('buy') }}"><span>Vente/Achat</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('repair.index') }}"><span>Réparation</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}"><span>A propos</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.index') }}"><span>News</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fi-links grid__item one-third small--one-whole medium--one-whole">
                                <div class="fi-title">
                                    Autres
                                </div>
                                <div class="fi-content">
                                    <ul class="grid__item">
                                        <li>
                                            <a href="{{ route('faq') }}"><span>FAQs</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('partner.index') }}"><span>Devenir partenaire</span></a>
                                        </li>
                                        @auth
                                        <li>
                                            <a href="{{ route('dashboard.home') }}"><span>Mon compte</span></a>
                                        </li>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}"><span>Connexion</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}"><span>Inscription</span></a>
                                            </li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-mid">
            <div class="wrapper">
                <div class="fi-newsletter">
                    <div class="site-footer__newsletter">
                        <form method="post" action="#" id="contact_form" class="contact-form" accept-charset="UTF-8">
                            <input type="hidden" value="customer" name="form_type"><input type="hidden" name="utf8" value="✓">
                            <div class="left-newsletter">
                                <div class="heading">
                                    S'inscrire à la newsletter
                                </div>
                                <div class="subtext">
                                </div>
                            </div>
                            <div class="right-newsletter input-group">
                                <input type="hidden" name="contact[tags]" value="newsletter">
                                <input type="email" name="contact[email]" id="Email" class="input-group__field newsletter__input" value="" placeholder="Email">
                                <span class="input-group__btn">
                                    <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-footer__copyright--bottom">
            <div class="wrapper">
                <div class="grid">
                    <div class="grid__item one-half small--one-whole">
                        <p class="copyright">
                            <small class="site-footer__copyright-content">&copy;{{ date('Y') }}, <a href="index.html" title="">Zandophone</a></small>
                            <small class="site-footer__copyright-content">
                                Powered By
                                <a target="_blank" rel="nofollow" href="https://umojatechnology.com">
                                    Ümoja Technology
                                </a>
                            </small>
                        </p>
                    </div>
                    <div class="grid__item one-half small--one-whole">
                        <ul class="payment-icons list--inline">
                            <li class="payment-icon">
                            </li>
                            <li class="payment-icon">
                            </li>
                            <li class="payment-icon">
                            </li>
                            <li class="payment-icon">
                            </li>
                            <li class="payment-icon">
                            </li>
                            <li class="payment-icon">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    var tada_newsletter = false;
    tada_newsletter = false;
</script>

<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.easytabs.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.themepunch.plugins.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/tada.js') }}" type="text/javascript"></script>
<div id="scroll-to-top" title="Scroll to Top" class="off">
    <i class="fa fa-caret-up"></i>
</div>
<script src="{{ asset('assets/js/jquery.cookies.min.js') }}" type="text/javascript"></script>
<div id="newslettermodal" class="hide">
    <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post"
          name="mc-embedded-subscribe-form" target="_blank">
        <div class="newslettermodal-content">
            <div class="top-area">
                <span class="head-text1">Subscribe to our Newsletter &amp; receive a coupon for</span>
                <span class="head-text2">10% off</span>
            </div>
            <div class="bottom-explain">
                We will send you a discount code after you confirm your email address.
            </div>
            <div class="bottom-area">
                <div class="group_input">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your Email address">
                    <button class="btn" type="submit">Get 10% off</button>
                </div>
            </div>
            <div class="newsletter-social">
                <div class="inline-list social-icons">
                    <a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip"
                       data-placement="top"><i class="fa fa-twitter-square"></i></a>
                    <a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip"
                       data-placement="top"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i
                            class="fa fa-google-plus-square"></i></a>
                    <a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip"
                       data-placement="top"><i class="fa fa-pinterest-square"></i></a>
                    <a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip"
                       data-placement="top"><i class="fa fa-youtube-square"></i></a>
                    <a href="#" title="Instagram" class="icon-social instagram" data-toggle="tooltip"
                       data-placement="top"><i class="fa fa-instagram"></i></a>
                    <a href="#" title="translation missing: en.layout.footer.news" class="icon-social atom"
                       data-toggle="tooltip" data-placement="top"><i class="fa fa-share-alt"></i></a>
                    <a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i
                            class="fa fa-vimeo-square"></i></a>
                    <a href="#" title="Tumblr" class="icon-social tumblr" data-toggle="tooltip" data-placement="top"><i
                            class="fa fa-tumblr"></i></a>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="quick-shop-modal" class="modal quick-shop mfp-hide">
    <div class="modal-dialog fadeIn">
        <div class="modal-content">
            <div class="modal-body">
                <div class="quick-shop-modal-bg">
                </div>
                <div class="grid__item one-half qs-product-image">
                    <div id="quick-shop-image" class="product-image-wrapper">
                        <div id="featuted-image" class="main-image featured">
                            <img class="img-zoom img-responsive image-fly" src="assets/images/product1_320x320.jpg"
                                 alt="">
                        </div>
                        <div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
                            <div class="qs-vertical-slider product-single__thumbnails">
                                <a class="image-thumb active thumb__element"><img
                                        src="assets/images/product1_320x320.jpg" alt=""/></a>
                                <a class="image-thumb thumb__element"><img src="assets/images/product2_320x320.jpg"
                                                                           alt=""/></a>
                                <a class="image-thumb thumb__element"><img src="assets/images/product3_320x320.jpg"
                                                                           alt=""/></a>
                                <a class="image-thumb thumb__element"><img src="assets/images/product4_320x320.jpg"
                                                                           alt=""/></a>
                                <a class="image-thumb thumb__element"><img src="assets/images/product5_320x320.jpg"
                                                                           alt=""/></a>
                            </div>
                            <script>
                                $('.product-single__thumbnails').owlCarousel({
                                    navigation: true,
                                    pagination: false,
                                    autoPlay: 7000,
                                    items: 4,
                                    slideSpeed: 200,
                                    paginationSpeed: 1000,
                                    rewindSpeed: 1000,
                                    itemsDesktop: [1199, 4],
                                    itemsDesktopSmall: [979, 3],
                                    itemsTablet: [768, 3],
                                    itemsTabletSmall: [540, 2],
                                    itemsMobile: [360, 2],
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="grid__item one-half qs-product-information">
                    <div id="quick-shop-container">
                        <h3 id="quick-shop-title"><a
                                href="http://demo.tadathemes.com/products/consequuntur-magni-dolores">Samsung Galaxy
                                S7</a></h3>
                        <div class="rating-star">

                        </div>
                        <div class="description">
                            <div id="quick-shop-description" class="text-left">
                                <ul class="spec">
                                    <li>Technology: GSM / CDMA / HSPA / EVDO / LTE</li>
                                    <li>Dimensions: 142.4 x 69.6 x 7.9 mm</li>
                                    <li>Weight: 152 g</li>
                                    <li>Display: Super AMOLED 5.1 inches</li>
                                    <li>Resolution: 1440 x 2560</li>
                                    <li>OS: Android 6.0 (Marshmallow)</li>
                                    <li>Chipset: Exynos 8890</li>
                                    <li>CPU: Quad-core
                                        <!--...-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form action="http://demo.tadathemes.com/cart/add" method="post" class="AddToCartForm variants"
                              enctype="multipart/form-data">
                            <div id="quick-shop-price-container" class="detail-price">
                                <span class="price"><span class="money">$899.00</span></span>
                            </div>
                            <div class="quantity-wrapper clearfix">
                                <label class="wrapper-title">Quantity</label>
                                <div class="wrapper">
											<span class="qty-down" title="Decrease" data-src="#qs-quantity">
											<i class="fa fa-minus"></i>
											</span>
                                    <input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity"
                                           value="1">
                                    <span class="qty-up" title="Increase" data-src="#qs-quantity">
											<i class="fa fa-plus"></i>
											</span>
                                </div>
                            </div>
                            <div id="quick-shop-variants-container" class="variants-wrapper" style="display: none;">
                                <select id="#quick-shop-variants-9059410310" name="id">
                                    <option value="33071117382">Large</option>
                                </select>
                            </div>
                            <div class="others-bottom">
                                <input id="AddToCart" class="btn btn-1 small add-to-cart AddToCart" type="submit"
                                       name="add" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="module" src="{{ asset('js/loader.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        if ($('.quantity-wrapper').length) {
            $('.quantity-wrapper').on('click', '.qty-up', function () {
                var $this = $(this);
                var qty = $this.data('src');
                $(qty).val(parseInt($(qty).val()) + 1);
            });
            $('.quantity-wrapper').on('click', '.qty-down', function () {
                var $this = $(this);
                var qty = $this.data('src');
                if (parseInt($(qty).val()) > 1)
                    $(qty).val(parseInt($(qty).val()) - 1);
            });
        }
    });
</script>

<div id="LoginModal" class="mfp-hide" style="max-width: 500px;margin: 0 auto;">
    <div id="loginBox" class="loginLightbox">
        <div id="lightboxlogin">
            <form method="post" action="http://demo.tadathemes.com/HTML_DigitalWorld/source/login.html"
                  id="customer_login" accept-charset="UTF-8">
                <input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
                <div id="bodyBox">
                    <h3>Login</h3>
                    <label for="CustomerEmail" class="hidden-label">Email</label>
                    <input type="email" name="customer[email]" id="CustomerEmail" class="input-full"
                           placeholder="Email">
                    <label for="CustomerPassword" class="hidden-label">Password</label>
                    <input type="password" value="" name="customer[password]" id="CustomerPassword" class="input-full"
                           placeholder="Password">
                    <input type="submit" class="btn btn2 btn--full" value="Sign In">
                    <div>
                        <p class="forgot">
                            <a href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Forgot
                                your password?</a>
                        </p>
                        <p class="create">
                            <a href="#create_accountBox" onclick="showCreateAccountForm();return false;"
                               id="CreateAccountPassword">Create Account</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
        <div id="recover-password" style="display:none;">
            <h3>Reset your password</h3>
            <p class="note">
                We will send you an email to reset your password.
            </p>
            <form method="post" action="http://demo.tadathemes.com/HTML_DigitalWorld/source/login.html"
                  accept-charset="UTF-8">
                <input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8"
                                                                                               value="✓">
                <p>
                    <label for="recover-email" class="label">Email</label>
                </p>
                <input type="email" value="" size="30" name="email" id="recover-email" class="text">
                <div class="action_bottom">
                    <input class="btn btn2" type="submit" value="Submit">
                    <a class="btn back" href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a>
                </div>
            </form>
        </div>
        <div id="create_accountBox" style="display:none;">
            <h3>Create Account</h3>
            <div class="form-vertical">
                <form method="post" action="http://demo.tadathemes.com/HTML_DigitalWorld/source/account.html"
                      id="create_customer" accept-charset="UTF-8">
                    <input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8"
                                                                                         value="✓">
                    <label for="FirstName" class="hidden-label">First Name</label>
                    <input type="text" name="customer[first_name]" id="FirstName" class="input-full"
                           placeholder="First Name">
                    <label for="LastName" class="hidden-label">Last Name</label>
                    <input type="text" name="customer[last_name]" id="LastName" class="input-full"
                           placeholder="Last Name">
                    <label for="Email" class="hidden-label">Email</label>
                    <input type="email" name="customer[email]" id="Email2" class="input-full" placeholder="Email">
                    <label for="CreatePassword" class="hidden-label">Password</label>
                    <input type="password" name="customer[password]" id="CreatePassword" class="input-full"
                           placeholder="Password">
                    <p>
                        <input type="submit" value="Create" class="btn btn2 btn--full">
                    </p>
                    <p>
                        <span><a class="btn" href="#"
                                 onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
                    </p>
                </form>
            </div>
        </div>
        <script>
            function showRecoverPasswordForm() {
                $('#recover-password').css("display", 'block');
                $('#lightboxlogin').css("display", 'none');
                $('#create_accountBox').css("display", 'none');
            }

            function hideRecoverPasswordForm() {
                $('#recover-password').css("display", 'none');
                $('#lightboxlogin').css("display", 'block');
                $('#create_accountBox').css("display", 'none');
            }

            function showCreateAccountForm() {
                $('#recover-password').css("display", 'none');
                $('#lightboxlogin').css("display", 'none');
                $('#create_accountBox').css("display", 'block');
            }
        </script>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close"><i class="fa fa-times-circle" aria-hidden="true"></i>
    </button>
</div>
@stack('scripts')
@livewireScripts
</body>
</html>
