<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminMediaQueries.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scss/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="header_A">
        <h1 class="logo">RENTALYTICS</h1>
            <ul class="admin__tab">
                <li> 
                    <a href="{{route('admin-dashboard')}}">HOME</a>
                </li>
                
                <li> 
                    <a href="{{route('admin-settings')}}">SETTINGS</a>
                </li>
                    
                <li> 
                    <a href="{{route('admin-terms-and-policies')}}">TERMS & POLICIES</a>
                </li>
                <div class="_actions">
                    <a href="profiletabA.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#457e8a" id="profile__" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('admin-profile')}}"></a>Profile Settings</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </ul>
                
                <a class="sub__nav"href="#">
            <span class="bar__"></span>
            <span class="bar__"></span>
             <span class="bar__"></span>
        </a>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>
