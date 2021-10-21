@extends('layouts.main')

@section('title') @parent | Le Blog : {{ $post->title }} @endsection

@section('keywords') @parent, Le Blog, {{ $post->title }} @endsection

@section('description') {{ $post->title }} @endsection

@section('meta-image'){{  $post->croppedImageWithHost  }}@endsection

@section('content')
<main class="main-content">
    <div id="html-section-blog-template" class="html-section">
        <header class="section-header wrapper-breadcrumb">
            <div class="wrapper">
                <h3>{{ $post->title }}</h3>
                <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                    <a href="{{ route('home') }}" class="text-primary" style="color: #1570B7;" title="Back to the frontpage">Accueil  </a>
                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    <a href="{{ route('blog.index') }}"  style="color: #1570B7;"  title="Blog page">Les articles </a>
                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    <span>{{ $post->title }}</span>
                </nav>
            </div>
        </header>
        <div class="wrapper">
            <div class="grid">
                <article class="grid__item article" itemscope="" itemtype="http://schema.org/Article">
                    <div class="grid">
                        <div class="grid__item">
                            <p class="article-top">
                                <span class="author">Par {{ $post->user->name }}</span>
                                <span class="date"><time datetime="2016-12-13">{{ $post->created_at_format }}</time></span>
                            </p>
                            <div class="blog-image">
                                <a href="{{ $post->slugLink }}"><img src="{{ $post->imageWithHost }}" alt="{{ $post->title }}"></a>
                            </div>
                            <div class="article-content" itemprop="articleBody">
                               {!! $post->body !!}
                            </div>
                            <ul class="tags tags--article inline-list">
                            </ul>

                            @livewire('blog-comment', ['postId' => $post->id])
                        </div>
                    </div>
                </article>
            </div>
            <div class="text-right">
                <a href="{{ route('blog.index') }}" class="return-link">? Voir tous les articles</a>
            </div>
        </div>
    </div>
</main>
@stop
