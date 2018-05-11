<div class="box-item clearfix">
    <div class="entry-border">
        <div class="content-post border-none">
            <div class="row">
                <div class="col-sm-9">
                    <h5 class="title-post clearfix">
                        <a href="/">{{ $data->title }}</a>
                    </h5>
                </div>
                <div class="col-sm-3">
                    <div class="price">
                        @if(!Auth::check())
                        <a data-toggle="modal" href="#popup_login">
                        @else

                            @if($bread == 'exercises')
                                <a href="{{ route('download.exercises', ['id' => $data->id, 'slug' => $data->slug]) }}">
                            @endif

                            @if($bread == 'examinations')
                                <a href="{{ route('download.examinations', ['id' => $data->id, 'slug' => $data->slug]) }}">
                            @endif


                        @endif
                            <i class="fa fa-download"></i> Télécharger
                        </a>
                    </div>
                </div>
            </div>

            <ul class="meta-post style3 clearfix">
                <li class="matter"> {{ $data->matter->title }}</li>
                <li class="level"> {{ $data->level->title }}</li>
                <li class="download">{{ $data->download }} @if($data->download > 0) Téléchargements @else Téléchargement @endif</li>
                <li class="day"> @if(date('d-m-Y', strtotime($data->created_at)) == date('d-m-Y')) Aujourd'hui @else {{ date('d/m/Y', strtotime($data->created_at)) }} @endif</li>
            </ul>
            @if(!empty($data->corrige))
            <div class="entry-post">
                <p>
                   Corrigé disponible ici &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;
                    <i class="fa fa-file-text"></i> {{ $data->corrige->title }} &nbsp;&nbsp;

                    @if(!Auth::check())
                        <a data-toggle="modal" href="#popup_login">
                    @else

                        @if($bread == 'exercises')
                            <a href="{{ route('download.corrected_exercises', ['id' => $data->corrige->id, 'slug' => $data->corrige->slug]) }}">
                        @endif

                        @if($bread == 'examinations')
                            <a href="{{ route('download.corrected_examinations', ['id' => $data->corrige->id, 'slug' => $data->corrige->slug]) }}">
                        @endif

                    @endif

                        (<i class="fa fa-download"></i> {{ $data->corrige->download }}) Télécharger
                    </a>
                </p>
            </div>
            @endif
            <div class="author-post">
                <div class="avatar">
                    <img src="/assets/icon/school.png" alt="">
                </div>
                <div class="text">
                    <h6 class="name"><a href="#">{{ $data->school->name }}</a></h6>
                    <span class="position"><i class="fa fa-map-marker"></i> {{ $data->school->city }}</span>
                </div>
            </div>

        </div>
    </div><!-- /.entry-border -->
</div>