<!-- META
    ================================================== -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="description" content="@yield('description')"/>
<meta name="keywords" content="@section ('keywords') ZandoPhone @show"/>

<meta name="language" content="fr"/>
<meta name="copyright" content="//umojatechnology.com"/>
<meta name="author" content="umojatechnology.com"/>
<meta name="apple-mobile-web-app-status-bar-style" content="#78AB4E"/>
<meta property="og:title" content="@yield('title')"/>
<meta property="og:site_name" content="{{ setting('site.title') }}"/>
<meta property="og:url" content="{{ Request::url() }}"/>
<meta property="og:language" content="{{ app()->getLocale() }}"/>
<meta property="og:description" content="@yield('description')"/>
<meta property="og:image" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show"/>

<!-- Schema.org meta pour Google+ -->
<meta itemprop="name" content="@yield('title')">
<meta itemprop="description" content="@yield('description')">
<meta itemprop="image" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">

<!-- Card meta pour Twitter -->
<meta name="twitter:card" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">
<meta name="twitter:site" content="@ZandoPhone">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="@yield('description')">
<!-- Twitter summary card avec image large de 280x150px -->
<meta name="twitter:image:src" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">
<title>@section('title'){{ setting('site.title') }} @show</title>

<link rel="author" href="{{ asset('humans.txt') }}" content="ZandoPhone DRC"/>
<link rel="apple-touch-icon" href="{{ asset("apple-touch-icon.png") }}">
<!-- Favicon -->
<link rel="shortcut icon" href="{{  Voyager::image(setting('site.meta_image')) }}" type="image/png">
<!-- META
================================================== -->
