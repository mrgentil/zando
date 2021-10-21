<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ZandoPhone| @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/icon.jpg')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('auth/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('auth/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('auth/font/flaticon.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('auth/style.css')}}">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<section class="fxt-template-animation fxt-template-layout1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 fxt-bg-color">
                <div class="fxt-content">
                    <div class="fxt-header" style="margin-bottom: 0;">
                        <a href="{{ route('home') }}" class="fxt-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"></a>
                        <div class="fxt-page-switcher">
                            <a href="{{route('login')}}" class="switcher-text1 {{ request()->is('login') ? 'active' :'' }}">Connexion</a>
                            <a href="{{route(('register'))}}" class="switcher-text1 {{ request()->is('register') ? 'active' :'' }}">Inscription</a>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
            <div class="col-md-6 col-12 fxt-none-767 fxt-bg-img" data-bg-image="{{  asset('auth/img/figure/bg1-l.jpg') }}"></div>
        </div>
    </div>
</section>
<!-- jquery-->
<script src="{{ asset('auth/js/jquery-3.5.0.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('auth/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
<!-- Imagesloaded js -->
<script src="{{ asset('auth/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Validator js -->
<script src="{{ asset('auth/js/validator.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('auth/js/main.js') }}"></script>

</body>

</html>
