@extends('layout.header')

@section('title')
    Contactez - Nous ! |{{ setting('site.site_name') }}
@endsection

@section('content')

    <main id="main-content" class="main-content">
        <!-- Contact -->
        <section class="educa-maps">
            {{--<div id="map-1" class="map-1" style="width: 100%; height: 598px; "></div>--}}
            <iframe id="map-1" class="map-1" style="width: 100%; height: 250px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-4.511260986328126%2C4.902150265162122%2C-3.5238647460937504%2C5.719845659536203&amp;layer=mapnik&amp;marker=5.311133568567166%2C-4.016876220703125"></iframe><br/>
            {{--<div class="container">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="title-section color-style text-center">--}}
                        {{--<h1 class="title" style="color: #0c0c0c">Contactez - Nous</h1>--}}
                        {{--<div class="sub-title">--}}
                            {{--Welcome to our Website. We are glad to have you around.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="group-contact clearfix">
                            <div class="section-onehalf">
                                <div class="group-form-contact">
                                    <form id="" class="contactform" name="" method="post" action="{{ route('contacts.send') }}" novalidate="novalidate">
                                        {{ csrf_field() }}
                                        <div class="title-contact">
                                            <h2>Ecrivez - nous !</h2>
                                            @include('partials.flash')
                                        </div>
                                        <p class="contact-name">
                                            <input type="text" size="30" placeholder="Nom & Prénom(s)" name="name" id="name" required="required">
                                        </p>
                                        <p class="contact-form-email">
                                            <input type="email" size="30" placeholder="Adresse E-mail" name="email" id="email" required="required">
                                        </p>
                                        <p class="contact-form-email">
                                            <input type="text" size="30" placeholder="Numéro de téléphone" name="mobile" id="mobile" required="required">
                                        </p>
                                        <p class="contact-form-comment">
                                            <textarea id="message" class="comment-messages" placeholder="Votre message" tabindex="4" name="message" required="required"></textarea>
                                        </p>
                                        <div class="btn-contact">
                                            <p class="form-contact">
                                                <button type="submit" name="submit" class="educa-button">ENVOYER LE MESSAGE</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="section-onehalf">
                                <div class="group-info-contact">
                                    <div class="title-contact">
                                        <h2>Contacts</h2>
                                    </div>
                                    <ul class="info-adrress">
                                        <li>Adresse : <a href="#">{{ setting('site.adresse') }}</a></li>
                                    </ul>
                                    <div class="call-direc">
                                        Mobile : <a href="#">{{ setting('site.mobile') }}</a>
                                        <br>
                                        Fixe : <a href="#">{{ setting('site.fixe') }}</a>
                                    </div>
                                    <div class="contact-link">
                                        <p>Suivez - nous sur les reseaux sociaux</p>
                                        <ul class="educa-socials">
                                            <li class="facebook">
                                                <a href="{{ setting('site.fb') }}"><i class="social_facebook"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="{{ setting('site.tw') }}"><i class="social_twitter"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="{{ setting('site.insta') }}"><i class="social_instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="{{ setting('site.ln') }}"><i class="social_linkedin"></i></a>
                                            </li>
                                            <li class="youtube">
                                                <a href="{{ setting('site.yb') }}"><i class="social_youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="mail-contact">{{ setting('site.email') }}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection