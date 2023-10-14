@extends('layouts.pinsu')

@section('content')
<div style="position: absolute; width: 100%; top: 0; z-index: -1;">
    <div class="container-fluid">
        <div class="row">
            <div style="width: 100%;background: #ffbf00c9;height: 11vh;position: absolute;z-index: 2;"></div>
            <div class="owl-carousel" id="pinsu-main-slide">
                <div>
                    <a>
                        <img src="{{ asset('images/slides/Slide-1.jpg') }}" alt="Slide-1.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/slides/Slide-2.jpg') }}" alt="Slide-2.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/slides/Slide-3.jpg') }}" alt="Slide-3.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/slides/Slide-4.jpg') }}" alt="Slide-4.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                <div>
                    <a>
                        <img src="{{ asset('images/slides/Slide-5.jpg') }}" alt="Slide-5.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel-body" style="background-color: #ffc000ed/*#ffc000*/;color:white;min-height:300px;padding:30px;margin-top:70vh;">
                    <h1 style="font-size:50px;">Out quality and service will help boost the <u style="color:red;">Energy</u> in your production.</h1>
                    <p style="font-size:20px;">บริษัท พินซู จำกัด จำหน่ายผ้าทนความร้อนชนิดต่างๆ ทั้งผ้าใยแก้ว(Glass Fiber Fabrics / Fiberglass Cloth) ผ้าซิลิก้า (Silica Fabrics/Silica Cloth) ผ้าเซรามิค(Ceramic Fabrics / Ceramic Cloth) เทปใยแก้ว(Glass Tape / Glass Fiber Tape) เทปเซรามิค(Ceramic Tape / Ceramic Fiber Tape) เชือกใยแก้ว(Glass Rope / Glass Fiber Rope) เชือกเซรามิค (Ceramic Rope / Ceramic Fiber Rope) ปะเก็นใยแก้ว (Fiberglass Gasket) ปะเก็นเซรามิค (Ceramic Fiber Gasket) ปะเก็นทนความร้อนสูง (Hi-Temp Gasket) ผ้าและวัสดุสำหรับใช้ในงานฉนวนทนความร้อน (Thermal Insulation) ฉนวนแบบถอดได้(Removable Insulation) ผ้ากันสะเก็ดไฟ (Welding Blanket) ผ้าทนความร้อน (Hi-Temp Fabrics/ Hi-Temp Cloth) ผ้ากันความร้อน(Heat Protective Fabrics / Heat Protective Cloth) ผ้าห่มดับไฟ(Fire Blanket) ข้อต่อท่อลมร้อน (Expansion Joint / Flexible Joint) ข้อต่อท่อลมแบบยืดหยุ่น เป็นต้น เรายังเป็นผู้ให้บริการตัดเย็บผ้ากันสะเก็ดไฟ / ตัดเย็บพร้อมติดตั้งงานฉนวนตามแบบที่ลูกค้าต้องการอีกด้วย</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
