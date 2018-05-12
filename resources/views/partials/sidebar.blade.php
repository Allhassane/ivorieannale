    <div class="sidebar page-course">
        <div class="sidebar-widget widget-searchbox">
            <form action="#" id="searchform" method="get">
                <div>
                    <input type="text" id="s" class="sss" placeholder="Search courses name">
                    <input type="submit" value="" id="searchsubmit">
                </div>
            </form>
        </div><!-- /widget-searchbox -->

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

        @if(count($schools) > 0)
        <div class="sidebar-widget widget-location">
            <h3 class="widget-title">Etablissement</h3>
            <ul class="all-course">

                @foreach($schools as $school)

                    <li>
                        <a href="{{ route('front.by.category', ['bread_id' => $school->id, 'bread' => 'schools', 'slug' => $school->slug]) }}">{{ $school->name }}</a>
                    </li>

                @endforeach

            </ul>
        </div><!-- /.widget-location -->
        @endif

    </div>
