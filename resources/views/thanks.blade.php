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

    <section class="thanks-content" style="padding: 60px 0 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3">
                    <div class="panel">
                        <div class="panel-body">
                            <p>{{ $content }}</p>
                            <p>You will now be redirected to the homepage...</p>
                        </div>
                    </div>
                    <script>
                        window.onload = setTimeout(function () {
                            window.location = '{{ route('home') }}';
                        }, 2000);
                    </script>
                </div>
            </div>
        </div>
    </section>

@endsection