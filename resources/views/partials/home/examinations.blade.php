<section class="educa-row">

    <div class="container-fluid2">
        <div class="text-center">
            <h1 class="title">Les Sujets d'examens récents</h1>
        </div>
        <div class="main-course">

            <div class="row">
                <div class="col-sm-offset-1 col-sm-8">
                    @foreach($exercises as $data)

                        @include('partials.exercises.item')

                    @endforeach
                </div>
                <div class="col-sm-3">

                    @if(count($levels) > 0)
                        <div class="sidebar-widget widget-tags style2">
                            <h3 class="widget-title">Les Niveaux</h3>
                            <div class="tag-list">

                                @foreach($levels as $level)

                                    <a href="{{ route('front.by.category', ['bread_id' => $level->id, 'bread' => 'levels', 'slug' => $level->slug]) }}" class="all">{{ $level->title }}</a>

                                @endforeach

                            </div>
                        </div><!-- /.widget-tag -->
                    @endif

                </div>

            </div>

        </div>
    </div>
</section>
