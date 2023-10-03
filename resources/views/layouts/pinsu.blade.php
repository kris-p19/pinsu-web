<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Gabarito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined">
    <link rel="shortcut icon" href="{{ asset('images/fa-icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" href="{{ asset('css/pinsu.css') }}?v={{ filemtime(public_path('css/pinsu.css')) }}">
    <title>{{ __('txt.appname') }}</title>
</head>
<body>
    <div class="pinsu-nav" style="position:relative;top:10px;">
        <a class="pinsu-navbar-logo" href="{{ url('/') }}">
            <img src="{{ asset('images/through-logo-edit.png') }}" alt="Logo" width="150">
        </a>
        <div class="pinsu-nav-menu">
            <a href="{{ url('index') }}" class="pinsu-nav-item pxl hvr-underline-from-center">{{ __('txt.menu.home') }}</a>
            <a href="{{ url('company') }}" class="pinsu-nav-item pxl hvr-underline-from-center">{{ __('txt.menu.company') }}</a>
            <a href="{{ url('product') }}" class="pinsu-nav-item pxl hvr-underline-from-center">{{ __('txt.menu.product') }}</a>
            <a href="{{ url('contact') }}" class="pinsu-nav-item pxl hvr-underline-from-center">{{ __('txt.menu.contact') }}</a>
            <a href="{{ url('news') }}" class="pinsu-nav-item pxl hvr-underline-from-center">{{ __('txt.menu.news') }}</a>
            <a class="pinsu-nav-item">
                <span class="material-icons-outlined">
                    search
                </span>
            </a>
            <a class="pinsu-nav-item">
                <span class="material-icons-outlined">
                    menu
                </span>
            </a>
        </div>
    </div>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/pinsu.js') }}?v={{ filemtime(public_path('js/pinsu.js')) }}"></script>
</body>
</html>