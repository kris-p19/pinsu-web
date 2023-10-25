@extends('layouts.pinsu')

@section('content')
<div style="position: absolute; width: 100%; top: 0; z-index: -1;">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel" id="pinsu-company-slide">
                <div>
                    <a>
                        <img src="{{ asset('images/news/Header-1.jpg') }}" alt="Header.jpg" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel-body" style="background-color: #ffc000ed/*#ffc000*/;color:white;min-height:100px;padding:26px;margin-top:95vh;margin-bottom:20px;">
                    <h1 style="font-size:50px;">ข่าวสารอัพเดท</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        ข่าวที่ 1
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
