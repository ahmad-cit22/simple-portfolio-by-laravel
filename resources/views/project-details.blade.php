@extends('layouts.app')

@section('content')
    <section id="about" class="s-about target-section" style="padding: 40px 100px;">
        <h4 class="s-about__block-title" style="margin-top: 100px; text-align: center">{{ $project['title'] }}</h4>
        <p style="text-align: center">{{ $project['description'] }}</p>
        <div class="image">
            <img src="{{ asset('images/folio/' . $project['image']) }}" width="30%" alt="" style="display: block; margin: 0 auto 30px">
        </div>

        <div class="">
            <p>
                {{ $project['details'] }}
            </p>
        </div>
    </section> <!-- end s-about -->
@endsection
