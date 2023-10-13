<div class="container" style="overflow-y:scroll;height:100vh;">
    <div class="row" style="padding:2%;">
        <div class="col-md-12 text-right">
            <button style="background:transparent;border:none;font-size:30px;" type="button" onclick="$('#loadpage').css({ height: '0vh'});$('#loadpage').html('');">
                {{-- <span class="glyphicon glyphicon-remove"></span> --}}
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="" style="font-size:30px;font-weight:bold;">{{ __('txt.menu.company') }}</a>
            <ul>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="" style="font-size:30px;font-weight:bold;">{{ __('txt.menu.product') }}</a>
            <ul>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="" style="font-size:30px;font-weight:bold;">{{ __('txt.menu.contact') }}</a>
            <ul>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="" style="font-size:30px;font-weight:bold;">{{ __('txt.menu.news') }}</a>
            <ul>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
                <li style="font-size:20px;">sub menu 1</li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="" style="font-size:30px;font-weight:bold;">{{ __('txt.menu.admin') }}</a>
            <ul>
                @guest
                <li style="font-size:20px;">{{ __('txt.menu.login') }}</li>
                <li style="font-size:20px;">{{ __('txt.menu.register') }}</li>
                @else
                <li style="font-size:20px;">{{ __('txt.menu.logout') }}</li>
                @endguest
            </ul>
        </div>
        <div class="col-md-12 text-right">
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