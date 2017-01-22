@extends('layouts/app')

@section('content')

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="page-title">
                        {{ $title }}
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="thanks-content">
        <p>{{ $content }}</p>
    </section>

@endsection