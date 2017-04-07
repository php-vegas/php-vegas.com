@extends('layouts.admin')

@section('content')

    <section class="add-talk-form">
        <div class="container">
            <div class="col-md-12">
                <form action="{{ url('/admin/past-talks/update') }}/{{ $talk->id }}" method="post">
                    <div class="panel">
                        <h3 class="panel-heading">
                            Editing Talk: {{ $talk->meetup_name }}
                        </h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="meetup_name">Meetup Name *</label>
                                    <input type="text" name="meetup_name" id="meetup-name"
                                           value="{{ $talk->meetup_name }}" class="meetup-name form-control"/>
                                </div>
                                <div class="col-md-3">
                                    <label for="meetup_link">Meetup Link *</label>
                                    <input type="text" name="meetup_link" id="meetup-link"
                                           value="{{ $talk->meetup_link }}" class="meetup-link form-control"/>
                                </div>
                                <div class="col-md-3">
                                    <label for="slides_link">Slides Links *</label>
                                    <input type="text" name="slides_link" placeholder="Separate With Commas"
                                           id="slides-link" value="{{ $talk->slides_link }}"
                                           class="slides-link form-control"/>
                                </div>
                                <div class="col-md-3">
                                    <label for="video_link">Video Link *</label>
                                    <input type="text" name="video_link" id="video-link" value="{{ $talk->video_link }}"
                                           class="video-link form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="meetup_description">Meetup Description *</label>
                                    <textarea name="meetup_description" id="meeup-description" cols="30" rows="10"
                                              class="meetup-description form-control"
                                              value="{{ $talk->meetup_description }}"></textarea>
                                </div>
                            </div>
                            <hr>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Update Talk" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection