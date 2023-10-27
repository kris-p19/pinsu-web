<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('images/fa-icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit|Gabarito">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('css/pinsu.css') }}?v={{ filemtime(public_path('css/pinsu.css')) }}">
    @yield('style')
    <title>{{ __('txt.appname') }}</title>
</head>
<body>
    <div class="pinsu-nav">
        <a class="pinsu-navbar-logo" href="{{ url('/') }}">
            <img src="{{ asset('images/through-logo-edit.png') }}" alt="Logo" width="150">
        </a>
        <div class="pinsu-nav-menu">
            <a href="{{ url('index') }}" class="pinsu-nav-item pxl hvr-underline-from-center {{ $path=='index'?'menu-active':'' }}">{{ __('txt.menu.home') }}</a>
            <a href="{{ url('company') }}" class="pinsu-nav-item pxl hvr-underline-from-center {{ $path=='company'?'menu-active':'' }}">{{ __('txt.menu.company') }}</a>
            <a href="{{ url('product') }}" class="pinsu-nav-item pxl hvr-underline-from-center {{ $path=='product'?'menu-active':'' }}">{{ __('txt.menu.product') }}</a>
            <a href="{{ url('contact') }}" class="pinsu-nav-item pxl hvr-underline-from-center {{ $path=='contact'?'menu-active':'' }}">{{ __('txt.menu.contact') }}</a>
            <a href="{{ url('news') }}" class="pinsu-nav-item pxl hvr-underline-from-center {{ $path=='news'?'menu-active':'' }}">{{ __('txt.menu.news') }}</a>
            <a href="{{ url('local/th') }}" class="pinsu-nav-item">
                <img src="https://cdn-icons-png.flaticon.com/128/330/330447.png" style="{{ app()->getLocale()=='th'?'filter:grayscale(0);':'filter:grayscale(1);' }}width:30px;margin-top:-5px;">
            </a>
            <a href="{{ url('local/en') }}" class="pinsu-nav-item">
                <img src="https://cdn-icons-png.flaticon.com/128/330/330425.png" style="{{ app()->getLocale()=='en'?'filter:grayscale(0);':'filter:grayscale(1);' }}width:30px;margin-top:-5px;">
            </a>
            {{-- <a class="pinsu-nav-item">
                <span class="material-icons-outlined">
                    search
                </span>
            </a> --}}
            <a class="pinsu-nav-item" data-toggle="all-menu">
                <span class="material-icons-outlined">
                    menu
                </span>
            </a>
        </div>
    </div>
    
    @yield('content')
    
    <div class="container-fluid" style="margin-top: 0px;padding-top: 0px;padding-bottom: 60px;background-color:#ffffff;">
        <div class="row">

            @if (app()->getLocale()=='th')
            {!! DB::table('contents')->where('id',5)->first()->content_th !!}
            @else
            {!! DB::table('contents')->where('id',5)->first()->content_en !!}
            @endif
            
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 0px;padding-top: 60px;padding-bottom: 60px;background-color:#fff2cc;">
        <div class="row">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="pull-left">
                                    <img src="{{ asset('images/through-logo-edit.png') }}" alt="Logo" width="220">
                                    <p style="padding-top:20px;">
                                        บริษัท พินซู จำกัด  212/26 หมู่ 7 ถ. บ้านกล้วย-ไทรน้อย ต.พิมลราช อ.บางบัวทอง จ.นนทบุรี 11110
                                        <br> Pinsu Co., Ltd - 212/26  Moo 7, Ban Kluai Sai Noi Road, Tambon Phimonrat, Amphoe Bang Bua thong, Nonthaburi 11110, Thailand
                                        <br> Tel : +66(0)88-243 4656 / +66(0)82-919 5356 / +66(0)2063 4564
                                        <br> Fax : +66(0)2063 4564 
                                        <br> Email : contact@pinsu.co.th / pinsu@pinsu.co.th
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="pull-right">
                                    {{-- <a href="{{ url('company') }}" style="display:inline-block;color:#337ab7;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.company') }}</a>
                                    <a href="{{ url('location') }}" style="display:inline-block;color:#337ab7;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.location') }}</a>
                                    <a href="{{ url('news') }}" style="display:inline-block;color:#337ab7;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.news') }}</a> --}}

                                    <div class="text-right">
                                        <a href="javascript:void(0);" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="javascript:void(0);" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="javascript:void(0);" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                                            <i class="fa-solid fa-tty"></i>
                                        </a>
                                        <a href="javascript:void(0);" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                                            <i class="fa-brands fa-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12" onblur="">
                                <p style="display:inline-block;margin-right:10px;">&copy; {{ date('Y')=='2023'?date('Y'):'2023 - ' . date('Y') }} {{ __('txt.company_name') }}</p>
                                {{-- <a href="javascript:void(0);" style="display:inline-block;margin-right:10px;">Terms of service</a>
                                <a href="javascript:void(0);" style="display:inline-block;margin-right:10px;">Privacy</a> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="loadpage" style="width:100%;height:100vh;position:fixed;background:#ffbf00;z-index:1;top:0px;transition:.7s;"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/pinsu.js') }}?v={{ filemtime(public_path('js/pinsu.js')) }}"></script>
</body>
</html>