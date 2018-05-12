@extends('layout.layout')

@section('title')
    Inscription | CIMAT
@stop

@section('content')
    <br><br>
    <div class="main-content">

        <section class="inner-header divider parallax layer-overlay overlay-dark-5" style="background-image: url('http://speedflycaen.fr/IMG/jpg/banniere3.jpg'); background-position: 0 0; background-size: 100% 250px; background-repeat: no-repeat")>
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title text-white">404 page not found !</h2>
                            <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="#">Accueil</a></li>
                                <li class="active text-gray-silver">404 error</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home" class="fullscreen bg-lightest" style="height: 338px;">
            <div class="display-table text-center">
                <div class="display-table-cell">
                    <div class="container pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-7">
                                <h1 class="font-200 line-height-1em mt-0 mb-0 text-theme-color-2">404!</h1>
                                <h2 class="mt-0">Oops! Page non disponible</h2>
                                <p>La page que vous demandez n'est pas disponible sur ce site</p>
                                <a class="btn btn-border btn-gray btn-transparent btn-circled" href="{{ route('index') }}">Accueil
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h3 class="mt-30">Autres Liens</h3>
                                <div class="widget">
                                    <ul class="list list-border">
                                        <li class=""><a href="{{ route('index') }}">Accueil</a></li>
                                        <li><a href="{{ route('presentation') }}">Présentation</a></li>
                                        <li><a href="{{ route('galerie') }}">Galerie</a></li>
                                        <li><a href="{{ route('inscription') }}">Inscription</a></li>
                                        <li><a href="{{ route('moodle') }}">Cours en ligne</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop