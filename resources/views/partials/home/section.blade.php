<div class="container group-form-iconbox">
    <div class="group-iconbox clearfix">
        @foreach($sections as $section)
        <div class="icon-box style2">
            <div class="box-content">
                <h3 class="box-title"><i class="ion-checkmark-circled"></i><a href="#">{{ $section->title }}</a></h3>
                <p>{{ $section->content }}</p>
            </div>
        </div>
        @endforeach
        {{--<div class="icon-box style2">--}}
            {{--<div class="box-content">--}}
                {{--<h3 class="box-title"><i class="ion-checkmark-circled"></i><a href="#">National Awards</a></h3>--}}
                {{--<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="icon-box style2">--}}
            {{--<div class="box-content">--}}
                {{--<h3 class="box-title"><i class="ion-checkmark-circled"></i><a href="#">Best Teachers</a></h3>--}}
                {{--<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>