<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Theme Page Title -->

    <title>@yield('title', setting('site.title'))</title>

    @yield('meta')

    <meta name="description" content="{{ setting('site.description') }}">

    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>

    <!-- Favicon  -->

    <!-- Link Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    @yield('css')

</head>

<body class="header-scroll">
<div class="loader">
    <span class="loader1 block-loader"></span>
    <span class="loader2 block-loader"></span>
    <span class="loader3 block-loader"></span>
</div>
<!-- group-slide -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0&appId=1915453065395718&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="group-header">
    <!-- Header -->
    <header id="header" class="header clearfix">
        <div class="header-group clearfix">
            <div id="logo" class="logo">
                <a href="/" rel="home">
                    <img src="/assets/images/logo.png" alt="image">
                </a>
            </div><!-- /.logo -->

            <div class="group-icon-nav">
                <div class="login">
                    @if(!Auth::check())
                    <a href="{{ route('login') }}" title="">Inscription OU Connexion</a>
                    @else
                        @php(list($username, $var) = explode(' ', Auth::user()->name))
                        <a href="{{ route('logout') }}" title=""><i class="fa fa-user"></i> &nbsp; {{ $username }} | Deconnexion</a>
                    @endif
                </div>

            </div> <!-- /.group-icon-nav -->

            @include('partials.home.menu')

        </div><!-- /.header-group -->
    </header><!-- /.header -->


</div> <!-- /.group-header -->

@yield('content')

<!-- login -->

<div class="modal fade group-popuplogin" id="popup_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login" action="{{ route('login') }}" method="post">

                    {{ csrf_field() }}
                    <h3 class="title-formlogin">CONNEXION</h3>

                    <span class="input-login icon-mobile">
                        <input type="text" placeholder="Numéro de téléphone" name="mobile" value="{{ old('mobile') }}" required="required">
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </span>


                    <span class="input-login icon-pass">
                        <input type="password" placeholder="Mot de Passe" name="password" required="required">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </span>

                    <label class="float-full">
                        <span class="input-check">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="remember"> Remember Me</span>
                        </span>
                    </label>


                    <span class="button-login"><button type="submit" name="submit" class="educa-button educa-button-register">CONNEXION</button></span>
                </form>

                <div class="user-box-footer">
                    <p>Pas encore de compte ? <br><a href="{{ route('register') }}">inscrivez - vous !</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer" class="main-footer is-fixed" data-fixed="true" itemscope="itemscope">
    <div class="footer style3">
        <div class="footer-widgets">
            <div class="container-fluid2 clearfix">
                <div class="one-quarter reponsive-mb30">
                    <div class="widget widget-logo">
                        <div id="logo_footer" class="logo">
                            <a href="index.html" rel="home">
                                <img src="/assets/images/logo.png" alt="image">
                            </a>
                        </div>
                        <span class="email">Email : <a href="#">Educa.support@info.com</a></span>
                        <p class="note">Call directly</p>
                        <span class="phone"><a href="#">(+88) 111 555 666</a></span>
                        <form class="form-select" method="post" action="#">
                            <h5 class="title-form">Your Region</h5>
                            <div class="field clearfix">
                                <p class="group-select">
                                    <select class=" dropdown_select">
                                        <option value="">Melbourne, Australia</option>
                                        <option value="2d">california, US</option>
                                        <option value="3d">Tokyo, Japan</option>
                                    </select>
                                </p>
                            </div>
                        </form>
                    </div><!-- /.widget -->
                </div>
                <div class="one-quarter reponsive-mb30">
                    <div class="widget widget-recent-post">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="popular-post clearfix">
                            <li>
                                <div class="text">
                                    <h6>
                                        <a href="blog-details.html">How to get better at Learning</a>
                                    </h6>
                                    <ul class="meta-post clearfix">
                                        <li class="day">
                                            <a href="#">November 11, 2016</a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"> 3 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <h6>
                                        <a href="blog-details.html">Tips for being better Musician</a>
                                    </h6>
                                    <ul class="meta-post clearfix">
                                        <li class="day">
                                            <a href="#">December 05, 2016</a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"> 7 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <h6>
                                        <a href="blog-details.html">The future of web design</a>
                                    </h6>
                                    <ul class="meta-post clearfix">
                                        <li class="day">
                                            <a href="#">June 20, 2016</a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"> 5 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul><!-- /.popular-news -->
                    </div>
                </div>
                <div class="one-quarter reponsive-mb30">
                    <div class="widget widget-company clearfix">
                        <h3 class="widget-title">Link</h3>
                        <ul class="one-half menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="course-grid.html">Coures</a>
                            </li>
                            <li>
                                <a href="about-us.html">Page</a>
                            </li>
                            <li>
                                <a href="event.html">Event</a>
                            </li>
                            <li>
                                <a href="gallery.html">Portfolio</a>
                            </li>
                        </ul>
                        <ul class="one-half menu">
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="one-quarter reponsive-mb30">
                    <div class="widget widget-maps">
                        <h3 class="widget-title">Location</h3>
                        <div class="educa-maps">
                            <div id="maps" class="maps" style="width: 100%; height: 208px; "></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
    </div><!-- /footer -->

    <!-- Bottom -->
    <div class="bottom style3 clearfix">
        <div class="container-fluid2">
            <div class="copyright one-half">
                <p>Copyright 2017 <a href="#">EDUCA</a> - All Right Reserved</p>
            </div>
            <div class="one-half">
                <div class="menu-footer text-right">
                    <ul class="menu">
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Term & Conditions</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.container -->
    </div>
</footer>

<!-- Javascript -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.easing.js"></script>
<script src="/assets/js/jquery-menu.js"></script>
<script src="/assets/js/owl.carousel.js"></script>
<script src="/assets/js/carousel-filter.js"></script>
<script src="/assets/js/parallax.js"></script>
<script src="/assets/js/imagesloaded.min.js"></script>
<script src="/assets/js/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3XovwFj4F2V0sO67r3NYyrHIHBq4wuO8&amp;region=GB"></script>
<script src="/assets/js/ajaxmailchimp.js"></script>
<script src="/assets/js/jquery-validate.js"></script>

<script src="/assets/js/jquery.cookie.js"></script>
<script src="/assets/js/script.js"></script>


<script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
</script>

@yield('js')

</body>

<!-- Mirrored from jrbthemes.com/html/educa/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 08 May 2018 14:58:39 GMT -->
</html>