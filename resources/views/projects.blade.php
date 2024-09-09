@extends('layouts.app')

@section('content')

    <!-- # works
            ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row">
            <div class="column xl-12">
                {{-- <div class="section-header" data-num="02"> --}}
                    <h2 class="text-display-title text-center">My Projects</h2>
                {{-- </div> <!-- end section-header --> --}}
            </div>
        </div>

        <div class="row folio-entries">

            @foreach ($projects as $key => $project)
                <div class="column entry">
                    <a href="{{ asset('images/folio/gallery/' . $project['image']) }}" class="entry__link glightbox"
                        data-glightbox="title: {{ $project['title'] }}; description: .entry__desc-{{ $key }}">
                        <div class="entry__thumb">
                            <img src="{{ asset('images/folio/' . $project['image']) }}" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">{{ $project['title'] }}</h4>
                            <div class="entry__cat">{{ $project['description'] }}</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-{{ $key }}">
                        <p>
                            {{ $project['details'] }}
                            <a href="{{ route('project.details', $key) }}">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->
            @endforeach

        </div> <!-- folio entries -->


        <div class="row s-testimonials">
            <div class="column xl-12">

                <h3 class="s-testimonials__header">Hear from My Happy Clients</h3>

                <div class="swiper-container s-testimonials__slider">

                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $testimonial)
                            <div class="s-testimonials__slide swiper-slide">
                                <div class="s-testimonials__author">
                                    <img src="{{ asset('images/avatars/' . $testimonial['image']) }}" alt="Author image"
                                        class="s-testimonials__avatar">
                                    <cite class="s-testimonials__cite">
                                        <strong>{{ $testimonial['client_name'] }}</strong>
                                        <span>{{ $testimonial['company'] }}</span>
                                    </cite>
                                </div>
                                <p>
                                    {{ $testimonial['testimonial'] }}
                                </p>
                            </div> <!-- end s-testimonials__slide -->
                        @endforeach

                    </div> <!-- end swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div> <!-- end swiper-container -->

            </div> <!-- end column -->
        </div> <!-- end s-testimonials -->

    </section> <!-- end s-works -->
@endsection
