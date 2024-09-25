<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMQpGpX9pP1EZpD5F9pF/NF/lf1yW5Q5D0GT7q" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #ffffff">
<div id="app">
<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ffffff;">

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
                         <a class="nav-link" href="{{ route('login') }}" style="color: white;">{{ __('Portal') }}</a>
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

    <main class="" style="background-color: #f8f9fa;">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-2 col-xl-2 px-sm-2 px-0" style="background-color: #001F3F; height: 100vh;">
                <div class="d-flex flex-column align-items-start px-3 pt-4 text-white" style="min-height: 100vh;">
                    <a href="/admin" class="d-flex align-items-center mb-3 text-decoration-none" style="margin-bottom: 20px;">
                        <span class="fs-4" style="color: #17a2b8;">
                            <i class="fa fa-cogs"></i> Admin Panel
                        </span>
                    </a>
                    <hr style="border-top: 1px solid #17a2b8; width: 100%;">
                    <ul class="nav nav-pills flex-column mb-auto w-100" style="padding-left: 0;">
                        <li class="nav-item" style="margin-bottom: 15px;">
                            <a href="{{ route('admin_index') }}" class="nav-link text-light d-flex align-items-center">
                                <i class="fa fa-dashboard" style="color: #17a2b8;"></i>
                                <span class="ms-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-bottom: 15px;">
                            <a href="{{ route('admin_donors') }}" class="nav-link text-light d-flex align-items-center">
                                <i class="fa fa-users" style="color: #17a2b8;"></i>
                                <span class="ms-2">Donors</span>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-bottom: 15px;">
                            <a href="{{ route('admin_users') }}" class="nav-link text-light d-flex align-items-center">
                                <i class="fa fa-user-shield" style="color: #17a2b8;"></i>
                                <span class="ms-2">Users</span>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-bottom: 15px;">
                            <a href="{{ route('admin_notifications') }}" class="nav-link text-light d-flex align-items-center">
                                <i class="fa fa-bell" style="color: #17a2b8;"></i>
                                <span class="ms-2">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-bottom: 15px;">
                            <a href="{{ route('configuration') }}" class="nav-link text-light d-flex align-items-center">
                                <i class="fa fa-cog" style="color: #17a2b8;"></i>
                                <span class="ms-2">Configuration</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col py-3" style="padding-left: 20px;">
                @yield('content')
            </div>
        </div>
    </div>
</main>





</div>
</body>
</html>
