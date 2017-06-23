@extends('layouts.app')

@section('content')

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="page-title">
                        Current Meetup Events
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="meetup-events-list" id="meetup-events-list">
        <div class="container">
            <div class="row events">
                @foreach($events as $key => $event)
                    @if($key === 0)
                        <div class=" col-lg-12 col-md-12 col-sm-12">
                            <div class="event current-event">
                                <div class="heading-meta">
                                    {{ $event['venue']['name'] }} //
                                    {{ $event['venue']['address_1'] }}
                                    {{ $event['venue']['city'] }}
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <h3 class="event-name">
                                            {{ $event['name'] }}
                                        </h3>
                                        {!! $event['description'] !!}
                                        <a href="{{ $event['event_url'] }}" target="_blank" class="learn-more btn btn-primary">
                                            Learn More
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="home-event-map"
                                             id="home-event-map"
                                             data-lat="{{ $event['venue']['lat'] }}"
                                             data-lon="{{ $event['venue']['lon'] }}"></div>
                                    </div>
                                </div>
                                <div class="footer-meta">
                                    Date: {{ date("M d, Y", ($event['time'] / 1000)) }} //
                                    RSVPs: {{ $event['yes_rsvp_count'] }}
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="event">
                                <div class="heading-meta">
                                    {{ $event['venue']['name'] }} //
                                    {{ $event['venue']['address_1'] }}
                                    {{ $event['venue']['city'] }}
                                </div>
                                <h3 class="event-name">
                                    {{ $event['name'] }}
                                </h3>
                                {!! $event['description'] !!}
                                <a href="{{ $event['event_url'] }}" target="_blank" class="learn-more btn btn-primary">
                                    Learn More
                                </a>
                                <div class="footer-meta">
                                    Date: {{ date("M d, Y", ($event['time'] / 1000)) }} //
                                    RSVPs: {{ $event['yes_rsvp_count'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ getenv('MAPS_JS_API_KEY') }}"></script>
@endsection
