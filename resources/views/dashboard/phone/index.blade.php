@extends('layouts.dashboard')
@section('title') @parent | Tableau de bord utilisateur @endsection

@section('keywords') @parent, Tableau de bord utilisateur @endsection

@section('description') Tableau de bord utilisateur @endsection

@push('css')
    <link href="{{asset('assets/css/rating.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/timber.scss.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/theme.scss.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/digital-world.css')}}" rel="stylesheet" type="text/css" media="all">
    <style>
        .btn-actions{
            font: 400 12px/1.15 Lato !important;
            padding: 6px 12px !important;;
        }
    </style>
@endpush
@section('content')
    <div class="bg-gray">
        <div class="container-fluid">

            <div class="business-supplier bns-form">
                <div class="form-box">
                    <h4 class="title">Mes téléphones <span class="float-right"><button type="button" class="btn gradient blue btn-md">Ajouter</button></span></h4>
                    <div class="row">
                        <div class="grid__item block_content grid--table grid--full">
                            <div class="grid__item four-fifths content_products">
                                <div class="grid grid--uniform grid--view-items">
                                    @forelse($phones as $phone)
                                        <div
                                            class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link"
                                                           href="{{ route('phone.show', [$phone->slug]) }}">
                                                            <img class="grid-view-item__image"
                                                                 src="{{ $phone->firstImage }}"
                                                                 alt="{{ $phone->name }}">
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title" style="white-space: nowrap;">
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
                                                    <span class="product__price">{{ $phone->price }} $</span>
                                                </div>
                                                <div style="display:flex;">
                                                    <a href="{{ route('dashboard.phone.edit', $phone->id) }}" class="btn btn-primary btn-actions">Modifier</a>
                                                    <a href="#" class="btn btn-danger btn-actions">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <div
                                            class="grid__item">
                                            {{ $feedback_text }}
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
