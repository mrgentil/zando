@extends('layouts.main')

@section('title') @parent | {{ $phone->name }} @endsection

@section('keywords') @parent, {{ $phone->name }} @endsection

@section('description') {{ $phone->name }} @endsection

@section('meta-image'){{ $phone->firstImage  }}@endsection
@push('css')
    <style>
        .btn-whatsapp{
            background-color: #01e675;
            padding: 10px;
            color: #FFF;
            font-weight: bolder;
            text-decoration: none;
        }
        .btn-whatsapp:hover,
        .btn-whatsapp:focus,
        .btn-whatsapp:active,
        .btn-whatsapp:visited{
            text-decoration: none;
            color: #FFF;
        }
    </style>
@endpush
@section('content')
    <main class="main-content">
        <div id="html-section-product-template" class="html-section">
            <header class="section-header wrapper-breadcrumb">
                <div class="wrapper">
                    <h3>{{ $phone->name }}</h3>
                    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                        <a href="{{ route('home') }}" title="Back to the frontpage" style="color: #1570B7">Accueil </a>
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <a href="{{route('phone.index', $phone->category->slug)}}" title="" style="color: #1570B7"> {{ ucfirst($phone->category->name) }} </a>
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                        <span>{{ $phone->name }}</span>
                    </nav>
                </div>
                @include('flash::message')
            </header>
            <div itemscope="" itemtype="http://schema.org/Product" id="ProductSection" data-section-id="product-template" data-section-type="product-template" data-image-zoom-type="">
                <div class="wrapper">
                    <div itemscope="" itemtype="http://schema.org/Product">
                        <meta itemprop="url" content="product.html">
                        <meta itemprop="image" content="assets/images/product2_320x320.jpg">
                        <div class="next-prev-products">
                            @if($previous)
                            <div class="prev-product2">
                                <a href="{{ route('phone.show', [$previous->slug]) }}" title="{{ $previous->name }}">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="img">
										<img src="{{ $previous->firstImage }}" alt="{{ $next->$previous }}"></span>
                                </a>
                            </div>
                            @endif

                            @if($next)
                            <div class="next-product2">
                                <a href="{{ route('phone.show', [$next->slug]) }}" title="{{ $next->name }}">
                                    <span class="img">
										<img src="{{ $next->firstImage }}" alt="{{ $next->name }}"></span>
                                    <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                            </div>
                            @endif
                        </div>
                        <div class="grid product-single">
                            <div class="grid__item large--two-fifths text-center">
                                <div class="product-single__photos elevatezoom" id="ProductPhoto">
                                    <img src="{{ $phone->firstImage }}" alt="{{ $phone->name }}" id="ProductPhotoImg" data-image-id="21477894598" data-zoom-image="{{ $phone->firstImage }}">
                                </div>
                                <script>
                                    if($(window).innerWidth() <= 580){
                                        $('#ProductPhoto img').removeAttr('id');
                                    }
                                </script>
                                <ul class="product-single__thumbnails grid-uniform" id="ProductThumbs">
                                    @foreach($phone->jsonDecodeImages as $image)
                                    <li class="thumb__element">
                                        <a href="{{ $image }}" class="product-single__thumbnail">
                                            <img src="{{ $image }}" alt="{{ $phone->name }}">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <ul class="gallery">
                                    @foreach($phone->jsonDecodeImages as $key => $image)
                                        <li data-image-id="{{$key}}" class="gallery__item" data-mfp-src="{{ $image }}"></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="grid__item product-single__meta--wrapper large--three-fifths">
                                <div class="product-single__meta grid__item five-eighths">
                                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <div class="price_wrapper">
                                            <span id="PriceA11y" class="visually-hidden">Regular price</span>
                                            <span id="ProductPrice" class="product-single__price" itemprop="price" content="349.99">
													<span class="money" doubly-currency-usd="34999" doubly-currency="USD">{{ $phone->price }} $</span>
													</span>
                                        </div>
                                                <span class="rating">
                                                    <span class="spr-badge" id="spr_badge_9059380358" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            <i class="spr-icon spr-icon-star"></i>
															<i class="spr-icon spr-icon-star"></i>
															<i class="spr-icon spr-icon-star"></i>
															<i class="spr-icon spr-icon-star"></i>
															<i class="spr-icon spr-icon-star"></i>
														</span>
													<span class="spr-badge-caption">1 review</span>
												</span>
												</span>
                                        <meta itemprop="priceCurrency" content="USD">
                                        <link itemprop="availability" href="http://schema.org/InStock">
                                        <form action="{{ route('phone.add-to.cart', $phone) }}" method="post" enctype="multipart/form-data" class="product-single__form AddToCartForm" id="">
                                            @csrf
                                            <div class="product-single__description rte" itemprop="description">
                                                {!! nl2br(e($phone->caracteristiques)) !!}
                                            </div>
                                            <div class="radio-wrapper js product-form__item">
                                                <label class="single-option-radio__label" for="ProductSelect-option-0">
                                                    Couleurs </label>
                                                <fieldset class="single-option-radio" data-option="option1" name="Color" id="ProductSelect-option-0">
                                                    @foreach($phone->colors as $color)
                                                        <input type="radio" value="Silver" name="Color"
                                                               class="single-option-selector__radio" data-option-index="{{ $color->id }}" id="ProductSelect-option-Color-Silver">
                                                        <label for="ProductSelect-option-Color-Silver" style="background: {{ $color->code }};color: #FFF">{{ $color->name }}</label>
                                                    @endforeach
                                                </fieldset>
                                            </div>


                                            @if($phone->user->role->name === 'user')
                                                <div class="product-single__add-to-cart" style="margin-top: 20px;">
                                                   <a href="https://api.whatsapp.com/send?phone={{ $phone->user->whatsapp }}" target="_blank" class="btn-whatsapp">
                                                       Contacter par WhastApp
                                                   </a>
                                               </div>
                                                @else
                                                <div class="product-single__quantity">
                                                    <label for="Quantity" class="product-single__quantity-label js-quantity-selector">Quantité</label>
                                                    <div class="js-qty">
                                                        <button type="button" class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-id="" data-qty="0" aria-label="Reduce item quantity by one">
                                                            <span class="icon icon-minus" aria-hidden="true"></span>
                                                            <span class="fallback-text" aria-hidden="true">-</span>
                                                        </button>
                                                        <input type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="quantity" id="Quantity">
                                                        <button type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-id="" data-qty="11" aria-label="Increase item quantity by one">
                                                            <span class="icon icon-plus" aria-hidden="true"></span>
                                                            <span class="fallback-text" aria-hidden="true">+</span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="product-single__add-to-cart">
                                                    <button type="submit" name="add" id="AddToCart" class="btn AddToCart">
														<span id="AddToCartText">
														Ajouter au panier </span>
                                                    </button>
                                                </div>
                                                @endif
                                        </form>
                                    </div>

                                </div>

                            </div>
                            <hr class="hr--clear">
                            <div class="text-center">
                                <a href="{{route('phone.index', $phone->category->slug)}}" class="return-link"><i class="fa fa-angle-left" aria-hidden="true"></i> Voir les téléphones pour cette marque</a>
                            </div>
                            <div class="grid grid__item product-information">
                                <div id="tabs-information">
                                    <ul class="nav nav-tabs tabs-left sideways">
                                        <li class="description active"><a href="#desc" data-toggle="tab" class="active">Description</a></li>
                                    </ul>
                                    <div class="tab-panel active" id="desc">
                                        {!! nl2br(e($phone->description))  !!}
                                    </div>
                                </div>
                                <script>
                                    $('#tabs-information').easytabs({animationSpeed: 'fast', updateHash: false});
                                </script>
                            </div>
                            <div id="product-additional-information">
                                <div class="related-products">
                                    @if($related_phones->isNotEmpty())
                                    <header class="section-header">
                                        <h3>Téléphones connexes:</h3>
                                    </header>
                                    <ul class="related-products-items grid-uniform related-slider">
                                        @foreach($related_phones as $ph)
                                        <li class="realted-element">
                                            <div class="grid__item">
                                                <div class="grid-view-item">
                                                    <div class="grid-normal-display">
                                                        <div class="grid__image product-image">
                                                            <a class="grid-view-item__link" href="{{ route('phone.show', [$ph->slug]) }}">
                                                                <img class="grid-view-item__image" src="{{ $ph->firstImage }}" alt="Samsung Galaxy S7">
                                                            </a>
                                                            <div class="product-label">
                                                                <div class="label-element best-label">
                                                                    <span style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                                </div>
                                                                <div class="label-element trend-label">
                                                                    <span style="color:#ffffff; background-color: #003cff;">{{ $ph->type->name }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid__information product-information">
                                                            <div class="h4 grid-view-item__title text-center">
                                                                <a href="{{ route('phone.show', [$ph->slug]) }}">{{ str_limit($ph->name, 18) }}</a>
                                                            </div>
                                                            <div class="rating-star  text-center">
																		<span class="spr-badge" id="spr_badge_9059410310" data-rating="5.0">
																			<span class="spr-starrating spr-badge-starrating">
																				<i class="spr-icon spr-icon-star" style=""></i>
																				<i class="spr-icon spr-icon-star" style=""></i>
																				<i class="spr-icon spr-icon-star" style=""></i>
																				<i class="spr-icon spr-icon-star" style=""></i>
																				<i class="spr-icon spr-icon-star" style=""></i>
																			</span>
																			<span class="spr-badge-caption">1 review</span>
																		</span>
                                                            </div>
                                                            <div class="grid-view-item__meta text-center">																														<span class="visually-hidden">translation missing: en.products.product.regular_price</span>
                                                                <span class="product-price__price">
                                                                    <a href="#" class="badge badge-primary btn-badge">{{ $ph->price }} $</a>
                                                                    <a href="{{ route('phone.show', [$ph->slug]) }}" class="badge badge-info btn-badge">Acheter</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                         @endforeach
                                    </ul>
                                    @endif
                                    <script>
                                        $('.related-slider').owlCarousel({
                                            navigation : true,
                                            pagination: false,
                                            autoPlay:false,
                                            items: 4,
                                            slideSpeed : 200,
                                            paginationSpeed : 1000,
                                            rewindSpeed : 1000,
                                            itemsDesktop : [1199,4],
                                            itemsDesktopSmall : [979,3],
                                            itemsTablet: [768,2],
                                            itemsTabletSmall: [540,2],
                                            itemsMobile : [360,1],
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
