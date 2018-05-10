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
                            <form class="form-login" action="{{ route('password.mobile.code.comfirm') }}" method="post">
                                {{ csrf_field() }}
                                <h3 class="title-formlogin">Vérification du numéro de téléphone</h3>

                                <p>Nous vous avons envoyé un code de reinitialisation par SMS.</p>

                                <br><br>

                                @include('partials.flash')

                                <span class="input-login icon-mobile">
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <input type="hidden" name="code" value="{{ $data->token }}">
                                    <input type="text" name="code" placeholder="Saisir le code contenu dans le message" required>
                                </span>

                                <span class="button-login"><button type="submit" name="submit" class="educa-button">ENVOYER LE CODE</button></span>
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
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">--}}
                        {{--{{ csrf_field() }}--}}

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

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Send Password Reset Link--}}
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
