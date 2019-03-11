<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="nav navbar-light navbar-laravel navbar-side flex-sm-column">
        <div class="container">
            <a class="navbar-brand nav-backoffice" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav navbar-padding-backoffice">
                    <li><a class="nav-link" href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
                    <li><a class="nav-link" href="{{ route('status') }}">{{ __('Status') }}</a></li>
                    <li><a class="nav-link" href="{{ route('users.index') }}">{{ __('Users') }}</a></li>
                    <li><a class="nav-link" href="{{ route('admins.index') }}">{{ __('Administrators') }}</a></li>
                    <li><a class="nav-link" href="{{ route('auctions.index') }}">{{ __('Auctions') }}</a></li>
                    <li><a class="nav-link" href="{{ route('showroom.index') }}">{{ __('Showroom') }}</a></li>
                    <li><a class="nav-link" href="">{{ __('About') }}</a></li>
                    <li><a class="nav-link" href="{{ route('blog.index') }}">{{ __('Blog') }}</a></li>
                    <li><a class="nav-link" href="">{{ __('Social Links') }}</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav down-nav navbar-padding-backoffice">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <a class="nav-link" href="{{ route('welcome') }}">
                        {{ __('Go back to GTImports') }}
                    </a>
                </ul>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
