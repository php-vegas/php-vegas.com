@extends('layouts/app')

@section('content')

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="page-title">
                        Reach Out To Us
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="service">
                        <i class="fa fa-facebook"></i>
                        <h3 class="headline">Facebook</h3>
                        <p class="tagline">Become part of our group through facebook, and see what we're up to.</p>
                        <a href="https://www.facebook.com/PHP-Vegas-1481879648787405/" target="_blank" class="btn btn-primary">
                            Connect With Us
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="service">
                        <i class="fa fa-twitter"></i>
                        <h3 class="headline">Twitter</h3>
                        <p class="tagline">Interact with us on twitter for the latest news in the community and the group.</p>
                        <a href="https://twitter.com/PHPVegas" target="_blank" class="btn btn-primary">
                            Tweet At Us
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="service">
                        <i class="fa fa-slack"></i>
                        <h3 class="headline">Slack Channel</h3>
                        <p class="tagline">Connect with php developers and discuss issues over our community slack channel.</p>
                        <a href="" class="disabled btn btn-primary">
                            Coming Soon
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection