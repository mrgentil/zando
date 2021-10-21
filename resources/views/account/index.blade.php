@extends('layouts.main')

@section('title') @parent Mon Compte @endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/megafish.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.navgoco.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
@endpush
@section('content')
    <div id="main-content">

        <section class="kopa-area kopa-area-16 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-5">
                <span></span>
            </div>

            <div class="container">

                <div class="kopa-breadcrumb">

                    <h3>Mon Compte</h3>

                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">Mon Compte</span>
                                </a>
                            </span>
                    </div>

                </div>
                <!-- kopa-breadcrumb -->

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-16 -->

        <section class="kopa-area kopa-area-20" style="padding-top: 0;">

            <div class="container">
                @include('flash::message')
                <div class="row">
                    <div class="sidebar style-01 col-md-3 col-sm-3 col-xs-12">
                        <div class="widget widget_categories">
                            @include('partials.account.sidebar')
                        </div>
                        <!-- widget -->
                    </div>
                    <div class="main-col col-md-9 col-sm-9 col-xs-12">

                        <div class="widget ct-widget-2">
                            <div class="widget-content">
                                <div class="widget-content-area-2" style="margin-top: 0;">
                                    <!-- entry-header -->
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            {{-- <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>--}}
                                            <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{ route('account.update') }}">
                                                @csrf
                                                <input type="hidden" name="_method" value="PUT">
                                                <div class="col2-set" id="customer_details" style="margin-bottom: 20px">

                                                    <div class="col-1">
                                                        <div class="woocommerce-billing-fields">
                                                            <p class="form-row form-row-last">
                                                                <label for="name">Nom</label>
                                                                <input type="text" id="name" name="name"
                                                                       class="input-text" value="{{ old('name') ? old('name') : auth()->user()->name }}">
                                                                @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </p>
                                                            <div class="clear"></div>

                                                            <p class="form-row form-row-first">
                                                                <label for="email">Email</label>
                                                                <input type="email" id="email" name="email" class="input-text" value="{{ old('email') ? old('email') : auth()->user()->email }}">
                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </p>
                                                            <p class="form-row form-row-first">
                                                                <label for="password">Mot de passe (Laissez vide pour garder le même)</label>
                                                                <input type="password" id="password" name="password" class="input-text" value="{{ old('password') }}">
                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="woocommerce-checkout-review-order">
                                                    <div class="form-row place-order">
                                                        <input type="submit" class="button alt"  id="place_order" value="Modifier">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- entry-content -->

                                </div>
                            </div>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-12 -->

                </div>
                <!-- row -->

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-18 -->

    </div>
    <!-- main-content -->
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.navgoco.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sliderPro.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush
