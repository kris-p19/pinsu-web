<div class="container" style="overflow-y:scroll;height:100vh;">
    <div class="row" style="padding:2%;">
        <div class="col-md-12 text-right">
            <button style="background:transparent;border:none;font-size:30px;" type="button" onclick="$('#loadpage').css({ height: '0vh'});$('#loadpage').html('');">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{ url('company') }}" style="font-size:30px;font-weight:bold;color:white !important;">{{ __('txt.menu.company') }}</a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{ url('contact') }}" style="font-size:30px;font-weight:bold;color:white !important;">{{ __('txt.menu.contact') }}</a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{ url('news') }}" style="font-size:30px;font-weight:bold;color:white !important;">{{ __('txt.menu.news') }}</a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{ url('product') }}" style="font-size:30px;font-weight:bold;color:white !important;">{{ __('txt.menu.product') }}</a>
            <ul>
                <li><a style="font-size:20px;color:white;" href="{{ url('Glass-Fabrics') }}">Glass-Fabrics</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Silica-Fabrics') }}">Silica-Fabrics</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Ceramic-Fabrics') }}">Ceramic-Fabrics</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Silicone-Coated-Fabrics') }}">Silicone-Coated-Fabrics</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('PTFE-Coated-Fabrics') }}">PTFE-Coated-Fabrics</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Hi-Temp-Fabric-Tape') }}">Hi-Temp-Fabric-Tape</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Flexible-Joint-Ducts') }}">Flexible-Joint-Ducts</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Welding-Blanket-Fire-Blanket') }}">Welding-Blanket-Fire-Blanket</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Removable-Insulation') }}">Removable-Insulation</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Insulation-Accessories') }}">Insulation-Accessories</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Hi-Temp-Sewing-Thread') }}">Hi-Temp-Sewing-Thread</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Temporary-Work-Shop') }}">Temporary-Work-Shop</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('Fiber-Blanket') }}">Fiber-Blanket</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{ url('ma/home') }}" style="font-size:30px;font-weight:bold;color:white !important;">{{ __('txt.menu.admin') }}</a>
            <ul>
                @guest
                <li><a style="font-size:20px;color:white;" href="{{ url('login') }}">{{ __('txt.menu.login') }}</a></li>
                <li><a style="font-size:20px;color:white;" href="{{ url('register') }}">{{ __('txt.menu.register') }}</a></li>
                @else
                <li><a style="font-size:20px;color:white;" href="{{ url('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('txt.menu.logout') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
        <div class="col-md-12 text-right">
            <a href="{{ url('local/th') }}" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                <img src="https://cdn-icons-png.flaticon.com/128/330/330447.png" style="{{ app()->getLocale()=='th'?'filter:grayscale(0);':'filter:grayscale(1);' }}width:30px;margin-top:-5px;">
            </a>
            <a href="{{ url('local/en') }}" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                <img src="https://cdn-icons-png.flaticon.com/128/330/330425.png" style="{{ app()->getLocale()=='en'?'filter:grayscale(0);':'filter:grayscale(1);' }}width:30px;margin-top:-5px;">
            </a>
            <a href="javascript:void(0);" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="javascript:void(0);" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="javascript:void(0);" style="display:inline-block;color:#0510a1;font-size:20px;" class="pinsu-nav-item hvr-underline-from-center">
                <i class="fa-brands fa-line"></i>
            </a>
        </div>
    </div>
</div>