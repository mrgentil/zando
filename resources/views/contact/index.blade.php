@extends('layouts.main')

@section('title') @parent | Contact @endsection

@section('keywords') @parent, Contact @endsection

@section('description') Contact @endsection

@push('css')
    <style>
        .invalid-feedback {
            display: initial;
            margin-bottom: 10px!important;
        }
        .contact-form input{
            margin-bottom: 0 !important;
        }
    </style>
@endpush
@section('content')
    <main class="main-content">
        <div id="html-section-product-template" class="html-section">
            <header class="section-header wrapper-breadcrumb">
                <div class="wrapper">
                    <h3>Nous contacter</h3>
                    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                        <a href="{{ route('home') }}" title="Back to the frontpage">Accueil</a>
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <span>Contact</span>
                    </nav>
                </div>
            </header>
            <div class="wrapper">
                <div class="grid">
                    <div class="grid__item contact-wrapper">
                        <div class="grid__item large--one-half" style="padding-left: 0;">
                            <p>
                                Sed vestibulum faucibus felis, sit amet facilisis tellus. Aliquam erat volutpat. Sed consectetur ipsum velit, quis rhoncus libero egestas eget.
                            </p>
                            <ul>
                                <li class="address"><i class="fa fa-street-view"></i> 02 Lokengo, C/ Mont-Ngafula Q/Herady, Arrêt Chambre Froide</li>
                                <li class="email"><i class="fa fa-envelope-o"></i> Email: contact@umojatechnology.com</li>
                                <li class="phone"><i class="fa fa-phone"></i> Phone: (+243) 826 004 888</li>
                            </ul>
                        </div>
                        @livewire('contact-form')
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
