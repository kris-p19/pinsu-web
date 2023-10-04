<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('images/fa-icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit|Gabarito">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('css/pinsu.css') }}?v={{ filemtime(public_path('css/pinsu.css')) }}">
    <title>{{ __('txt.appname') }}</title>
</head>
<body>
    <div class="pinsu-nav">
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

    <div class="container-fluid" style="margin-top: 60px;padding-top: 60px;padding-bottom: 60px;background-color:#f4f4f4;">
        <div class="row">
            <div class="container">

                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="pull-left">
                            <img src="{{ asset('images/through-logo-edit.png') }}" alt="Logo" width="120">
                            <p style="padding-top:20px;">Aibel builds and maintains platforms and other critical infrastructure for the energy industry. The company holds a leading position within the European offshore wind industries and electrification of offshore oil and gas installations and onshore processing plants. Aibel is one of the largest suppliers on the Norwegian continental shelf and a full-range supplier of innovative and sustainable solutions. More than 4,700 employees work at the company's offices in Norway, Thailand and Singapore. In addition, Aibel owns two modern yards in Haugesund, Norway, and in Laem Chabang, Thailand, with significant prefabrication and construction capacity.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pull-right">
                            <a href="{{ url('company') }}" style="display:inline-block;color:blue;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.company') }}</a>
                            <a href="{{ url('location') }}" style="display:inline-block;color:blue;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.location') }}</a>
                            <a href="{{ url('news') }}" style="display:inline-block;color:blue;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.news') }}</a>

                            <div class="text-right">
                                <a href="" style="display:inline-block;color:blue;" class="pinsu-nav-item hvr-underline-from-center">Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/pinsu.js') }}?v={{ filemtime(public_path('js/pinsu.js')) }}"></script>
</body>
</html>