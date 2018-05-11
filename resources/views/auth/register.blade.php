@extends('layout.header')

@section('content')

    <!-- Page title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Register</h1>
                    </div>
                    <div class="bread-crumb text-center">
                        <ul>
                            <li class="home"><a href="index.html">Home</a></li>
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
                    <div class="col-sm-offset-1 col-sm-6">

                        <div class="modal-body text-center clearfix register-form">
                            <form class="form-login" action="{{ route('register') }}" method="post">
                                {{ csrf_field() }}
                                <h3 class="title-formlogin">INSCRIPTION</h3>

                                <span class="input-login icon-user">
                                    <input type="text" placeholder="Nom & Prénom(s)" id="user-name" name="name" required="required" data-tag="0">
                                    <span class="error-block error-name-block">
                                        {{--<span class="danger"><i class="fa fa-close"></i></span>--}}
                                    </span>
                                </span>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <!-- country codes (ISO 3166) and Dial codes. -->
                                        <select name="countryCode" id="countryCode">
                                            @foreach($countries as $country)
                                                @if($country->code == '+225')
                                                    <option value="{{ $country->id }}" selected>{{ $country->name }} ({{ $country->code }})</option>
                                                @else
                                                    <option value="{{ $country->id }}">{{ $country->name }} ({{ $country->code }})</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <span class="input-login icon-mobile">
                                            <input type="text" placeholder="Numéro de téléphone" id="user-mobile-view" name="mobile-view" required="required" data-content="{{ route('checked.number') }}">
                                            <input type="hidden" id="user-mobile" name="mobile" data-tag="0">
                                            <span class="error-block error-mobile-block">
                                            {{--<span class="success"><i class="fa fa-check"></i></span>--}}
                                            </span>
                                        </span>
                                    </div>
                                </div>


                                <span class="input-login icon-mail">
                                    <input type="email" placeholder="Adresse E-mail" id="user-email" name="email" required="required" data-tag="0">
                                    <span class="error-block error-email-block">
                                        {{--<span class="danger"><i class="fa fa-close"></i></span>--}}
                                    </span>
                                </span>
                                <span class="input-login icon-pass">
                                    <input type="password" placeholder="Mot de Passe" id="user-password" name="password" required="required" data-tag="0">
                                    <span class="error-block error-password-block">
                                        {{--<span class="danger"><i class="fa fa-close"></i></span>--}}
                                    </span>
                                </span>
                                <span class="input-login icon-pass">
                                    <input type="password" placeholder="Confirmation Mot de Passe" id="user-password_confirmation" name="password_confirmation" required="required" data-tag="0">
                                    <span class="error-block error-password-confirm-block">
                                        {{--<span class="danger"><i class="fa fa-close"></i></span>--}}
                                    </span>
                                </span>
                                <label class="float-full">
                                    <span class="input-check">
                                        {{--<input type="checkbox" name="agree" id="agree" data-tag="0">--}}
                                        <span class="remember">En créant un compte, vous accèptez les conditons d'utilisation</span>
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
                            <div class="user-box-footer">
                                <p>Vous avez déjà un compte ?<br><a href="{{ route('login') }}">Connectez-vous !</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="modal-body text-center clearfix register-form">
                            <h3 class="title-formlogin">Bienvenue sur coursera</h3>
                            Inscrivez-vous dès aujourd'hui sur learning-machine pour profiter des sujets d'Examens, exercices etc... des ecole de renomé en Côte d'Ivoire
                            <hr>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
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

{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}