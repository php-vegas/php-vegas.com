@extends('layouts.app')

@section('content')

    <section class="hero-banner">
        <img src="{{ asset('img/bg-2.jpg') }}" alt="Welcome To Sunny PHP Vegas!" />
        <div class="caption">
            <h3 class="headline">
                Come And Meetup!
            </h3>
            <p>
                We have our monthly meetup scheduled to take place on the first thursday of each month. We have
                members of all skill levels, and we cover topics of all types!
            </p>
            <a href="{{ route('meetup-events') }}" class="btn btn-primary">
                RSVP For The Meetup
            </a>
        </div>
    </section>

@endsection
