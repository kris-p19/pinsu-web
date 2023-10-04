@extends('layouts.pinsu')

@section('content')
<div class="owl-carousel" id="pinsu-main-slide" style="position:absolute;top:-50px;z-index:-1;">
    <div>
        <a>
            <img src="{{ asset('images/slides/Slide-1.jpg') }}" alt="Slide-1.jpg" style="width:100%;">
        </a>
    </div>
    <div>
        <a>
            <img src="{{ asset('images/slides/Slide-2.jpg') }}" alt="Slide-2.jpg" style="width:100%;">
        </a>
    </div>
    <div>
        <a>
            <img src="{{ asset('images/slides/Slide-3.jpg') }}" alt="Slide-3.jpg" style="width:100%;">
        </a>
    </div>
    <div>
        <a>
            <img src="{{ asset('images/slides/Slide-4.jpg') }}" alt="Slide-4.jpg" style="width:100%;">
        </a>
    </div>
    <div>
        <a>
            <img src="{{ asset('images/slides/Slide-5.jpg') }}" alt="Slide-5.jpg" style="width:100%;">
        </a>
    </div>
</div>
<!-- <div class="container-fluid" style="position: absolute;z-index:-1;top:-90px;">
    <div class="row">
        <img src="https://aibel.com/assets/images/Company/_2000xAUTO_crop_center-center_none/P2-sailaway-company-page.jpg" 
            style="width:100%;">
    </div>
    <div class="row" style="background-color: white;margin-top:-200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-body" style="background-color: #003366e6;color:white;min-height:300px;padding:30px;">
                        <h1 style="font-size:60px;">A reliable partner</h1>
                        <p style="font-size:20px;">Our company has provided services for more than a century, meeting customer requirements throughout the project lifetime.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h1>About us</h1>
                </div>
                <div class="col-md-8">
                    <h3>Aibel is a leading service company within the oil, gas and offshore wind industries. We provide our customers with optimal and innovative solutions within engineering, construction, modifications and maintenance throughout a project's entire life cycle.</h3>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
