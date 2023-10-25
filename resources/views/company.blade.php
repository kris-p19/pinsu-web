@extends('layouts.pinsu')

@section('content')
<div style="position: absolute; width: 100%; top: 0; z-index: -1;">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel" id="pinsu-company-slide">
                <div>
                    <a>
                        <img src="{{ asset('images/companys/Header.jpg') }}" alt="Header.jpg" style="width:100%;height:100vh;object-fit: cover;">
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
                <div class="panel-body" style="background-color: {!! config('app.colorBody') !!};min-height:300px;padding:30px;margin-top:95vh;">
                    <p style="font-size:25px;color:green;background-color:#fff2cc;padding:20px;float:right;width:350px;">
                        Keep creating the great things, just leave <u style="color:red;">the small Heat</u> problems to us.
                    </p>
                    <p style="font-size:20px;text-align:justify;display:contents;">
                        @for($i = 0; $i < 7; $i++) &nbsp; @endfor 
                        บริษัท พินซู จำกัด ดำเนินการนำเข้าและจำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fiber Fabrics / Ceramic Fiber Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) สำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนความร้อนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น และเรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย
                    </p>
                    <p style="font-size:20px;text-align:justify;margin-top:20px;">
                        @for($i = 0; $i < 6; $i++) &nbsp; @endfor 
                        ผลิตภัณฑ์ทุกตัวของบริษัทเป็นผลิตภัณฑ์ที่ปราศจาก Asbestos (Asbestos Free / Non-Asbestos) ซึ่งเป็นที่ไว้วางใจสำหรับลูกค้าด้วยดีเสมอมา และ บริษัทเองจะยังคงยึดมั่นกับความตั้งใจที่จะส่งมอบ
                        <u>“สินค้าที่ดี มีคุณภาพ พร้อมทั้งการจัดส่งและบริการที่ดีให้กับลูกค้าตลอดไป”</u>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
