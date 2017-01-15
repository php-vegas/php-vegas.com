@extends('layouts/app')

@section('content')

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="page-title">
                        Request A Talk Topic
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-md-offset-2">
                    <div class="panel">
                        <div class="panel-body">
                            <form action="{{ route('insert-topic-request') }}" method="post">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="fname">First Name *</label>
                                        <input type="text" name="fname" class="form-control fname" id="fname" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection