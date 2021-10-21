@extends('layouts.main')

@section('title') @parent Mes livres @endsection

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
    <style>
        .ct-item-3 {
            padding: 20px !important;
        }
    </style>
@endpush
@section('content')
    <div id="main-content">

        <section class="kopa-area kopa-area-16 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-5">
                <span></span>
            </div>

            <div class="container">

                <div class="kopa-breadcrumb">

                    <h3>Mes livres</h3>

                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">Mes livres</span>
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
                                <div class="widget-content-area-2" style="margin-top: 0;">
                                    <ul class="row ul-mh">
                                        @forelse($books as $book)
                                        <li class="col-md-6 col-sm-6 col-xs-12" style="height: 345px;margin-bottom: 10px">
                                            <article class="entry-item ct-item-3 style-0{{ $book->status === 'GRATUIT' ? '1' : '4'  }}">
                                                <header class="clearfix">
                                                    <div class="kopa-pull-left">
                                                        <h3 class="ct-title-10">{{ $book->category->name }}</h3>
                                                    </div>
                                                    <div class="kopa-pull-right">
                                                        <p class="ct-title-8" style="font-size: 13px">{{ $book->created_at }}</p>
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    <h5>{{ str_limit($book->title, 100) }}</h5>
                                                    <p>
                                                        {{ str_limit($book->description, 100) }}
                                                    </p>
                                                    <a class="kopa-btn-6" href="{{ route('account.book.edit', $book) }}" style="margin-top: 0;">Editer</a>
                                                </div>
                                            </article>
                                        </li>
                                        @empty
                                            <li class="col-md-6 col-sm-6 col-xs-6">
                                                Vous n'avez publié aucun livre pour l'instant
                                            </li>
                                        @endforelse


                                    </ul>
                                    {{--<table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Prix</th>
                                            <th scope="col">Catégorie</th>
                                            <th scope="col">Date D'ajout</th>
                                            <th scope="col">Statut</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($books as $book)
                                        <tr>
                                            <td>{{ str_limit($book->title, 100) }}</td>
                                            <td>{{ $book->cost }}</td>
                                            <td>{{ $book->category->name }}</td>
                                            <td>{{ $book->created_at }}</td>
                                            <td>{{ $book->active === 'active' ? 'Validé' : 'En attente de validation' }}</td>
                                            <td><a href="#">Editer</a> / <a href="#">Supprimer</a></td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="2">Vous n'avez publié aucun livre pour l'instant</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>--}}
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
