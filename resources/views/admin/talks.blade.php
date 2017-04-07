@extends('layouts.admin')

@section('content')

    <section class="add-talk-form">
        <div class="container">
            <div class="col-md-12">
                <form action="{{ url('/admin/past-talks/insert') }}" method="post">
                    <div class="panel">
                        <h3 class="panel-heading">
                            Create New Talk
                        </h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="meetup_name">Meetup Name *</label>
                                    <input type="text" name="meetup_name" id="meetup-name" class="meetup-name form-control" />
                                </div>
                                <div class="col-md-3">
                                    <label for="meetup_link">Meetup Link *</label>
                                    <input type="text" name="meetup_link" id="meetup-link" class="meetup-link form-control" />
                                </div>
                                <div class="col-md-3">
                                    <label for="slides_link">Slides Links *</label>
                                    <input type="text" name="slides_link" placeholder="Separate With Commas" id="slides-link" class="slides-link form-control" />
                                </div>
                                <div class="col-md-3">
                                    <label for="video_link">Video Link *</label>
                                    <input type="text" name="video_link" id="video-link" class="video-link form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="meetup_description">Meetup Description *</label>
                                    <textarea name="meetup_description" id="meeup-description" cols="30" rows="10"
                                              class="meetup-description form-control"></textarea>
                                </div>
                            </div>
                            <hr>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Create New Talk" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="panel">
                    <h3 class="panel-heading">All Previous Talks</h3>
                    <div class="panel-body">
                        <div class="row header-row">
                            <div class="col-md-4">
                                <strong>Meetup Name</strong>
                            </div>
                            <div class="col-md-3">
                                <strong>Event Page</strong>
                            </div>
                            <div class="col-md-3">
                                <strong>Created At</strong>
                            </div>
                            <div class="col-md-2">
                                <strong>Actions</strong>
                            </div>
                        </div>
                        @foreach($talks as $talk)
                            <div class="row meetup-row">
                                <div class="col-md-4">
                                    {{ $talk->meetup_name }}
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ $talk->meetup_link }}" target="_blank">
                                        See Meetup Page
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    {{ $talk->created_at->format('M d, Y') }}
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ url('/admin/past-talks/edit') }}/{{ $talk->id }}">
                                        Edit
                                    </a>
                                    &middot;
                                    <a href="{{ url('/admin/past-talks/delete') }}/{{ $talk->id }}">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection