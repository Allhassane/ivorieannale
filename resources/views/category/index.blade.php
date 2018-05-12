@extends('layout.header')

@section('title')
    {{ setting('site.title') }}
@endsection

@section('content')

    <!-- Page title -->
    <section class="page-title background2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">
                            @if($title == 'matters')
                                PAR MATIÈRES
                            @elseif($title == 'levels')
                                PAR NIVEAUX
                            @else
                                PAR ETABLISSEMENTS
                            @endif
                        </h1>
                    </div>
                    <div class="bread-crumb text-center">
                        <ul>
                            <li class="home"><a href="/">Accueil</a></li>
                            <li>
                                @if($title == 'matters')
                                    matières
                                @elseif($title == 'levels')
                                    niveaux
                                @else
                                    etablissements
                                @endif
                            </li>
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

                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="exercises" class="active"><a href="#exercises" aria-controls="exercises" role="tab" data-toggle="tab">SUJETS D'EXERCICES</a></li>
                                <li role="examinations"><a href="#examinations" aria-controls="examinations" role="tab" data-toggle="tab">SUJETS D'EXAMENS</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="exercises"><br>

                                    <div class="blog-posts main-course course-list">
                                        <div class="post-group clearfix">

                                            @if(count($exercises) > 0)

                                                @php($bread = 'exercises')

                                                @foreach($exercises as $data)
                                                    @include('partials.exercises.item')
                                                @endforeach
                                            @else

                                                @include('partials.empty')

                                            @endif

                                        </div><!-- /.post-group -->

                                        {{ $exercises->links() }}

                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="examinations"><br>

                                    <div class="blog-posts main-course course-list">
                                        <div class="post-group clearfix">

                                            @if(count($examinations) > 0)

                                                @php($bread = 'examinations')

                                                @foreach($examinations as $data)
                                                    @include('partials.exercises.item')
                                                @endforeach
                                            @else

                                                @include('partials.empty')

                                            @endif

                                        </div><!-- /.post-group -->

                                        {{ $examinations->links() }}

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        @include('partials.testimonial')
    </main>

@endsection