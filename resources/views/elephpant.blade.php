@extends('layouts.app')

@section('content')

    <section class="hero-banner">
        <img src="{{ asset('img/bg-2.jpg') }}" alt="Welcome To Sunny PHP Vegas!" />
        <div class="caption">
            <div class="col-sm-12">
                <h3 class="headline text-center">
                    Elephpant Time!
                </h3>
                <p>
                    For all of you hard-core <span class="php-purple">PHP</span> fans and elephpant collectors, we are
                    creating an <span class="php-purple">EPIC</span> new addition to the family that you won't want to miss!
                </p>
            </div>
        </div>
    </section>

    <section class="cta-row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 col-md-7">
                        <h3 class="caption headline text-center php-purple">
                            ElePHPant Time!
                        </h3>
                        <p>
                            For all of you hard-core <span class="php-purple">PHP</span> fans and elephpant collectors, we are
                            creating an <span class="php-purple">EPIC</span> new addition to the family that you won't want to miss!
                        </p>
                        <img class="showcase" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,f_auto,w_620/v1530647698/df6mjyyahweszjsmrkco.jpg">
                    </div>
                    <div class="col-sm-12 col-md-5 ">
                        <iframe src="https://www.indiegogo.com/project/phplashy-the-official-php-vegas-elephpant-software-toys/embedded/18638867" width="300px" height="435px" frameborder="0" scrolling="no" class="showcase"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ getenv('MAPS_JS_API_KEY') }}"></script>
@endsection