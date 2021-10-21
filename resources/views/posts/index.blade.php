@extends('layouts.main')

@section('title') @parent | Le Blog @endsection

@section('keywords') @parent, Le Blog @endsection

@section('description') Le Blog @endsection

@section('content')
<main class="main-content">
    <div id="html-section-blog-template" class="html-section">
        <header class="section-header wrapper-breadcrumb">
            <div class="wrapper">
                <h3>Le blog</h3>
                <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                    <a href="{{ route('home') }}" class="text-primary" style="color: #1570B7;" title="Back to the frontpage">Accueil </a>
                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    <span>Nos articles</span>
                </nav>
            </div>
        </header>
        <div class="wrapper article-grid">
            <div class="grid--rev blog_list">
                @foreach($posts as $post)
                <article class="list-article grid__item large--one-third">
                    <div class="article__image">
                        <a class="article__featured-image" href="{{ $post->slugLink }}">
                            <img src="{{ $post->imageWithHost }}" alt="{{ $post->title }}">
                        </a>
                    </div>
                    <h2 class="h3"><a href="{{ $post->slugLink }}" style="color: #333 !important;">{{ $post->title }}</a></h2>
                    <div class="article__date">
                        <span class="author">Par {{ $post->user->name }}</span>
                        <time datetime="2016-12-13" class="date">{{ $post->created_at_format }}</time>
                    </div>
                    <div class="article__bottom">
                        <div class="rte rte--indented-images">
                            {{ $post->excerpt }}
                        </div>
                        <p>
                            <a href="{{ $post->slugLink }}" class="text-link">Lire plus <span class="icon icon-arrow-right" aria-hidden="true"></span></a>
                        </p>
                    </div>
                </article>
                @endforeach

                <div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@stop
