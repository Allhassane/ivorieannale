@extends('layout.header')

@section('content')

    <!-- Page title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Connexion</h1>
                    </div>
                    <div class="bread-crumb text-center">
                        <ul>
                            <li class="home"><a href="/">Accueil</a></li>
                            <li>Register</li>
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


                                <span class="button-login"><button type="submit" name="submit" class="educa-button educa-button-register">CREER MON COMPTE</button></span>
                            </form>
                            <hr>
                            {{--<div class="or-using">--}}
                            {{--<h5>Or Using</h5>--}}
                            {{--</div>--}}
                            {{--<div class="social-login clearfix">--}}
                            {{--<a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>--}}
                            {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="user-box-footer">
                                        <p>Vous n'avez pas encore de compte ?<br><a href="{{ route('register') }}">Créez-en un</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="user-box-footer">
                                        <p>Mot de passe oublié ?<br><a href="{{ route('password.request') }}">Récuperer mon mot de passe</a></p>
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
