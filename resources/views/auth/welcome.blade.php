@extends('layout.header')

@section('title')
    Bienvenue sur {{ setting('site.site_name') }}
@endsection

@section('content')

    <!-- Page title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Bienvenue sur {{ setting('site.site_name') }}</h1>
                    </div>
                    <div class="bread-crumb text-center">
                        <ul>
                            <li class="home"><a href="/">Accueil</a></li>
                            <li>Mon Compte</li>
                        </ul>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /page-title -->

    <main id="main-content" class="main-content">
        <section class="section-register educa-row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-3 col-sm-6">

                        <div class="modal-body text-center clearfix register-form">
                            <form class="form-login" action="{{ route('confirm.code') }}" method="post">
                                {{ csrf_field() }}
                                <h3 class="title-formlogin">Inscription réussi</h3>

                                <p>Bienvenue, votre compte a été créer avec succès nous vous avons envoyé un message sur votre numéro avec un code. veuillez entrer le code pour confirmer votre numéro de téléphone.</p>

                                <br>

                                @include('partials.flash')

                                <span class="input-login icon-mail">
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <input type="hidden" name="code" value="{{ $data->token }}">
                                    <input type="text" placeholder="Saisir le code contenu dans le message" id="code" name="code" required="required" data-tag="0">
                                    <span class="error-block error-name-block">
                                        {{--<span class="danger"><i class="fa fa-close"></i></span>--}}
                                    </span>
                                </span>

                                <span class="button-login"><button type="submit" name="submit" class="educa-button">ENVOYER LE CODE</button></span>
                            </form>
                            <hr>
                            <div class="user-box-footer">
                                <p>Vous avez déjà un compte ?<br><a href="{{ route('login') }}">Connectez-vous !</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script src="/assets/js/register.js"></script>
@endsection