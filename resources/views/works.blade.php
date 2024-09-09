@extends('layouts.app')

@section('content')

    <section id="about" class="" style="margin-top: 150px !important">

        <div class="row s-about__content">
            <div class="">



                <div class="grid-list-items s-about__blocks" style="margin-top: 0 !important">

                    <div class="grid-list-items__item s-about__block">
                        <h3 style="text-align: center" style="margin-top: 0 !important">Experiences</h3>
                        <ul class="s-about__list">
                            @foreach ($workExperiences as $experience)
                                <li>
                                    {{ $experience['company'] }}
                                    <span>{{ $experience['position'] }}</span>
                                    <span class="work-duration-text">{{ $experience['duration'] }}</span>
                                    <p class="work-description-text">{{ $experience['description'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div> <!--end s-about__block -->

                </div> <!-- grid-list-items -->

                <p class="attention-getter" style="font-size: 20px !important">
                    {!! $homeContents['about'] !!}
                </p>

            </div> <!--end column -->
        </div> <!--end s-about__content -->

    </section> <!-- end s-about -->
@endsection
