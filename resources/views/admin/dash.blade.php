@extends('layouts.admin')

@section('content')

    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <section class="widget request-count">
                        <div class="count">
                            {{ $requestCount }}
                        </div>
                        <p>Current Topic Requests</p>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="widget memberCount">
                        <div class="count">
                            {{ $groupDetails['members'] }}
                        </div>
                        <p>Current Member Count</p>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="widget memberCount">
                        <div class="count">
                            {{ $eventDetails['yes_rsvp_count'] }}
                        </div>
                        <p>Next Event RSVP's</p>
                    </section>
                </div>
            </div>
        </div>
    </section>

@endsection