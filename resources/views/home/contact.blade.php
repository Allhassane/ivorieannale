@extends('layout.header')

@section('content')

    <main id="main-content" class="main-content">
        <!-- Contact -->
        <section class="educa-maps">
            <div id="map-1" class="map-1" style="width: 100%; height: 598px; "></div>
            <div class="container">
                <div class="col-md-12">
                    <div class="title-section color-style text-center">
                        <h1 class="title">Contact Us</h1>
                        <div class="sub-title">
                            Welcome to our Website. We are glad to have you around.
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="group-contact clearfix">
                            <div class="section-onehalf">
                                <div class="group-form-contact">
                                    <form id="contactform" class="contactform" name="contact-form" method="post" action="http://jrbthemes.com/html/educa/sendmail.php" novalidate="novalidate">
                                        <div class="title-contact">
                                            <h2>Get In Touch</h2>
                                            <div class="sub-form">
                                                We love hearing from readers. We really appreciate you taking the time to get in touch
                                            </div>
                                        </div>
                                        <p class="contact-name">
                                            <input type="text" size="30" placeholder="Your name" name="name" id="name" required="required">
                                        </p>
                                        <p class="contact-form-email">
                                            <input type="email" size="30" placeholder="Your email" name="email" id="email" required="required">
                                        </p>
                                        <p class="contact-form-comment">
                                            <textarea id="message" class="comment-messages" placeholder="Your messages" tabindex="4" name="message" required="required"></textarea>
                                        </p>
                                        <div class="btn-contact">
                                            <p class="form-contact">
                                                <button type="submit" name="submit" class="educa-button">SEND MESSAGE</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="section-onehalf">
                                <div class="group-info-contact">
                                    <div class="title-contact">
                                        <h2>Contact</h2>
                                    </div>
                                    <ul class="info-adrress">
                                        <li>Adrress 1: <a href="#">69 Halsey St, New York, Ny 10002, US</a></li>
                                        <li>Adrress 2: <a href="#">567 Baker St, Los Angeles, California, US.</a></li>
                                    </ul>
                                    <div class="call-direc">
                                        Call directly:<br><a href="#">(+88) 344 956 40</a>
                                    </div>
                                    <div class="contact-link">
                                        <p>Connect to</p>
                                        <ul class="educa-socials">
                                            <li class="facebook">
                                                <a href="#"><i class="social_facebook"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="social_twitter"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="social_instagram"></i></a>
                                            </li>
                                            <li class="printer">
                                                <a href="#"><i class="social_pinterest"></i></a>
                                            </li>
                                            <li class="skype">
                                                <a href="#"><i class="social_skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="mail-contact">Hello@educagroup.com</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection