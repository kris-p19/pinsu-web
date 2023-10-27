@extends('layouts.pinsu')

@section('content')
<div style="position: absolute; width: 100%; top: 0; z-index: -1;">
    <div class="container-fluid">
        <div class="row">
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
            <div class="col-md-12">

                @if (app()->getLocale()=='th')
                {!! DB::table('contents')->where('id',1)->first()->content_th !!}
                @else
                {!! DB::table('contents')->where('id',1)->first()->content_en !!}
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
