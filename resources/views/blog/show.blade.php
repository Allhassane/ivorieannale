@extends('layout.header')

@section('meta')
    <meta property="og:url"           content="{{ route('blog.show', $data->slug) }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $data->title }}" />
    <meta property="og:description"   content="{{ strip_tags(substr($data->content, 0, 150)) }}" />
    <meta property="og:image"         content="{{ $data->picture }}" />
@endsection

@section('content')

    <!-- Page title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Detail actualité</h1>
                    </div>
                    <div class="bread-crumb text-center">
                        <ul>
                            <li class="home"><a href="/">Accueil</a></li>
                            <li class="home"><a href="{{ route('blog') }}">Articles</a></li>
                            <li>{{ $data->title }}</li>
                        </ul>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /page-title -->
    </div> <!-- /.group-header -->

    <main id="main-content" class="main-content">
        <!-- Blog posts -->
        <section class="main-content blog-single educa-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="post-group clearfix">
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="content-post">
                                        <h5 class="title-post">
                                            {{ $data->title }}
                                        </h5>
                                        <ul class="meta-post clearfix">
                                            <li class="day">Publié le
                                                <a href="#">@if(date('d-m-Y', strtotime($data->created_at)) == date('d-m-Y')) Aujourd'hui @else {{ date('d/m/Y', strtotime($data->created_at)) }} @endif</a>
                                            </li>
                                            {{--<li class="author">by--}}
                                                {{--<a href="#">Anthony</a>--}}
                                            {{--</li>--}}
                                        </ul><!-- /.meta-post -->
                                        <div class="feature-post">
                                            <img src="/storage/{{ $data->picture }}" alt="image">
                                        </div><!-- /.feature-post -->
                                        <div class="entry-post">

                                            {!! $data->content !!}

                                        </div>
                                        <div class="share-post clearfix">
                                            <ul class="educa-socials">
                                                <li class="style">
                                                    Partager :

                                                    <div class="fb-share-button" data-href="{{ route('blog.show', $data->slug) }}" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.show', $data->slug) }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                                            Partager
                                                        </a>
                                                    </div>

                                                    <div style="display: inline-block;position: relative;top: 9px;">
                                                        <a class="twitter-share-button" rel="me"
                                                           href="https://twitter.com/intent/tweet?text={{ $data->title }}"
                                                           data-size="large">
                                                            Tweeter
                                                        </a>
                                                    </div>


                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->

                        </div><!-- /.post-group -->
                    </div>

                    <div class="col-sm-3">
                        @include('partials.sidebar')
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

    </main>
@endsection