@extends('layouts.pinsu')

@section('content')
<div style="position: absolute; width: 100%; top: 0; z-index: -1;">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel" id="pinsu-company-slide">
                <div>
                    <a>
                        <img src="{{ asset('images/contacts/Slide-1.jpg') }}" alt="Header.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/contacts/Slide-2.jpg') }}" alt="Header.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/contacts/Slide-3.jpg') }}" alt="Header.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/contacts/Slide-4.jpg') }}" alt="Header.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/contacts/Slide-5.jpg') }}" alt="Header.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body text-center" style="background-color: #ffd966;color:green;min-height:300px;padding:30px;margin-top:95vh;">
                    <h1 style="font-size:50px;">บริษัท พินซู จำกัด</h1>
                    <p style="font-size:20px;">
                        212/26 หมู่ 7 ถ. บ้านกล้วย-ไทรน้อย ต.พิมลราช อ.บางบัวทอง จ.นนทบุรี 11110
                        <br>Pinsu Co., Ltd.
                        <br>212/26  Moo 7, Ban Kluai Sai Noi Road, Tambon Phimonrat,
                        <br>Amphoe Bang Bua thong, Nonthaburi 11110, Thailand
                        <br>
                        <br>Tel :   <a href="tel:0882434656">+66(0)88-243 4656</a> / 
                                    <a href="tel:0829195356">+66(0)82-919 5356</a> / 
                                    <a href="tel:020634564">+66(0)2063 4564</a>  
                        <br>Fax :   <a href="tel:020634564">+66(0)2063 4564</a> 
                        <br>Email:  <a href="mailto:contact@pinsu.co.th">contact@pinsu.co.th</a> /
                                    <a href="mailto:pinsu@pinsu.co.th">pinsu@pinsu.co.th</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
