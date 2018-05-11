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
                    <div class="col-sm-offset-3 col-sm-6">

                        <div class="modal-body text-center clearfix register-form">
                            <form class="form-login" action="{{ route('password.mobile.request') }}" method="post">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $data->token }}">

                                <h3 class="title-formlogin">NOUVEAU MOT DE PASSE</h3>

                                <br>

                                @include('partials.flash')

                                <span class="input-login icon-mobile">
                                    <input type="text" placeholder="Numéro de téléphone" value="{{ $data->mobile }}" name="mobile" required="required">
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

                                <span class="input-login icon-pass">
                                    <input type="password" placeholder="Confirmation du Mot de Passe" name="password_confirmation" required="required">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </span>

                                <span class="button-login"><button type="submit" name="submit" class="educa-button">REINITIALISER MON MOT DE PASSE</button></span>
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
                </div>
            </div>
        </section>
    </main>

{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Reset Password</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<input type="hidden" name="token" value="{{ $token }}">--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

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

                        {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

                                {{--@if ($errors->has('password_confirmation'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Reset Password--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
