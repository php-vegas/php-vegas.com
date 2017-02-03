@extends('layouts/app')

@section('content')

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="page-title">
                        Our Sponsors
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsors">
        <div class="container">
            <div class="row">
                @foreach($sponsors as $sponsor)
                    <div class="col-md-4 col-sm-12">
                        <div class="sponsor">
                            @if(isset($sponsor['image_url']))
                                <div class="logo-wrapper">
                                    <img src="{{ $sponsor['image_url'] }}" alt="{{ $sponsor['name'] }}" />
                                </div>
                            @else
                                <div class="logo-wrapper">
                                    <i class="fa fa-question-circle"></i>
                                </div>
                            @endif
                            <h3 class="sponsor-name">{{ $sponsor['name'] }}</h3>
                            <p>{{ $sponsor['info'] }}</p>
                            <hr>
                            <a href="{{ $sponsor['url'] }}" class="btn btn-primary" target="_blank">
                                Visit {{ $sponsor['name'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection