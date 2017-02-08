<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome To Fabulous PHP Vegas!</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="/css/admin.css" rel="stylesheet">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <nav class="navigation">
        <section class="branding">
            <img src="{{ asset('img/logo.png') }}" alt="PHP Vegas" />
            <span>PHP Vegas</span>
        </section>
        <ul class="menu">
            <li class="menu-item">
                <a href="" class="nav-link">
                    <i class="fa fa-slideshare" aria-hidden="true"></i>
                    See Topic Requests
                </a>
            </li>
            <li class="menu-item">
                <a href="" class="nav-link">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Add New Talk
                </a>
            </li>
            <li class="menu-item">
                <a href="" class="nav-link">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                    Clear Redis Cache
                </a>
            </li>
            <li class="divider menu-item"></li>
            <li class="menu-item">
                <a href="" class="nav-link">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Return To Site
                </a>
            </li>
        </ul>
    </nav>

    @yield('content')

    <footer>
        <section class="copy-right-line">
            <p>Copyright {{ date("Y") }} &copy; All Rights Reserved PHP Vegas Meetup Group</p>
        </section>
    </footer>
</div>

<!-- Scripts -->
@yield('scripts')
<script src="/js/app.js"></script>
</body>
</html>
