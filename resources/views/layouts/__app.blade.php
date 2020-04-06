<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- test@test.nl 12345678 -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="sidebar">
            <div class="sidebar__branding">
                <h1><a href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a></h1>
                
                @guest
                            @if (Route::has('register'))
                                
                            @endif
                        @else
                        <h2>{{ Auth::user()->name }}</h2>
                        @endguest

            </div>
            <div class="sidebar__inner p-5">
            <div class="sidebar__navbar">
                <ul class="nav flex-column text-white">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
            </div>
            <div class="sidebar__logout">
                <a class="logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
