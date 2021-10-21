@extends('layouts.main')

@section('title') @parent | Acceuil @endsection

@section('keywords') @parent, Acceuil @endsection

@section('description') Page d'accueil @endsection

@push('css')
    <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,100' rel='stylesheet' type='text/css'>
    <style>
        @font-face {
            font-family: 'Azonix Regular';
            font-style: normal;
            font-weight: normal;
            src: local('Azonix Regular'), url('fonts/Azonix.woff') format('woff');
        }
        span {
            margin: 0;
            padding: 0;
        }

        .end-left {
            margin-left: -235px;
        }

        .end-right {
            margin-right: -117.5px;
        }

        .outline {
            position: absolute;
            top: 20px;
        }

        .outline {
            color: black;
            -webkit-text-fill-color: transparent;
            /* Will override color (regardless of order) */
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #FFF;
            font-size: 64px;
            font-family: 'Poppins', sans-serif;
        }

        .orbs {
            font-family: 'Poppins', sans-serif;
            font-weight: 100;
            display: block;
            font-size: 115px;
        }
        .orbs span {
            color: red;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            text-shadow: 0 0 20px #1570B7, 1px 1px 20px #1570B7, 2px 2px 20px #1570B7, -1px -1px 20px #1570B7, -2px -2px 20px #1570B7;
            position: absolute;
            left: 50%;
        }
        .orbs span:first-child {
            margin-left: -210px;
        }
        .orbs span:not(:first-child) {
            margin-left: -35px;
        }

        .glow {
            font-family: 'Azonix Regular', serif;
            font-weight: 300;
            color: #FFF;
            margin-left: -236.5px;
            font-size: 41px;
            position: absolute;
            top: 90px;
            left: 50%;
            white-space: nowrap;
        }

        div.btn-animation {
            display: block;
            height: 100%;
            -webkit-animation: hue-rotate 10s linear infinite;
            animation: hue-rotate 10s linear infinite;
        }

        .button {
            -webkit-font-smoothing: antialiased;
            background-color: #222;
            border: none;
            color: #fff;
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 100;
            text-decoration: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            letter-spacing: 1px;
            color: white;
            padding: 11px 33px 14px 30px;
            text-transform: uppercase;
            -webkit-transition: all 0.1s ease-out;
            transition: all 0.1s ease-out;
        }
        .button:hover {
            background-color: #90feb5;
            color: #fff;
        }
        .button:active {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }
        .button--bubble {
            position: relative;
            z-index: 2;
            color: white;
            background: none;
        }
        .button--bubble:hover {
            background: none;
        }
        .button--bubble:hover + .button--bubble__effect-container .circle {
            background: #44fd82;
        }
        .button--bubble:hover + .button--bubble__effect-container .button {
            background: #44fd82;
        }
        .button--bubble:active + .button--bubble__effect-container {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }
        .button--bubble__container {
            position: relative;
            display: inline-block;
        }
        .button--bubble__container .effect-button {
            position: absolute;
            width: 50%;
            height: 25%;
            top: 50%;
            left: 25%;
            z-index: 1;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            background: #349fe2;
            -webkit-transition: background 0.1s ease-out;
            transition: background 0.1s ease-out;
        }

        .button--bubble__effect-container {
            position: absolute;
            display: block;
            width: 200%;
            height: 400%;
            top: -150%;
            left: -50%;
            -webkit-filter: url("#goo");
            filter: url("#goo");
            -webkit-transition: all 0.1s ease-out;
            transition: all 0.1s ease-out;
            pointer-events: none;
        }
        .button--bubble__effect-container .circle {
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 15px;
            background: #349fe2;
            -webkit-transition: background 0.1s ease-out;
            transition: background 0.1s ease-out;
        }
        .button--bubble__effect-container .circle.top-left {
            top: 40%;
            left: 27%;
        }
        .button--bubble__effect-container .circle.bottom-right {
            bottom: 40%;
            right: 27%;
        }

        .goo {
            position: absolute;
            visibility: hidden;
            width: 1px;
            height: 1px;
        }

        html, body {
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .button--bubble__container {
            /* top: 50%;
             margin-top: -25px;*/
        }

        @-webkit-keyframes hue-rotate {
            from {
                -webkit-filter: hue-rotate(0);
                -moz-filter: hue-rotate(0);
                -ms-filter: hue-rotate(0);
                filter: hue-rotate(0);
            }
            to {
                -webkit-filter: hue-rotate(360deg);
                -moz-filter: hue-rotate(360deg);
                -ms-filter: hue-rotate(360deg);
                filter: hue-rotate(360deg);
            }
        }

        @keyframes hue-rotate {
            from {
                -webkit-filter: hue-rotate(0);
                -moz-filter: hue-rotate(0);
                -ms-filter: hue-rotate(0);
                filter: hue-rotate(0);
            }
            to {
                -webkit-filter: hue-rotate(360deg);
                -moz-filter: hue-rotate(360deg);
                -ms-filter: hue-rotate(360deg);
                filter: hue-rotate(360deg);
            }
        }
        .bg-shadow:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.35);
            display: block;
        }
        .banner-area2, .banner-area0{
            background: url({{ asset('assets/images/bg1.jpg') }}) center;
            background-size: cover;
            min-height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFF;
        }
        .banner-area2{
            background: url({{ asset('assets/images/bg2.jpg') }}) center;
            background-size: cover;
            min-height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFF;
        }
        .banner-area3{
            background: url({{ asset('assets/images/bg3.jpg') }}) center;
            background-size: cover;
            min-height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFF;
        }

        @media (max-width:768px){
            .banner-area2, .banner-area0{
                background: url({{ asset('assets/images/bg_phone1.jpg') }});
                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .banner-area2{
                background: url({{ asset('assets/images/bg_phone2.jpg') }});
                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .banner-area3{
                background: url({{ asset('assets/images/bg_phone3.jpg') }});
                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        }
        #owl-demo .item img{
            display: block;
            width: 100%;
            height: auto;
        }
        .title-smaller{
            font-size: 50px;
            font-family: 'Poppins', sans-serif !important;
        }
        .subtitle-smaller{
            font-size: 34px;
        }
        .z-index{
            z-index: 9999;
        }

        .box-relative{
            position: relative;
        }
        .text-phone1{
            position: absolute;
            top: 35px;
            right: 0;
        }
        .text-phone2{
            position: absolute;
            bottom: 35px;
            right: 0;
        }
        .home-product-sidebar-wrapper .owl-controls .owl-buttons div,
        .tabs-grid .owl-controls .owl-buttons div,
        .tabs-slider .owl-controls .owl-buttons div,
        .section-product-slider .owl-controls .owl-buttons div,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div,
        .brands-slider .brands_group .owl-controls .owl-buttons div,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div,
        .related-products .owl-controls .owl-buttons div {
            display: block;
            position: absolute;
            width: 80px;
            height: 80px;
            text-align: center;
            line-height: 94px;
            border-radius: 0;
            background: #fff;
            color: #151515;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            font-size: 0;
            margin: 0
        }

        .home-product-sidebar-wrapper .owl-controls .owl-buttons div:hover,
        .tabs-grid .owl-controls .owl-buttons div:hover,
        .tabs-slider .owl-controls .owl-buttons div:hover,
        .section-product-slider .owl-controls .owl-buttons div:hover,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div:hover,
        .brands-slider .brands_group .owl-controls .owl-buttons div:hover,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div:hover,
        .related-products .owl-controls .owl-buttons div:hover {
            color: #ee3131
        }

        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.next,
        .tabs-grid .owl-controls .owl-buttons div.next,
        .tabs-slider .owl-controls .owl-buttons div.next,
        .section-product-slider .owl-controls .owl-buttons div.next,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.next,
        .brands-slider .brands_group .owl-controls .owl-buttons div.next,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.next,
        .related-products .owl-controls .owl-buttons div.next,
        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.owl-next,
        .tabs-grid .owl-controls .owl-buttons div.owl-next,
        .tabs-slider .owl-controls .owl-buttons div.owl-next,
        .section-product-slider .owl-controls .owl-buttons div.owl-next,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.owl-next,
        .brands-slider .brands_group .owl-controls .owl-buttons div.owl-next,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.owl-next,
        .related-products .owl-controls .owl-buttons div.owl-next {
            right: 0
        }

        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.next:before,
        .tabs-grid .owl-controls .owl-buttons div.next:before,
        .tabs-slider .owl-controls .owl-buttons div.next:before,
        .section-product-slider .owl-controls .owl-buttons div.next:before,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.next:before,
        .brands-slider .brands_group .owl-controls .owl-buttons div.next:before,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.next:before,
        .related-products .owl-controls .owl-buttons div.next:before,
        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.owl-next:before,
        .tabs-grid .owl-controls .owl-buttons div.owl-next:before,
        .tabs-slider .owl-controls .owl-buttons div.owl-next:before,
        .section-product-slider .owl-controls .owl-buttons div.owl-next:before,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.owl-next:before,
        .brands-slider .brands_group .owl-controls .owl-buttons div.owl-next:before,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.owl-next:before,
        .related-products .owl-controls .owl-buttons div.owl-next:before {
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font-size: 40px;
            content: "\f105"
        }

        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.prev,
        .tabs-grid .owl-controls .owl-buttons div.prev,
        .tabs-slider .owl-controls .owl-buttons div.prev,
        .section-product-slider .owl-controls .owl-buttons div.prev,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.prev,
        .brands-slider .brands_group .owl-controls .owl-buttons div.prev,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.prev,
        .related-products .owl-controls .owl-buttons div.prev,
        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.owl-prev,
        .tabs-grid .owl-controls .owl-buttons div.owl-prev,
        .tabs-slider .owl-controls .owl-buttons div.owl-prev,
        .section-product-slider .owl-controls .owl-buttons div.owl-prev,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.owl-prev,
        .brands-slider .brands_group .owl-controls .owl-buttons div.owl-prev,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.owl-prev,
        .related-products .owl-controls .owl-buttons div.owl-prev {
            left: 0
        }

        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.prev:before,
        .tabs-grid .owl-controls .owl-buttons div.prev:before,
        .tabs-slider .owl-controls .owl-buttons div.prev:before,
        .section-product-slider .owl-controls .owl-buttons div.prev:before,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.prev:before,
        .brands-slider .brands_group .owl-controls .owl-buttons div.prev:before,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.prev:before,
        .related-products .owl-controls .owl-buttons div.prev:before,
        .home-product-sidebar-wrapper .owl-controls .owl-buttons div.owl-prev:before,
        .tabs-grid .owl-controls .owl-buttons div.owl-prev:before,
        .tabs-slider .owl-controls .owl-buttons div.owl-prev:before,
        .section-product-slider .owl-controls .owl-buttons div.owl-prev:before,
        .blogs-slider .home-blog-wrapper .owl-controls .owl-buttons div.owl-prev:before,
        .brands-slider .brands_group .owl-controls .owl-buttons div.owl-prev:before,
        .product-single .product-single__thumbnails .owl-controls .owl-buttons div.owl-prev:before,
        .related-products .owl-controls .owl-buttons div.owl-prev:before {
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font-size: 40px;
            content: "\f104"
        }
    </style>
    <link rel="stylesheet" href="{{ asset('swiper-bundle.min.css') }}">

@endpush
@section('content')
    <main class="main-content" style="margin-top: -20px;">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!--First Slide-->
                <div class="swiper-slide box-relative">
                    <div class="banner-area0 d-flex align-items-center">
                        <div class="bg-shadow"></div>
                        <div class="d-block d-sm-none z-index">
                            <div class="text-phone1">
                                <h1 class="title-smaller">Zandophone</h1>
                                <p class="subtitle-smaller">
                                    Smartphone's universe
                                </p>
                                <p>
                                    <button class="btn" style="margin-right: 10px;">Vendre</button>
                                    <button class="btn">Acheter</button>
                                </p>
                            </div>
                        </div>
                        <div class="d-none d-sm-block z-index">
                            <div style=" position: absolute;left: 28%;top: 22%;">

                                <span class="outline end-left">
                                              ZANDOPHONE
                                            </span>



                                <span class="glow">
                                              Smartphone's universe
                                            </span>
                            </div>
                            <div style="position: absolute;top:51%;left:11%;display: flex">
                                <div class="btn-animation" style="margin-right: 10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                                        <defs>
                                            <filter id="goo">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                                <feComposite in="SourceGraphic" in2="goo"/>
                                            </filter>
                                        </defs>
                                    </svg>

                                    <span class="button--bubble__container">
                                              <a href="#campaign" class="button button--bubble">
                                                Vendre
                                              </a>
                                              <span class="button--bubble__effect-container">
                                                <span class="circle top-left"></span>
                                                <span class="circle top-left"></span>
                                                <span class="circle top-left"></span>

                                                <span class="button effect-button"></span>

                                                <span class="circle bottom-right"></span>
                                                <span class="circle bottom-right"></span>
                                                <span class="circle bottom-right"></span>
                                              </span>
                                            </span>
                                </div>
                                <div class="btn-animation">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                                        <defs>
                                            <filter id="goo">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                                <feComposite in="SourceGraphic" in2="goo"/>
                                            </filter>
                                        </defs>
                                    </svg>

                                    <span class="button--bubble__container">
                                          <a href="#campaign" class="button button--bubble">
                                            Acheter
                                          </a>
                                          <span class="button--bubble__effect-container">
                                            <span class="circle top-left"></span>
                                            <span class="circle top-left"></span>
                                            <span class="circle top-left"></span>

                                            <span class="button effect-button"></span>

                                            <span class="circle bottom-right"></span>
                                            <span class="circle bottom-right"></span>
                                            <span class="circle bottom-right"></span>
                                          </span>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box-relative">
                    <div class="banner-area2 d-flex align-items-center">
                        <div class="bg-shadow"></div>
                        <div class="d-block d-sm-none z-index">
                            <div class="text-phone2">
                                <h1 class="title-smaller">Zandophone</h1>
                                <p class="subtitle-smaller">
                                    Smartphone's universe
                                </p>
                                <p>
                                    <button class="btn" style="margin-right: 10px;">Vendre</button>
                                    <button class="btn">Acheter</button>
                                </p>
                            </div>
                        </div>
                        <div class="d-none d-sm-block z-index">
                            <div style=" position: absolute;right: 36%;top: 22%;">

                                <span class="outline end-left">
                                              ZANDOPHONE
                                            </span>



                                <span class="glow">
                                   Smartphone's universe
                                </span>
                            </div>
                            <div style="position: absolute;top:51%;right:11%;display: flex">
                                <div class="btn-animation" style="margin-right: 10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                                        <defs>
                                            <filter id="goo">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                                <feComposite in="SourceGraphic" in2="goo"/>
                                            </filter>
                                        </defs>
                                    </svg>

                                    <span class="button--bubble__container">
                                              <a href="#campaign" class="button button--bubble">
                                                Vendre
                                              </a>
                                              <span class="button--bubble__effect-container">
                                                <span class="circle top-left"></span>
                                                <span class="circle top-left"></span>
                                                <span class="circle top-left"></span>

                                                <span class="button effect-button"></span>

                                                <span class="circle bottom-right"></span>
                                                <span class="circle bottom-right"></span>
                                                <span class="circle bottom-right"></span>
                                              </span>
                                            </span>
                                </div>
                                <div class="btn-animation">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                                        <defs>
                                            <filter id="goo">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                                <feComposite in="SourceGraphic" in2="goo"/>
                                            </filter>
                                        </defs>
                                    </svg>

                                    <span class="button--bubble__container">
                                              <a href="#campaign" class="button button--bubble">
                                                Acheter
                                              </a>
                                              <span class="button--bubble__effect-container">
                                                <span class="circle top-left"></span>
                                                <span class="circle top-left"></span>
                                                <span class="circle top-left"></span>

                                                <span class="button effect-button"></span>

                                                <span class="circle bottom-right"></span>
                                                <span class="circle bottom-right"></span>
                                                <span class="circle bottom-right"></span>
                                              </span>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box-relative">
                    <div class="banner-area3 d-flex align-items-center">
                        <div class="bg-shadow"></div>
                        <div class="d-block d-sm-none z-index">
                            <div class="text-phone1">
                                <h1 class="title-smaller">Zandophone</h1>
                                <p class="subtitle-smaller">
                                    Smartphone's universe
                                </p>
                                <p>
                                    <button class="btn" style="margin-right: 10px;">Vendre</button>
                                    <button class="btn">Acheter</button>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Etc..-->
                <div class="swiper-button-next" style="color: #FFF"></div>
                <div class="swiper-button-prev" style="color: #FFF"></div>
            </div>
        </div>
        <div class="content">
            <div class="index-sections">
                <div id="html-section-1481729825394" class="html-section index-section products-grid">
                    <div class="wrapper">
                        <div class="home-product-grid-wrapper" style="padding-top:40px;">
                            <div class="grid grid--uniform grid--view-items">
                                @foreach($phones as $phone)
                                    <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                        <div class="grid-view-item">
                                            <div class="grid-normal-display">
                                                <div class="grid__image product-image">
                                                    <a class="grid-view-item__link" href="{{ route('phone.show', [$phone->slug]) }}">
                                                        <img class="grid-view-item__image"
                                                             src="{{ $phone->firstImage }}"
                                                             alt="{{ $phone->title }}">
                                                    </a>
                                                    <div class="product-label">
                                                        <div class="label-element best-label">
                                                        <span
                                                            style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                        </div>
                                                        <div class="label-element trend-label">
                                                        <span>{{ $phone->type->name }}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="grid__information product-information">
                                                    <div class="h4 grid-view-item__title">
                                                        <a href="{{ route('phone.show', [$phone->slug]) }}">{{ str_limit($phone->name, 18) }}</a>
                                                    </div>
                                                    <div class="rating-star">
                                                    <span class="spr-badge" data-rating="5.0">
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
                                                    <div class="grid-view-item__meta"><span class="visually-hidden">translation missing: en.products.product.regular_price</span>
                                                        <span class="product-price__price">
                                                            <a href="#" class="badge badge-primary btn-badge">{{ $phone->price }} $</a>
                                                            <a href="{{ route('phone.show', [$phone->slug]) }}" class="badge badge-info btn-badge">Acheter</a
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @forelse($categories2 as $category)
                    @if($category->phones->isNotEmpty())
                        <div id="html-section-1487408997957" class="html-section index-section product-banner-grid">
                            <div class="wrapper">
                                <div class="home-product-sidebar-wrapper grid--table grid--full"
                                     style="padding-top:10px; padding-bottom:10px;">
                                    <div class="grid__item block_heading grid--table grid--full style_default">
                                        <div class="area-header grid__item one-third">
                                            <h2>
                                                <img src="{{ Voyager::image($category->icon) }}" alt="icon">
                                                <a href="{{ route('phone.index', $category->slug) }}">{{ $category->name }}</a>
                                            </h2>
                                        </div>
                                        <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                                    </div>
                                    <div class="grid__item block_content grid--table grid--full">

                                        <div class="grid__item four-fifths content_products">
                                            <div class="grid grid--uniform grid--view-items">
                                                @foreach($category->phones as $phone)
                                                    <div
                                                        class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link"
                                                                       href="{{ route('phone.show', [$phone->slug]) }}">
                                                                        <img class="grid-view-item__image" src="{{ $phone->firstImage }}" alt="{{ $phone->name }}">
                                                                    </a>
                                                                    <div class="product-label">
                                                                        <div class="label-element new-label">
                                                                            <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                        </div>
                                                                        <div class="label-element trend-label">
                                                                        <span>{{ $phone->type->name }}</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="h4 grid-view-item__title">
                                                                <a href="{{ route('phone.show', [$phone->slug]) }}">{{ str_limit($phone->name, 18) }}</a>
                                                            </div>
                                                            <div class="rating-star">
															<span class="spr-badge" data-rating="4.0">
																<span class="spr-starrating spr-badge-starrating">
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star-empty"
                                                                       style=""></i>
																</span>
																<span class="spr-badge-caption">1 review</span>
															</span>
                                                            </div>
                                                            <div class="grid-view-item__meta">
                                                                <span class="product__price">
                                                                    <a href="#" class="badge badge-primary btn-badge">{{ $phone->price }} $</a>
                                                                    <a href="{{ route('phone.show', [$phone->slug]) }}" class="badge badge-info btn-badge">Acheter</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </div>
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
                    @endif
                @empty
                    <li class="col-md-12 col-sm-12 col-xs-12">
                        Aucun téléphone trouvé
                    </li>
                @endforelse
                {{-- <div id="html-section-1487409066231" class="html-section index-section product-banner-grid">
                     <div class="wrapper">
                         <div class="home-product-sidebar-wrapper grid--table grid--full">
                             <div class="grid__item block_heading grid--table grid--full style_default">
                                 <div class="area-header grid__item one-third">
                                     <h2>
                                         <img src="assets/images/icon2_100x100.png" alt="icon">
                                         <a href="">Nokia</a>
                                     </h2>
                                 </div>
                                 <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                             </div>
                             <div class="grid__item block_content grid--table grid--full">
                                 <div class="grid__item one-fifth content_banner position-right">
                                     <a href="colection.html"><img src="assets/images/banner2_235x700.png" alt=""></a>
                                 </div>
                                 <div class="grid__item four-fifths content_products">
                                     <div class="grid grid--uniform grid--view-items">
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product17_320x320.jpg"
                                                                  alt="Apple iPad Air 2">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">279$</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button"
                                                                                 onclick="window.location='product.html'"
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
                                                                             data-handle="etiam-dan-lorem-quis-ligula-elementum-5"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple iPad Air 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059396358"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$359.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product18_320x320.jpg"
                                                                  alt="Apple iPad Pro">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button"
                                                                                 onclick="window.location='product.html'"
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
                                                                             data-handle="etiam-dan-lorem-quis-ligula-elementum-1"
                                                                             class="quick_shop-div">
                                                                             <div class="btn quick_shop"
                                                                                  data-mfp-src="#quick-shop-modal"
                                                                                  data-effect="mfp-zoom-out">
                                                                                 <i class="fa fa-eye" title="Quick View"></i>s
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple iPad Pro</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059400326"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$1,400.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product19_320x320.jpg"
                                                                  alt="Asus ZenPad 3 8.0 Z581KL">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                             data-handle="etiam-dan-lorem-quis-ligula-elementum-4"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Asus ZenPad 3 8.0 Z581KL</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059397446"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$280.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product20_320x320.jpg"
                                                                  alt="Huawei MediaPad T1 7.0">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                             data-handle="etiam-dan-lorem-quis-ligula-elementum"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Huawei MediaPad T1 7.0</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059401158"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$99.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product21_320x320.jpg"
                                                                  alt="Lenovo Yoga Tab 3 Plus">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="etiam-lobortis-purus-dictum"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Lenovo Yoga Tab 3 Plus</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059411846"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$499.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product22_320x320.jpg"
                                                                  alt="LG G Pad III 10.1 FHD">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="example-book-6"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">LG G Pad III 10.1 FHD</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059376646"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$400.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $369.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         --}}{{--<div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product12_320x320.jpg"
                                                                  alt="Samsung Galaxy Tab S 8.4 LTE">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button"
                                                                                 onclick="window.location='product.html'"
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
                                                                             data-handle="cum-sociis-natoque-penatibus-et-magnis"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Samsung Galaxy Tab S 8.4 LTE</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059395590"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$558.98</span>
                                                 </div>
                                             </div>
                                         </div>--}}{{--
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product23_320x320.jpg"
                                                                  alt="Sony Xperia Z4 Tablet LTE">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button"
                                                                                 onclick="window.location='product.html'"
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
                                                                         <div data-handle="example-book-5"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Sony Xperia Z4 Tablet LTE</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059377862"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$699.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 $("#html-section-1487409066231 .mobile-toggle").on("click", function () {
                                     $('#html-section-1487409066231 .area-tags').toggleClass("open")
                                 });
                             </script>
                         </div>
                     </div>
                 </div>

                 <div id="html-section-1487409133437" class="html-section index-section product-banner-grid">
                     <div class="wrapper">
                         <div class="home-product-sidebar-wrapper grid--table grid--full">
                             <div class="grid__item block_heading grid--table grid--full style_default">
                                 <div class="area-header grid__item one-third">
                                     <h2>
                                         <img src="assets/images/icon3_100x100.png" alt="icon">
                                         <a href="">Tecno</a>
                                     </h2>
                                 </div>
                                 <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                             </div>
                             <div class="grid__item block_content grid--table grid--full">
                                 <div class="grid__item one-fifth content_banner position-left">
                                     <a href="collection.html"><img src="assets/images/banner3_235x700.png" alt=""></a>
                                 </div>
                                 <div class="grid__item four-fifths content_products">
                                     <div class="grid grid--uniform grid--view-items">
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product24_320x320.jpg"
                                                                  alt="Acer Aspire E5">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="copy-of-copy-of-asus-rog-g752vm-4"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Acer Aspire E5</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9235806342"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$619.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product8_320x320.jpg"
                                                                  alt="Apple Macbook Air">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                             </div>
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="apple-macbook-air"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple Macbook Air</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$1,300.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $1,190.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product25_320x320.jpg"
                                                                  alt="Apple Macbook Pro 13in">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="copy-of-copy-of-asus-rog-g752vm-1"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple Macbook Pro 13in</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9212386118"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$1,499.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product26_320x320.jpg"
                                                                  alt="Asus RoG G752VM">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button"
                                                                                 onclick="window.location='product.html'"
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
                                                                             data-handle="pellentesque-habitant-morbi-tristique-senectus"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Asus RoG G752VM</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059415686"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$299.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product5_320x320.jpg"
                                                                  alt="Dell Inspiron 7460">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="copy-of-copy-of-asus-rog-g752vm"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Dell Inspiron 7460</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$999.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $899.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product27_320x320.jpg"
                                                                  alt="Dell Vostro 5468">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="dell-vostro-5468"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Dell Vostro 5468</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9235971782"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$879.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product28_320x320.jpg"
                                                                  alt="HP Pavilion 15 AU072TX">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="copy-of-copy-of-asus-rog-g752vm-2"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">HP Pavilion 15 AU072TX</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9217085190"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$849.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $799.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product29_320x320.jpg"
                                                                  alt="HP ProBook 450">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
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
                                                                         <div data-handle="hp-probook-450"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">HP ProBook 450</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9235894982"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$849.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 $("#html-section-1487409133437 .mobile-toggle").on("click", function () {
                                     $('#html-section-1487409133437 .area-tags').toggleClass("open")
                                 });
                             </script>
                         </div>
                     </div>
                 </div>

                 <div id="html-section-1487409316295" class="html-section index-section product-banner-grid">
                     <div class="wrapper">
                         <div class="home-product-sidebar-wrapper grid--table grid--full">
                             <div class="grid__item block_heading grid--table grid--full style_default">
                                 <div class="area-header grid__item one-third">
                                     <h2>
                                         <img src="assets/images/icon4_100x100.png" alt="icon">
                                         <a href="">Itel</a>
                                     </h2>
                                 </div>
                                 <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                             </div>
                             <div class="grid__item block_content grid--table grid--full">
                                 <div class="grid__item one-fifth content_banner position-right">
                                     <a href="collection.html"><img src="assets/images/banner4_235x700.jpg" alt=""></a>
                                 </div>
                                 <div class="grid__item four-fifths content_products">
                                     <div class="grid grid--uniform grid--view-items">
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product30_320x320.jpg"
                                                                  alt="Apple Watch Edition Series 2">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-4"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple Watch Edition Series 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059379142"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$269.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product31_320x320.jpg"
                                                                  alt="JBL Charge 3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">JBL Charge 3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059384966"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$149.95</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $134.95 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product32_320x320.jpg"
                                                                  alt="Logitech MX anywhere 2">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-t-shirt"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech MX anywhere 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059413126"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$24.99</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $17.99 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product33_320x320.jpg"
                                                                  alt="Logitech Wireless Keyboard MK240 Nano">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="numquam-eius-modi-tempora-incidunt-ut-labore-et-dolore-magnam"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech Wireless Keyboard MK240 Nano</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059414726"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$24.34</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product34_320x320.jpg"
                                                                  alt="Samsung Gear S3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="cras-in-nunc-non-ipsum-duo-cursus-ultrices"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="#">Samsung Gear S3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059411206"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$300.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product2_320x320.jpg"
                                                                  alt="Motorola Moto 360 (2nd gen)">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">150£</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-3"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Motorola Moto 360 (2nd gen)</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$349.99</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product6_320x320.jpg"
                                                                  alt="Samsung Gear VR">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-2"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Samsung Gear VR</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$119.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $99.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product11_320x320.jpg"
                                                                  alt="Sennheiser EZX 80">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-1"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Sennheiser EZX 80</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$79.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $69.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 $("#html-section-1487409316295 .mobile-toggle").on("click", function () {
                                     $('#html-section-1487409316295 .area-tags').toggleClass("open")
                                 });
                             </script>
                         </div>
                     </div>
                 </div>
                 <div id="html-section-1487409316295" class="html-section index-section product-banner-grid">
                     <div class="wrapper">
                         <div class="home-product-sidebar-wrapper grid--table grid--full">
                             <div class="grid__item block_heading grid--table grid--full style_default">
                                 <div class="area-header grid__item one-third">
                                     <h2>
                                         <img src="assets/images/icon4_100x100.png" alt="icon">
                                         <a href="">Iphone</a>
                                     </h2>
                                 </div>
                                 <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                             </div>
                             <div class="grid__item block_content grid--table grid--full">
                                 <div class="grid__item one-fifth content_banner position-right">
                                     <a href="collection.html"><img src="assets/images/banner4_235x700.jpg" alt=""></a>
                                 </div>
                                 <div class="grid__item four-fifths content_products">
                                     <div class="grid grid--uniform grid--view-items">
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product30_320x320.jpg"
                                                                  alt="Apple Watch Edition Series 2">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-4"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple Watch Edition Series 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059379142"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$269.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product31_320x320.jpg"
                                                                  alt="JBL Charge 3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">JBL Charge 3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059384966"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$149.95</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $134.95 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product32_320x320.jpg"
                                                                  alt="Logitech MX anywhere 2">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-t-shirt"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech MX anywhere 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059413126"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$24.99</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $17.99 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product33_320x320.jpg"
                                                                  alt="Logitech Wireless Keyboard MK240 Nano">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="numquam-eius-modi-tempora-incidunt-ut-labore-et-dolore-magnam"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech Wireless Keyboard MK240 Nano</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059414726"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$24.34</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product34_320x320.jpg"
                                                                  alt="Samsung Gear S3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="cras-in-nunc-non-ipsum-duo-cursus-ultrices"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="#">Samsung Gear S3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059411206"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$300.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product2_320x320.jpg"
                                                                  alt="Motorola Moto 360 (2nd gen)">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">150£</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-3"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Motorola Moto 360 (2nd gen)</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$349.99</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product6_320x320.jpg"
                                                                  alt="Samsung Gear VR">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-2"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Samsung Gear VR</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$119.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $99.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product11_320x320.jpg"
                                                                  alt="Sennheiser EZX 80">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-1"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Sennheiser EZX 80</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$79.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $69.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 $("#html-section-1487409316295 .mobile-toggle").on("click", function () {
                                     $('#html-section-1487409316295 .area-tags').toggleClass("open")
                                 });
                             </script>
                         </div>
                     </div>
                 </div>
                 <div id="html-section-1487409316295" class="html-section index-section product-banner-grid">
                     <div class="wrapper">
                         <div class="home-product-sidebar-wrapper grid--table grid--full">
                             <div class="grid__item block_heading grid--table grid--full style_default">
                                 <div class="area-header grid__item one-third">
                                     <h2>
                                         <img src="assets/images/icon4_100x100.png" alt="icon">
                                         <a href="">Motorola</a>
                                     </h2>
                                 </div>
                                 <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                             </div>
                             <div class="grid__item block_content grid--table grid--full">
                                 <div class="grid__item one-fifth content_banner position-right">
                                     <a href="collection.html"><img src="assets/images/banner4_235x700.jpg" alt=""></a>
                                 </div>
                                 <div class="grid__item four-fifths content_products">
                                     <div class="grid grid--uniform grid--view-items">
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product30_320x320.jpg"
                                                                  alt="Apple Watch Edition Series 2">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-4"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple Watch Edition Series 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059379142"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$269.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product31_320x320.jpg"
                                                                  alt="JBL Charge 3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">JBL Charge 3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059384966"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$149.95</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $134.95 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product32_320x320.jpg"
                                                                  alt="Logitech MX anywhere 2">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-t-shirt"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech MX anywhere 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059413126"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$24.99</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $17.99 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product33_320x320.jpg"
                                                                  alt="Logitech Wireless Keyboard MK240 Nano">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="numquam-eius-modi-tempora-incidunt-ut-labore-et-dolore-magnam"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech Wireless Keyboard MK240 Nano</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059414726"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$24.34</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product34_320x320.jpg"
                                                                  alt="Samsung Gear S3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="cras-in-nunc-non-ipsum-duo-cursus-ultrices"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="#">Samsung Gear S3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059411206"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$300.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product2_320x320.jpg"
                                                                  alt="Motorola Moto 360 (2nd gen)">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">150£</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-3"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Motorola Moto 360 (2nd gen)</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$349.99</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product6_320x320.jpg"
                                                                  alt="Samsung Gear VR">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-2"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Samsung Gear VR</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$119.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $99.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product11_320x320.jpg"
                                                                  alt="Sennheiser EZX 80">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-1"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Sennheiser EZX 80</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$79.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $69.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 $("#html-section-1487409316295 .mobile-toggle").on("click", function () {
                                     $('#html-section-1487409316295 .area-tags').toggleClass("open")
                                 });
                             </script>
                         </div>
                     </div>
                 </div>
                 <div id="html-section-1487409316295" class="html-section index-section product-banner-grid">
                     <div class="wrapper">
                         <div class="home-product-sidebar-wrapper grid--table grid--full">
                             <div class="grid__item block_heading grid--table grid--full style_default">
                                 <div class="area-header grid__item one-third">
                                     <h2>
                                         <img src="assets/images/icon4_100x100.png" alt="icon">
                                         <a href="">Sony</a>
                                     </h2>
                                 </div>
                                 <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                             </div>
                             <div class="grid__item block_content grid--table grid--full">
                                 <div class="grid__item one-fifth content_banner position-right">
                                     <a href="collection.html"><img src="assets/images/banner4_235x700.jpg" alt=""></a>
                                 </div>
                                 <div class="grid__item four-fifths content_products">
                                     <div class="grid grid--uniform grid--view-items">
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product30_320x320.jpg"
                                                                  alt="Apple Watch Edition Series 2">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-4"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple Watch Edition Series 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059379142"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$269.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product31_320x320.jpg"
                                                                  alt="JBL Charge 3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">JBL Charge 3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059384966"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$149.95</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $134.95 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product32_320x320.jpg"
                                                                  alt="Logitech MX anywhere 2">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-t-shirt"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech MX anywhere 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059413126"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$24.99</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $17.99 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product33_320x320.jpg"
                                                                  alt="Logitech Wireless Keyboard MK240 Nano">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="numquam-eius-modi-tempora-incidunt-ut-labore-et-dolore-magnam"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech Wireless Keyboard MK240 Nano</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059414726"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$24.34</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product34_320x320.jpg"
                                                                  alt="Samsung Gear S3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="cras-in-nunc-non-ipsum-duo-cursus-ultrices"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="#">Samsung Gear S3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059411206"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$300.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product2_320x320.jpg"
                                                                  alt="Motorola Moto 360 (2nd gen)">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">150£</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-3"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Motorola Moto 360 (2nd gen)</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$349.99</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product6_320x320.jpg"
                                                                  alt="Samsung Gear VR">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-2"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Samsung Gear VR</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$119.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $99.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product11_320x320.jpg"
                                                                  alt="Sennheiser EZX 80">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-1"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Sennheiser EZX 80</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$79.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $69.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 $("#html-section-1487409316295 .mobile-toggle").on("click", function () {
                                     $('#html-section-1487409316295 .area-tags').toggleClass("open")
                                 });
                             </script>
                         </div>
                     </div>
                 </div>
                 <div id="html-section-1487409316295" class="html-section index-section product-banner-grid">
                     <div class="wrapper">
                         <div class="home-product-sidebar-wrapper grid--table grid--full">
                             <div class="grid__item block_heading grid--table grid--full style_default">
                                 <div class="area-header grid__item one-third">
                                     <h2>
                                         <img src="assets/images/icon4_100x100.png" alt="icon">
                                         <a href="">Infinix</a>
                                     </h2>
                                 </div>
                                 <i class="fa fa-bars mobile-toggle small--show" aria-hidden="true"></i>

                             </div>
                             <div class="grid__item block_content grid--table grid--full">
                                 <div class="grid__item one-fifth content_banner position-right">
                                     <a href="collection.html"><img src="assets/images/banner4_235x700.jpg" alt=""></a>
                                 </div>
                                 <div class="grid__item four-fifths content_products">
                                     <div class="grid grid--uniform grid--view-items">
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product30_320x320.jpg"
                                                                  alt="Apple Watch Edition Series 2">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-4"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Apple Watch Edition Series 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059379142"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$269.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product31_320x320.jpg"
                                                                  alt="JBL Charge 3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">JBL Charge 3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059384966"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$149.95</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $134.95 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product32_320x320.jpg"
                                                                  alt="Logitech MX anywhere 2">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-t-shirt"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech MX anywhere 2</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059413126"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$24.99</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $17.99 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product33_320x320.jpg"
                                                                  alt="Logitech Wireless Keyboard MK240 Nano">
                                                         </a>
                                                         <div class="product-label">
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="numquam-eius-modi-tempora-incidunt-ut-labore-et-dolore-magnam"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Logitech Wireless Keyboard MK240 Nano</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059414726"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$24.34</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product34_320x320.jpg"
                                                                  alt="Samsung Gear S3">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div
                                                                             data-handle="cras-in-nunc-non-ipsum-duo-cursus-ultrices"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="">Samsung Gear S3</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" id="spr_badge_9059411206"
                                                                       data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product-price__price">$300.00</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product2_320x320.jpg"
                                                                  alt="Motorola Moto 360 (2nd gen)">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">150£</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button class="btn btn-1 select-option"
                                                                                 type="button" title="Select Options"><i
                                                                                 class="fa fa-bars"></i> Options
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-3"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Motorola Moto 360 (2nd gen)</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <span class="product__price">$349.99</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product6_320x320.jpg"
                                                                  alt="Samsung Gear VR">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element trend-label">
                                                                 <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-2"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Samsung Gear VR</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$119.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $99.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                             <div class="grid-view-item">
                                                 <div class="grid-normal-display">
                                                     <div class="grid__image product-image">
                                                         <a class="grid-view-item__link" href="product.html">
                                                             <img class="grid-view-item__image"
                                                                  src="assets/images/product11_320x320.jpg"
                                                                  alt="Sennheiser EZX 80">
                                                         </a>
                                                         <div class="product-label">
                                                             <div class="label-element new-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #ffb400;">New</span>
                                                             </div>
                                                             <div class="label-element best-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                             </div>
                                                             <div class="label-element deal-label">
                                                                 <span
                                                                     style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                             </div>
                                                         </div>
                                                         <ul class="action-button">
                                                             <li class="add-to-cart-form">
                                                                 <form
                                                                     action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html"
                                                                     method="post" enctype="multipart/form-data"
                                                                     class="AddToCartForm form-vertical">
                                                                     <div class="effect-ajax-cart">
                                                                         <input type="hidden" name="quantity" value="1">
                                                                         <button type="submit" name="add"
                                                                                 class="btn btn-1 add-to-cart AddToCart"
                                                                                 title="Buy Now"><span
                                                                                 class="AddToCartText3"><i
                                                                                     class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                         </button>
                                                                     </div>
                                                                 </form>
                                                             </li>
                                                             <li class="wishlist">
                                                                 <a class="wish-list btn" href="#"><i class="fa fa-heart"
                                                                                                      title="Wishlist"></i></a>
                                                             </li>
                                                             <li>
                                                                 <div class="quickview">
                                                                     <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                         <div data-handle="example-book-1"
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
                                                 <div class="h4 grid-view-item__title">
                                                     <a href="product.html">Sennheiser EZX 80</a>
                                                 </div>
                                                 <div class="rating-star">
                                                                 <span class="spr-badge" data-rating="5.0">
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
                                                 <div class="grid-view-item__meta">
                                                     <s class="product-price__price">$79.00</s>
                                                     <span class="product-price__price product-price__sale">
                                                                 $69.00 <span
                                                             class="product-price__sale-label">On Sale</span>
                                                                 </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 $("#html-section-1487409316295 .mobile-toggle").on("click", function () {
                                     $('#html-section-1487409316295 .area-tags').toggleClass("open")
                                 });
                             </script>
                         </div>
                     </div>
                 </div>
                 <div id="html-section-1482246097364" class="html-section index-section block-tags">
                     <div class="wrapper">
                         <div data-section-id="1482246097364" data-section-type="home-tags">
                             <ul class="tags_listing text-center">
                                 <li class="grid__item tag_element">
                                     <a href="colection.html">New Deal</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="colection.html">Top 5 Smart Phone 2016</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="colection.html">Black Friday</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="colection.html">Top Apps</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div id="html-section-1482247046646" class="html-section index-section popular-search">
                     <div class="wrapper">
                         <div data-section-id="1482247046646" data-section-type="home-popular-search"
                              class="home-popular-search" style="padding-bottom:40px;">
                             <div class="area-text grid__item one-eighth">
                                 <span>Popular Search: </span>
                             </div>
                             <ul class="grid__item seven-eighths">
                                 <li class="grid__item tag_element">
                                     <a href="product.html">iPhone 7 128GB</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">Galaxy J5 Prime</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">iPhone 6s Plus 32GB</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">iPhone 7 Plus 128GB</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">Samsung S7 Edge</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div id="html-section-1482247046646" class="html-section index-section popular-search">
                     <div class="wrapper">
                         <div data-section-id="1482247046646" data-section-type="home-popular-search"
                              class="home-popular-search" style="padding-bottom:40px;">
                             <div class="area-text grid__item one-eighth">
                                 <span>Popular Search: </span>
                             </div>
                             <ul class="grid__item seven-eighths">
                                 <li class="grid__item tag_element">
                                     <a href="product.html">iPhone 7 128GB</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">Galaxy J5 Prime</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">iPhone 6s Plus 32GB</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">iPhone 7 Plus 128GB</a>
                                 </li>
                                 <li class="grid__item tag_element">
                                     <a href="product.html">Samsung S7 Edge</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>--}}
                <div id="html-section-product-template" class="html-section">
                    <div class="wrapper">
                        <div class="grid">
                            <div class="text-information" style="clear: both;">
                                <header class="section-header style_2 ">
                                    <h2 class="section-title text-left">Nous Réparons vos téléphones</h2>
                                </header>
                                <div class="home-content">
                                    <div class="text-info-content grid">
                                        <div class="info-1 grid__item one-third">
                                            <div class="info-group">
                                                <div class="info-icon">
                                                    <img src="assets/images/settings.png" alt="">
                                                </div>
                                                <div class="info-text">
                                                    <span class="h4">Customizable Page</span><span class="h5">Fusce arcu molestie eget libero consectetur congue consectetur in bibendum litora</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-2 grid__item one-third">
                                            <div class="info-group">
                                                <div class="info-icon">
                                                    <img src="assets/images/picture.png" alt="">
                                                </div>
                                                <div class="info-text">
                                                    <span class="h4">Revolution Slider</span><span class="h5">Fusce arcu molestie eget libero consectetur congue consectetur in bibendum litora</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-3 grid__item one-third">
                                            <div class="info-group">
                                                <div class="info-icon">
                                                    <img src="assets/images/layout.png" alt="">
                                                </div>
                                                <div class="info-text">
                                                    <span class="h4">Drag &amp; Drop Page</span><span class="h5">Fusce arcu molestie eget libero consectetur congue consectetur in bibendum litora</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-2 grid__item one-third">
                                            <div class="info-group">
                                                <div class="info-icon">
                                                    <img src="assets/images/picture.png" alt="">
                                                </div>
                                                <div class="info-text">
                                                    <span class="h4">Revolution Slider</span><span class="h5">Fusce arcu molestie eget libero consectetur congue consectetur in bibendum litora</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-3 grid__item one-third">
                                            <div class="info-group">
                                                <div class="info-icon">
                                                    <img src="assets/images/layout.png" alt="">
                                                </div>
                                                <div class="info-text">
                                                    <span class="h4">Drag &amp; Drop Page</span><span class="h5">Fusce arcu molestie eget libero consectetur congue consectetur in bibendum litora</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-1 grid__item one-third">
                                            <div class="info-group">
                                                <div class="info-icon">
                                                    <img src="assets/images/settings.png" alt="">
                                                </div>
                                                <div class="info-text">
                                                    <span class="h4">Customizable Page</span><span class="h5">Fusce arcu molestie eget libero consectetur congue consectetur in bibendum litora</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="html-section-1492526658142 " class="html-section index-section blogs-slider " style="margin-bottom: 30px">
                    <div class="wrapper ">
                        <div class="home-blog-wrapper ">
                            <header class="section-header style_2 ">
                                <h2 class="section-title text-left">News</h2>
                            </header>
                            <div class="grid grid--uniform grid--blog">
                                <div class="owl-wrapper-outer">
                                    <div class="owl-wrapper" style="display: flex;">
                                        @foreach($posts as $post)
                                        <div class="owl-item">
                                            <div class="grid__item">
                                                <div class="blog-top">
                                                    <a class="blog-img" href="{{ $post->slugLink }}">
                                                        <img src="{{ $post->imageWithHost }}"  class="img-fluid" alt="{{ $post->title }}">
                                                    </a>
                                                </div>
                                                <div class="blog-bottom">
                                                    <a href="{{ $post->slugLink }}"
                                                       class="blog-title clearfix">
                                                        {{ $post->title }}
                                                    </a>
                                                    <ul class="information">
                                                        <li class="date"><time datetime="2016-12-13">{{ $post->created_at_format }}</time></li>
                                                        <li class="comment">{{ count($post->comments) }} commentaires</li>
                                                    </ul>
                                                    <div class="blog-desc">
                                                        {{ $post->excerpt }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="owl-controls clickable">
                                    <div class="owl-buttons">
                                        <div class="owl-prev">
                                            <i class="fa fa-angle-left " title="Previous "></i>
                                        </div>
                                        <div class="owl-next">
                                            <i class="fa fa-angle-right " title="Next "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                if($(".blog-slider ").length){
                                    $(".blog-slider ").owlCarousel({
                                        navigation : true,
                                        pagination: false,
                                        autoPlay: false,
                                        paginationSpeed: 800,
                                        items: 3,
                                        slideSpeed : 200,
                                        rewindSpeed : 1000,
                                        itemsDesktop : [1199,3],
                                        itemsDesktopSmall : [979,3],
                                        itemsTablet: [768,2],
                                        itemsTabletSmall: [540,2],
                                        itemsMobile : [360,1],
                                        navigationText: ['<i class="fa fa-angle-left " title="Previous "></i>', '<i class="fa fa-angle-right " title="Next "></i>']
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery.velocity.min.js') }}"></script>
    <script !src="">
        var $orbs = $('.orbs span');
        $('.end-right').css('left' , '-10%');
        $('.end-left').css('left', '110%');
        $orbs.velocity({'top': '-300px', scaleX: '.2', scaleY: '.2', color: '#990000'},0);
        var orb = 0;
        var numOrbs = $orbs.length;

        $('.end-right').velocity({left : '50%'}, 'easeOutExpo', 1200);
        $('.end-left').velocity({left : '50%'}, 'easeOutExpo',  1200);


        dropOrbs = function(){
            $orbs.eq(orb).velocity({top: '70px'}, 400).velocity({scaleX: 1, scaleY: 1, color: '#fff'}, 1000).css('position', 'relative');
            orb = orb + 1;
            if(orb < numOrbs){
                setTimeout(dropOrbs, 100);
            }
            else{
                setTimeout(function(){$('.glow').velocity({opacity: 1}, 1200);}, 1200);

            }

        }

        setTimeout(dropOrbs, 400);

        $('.button--bubble').each(function() {
            let $circlesTopLeft = $(this).parent().find('.circle.top-left');
            let $circlesBottomRight = $(this).parent().find('.circle.bottom-right');

            let tl = new TimelineLite();
            let tl2 = new TimelineLite();

            let btTl = new TimelineLite({ paused: true });

            tl.to($circlesTopLeft, 1.2, { x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) });
            tl.to($circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: '+=6', y: '-=2' });
            tl.to($circlesTopLeft.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7' }, '-=0.1');
            tl.to($circlesTopLeft.eq(2), 0.1, { scale: 0.2, x: '-=15', y: '+=6' }, '-=0.1');
            tl.to($circlesTopLeft.eq(0), 1, { scale: 0, x: '-=5', y: '-=15', opacity: 0 });
            tl.to($circlesTopLeft.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0 }, '-=1');
            tl.to($circlesTopLeft.eq(2), 1, { scale: 0, x: '-=15', y: '+=5', opacity: 0 }, '-=1');

            let tlBt1 = new TimelineLite();
            let tlBt2 = new TimelineLite();

            tlBt1.set($circlesTopLeft, { x: 0, y: 0, rotation: -45 });
            tlBt1.add(tl);

            tl2.set($circlesBottomRight, { x: 0, y: 0 });
            tl2.to($circlesBottomRight, 1.1, { x: 30, y: 30, ease: SlowMo.ease.config(0.1, 0.7, false) });
            tl2.to($circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: '-=6', y: '+=3' });
            tl2.to($circlesBottomRight.eq(1), 0.1, { scale: 0.8, x: '+=7', y: '+=3' }, '-=0.1');
            tl2.to($circlesBottomRight.eq(2), 0.1, { scale: 0.2, x: '+=15', y: '-=6' }, '-=0.2');
            tl2.to($circlesBottomRight.eq(0), 1, { scale: 0, x: '+=5', y: '+=15', opacity: 0 });
            tl2.to($circlesBottomRight.eq(1), 1, { scale: 0.4, x: '+=7', y: '+=7', opacity: 0 }, '-=1');
            tl2.to($circlesBottomRight.eq(2), 1, { scale: 0, x: '+=15', y: '-=5', opacity: 0 }, '-=1');

            tlBt2.set($circlesBottomRight, { x: 0, y: 0, rotation: 45 });
            tlBt2.add(tl2);

            btTl.add(tlBt1);
            btTl.to($(this).parent().find('.button.effect-button'), 0.8, { scaleY: 1.1 }, 0.1);
            btTl.add(tlBt2, 0.2);
            btTl.to($(this).parent().find('.button.effect-button'), 1.8, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 1.2);

            btTl.timeScale(2.6);

            $(this).on('mouseover', function() {
                btTl.restart();
            });
        });

    </script>
    <script src="{{ asset('swiper-bundle.min.js') }}"></script>
    <script type="text/javascript">
        let mySwiper = new Swiper ('.swiper-container', {
            zoom: true,
            autoplay: {
                delay: 5000,
            },
            initialSlide: 0,
            speed: 1500,
            effect: 'fade',
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            observer: true,
            observerParents: true,
            spaceBetween: 15,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        })
    </script>
@endpush
