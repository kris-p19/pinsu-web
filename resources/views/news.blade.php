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
                @if(!empty($read))
                <div class="col-md-12">
                    <h1 class="text-center">{{ $read->subject }}</h1>
                    <div style="text-align:justify;font-size:20px;padding-top:20px;padding-bottom:20px;">@for ($i = 0; $i < 7; $i++) &nbsp; @endfor{!! $read->content !!}</div>
                    @if (!empty($read->picture))
                        @foreach (json_decode($read->picture) as $img)
                        <div class="col-sm-6 col-md-4">
                            <img src="{{ asset('images/news/' . $img) }}" class="img-responsive" style="width:100%;">
                        </div>
                        @endforeach
                    @endif
                    <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                        <p>{{ $read->created_at }}</p>
                    </div>
                </div>
                @endif

                @foreach ($data as $item)
                <div class="col-md-12">
                    <a href="{{ url('news/read') }}?id={{ $item->id }}">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3><u>{{ $item->subject }}</u></h3>
                            </div>
                            <div class="panel-footer">
                                {{ $item->created_at }}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
        </div>
    </div>
</div>
@endsection