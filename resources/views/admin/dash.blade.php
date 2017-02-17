@extends('layouts.admin')

@section('content')

    <section class="dashboard">
        @if(!is_null($confirmation))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well confirmation">
                            <p>
                                <i class="fa fa-check"></i>
                                {{ $confirmation }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
            <div class="row">
                <div class="col-md-6">
                    <div class="well">
                        <h3 class="title">
                            Latest Topic Requests
                        </h3>
                        <ul class="requests">
                            @foreach($topicRequests as $request)
                                <li class="request">
                                    <div class="name">{{ $request->first_name }} {{ $request->last_name }}</div>
                                    <div class="topic">
                                        <p>
                                            {{ $request->topic_request }}
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection