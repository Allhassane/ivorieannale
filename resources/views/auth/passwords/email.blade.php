@extends('layout.header')

@section('title')
    Mot de passe oublié | {{ setting('site.site_name') }}
@endsection

@section('content')

    <!-- Page title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Mot de passe oublié</h1>
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
                            <form class="form-login" action="{{ route('password.mobile') }}" method="post">
                                {{ csrf_field() }}
                                <h3 class="title-formlogin">Mot de Passe Oublié</h3>

                                <p>Vous avez oublié votre mot de pass ? Vueillez renseigner votre numéro de téléphone.</p>
                                <small>Vous allez recevoir un code de 5 chiffre pas SMS</small>

                                <br><br>

                                @include('partials.flash')

                                <span class="input-login icon-mobile">
                                    <input type="text" placeholder="Numéro de téléphone" name="mobile" required="required" value="{{ old('mobile') }}">
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </span>

                                <span class="button-login"><button type="submit" name="submit" class="educa-button">VALIDER</button></span>
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
