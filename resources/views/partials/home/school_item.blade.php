<div class="col-sm-3">

    <div class="post-item drawing reading science">
        <div class="box-item clearfix">
            <div class="entry-border">
                <div class="content-post">
                    <h5 class="text-center">
                        <a href="">{{ $data->name }}</a>
                    </h5>
                    <p class="text-center">
                        <i class="fa fa-map-marker"></i> {{ $data->city }}
                    </p>
                    <p></p>
                    <ul class="meta-post style3 clearfix">
                        <li class="age">
                            <a href="{{ route('front.by.category', ['bread_id' => $data->id, 'bread' => 'schools', 'slug' => $data->slug]) }}"> Exercies</a>
                        </li>
                        <li class="student">
                            <a href="{{ route('front.by.category', ['bread_id' => $data->id, 'bread' => 'schools', 'slug' => $data->slug]) }}"> Examens</a>
                        </li>
                    </ul>

                </div>
            </div><!-- /.entry-border -->
        </div>
    </div>

</div>