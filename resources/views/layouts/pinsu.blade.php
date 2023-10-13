<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <div class="container">
                <div class="row" style="padding-top:20px;padding-bottom:20px;">
                    <hr style="width:100%;height:40px;background:#e2efd9;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fabrics / ผ้าทนความร้อน</b></h3>
                                <ul>
                                    <li>Glass Fabrics / ผ้าใยแก้ว</li>
                                    <li>Silica Fabrics / ผ้าซิลิก้า</li>
                                    <li>Ceramic Fabrics / ผ้าเซรามิค</li>
                                    <li>Silicone Coated Fabrics / ผ้าเคลือบซิลิโคน</li>
                                    <li>PTFE Coated Fabrics / ผ้าเคลือบ PTFE</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Hi-Temp Fabrics.jpg') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;background:#e2efd9;">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;"><b style="color:#015f01;">Hi-Temp Fiber Tape / Gasket เทปพันท่อ / ปะเก็น</b></h3>
                                <ul>
                                    <li>Glass Fiber Tape / เทปใยแก้ว</li>
                                    <li>Ceramic Fiber Tape / เทปเซรามิค</li>
                                    <li>Basalt Fiber Tape / เทปใยหิน</li>
                                    <li>Gasket / ปะเก็น</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Hi-Temp Fiber Tape.jpg') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;"><b style="color:#015f01;">Removable Insulations / ฉนวนความร้อนแบบถอดได้</b></h3>
                                <ul>
                                    <li>ฉนวนเตาอบอุตสาหกรรม</li>
                                    <li>ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</li>
                                    <li>ฉนวนหุ้มเครื่องฉีดพลาสติก</li>
                                    <li>ฉนวนหุ้ม Heater</li>
                                    <li>ฉนวนหุ้มท่อ Boiler</li>
                                    <li>ฉนวนเทอร์ไบน์ (Turbine Insulation)</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Removable Insulation .jpg') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;background:#e2efd9;">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;">
                                    <b style="color:#015f01;">
                                        Flexible Joint / Expansion Joint 
                                        Fabric Expansion Joint / 
                                        Flexible Duct Connector 
                                        ข้อต่อท่อลมร้อน/เย็น (แบบยืดหดได้)
                                    </b>
                                </h3>
                                <!-- <ul>
                                    <li>ฉนวนเตาอบอุตสาหกรรม</li>
                                    <li>ฉนวนหุ้มวาล์ว / เสื้อหุ้มวาล์ว</li>
                                    <li>ฉนวนหุ้มเครื่องฉีดพลาสติก</li>
                                    <li>ฉนวนหุ้ม Heater</li>
                                    <li>ฉนวนหุ้มท่อ Boiler</li>
                                    <li>ฉนวนเทอร์ไบน์ (Turbine Insulation)</li>
                                </ul> -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Flexible Joint.jpg') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;">
                                    <b style="color:#015f01;">
                                        Welding Blanket / Welding Curtain      
                                        ผ้ากันสะเก็ดไฟ 
                                        Fire Blanket / ผ้าห่มดับไฟ 
                                    </b>
                                </h3>
                                <ul>
                                    <li>ผ้ากันสะเก็ดไฟแบบประหยัด / งานเบา</li>
                                    <li>ผ้ากันสะเก็ดไฟสำหรับงานเชื่อม/ตัดโลหะ</li>
                                    <li>ผ้ากันสะเก็ดไฟชนิดไม่คัน</li>
                                    <li>ม่านกรองแสงสะเก็ดไฟงานเชื่อม</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Welding Blankets.JPG') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;background:#e2efd9;">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;">
                                    <b style="color:#015f01;">
                                        Hi-Temp Sewing Thread ด้ายทนความร้อน
                                    </b>
                                </h3>
                                <ul>
                                    <li>PTFE Sewing Thread / ด้าย PTFE</li>
                                    <li>Aramid Sewing Thread / Kevlar Thread ด้ายเคฟล่า/ด้ายอารามิด</li>
                                    <li>Glass Fiber Sewing Thread / ด้ายใยแก้ว</li>
                                    <li>Stainless Steel Sewing Thread / ด้ายสแตนเลส</li>
                                    <li>Carbon Fiber Sewing Thread / ด้ายคาร์บอน</li>
                                    <li>Silica Fiber Sewing Thread / ด้ายซิลิก้า</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Hi-Temp Sewing Thread.jpg') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;">
                                    <b style="color:#015f01;">
                                        Insulation Fasteners วัสดุยึดฉนวน
                                    </b>
                                </h3>
                                <ul>
                                    <li>Insulation Pins / หมุดยึดฉนวน / เข็มยึดฉนวน</li>
                                    <li>Stainless Steel Hook / ตะขอสแตนเลส ยึด-เกี่ยวฉนวน</li>
                                    <li>Lacing Anchors</li>
                                    <li>Stud Welding Pins</li>
                                    <li>SS D-Ring</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/ACCESS.JPG') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;background:#e2efd9;">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;">
                                    <b style="color:#015f01;">
                                        Fiber Blanket / ฉนวนแบบแผ่น
                                    </b>
                                </h3>
                                <ul>
                                    <li>Glass Wool (Glass Needled Mat)</li>
                                    <li>(Bio-Soluble) Ceramic Fiber Blanket</li>
                                    <li>ฉนวนเซรามิคชนิดปิดผิว</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Fiber Blanket.jpg') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <h3 style="margin-top:0px;">
                                    <b style="color:#015f01;">
                                        Work Tents เต็นท์ผ้าใบ
                                    </b>
                                </h3>
                                <!-- <ul>
                                    <li>Glass Wool (Glass Needled Mat)</li>
                                    <li>(Bio-Soluble) Ceramic Fiber Blanket</li>
                                    <li>ฉนวนเซรามิคชนิดปิดผิว</li>
                                </ul> -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <img src="{{ asset('images/footers/Work Tent.jpg') }}" style="width:100%;height:300px;object-fit:cover;border-radius:25px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 0px;padding-top: 60px;padding-bottom: 60px;background-color:#f4f4f4;">
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
                                    <a href="{{ url('company') }}" style="display:inline-block;color:#337ab7;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.company') }}</a>
                                    <a href="{{ url('location') }}" style="display:inline-block;color:#337ab7;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.location') }}</a>
                                    <a href="{{ url('news') }}" style="display:inline-block;color:#337ab7;" class="pinsu-nav-item hvr-underline-from-center">{{ __('txt.menu.news') }}</a>

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
                                <a href="javascipt:void(0);" style="display:inline-block;margin-right:10px;">Terms of service</a>
                                <a href="javascipt:void(0);" style="display:inline-block;margin-right:10px;">Privacy</a>
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