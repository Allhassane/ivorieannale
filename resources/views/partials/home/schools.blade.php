<section class="educa-row section-carousel-coursegrid">

    <div class="container-fluid2">
        <div class="title-section text-center">
            <h1 class="title">Etablissement</h1>
            <div class="sub-title">Trouvez des sujet et examen des meilleur etablisement du pays</div>
        </div>
        <div class="blog-posts main-course course-list style2 coaching">

            <div class="row">

            @php($i=1)
            @foreach($schools as $data)

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