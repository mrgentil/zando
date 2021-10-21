@extends('layouts.main')

@section('title') @parent | A propos @endsection

@section('keywords') @parent, A propos @endsection

@section('description') A propos @endsection

@section('content')
    <main class="main-content">
        <div id="html-section-product-template" class="html-section">
            <header class="section-header wrapper-breadcrumb">
                <div class="wrapper">
                    <h3>A propos de nous</h3>
                    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                        <a href="{{ route('home') }}" title="Back to the frontpage">Accueil</a>
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <span>A propos</span>
                    </nav>
                </div>
            </header>
            <div class="wrapper">
                <div class="grid">
                    <div class="grid__item">
                        <div class="grid__item large--one-half">
                            <p>
                                A great About Us page helps builds trust between you and your customers. The more content you provide about you and your business, the more confident people will be when purchasing from your store.
                            </p>
                            <p>
                                Your About Us page might include:
                            </p>
                            <ul>
                                <li>Who you are</li>
                                <li>Why you sell the items you sell</li>
                                <li>Where you are located</li>
                                <li>How long you have been in business</li>
                                <li>How long you have been running your online shop</li>
                                <li>Who are the people on your team</li>
                                <li>Contact information</li>
                                <li>Social links (Twitter, Facebook)</li>
                            </ul>
                        </div>
                        <div class="grid__item large--one-half">
                            <p>
                                <img src="assets/images/about.jpg" alt="Logo" class="img-fluid">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
