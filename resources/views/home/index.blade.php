@extends('layout.header')

@section('title')
    {{ setting('site.title') }}
@endsection

@section('css')
    @include('partials.home.revolution_css')
@endsection

@section('content')
    <main id="main-content" class="main-content">

        @if(count($slides) > 0)
            @include('partials.home.slide')
        @endif

        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="educa-form-keyword">
                        <form class="form-search-course style2 bg-white " action="#" method="post">
                            <div class="field clearfix">
                                <p class="field-search ">
                                    <input type="text" size="30" placeholder="Keyword Search" name="keyword" id="keyword" required="">
                                </p>
                                <p class="field-select-cate ">
                                    <select class="select-category">
                                        <option value="">Category Course</option>
                                        <option value="2d">Category Course</option>
                                        <option value="3d">Category Course</option>
                                    </select>
                                </p>
                                <p class="field-select-price ">
                                    <select class="select-price">
                                        <option value="">Select Price Type</option>
                                        <option value="2d">Select Price Type</option>
                                        <option value="3d">Select Price Type</option>
                                    </select>
                                </p>
                            </div>
                            <div class="educa-btn-search clearfix">
                                <button class="comment-submit educa-button">SEARCH</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.home.section')

        @if(count($schools) > 0)
            @include('partials.home.schools')
        @endif


        @php($bread = 'exercises')
        @if(count($exercises) > 0)
            @include('partials.home.exercises')
        @endif


        @include('partials.home.subscribe')


        @php($bread = 'examinations')
        @if(count($exercises) > 0)
            @include('partials.home.examinations')
        @endif

            <hr>


        @if(count($blogs) > 0)
            @include('partials.home.blog')
        @endif

        @include('partials.testimonial')

    </main>
@endsection

@section('js')
    @include('partials.home.revolution_js')
@endsection