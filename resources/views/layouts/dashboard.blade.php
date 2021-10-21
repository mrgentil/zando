<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head-meta')

    <!--[if lt IE 9]>
    <script src="{{ asset('dash/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('dash/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/templete.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/business.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/responsive.min.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('dash/css/skin/skin-1.css') }}">
    @stack('css')
</head>
<body id="bg">
<div class="fullmenu">
    <div class="fullhead">
        <div class="demo-close la la-times"></div>
        <ul class="nav menu-nav-link" id="pills-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="wedding-tab" data-toggle="pill" href="#wedding" role="tab" aria-controls="wedding" aria-selected="true">Wedding Directory</a></li>
            <li class="nav-item"><a class="nav-link" id="bride-tab" data-toggle="pill" href="#bride" role="tab" aria-controls="bride" aria-selected="false">Bride Account</a></li>
            <li class="nav-item"><a class="nav-link" id="vender-tab" data-toggle="pill" href="#vender" role="tab" aria-controls="vender" aria-selected="false">Vender Account</a></li>
        </ul>
    </div>
</div>
<div id="loading-area"></div>
<div class="page-wraper">
    <div class="bns-frame">
        <div class="bns-frame-top">
            <div class="bns-logo">
                <a href="{{ route('home') }}"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"></a>
            </div>
            <a class="bns-navicon" href="#">
                <i class="la la-bars"></i>
                <i class="la la-close"></i>
            </a>
            <div class="bns-user">
                <div class="dropdown show">
                    <div role="button" class="dropbx" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{  auth()->user()->avatarLink }}" alt="{{ auth()->user()->name }}"/>
                        <span>{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a href="#">Your account</a></li>
                        <li><a href="#">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bns-frame-side">
            <div class="bns-nav">
                <ul>
                    <li><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                    <li class="bns-menu"><a href="#">Mes téléphones <i class="la la-plus"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('dashboard.phone.create') }}">Ajouter</a></li>
                            <li><a href="{{ route('dashboard.phone.index') }}">Voir tout</a></li>
                            <li><a href="{{ route('dashboard.phone.index') }}?status=active">Actif</a></li>
                            <li><a href="{{ route('dashboard.phone.index') }}?status=pending">En attente</a></li>
                        </ul>
                    </li>

                    <li class="bns-menu"><a href="#">Profil <i class="la la-plus"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('dashboard.profile.edit', 2) }}">Editer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="bns-copy">
                <p>Contact</p>
                <a href="#" class="bns-mail" style="font-size: 14px;">{{ auth()->user()->email }}</a>
                <p class="bns-pno">{{ auth()->user()->whatsapp }}</p>
            </div>
        </div>
        <div class="bg-gray">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- Contact area END -->
    </div>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('dash/js/combining.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('dash/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('dash/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('dash/js/drop-files-element.js') }}" type="module"></script>
</body>

</html>
