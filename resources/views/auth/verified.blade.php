@extends('layout.header')

@section('title')
    Vérification réussi | {{ setting('site.site_name') }}
@endsection

@section('content')

    <!-- Page title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading text-center">
                        <h1 class="title">Vérification du numéro de téléphone</h1>
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
                            <form class="form-login" action="" method="post">
                                {{ csrf_field() }}
                                <h3 class="title-formlogin">Inscription réussi</h3>

                                <p>Votre numéro de téléphone a été validé avec succès. Merci :)</p>

                                <p>Vous pouvez maintenant télécharger les sujets d'examens et exercices des lycées d'excellence de Côte d'Ivoire et bien plus encore</p>
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