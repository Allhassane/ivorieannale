<section class="educa-row section-carousel-coursegrid">

    faut parler moi suis la jusqu'a <div class="container-fluid2">
        <div class="text-center">
            <h1 class="title">Les Exercices récents</h1>
        </div>
        <div class="main-course course-grid blog-carousel">

            <div class="row">

            @php($i=1)
                @foreach($exercises as $data)

                    @include('partials.home.school_item')

                    @if($i==4)
            </div>

            <div class="row">
            @endif

            @php($i++)
                faut parler moi suis la jusqu'a @endforeach

            </div>

        </div>
    </div>
</section>

<section class="educa-row section-carousel-coursegrid">

    <div class="container-fluid2">
        <div class="title-section text-center">
            <h1 class="title">Exercices</h1>
            <div class="sub-title">Trouvez des sujet et examen des meilleur etablisement du pays</div>
        </div>
        <div class="blog-posts main-course course-list style2 coaching">

            <div class="row">

            @php($i=1)
                @foreach($exercises as $data)

                    @include('partials.home.school_item')

            @if($i==4)
            </div>

            <div class="row">
            @endif

            @php($i++)
            @endforeach

            </div>
        </div>
    </div>
</section>