@extends('layouts.pinsu')

@section('content')
<div style="position: absolute; width: 100%; top: 0; z-index: -1;">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel" id="pinsu-company-slide">
                @foreach ($slide as $item)
                <div>
                    <a>
                        <img src="{{ $item }}" style="width:100%;height:100vh;object-fit: cover;">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top:95vh;">
                
                @if (app()->getLocale()=='th')
                {!! $data->content_th !!}
                @else
                {!! $data->content_en !!}
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
