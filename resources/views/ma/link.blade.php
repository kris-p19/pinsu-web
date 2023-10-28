@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('ma/content') }}" class="btn btn-warning btn-sm">ย้อนกลับ</a>
                    แก้ไขเนื้อหาเว็บไซต์ - <b><u>{{ $title }}</u></b>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <form action="{{ url('ma/link/post') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="{{ $f->urls }}">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input class="form-control" type="text" name="instagram" value="{{ $i->urls }}">
                            </div>
                            <div class="form-group">
                                <label>Line</label>
                                <input class="form-control" type="text" name="line" value="{{ $l->urls }}">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection