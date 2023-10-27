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
            <div class="col-md-12" style="margin-top:95vh;">

                @if (app()->getLocale()=='th')
                {!! DB::table('contents')->where('id',4)->first()->content_th !!}
                @else
                {!! DB::table('contents')->where('id',4)->first()->content_en !!}
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
