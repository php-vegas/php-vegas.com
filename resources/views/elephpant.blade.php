@extends('layouts.app')

@section('content')

    <section class="hero-banner">
        <img src="{{ asset('img/bg-2.jpg') }}" alt="Welcome To Sunny PHP Vegas!" />
        <div class="caption">
            <div class="col-sm-12">
                <h3 class="headline text-center">
                    Elephpant Time!
                </h3>
                <p>
                    For all of you hard-core <span class="php-purple">PHP</span> fans and elephpant collectors, we are
                    creating an <span class="php-purple">EPIC</span> new addition to the family that you won't want to miss!
                </p>
            </div>
        </div>
    </section>

    <section class="cta-row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 col-md-7">
                        <h3 class="caption headline text-center php-purple">
                            ElePHPant Time!
                        </h3>
                        <p>
                            For all of you hard-core <span class="php-purple">PHP</span> fans and elephpant collectors, we are
                            creating an <span class="php-purple">EPIC</span> new addition to the family that you won't want to miss!
                        </p>
                        <img class="showcase" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,f_auto,w_620/v1530647698/df6mjyyahweszjsmrkco.jpg">
                    </div>
                    <div class="col-sm-12 col-md-5 ">
                        <iframe src="https://www.indiegogo.com/project/phplashy-the-official-php-vegas-elephpant-software-toys/embedded/18638867" width="300px" height="435px" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
                {{--<div class="col-md-4 col-sm-12">--}}
                    {{--<div class="cta">--}}
                        {{--<i class="fa fa-meetup"></i>--}}
                        {{--<h3 class="title">Meetup Monthly!</h3>--}}
                        {{--<p class="tagline">--}}
                            {{--Every month we get together and talk about interesting topics in the PHP community.--}}
                        {{--</p>--}}
                        {{--<a href="{{ route('meetup-events') }}" class="btn btn-primary">--}}
                            {{--Learn More--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-12">--}}
                    {{--<div class="cta">--}}
                        {{--<i class="fa fa-users"></i>--}}
                        {{--<h3 class="title">Our Sponsors!</h3>--}}
                        {{--<p class="tagline">--}}
                            {{--We have a group of amazing sponsors that make this all possible, check them out!--}}
                        {{--</p>--}}
                        {{--<a href="{{ route('our-sponsors') }}" class="btn btn-primary">--}}
                            {{--Learn More--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-12">--}}
                    {{--<div class="cta">--}}
                        {{--<i class="fa fa-slack"></i>--}}
                        {{--<h3 class="title">Where To Find Us?</h3>--}}
                        {{--<p class="tagline">--}}
                            {{--If you need help, or are just wanting to stay up to date, check out our contact info.--}}
                        {{--</p>--}}
                        {{--<a href="{{ route('contact') }}" class="btn btn-primary">--}}
                            {{--Learn More--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    <section class="current-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {{--<div class="event">--}}
                        {{--<div class="heading-meta">--}}
                            {{--{{ $event['venue']['name'] }} //--}}
                            {{--{{ $event['venue']['address_1'] }}--}}
                            {{--{{ $event['venue']['city'] }},--}}
                            {{--{{ $event['venue']['state'] }}--}}
                            {{--{{ $event['venue']['zip'] }} //--}}
                            {{--Date: {{ date("M d, Y", ($event['time'] / 1000)) }} //--}}
                            {{--RSVPs: {{ $event['yes_rsvp_count'] }}--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6 col-sm-12">--}}
                                {{--<h3 class="event-name">--}}
                                    {{--{{ $event['name'] }}--}}
                                {{--</h3>--}}
                                {{--{!! $event['description'] !!}--}}
                                {{--<a href="{{ $event['event_url'] }}" target="_blank" class="learn-more btn btn-primary">--}}
                                    {{--Learn More--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 col-sm-12">--}}
                                {{--<div class="home-event-map"--}}
                                     {{--id="home-event-map"--}}
                                     {{--data-lat="{{ $event['venue']['lat'] }}"--}}
                                     {{--data-lon="{{ $event['venue']['lon'] }}"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ getenv('MAPS_JS_API_KEY') }}"></script>
@endsection