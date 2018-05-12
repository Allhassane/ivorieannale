<section class="educa-row v7 section-latest-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center">
                    <h1 class="title">ACTUALITÉS</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="latest-post-grid">
                    <div class="box-item clearfix">
                        <div class="entry-border">
                            <div class="feature-post">
                                <a href="{{ route('blog.show', $blogIndex->slug) }}">
                                    <img src="/storage/{{ str_replace('.', '-index.', $blogIndex->picture) }}" alt="image">
                                </a>
                            </div><!-- /.feature-post -->
                            <div class="content-post border-none">
                                <h5 class="title-post">
                                    <a href="{{ route('blog.show', $blogIndex->slug) }}">{{ $blogIndex->title }}</a>
                                </h5>
                                <ul class="meta-post style2 clearfix">
                                    <li class="author">
                                        <a href="#">Admin</a>
                                    </li>
                                    <li class="day">
                                        <a href="#">@if(date('d-m-Y', strtotime($blogIndex->created_at)) == date('d-m-Y')) Aujourd'hui @else {{ date('d/m/Y', strtotime($blogIndex->created_at)) }} @endif</a>
                                    </li>
                                </ul><!-- /.meta-post -->
                                <div class="entry-post">
                                    <p>
                                        {{ strip_tags(substr($blogIndex->content, 0, 150)) }} ...
                                    </p>
                                </div>
                            </div>
                        </div><!-- /.entry-border -->
                    </div><!-- /.box-item -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="latest-post-list">
                    @foreach($blogs as $data)
                    <div class="box-item clearfix">
                        <div class="entry-border">
                            <div class="feature-post">
                                <a href="{{ route('blog.show', $data->slug) }}"><img src="/storage/{{ str_replace('.', '-home.', $data->picture) }}" alt="image"></a>
                            </div><!-- /.feature-post -->
                            <div class="content-post border-none">
                                <h5 class="title-post">
                                    <a href="{{ route('blog.show', $data->slug) }}">{{ $data->title }}</a>
                                </h5>
                                <ul class="meta-post clearfix">
                                    <li class="author">
                                        <a href="#">Admin</a>
                                    </li>
                                    <li class="day">
                                        <a href="#">@if(date('d-m-Y', strtotime($data->created_at)) == date('d-m-Y')) Aujourd'hui @else {{ date('d/m/Y', strtotime($data->created_at)) }} @endif</a>
                                    </li>
                                </ul><!-- /.meta-post -->
                                <div class="entry-post">
                                    <p>
                                        {{ strip_tags(substr($data->content, 0, 100)) }}
                                    </p>
                                </div>
                            </div>
                        </div><!-- /.entry-border -->
                    </div><!-- /.box-item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>