@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('ma/content') }}" class="btn btn-warning btn-sm">ย้อนกลับ</a>
                    แก้ไขเนื้อหาเว็บไซต์ - {{ $title }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if ($style=='1')
                        <form action="{{ url('ma/content/post-style-1') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="form-group">
                                <label>เนื้อหา (ภาษาไทย)</label>
                                <textarea name="content_th" rows="10" class="form-control">{{ $data->content_th }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>เนื้อหา (ภาษาอังกฤษ)</label>
                                <textarea name="content_en" rows="10" class="form-control">{{ $data->content_en }}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    @else
                        <form action="{{ url('ma/content/post-style-2') }}" method="post">
                            @csrf
                            
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection