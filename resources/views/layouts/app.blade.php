<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="PHP Vegas" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('our-sponsors') }}">Our Sponsors</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('sponsor-info') }}">
                                        Sponsor Information
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('meetup-events') }}">Meetup Events</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('request-topic') }}">
                                        Request Topic
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('prev-talks') }}">
                                Previous Talks
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer>
            <section class="copy-right-line">
                <p>Copyright {{ date("Y") }} All Rights Reserved &copy; PHP Vegas Meetup Group</p>
            </section>
        </footer>
    </div>

    <!-- Scripts -->
    @yield('scripts')
    <script src="/js/app.js"></script>
</body>
</html>
