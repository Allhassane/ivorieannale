<div class="nav-group">
    <div class="btn-menu">
        <span></span>
    </div><!-- //mobile menu button -->

    <nav id="menuzord" class="menuzord">
        <ul class="menu">
            <li class="accueil">
                <a href="/">ACCUEIL</a>
            </li>
            <li class="exercice">
                <a href="{{ route('front.exercises') }}">EXERCICES</a>
            </li>
            <li class="examen">
                <a href="{{ route('front.examinations') }}">EXAMENS</a>
            </li>
            <li class="actu">
                <a href="{{ route('blog') }}">ACTUALITÉS</a>
            </li>
            <li class="contact">
                <a href="{{ route('contacts') }}">CONTACTEZ - NOUS !</a>
            </li>

        </ul><!-- /.menu -->
    </nav><!-- /.mainnav -->
</div><!-- /.nav-group -->