<section class="educa-row">

    <div class="container-fluid2">
        <div class="text-center">
            <h1 class="title">Les Exercices récents</h1>
        </div>
        <div class="main-course">

            <div class="row">
                <div class="col-sm-offset-1 col-sm-8">
                    @foreach($exercises as $data)

                        @include('partials.exercises.item')

                    @endforeach
                </div>
                <div class="col-sm-3">

                    @if(count($matters) > 0)
                        <div class="sidebar-widget widget-all-course">
                            <h3 class="widget-title">Toutes les matières</h3>
                            <ul class="all-course">

                                @foreach($matters as $matter)

                                    <li>
                                        <a href="{{ route('front.by.category', ['bread_id' => $matter->id, 'bread' => 'matters', 'slug' => $matter->slug]) }}">{{ $matter->title }}</a>
                                    </li>

                                @endforeach

                            </ul>
                        </div><!-- /widget-all-course -->
                    @endif

                </div>

            </div>

        </div>
    </div>
</section>
