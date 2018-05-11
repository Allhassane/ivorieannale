@extends('layout.header')

@section('content')

    <!-- Page title -->
    <section class="page-title background2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Courses</h1>
                    </div>
                    <div class="bread-crumb text-center">
                        <ul>
                            <li class="home"><a href="index.html">Home</a></li>
                            <li>Courses</li>
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

                    @include('partials.sidebar')

                    <div class="col-md-8  reponsive-mt50">
                        <div class="blog-posts main-course course-list">
                            <div class="post-group clearfix">

                                @if(count($datas) > 0)

                                    @foreach($datas as $data)
                                        @include('partials.exercises.item')
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