@extends('layout.header')

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


        @if(count($exercises) > 0)
            @include('partials.home.exercises')
        @endif

        <section class="educa-row section-carousel-coursegrid">

            <div class="container-fluid2">
                <div class="title-section text-center">
                    <h1 class="title">Our Courses</h1>
                </div>
                <div class="btn-filter-group text-center clearfix">
                    <button class="btn-filter btn-active" data-filter="*">All Courses</button>
                    <button class="btn-filter" data-filter=".science">Science</button>
                    <button class="btn-filter" data-filter=".photo">Photography</button>
                    <button class="btn-filter" data-filter=".design">Graphics Design</button>
                    <button class="btn-filter" data-filter=".business">Business</button>
                </div>
                <div class="main-course course-grid blog-carousel">
                    <div class="post-item photo design business">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/1.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Ms. Lucius</a></h6>
                                            <span class="position">Materials</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price">$ 180</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Materials Technology</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day"> 25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>
                    <div class="post-item science design business">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/2.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a2.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Mr. Tom Redder</a></h6>
                                            <span class="position">Financial</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price">$ 310</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Financial Accounting</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day">25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>
                    <div class="post-item science photo business">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/3.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a3.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Mr. John Wick</a></h6>
                                            <span class="position">Java Laguage</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price free">Free</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Programming Techniques</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day">25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>
                    <div class="post-item science photo design">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/4.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a4.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Ms. Lara Croft</a></h6>
                                            <span class="position">Organic Chemistry</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price">$ 250</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Chemical Engineering</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day"> 25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>

                    <div class="post-item photo design business">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/1.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Ms. Lucius</a></h6>
                                            <span class="position">Materials</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price">$ 180</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Materials Technology</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day"> 25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>
                    <div class="post-item science photo business">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/2.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a2.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Mr. Tom Redder</a></h6>
                                            <span class="position">Financial</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price">$ 310</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Financial Accounting</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day">25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>
                    <div class="post-item science photo design ">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/3.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a3.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Mr. John Wick</a></h6>
                                            <span class="position">Java Laguage</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price free">Free</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Programming Techniques</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day">25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>
                    <div class="post-item science  design business">
                        <div class="box-item clearfix">
                            <div class="entry-border">
                                <div class="feature-post">
                                    <a href="#"><img src="assets/images/course/v1/4.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <div class="author-post">
                                        <div class="avatar">
                                            <img src="assets/images/course/v1/a4.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6 class="name"><a href="#">Ms. Lara Croft</a></h6>
                                            <span class="position">Organic Chemistry</span>
                                            <span class="stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="price">$ 250</div>
                                    <h5 class="title-post clearfix">
                                        <a href="course-details.html">Chemical Engineering</a>
                                    </h5>
                                    <div class="entry-post">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        </p>
                                    </div>
                                    <ul class="meta-post style3 clearfix">
                                        <li class="student">20/38 Student</li>
                                        <li class="day"> 25 Oct, 2017</li>
                                    </ul>
                                </div>
                            </div><!-- /.entry-border -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="educa-row v7 section-latest-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-center">
                            <h1 class="title">Latest News</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="latest-post-grid">
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <a href="#"><img src="assets/images/blog/latest/1.jpg" alt="image"></a>
                                    </div><!-- /.feature-post -->
                                    <div class="content-post border-none">
                                        <h5 class="title-post">
                                            <a href="blog-details.html">The Future Of Web Design</a>
                                        </h5>
                                        <ul class="meta-post style2 clearfix">
                                            <li class="author">
                                                <a href="#">Admin</a>
                                            </li>
                                            <li class="day">
                                                <a href="#">November 11, 2016</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"> 3 Comments</a>
                                            </li>
                                        </ul><!-- /.meta-post -->
                                        <div class="entry-post">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majori-ty have suffered alteration in some form, by injected humour...
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="latest-post-list">
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <a href="#"><img src="assets/images/blog/latest/2.jpg" alt="image"></a>
                                    </div><!-- /.feature-post -->
                                    <div class="content-post border-none">
                                        <h5 class="title-post">
                                            <a href="blog-details.html">How to get better at Learning</a>
                                        </h5>
                                        <ul class="meta-post clearfix">
                                            <li class="author">
                                                <a href="#">Admin</a>
                                            </li>
                                            <li class="day">
                                                <a href="#">November 11, 2016</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"> 3 Comments</a>
                                            </li>
                                        </ul><!-- /.meta-post -->
                                        <div class="entry-post">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle...
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <a href="#"><img src="assets/images/blog/latest/3.jpg" alt="image"></a>
                                    </div><!-- /.feature-post -->
                                    <div class="content-post border-none">
                                        <h5 class="title-post">
                                            <a href="blog-details.html">Tips for being better Musician</a>
                                        </h5>
                                        <ul class="meta-post clearfix">
                                            <li class="author">
                                                <a href="#">Admin</a>
                                            </li>
                                            <li class="day">
                                                <a href="#">December 05, 2016 </a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"> 2 Comments</a>
                                            </li>
                                        </ul><!-- /.meta-post -->
                                        <div class="entry-post">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <a href="#"><img src="assets/images/blog/latest/4.jpg" alt="image"></a>
                                    </div><!-- /.feature-post -->
                                    <div class="content-post border-none">
                                        <h5 class="title-post">
                                            <a href="blog-details.html">Prepare for Jobs’ Opportunity</a>
                                        </h5>
                                        <ul class="meta-post clearfix">
                                            <li class="author">
                                                <a href="#">Admin</a>
                                            </li>
                                            <li class="day">
                                                <a href="#">Jun 17, 2016</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"> 1 Comments</a>
                                            </li>
                                        </ul><!-- /.meta-post -->
                                        <div class="entry-post">
                                            <p>But the majority have suffered alteration in some form, by injected humour...
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="educa-row parallax-fixed background4 v4">
            <div class="overlay-background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section color-style text-center">
                            <h1 class="title">Subscribe Now</h1>
                            <div class="sub-title">
                                Subscribe and receive weekly newsletter with educational materials, new<br>courses, interesting posts, popular books
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="subscribe-form" class="educa-subscribe-form padding-leftright-300" method="post"  data-mailchimp="true">
                            <div class="field clearfix" id="subscribe-content">
                                <p class="group-input-email">
                                    <input id="subscribeEmail" type="email" name="subscribeEmail" placeholder="Your email..." class="validate" >
                                    <label for="subscribeEmail" data-error="wrong"  hidden="" data-success="right">Type your email</label>
                                </p>
                                <p class="group-btn">
                                    <button type="submit" id="subscribe-button" class="educa-button subscribe-submit" title="Subscribe now">SUBSCRIBE</button>
                                </p>
                            </div>
                            <div class="subscription-success"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="educa-row v8 section-event-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section">
                            <h1 class="title">Recent Event</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="post-event">
                        <div class="col-md-4">
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <a href="blog-details.html"><img src="assets/images/blog/latest/e1.jpg" alt="image"></a>
                                        <ul class="meta-post2 style2">
                                            <li class="day">15<span>MAR</span></li>
                                        </ul>
                                    </div><!-- /.feature-post -->
                                    <div class="content-post">
                                        <ul class="meta-post style3 clearfix">
                                            <li class="time">
                                                8:00 AM
                                            </li>
                                            <li class="address">
                                                Vancouver, Canada
                                            </li>
                                        </ul><!-- /.meta-post -->
                                        <h5 class="title-post">
                                            <a href="blog-details.html">Summer School 2017</a>
                                        </h5>

                                        <div class="entry-post">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->
                        </div>
                        <div class="col-md-4">
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <a href="blog-details.html"><img src="assets/images/blog/latest/e2.jpg" alt="image"></a>
                                        <ul class="meta-post2 style2">
                                            <li class="day">20<span>JUN</span></li>
                                        </ul>
                                    </div><!-- /.feature-post -->
                                    <div class="content-post">
                                        <ul class="meta-post style3 clearfix">
                                            <li class="time">
                                                9:30 AM
                                            </li>
                                            <li class="address">
                                                Vancouver, Canada
                                            </li>
                                        </ul><!-- /.meta-post -->
                                        <h5 class="title-post">
                                            <a href="blog-details.html">Hands On Traning Workshop</a>
                                        </h5>

                                        <div class="entry-post">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->
                        </div>
                        <div class="col-md-4">
                            <div class="box-item clearfix">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <a href="blog-details.html"><img src="assets/images/blog/latest/e3.jpg" alt="image"></a>
                                        <ul class="meta-post2 style2">
                                            <li class="day">03<span>DEC</span></li>
                                        </ul>
                                    </div><!-- /.feature-post -->
                                    <div class="content-post">
                                        <ul class="meta-post style3 clearfix">
                                            <li class="time">
                                                10:00 AM
                                            </li>
                                            <li class="address">
                                                Vancouver, Canada
                                            </li>
                                        </ul><!-- /.meta-post -->
                                        <h5 class="title-post">
                                            <a href="blog-details.html">Colorful Day Event</a>
                                        </h5>

                                        <div class="entry-post">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.entry-border -->
                            </div><!-- /.box-item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="educa-row section-testimonation parallax-fixed background1">
            <div class="overlay-background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-center color-style">
                            <h1 class="title">What’s Student Say ?</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="educa-testimonials" data-item="2" data-nav="false" data-dot="true" data-auto="false">
                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/1.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Russell Stephens</span></h5>
                                    <div class="position">University in UK</div>
                                    <div class="text">
                                        In today's world, its important to harness technology to help us advance and connect.
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/2.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Kiwhi Leonard</span></h5>
                                    <div class="position">Open College</div>
                                    <div class="text">
                                        Together as teachers, students and universities we can help make this education available for everyone.
                                    </div>
                                </div>
                            </div>

                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/1.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Russell Stephens</span></h5>
                                    <div class="position">University in UK</div>
                                    <div class="text">
                                        In today's world, its important to harness technology to help us advance and connect.
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/2.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Kiwhi Leonard</span></h5>
                                    <div class="position">Open College</div>
                                    <div class="text">
                                        Together as teachers, students and universities we can help make this education available for everyone.
                                    </div>
                                </div>
                            </div>

                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/1.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Russell Stephens</span></h5>
                                    <div class="position">University in UK</div>
                                    <div class="text">
                                        In today's world, its important to harness technology to help us advance and connect.
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/2.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Kiwhi Leonard</span></h5>
                                    <div class="position">Open College</div>
                                    <div class="text">
                                        Together as teachers, students and universities we can help make this education available for everyone.
                                    </div>
                                </div>
                            </div>

                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/1.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Russell Stephens</span></h5>
                                    <div class="position">University in UK</div>
                                    <div class="text">
                                        In today's world, its important to harness technology to help us advance and connect.
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials">
                                <div class="avatar">
                                    <div class="testimonial-author">
                                        <img src="assets/images/testimonials/2.png" alt="image">
                                    </div>
                                </div>
                                <div class="content-testimonials">
                                    <h5 class="name"><span>Kiwhi Leonard</span></h5>
                                    <div class="position">Open College</div>
                                    <div class="text">
                                        Together as teachers, students and universities we can help make this education available for everyone.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    @include('partials.home.revolution_js')
@endsection