@php($testimonials = \App\Testimonial::where('statut', 1)->OrderBy('id', 'Desc')->limit(10)->get())
@if(count($testimonials) > 0)
    <section class="educa-row section-testimonation parallax-fixed background1">
        <div class="overlay-background"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center color-style">
                        <h1 class="title">Que disent les étudiants ?</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="educa-testimonials" data-item="2" data-nav="false" data-dot="true" data-auto="false">

                        @foreach($testimonials as $item)

                        <div class="testimonials">
                            <div class="avatar">
                                <div class="testimonial-author">
                                    <img src="/storage/{{ $item->avatar }}" alt="image">
                                </div>
                            </div>
                            <div class="content-testimonials">
                                <h5 class="name"><span>{{ $item->name }}</span></h5>
                                <div class="position">{{ $item->fonction }}</div>
                                <div class="text">
                                    {{ $item->content }}
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endif