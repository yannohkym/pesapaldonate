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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #ffffff">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        @if(!Route::is('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Portal') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-2 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">&nbsp;&nbsp;&nbsp;&nbsp;<span class="fs-4">Admin Panel</span> </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li> <a href="{{route('admin_index')}}" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Dashboard</span> </a> </li>
                            <li> <a href="{{route('admin_donors')}}" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Donors</span> </a> </li>
                            <li> <a href="{{route('admin_users')}}" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Users</span> </a> </li>
                            <li> <a href="{{route('admin_notifications')}}" class="nav-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">Notifications</span> </a> </li>
                            <li> <a href="{{route('configuration')}}" class="nav-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">Configuration</span> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col py-3">
                    @yield('content')
                </div>
            </div>
        </div>

    </main>
</div>
</body>
</html>
