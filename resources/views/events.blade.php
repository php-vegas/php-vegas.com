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
                    <div class="@if($key === 0) col-lg-12 col-md-12 @else col-lg-6 col-md-6 @endif col-sm-12">
                        <div class="event">
                            <div class="heading-meta">
                                {{ $event['venue']['name'] }} //
                                {{ $event['venue']['address_1'] }}
                                {{ $event['venue']['city'] }},
                                {{ $event['venue']['state'] }}
                                {{ $event['venue']['zip'] }}
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
                @endforeach
            </div>
        </div>
    </section>

@endsection
