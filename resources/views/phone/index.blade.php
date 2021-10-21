@extends('layouts.main')

@section('title') @parent | Les téléphones {{ ucfirst($category) }} @endsection

@section('keywords') @parent, Les téléphones @endsection

@section('description') Les téléphones @endsection

@section('content')
<div id="html-section-1487408997957" class="html-section index-section product-banner-grid">
    <div class="wrapper">
        <div class="home-product-sidebar-wrapper grid--table grid--full"
             style="padding-top:10px; padding-bottom:10px;">
            <div class="grid__item block_heading grid--table grid--full style_default">
                <div class="area-header grid__item one-third">
                    <h2>

                        <a href="#">{{ ucfirst($category) }}</a>
                    </h2>
                </div>
                <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

            </div>
            <div class="grid__item block_content grid--table grid--full">

                <div class="grid__item four-fifths content_products">
                    <div class="grid grid--uniform grid--view-items">
                        @foreach($phones as $phone)

                            <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                <div class="grid-view-item">
                                    <div class="grid-normal-display">
                                        <div class="grid__image product-image">
                                            <a class="grid-view-item__link"
                                               href="{{ route('phone.show', $phone->slug) }}">

                                                <img class="grid-view-item__image"
                                                     src="{{ $phone->firstImage }}"
                                                     alt="{{ $phone->name }}">
                                            </a>
                                            <div class="product-label">
                                                <div class="label-element new-label">
                                                    {{--<span
                                                        style="color:#ffffff; background-color: #ffb400;">New</span>
                                    </div>--}}
                                                    <div class="label-element trend-label">
                                                        <span>{{ $phone->type->name }}</span>
                                                    </div>
                                                </div>
                                                <ul class="action-button">
                                                    <li class="add-to-cart-form">
                                                        <form
                                                            action="#"
                                                            method="post" enctype="multipart/form-data"
                                                            class="AddToCartForm form-vertical">
                                                            <div class="effect-ajax-cart">
                                                                <input type="hidden" name="quantity" value="1">
                                                                <button class="btn btn-1 select-option"
                                                                        type="button"
                                                                        onclick="javascript:location.href='product.html'"
                                                                        title="Select Options"><i
                                                                        class="fa fa-bars"></i> Options
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a class="wish-list btn" href="page-wishlist-2.html"><i
                                                                class="fa fa-heart" title="Wishlist"></i></a>
                                                    </li>
                                                    <li>
                                                        <div class="quickview">
                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                <div
                                                                    data-handle="cum-sociis-natoque-penatibus-et-magnis-7"
                                                                    class="quick_shop-div">
                                                                    <div class="btn quick_shop"
                                                                         data-mfp-src="#quick-shop-modal"
                                                                         data-effect="mfp-zoom-out">
                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="h4 grid-view-item__title text-center">

                                            <a href="{{ route('phone.show', $phone->slug) }}">{{ str_limit($phone->name, 18) }}</a>
                                        </div>
                                        <div class="grid-view-item__meta text-center">
                                            <span class="product__price">
                                                <a href="#" class="badge badge-primary btn-badge">{{ $phone->price }} $</a>
                                                <a href="{{ route('phone.show', [$phone->slug]) }}" class="badge badge-info btn-badge">Acheter</a>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <script>
                    $("#html-section-1487408997957 .mobile-toggle").on("click", function () {
                        $('#html-section-1487408997957 .area-tags').toggleClass("open")
                    });
                </script>
            </div>
        </div>
    </div>


</div>
@stop
