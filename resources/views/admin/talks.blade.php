@extends('layouts.admin')

@section('content')

    <section class="add-talk-form">
        <div class="container">
            <form action="{{ url('/admin/past-talks/add') }}">
                <div class="panel">
                    <h3 class="panel-heading">
                        Create New Talk
                    </h3>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="meetup_name">Meetup Name *</label>
                                <input type="text" name="meetup_name" id="meetup-name" class="meetup-name form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="meetup_link">Meetup Link *</label>
                                <input type="text" name="meetup_link" id="meetup-link" class="meetup-link form-control" />
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="slides_link">Slides Link *</label>
                                <input type="text" name="slides_link" id="slides-link" class="slides-link form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="video_link">Video Link *</label>
                                <input type="text" name="video_link" id="video-link" class="video-link form-control" />
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="meetup_description">Meetup Description *</label>
                                <textarea name="meetup_description" id="meeup-description" cols="30" rows="10"
                                          class="meetup-description form-control"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Create New Talk" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="current-talks">
        <div class="container">
            <div class="panel">
                <h3 class="panel-heading">All Previous Talks</h3>
                <div class="panel-body">
                    Previous Talks Will Go Here
                </div>
            </div>
        </div>
    </section>

@endsection