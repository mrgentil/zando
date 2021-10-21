@extends('layouts.main')

@section('title') @parent Ajouter un livre @endsection

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
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/woocommerce.css') }}" media="all"/>
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

                    <h3>Ajouter un livre</h3>

                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">Ajouter un livre</span>
                                </a>
                            </span>
                    </div>

                </div>
                <!-- kopa-breadcrumb -->

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-16 -->

        <section class="kopa-area kopa-area-20">

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
                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <form name="checkout" method="post" enctype="multipart/form-data" class="checkout woocommerce-checkout" action="{{ route('account.book.store') }}">
                                            @csrf
                                            <div class="col2-set" id="customer_details">
                                                <div class="col-1">
                                                    <div class="woocommerce-billing-fields">

                                                        <p class="form-row form-row-wide">
                                                            <label for="title">Titre</label>
                                                            <input type="text" class="input-text" id="title" name="title" value="{{ old('title') }}" autofocus>
                                                            @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="status">Statut</label>
                                                            <select id="status" name="status">
                                                                <option value="PAYANT">Payant</option>
                                                                <option value="GRATUIT">Gratuit</option>
                                                            </select>
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label for="cost">Prix (laissez vide si le livre est gratuit)</label>
                                                            <input type="number" class="input-text" id="cost" name="cost" value="{{ old('cost') }}" autofocus>
                                                            @error('cost')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </p>
                                                        <div class="clear"></div>

                                                        <p class="form-row form-row-wide">
                                                            <label for="category_id">Catégorie</label>
                                                            <select name="category_id" id="category_id">
                                                                @foreach($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('category_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </p>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>

                                                <div class="col-2">
                                                    <div class="woocommerce-shipping-fields">
                                                        <p class="form-row form-row notes">
                                                            <label for="description">Description</label>
                                                            <textarea style="min-height: 100px" class="input-text " id="description"
                                                                      placeholder="Une petite description pour votre livre." name="description" rows="2" cols="20">{{ old('description') }}</textarea>
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label>Image (optionel)</label>
                                                            <input type="file" name="file" id="file" class="input-text">
                                                            @error('file')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label>Fichier (.pdf)</label>
                                                            <input type="file" name="pdf" id="pdf" class="input-text">
                                                            @error('pdf')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="woocommerce-checkout-review-order">
                                                <div id="payment">
                                                    <div class="form-row place-order">
                                                        <input type="submit" class="button alt" id="place_order" value="Publier">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
