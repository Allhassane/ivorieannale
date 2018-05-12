@extends('layout.header')

@section('title')
    Actualités | {{ setting('site.site_name') }}
@endsection

@section('content')

    <section class="page-title background2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Actualités</h1>
                    </div>
                    <div class="bread-crumb text-center">
                        <ul>
                            <li class="home"><a href="/">Accueil</a></li>
                            <li>Article</li>
                        </ul>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /page-title -->
    </div> <!-- /.group-header -->

    <main id="main-content" class="main-content">
        <!-- Course posts -->
        <section class="main-content educa-row">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        @include('partials.sidebar')
                    </div>

                    <div class="col-md-8  reponsive-mt50">
                        <div class="blog-posts main-course course-list">

                            <div class="post-group clearfix">
                                @if(count($datas) > 0)

                                    @foreach($datas as $data)
                                        <div class="box-item clearfix">
                                            <div class="entry-border">
                                                <div class="feature-post">
                                                    <a href="#"><img src="/storage/{{ str_replace('.', '-home.', $data->picture) }}" alt="image"></a>
                                                </div><!-- /.feature-post -->

                                                <div class="content-post border-none">
                                                    <h5 class="title-post clearfix">
                                                        <a href="{{ route('blog.show', $data->slug) }}">{{ $data->title }}</a>
                                                    </h5>
                                                    <ul class="meta-post style3 clearfix">
                                                        <li class="matter">Article</li>
                                                        <li class="day"> @if(date('d-m-Y', strtotime($data->created_at)) == date('d-m-Y')) Aujourd'hui @else {{ date('d/m/Y', strtotime($data->created_at)) }} @endif</li>
                                                    </ul>
                                                    <div class="entry-post">
                                                        <p>
                                                            {{ strip_tags(substr($data->content, 0, 150)) }}
                                                        </p>
                                                    </div>

                                                </div>
                                            </div><!-- /.entry-border -->
                                        </div>
                                    @endforeach
                                @else

                                    @include('partials.empty')

                                @endif
                            </div><!-- /.post-group -->

                            {{ $datas->links() }}

                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        @include('partials.testimonial')
    </main>

@endsection