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

    <section class="cta-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="cta">
                        <i class="fa fa-meetup"></i>
                        <h3 class="title">Meetup Monthly!</h3>
                        <p class="tagline">
                            Every month we get together and talk about interesting topics in the PHP community.
                        </p>
                        <a href="{{ route('meetup-events') }}" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="cta">
                        <i class="fa fa-users"></i>
                        <h3 class="title">Our Sponsors!</h3>
                        <p class="tagline">
                            We have a group of amazing sponsors that make this all possible, check them out!
                        </p>
                        <a href="{{ route('our-sponsors') }}" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="cta">
                        <i class="fa fa-slack"></i>
                        <h3 class="title">Where To Find Us?</h3>
                        <p class="tagline">
                            If you need help, or are just wanting to stay up to date, check out our contact info.
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
