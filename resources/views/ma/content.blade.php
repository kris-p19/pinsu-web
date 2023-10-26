@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">แก้ไขเนื้อหาเว็บไซต์</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        <li><a href="{{ url('ma/content/home') }}">หน้าหลัก (Home)</a></li>
                        <li><a href="{{ url('ma/content/company') }}">บริษัท (Company)</a></li>
                        <li><a href="{{ url('ma/content/product') }}">สินค้า (Product)</a></li>
                        <li><a href="{{ url('ma/content/contact') }}">ติดต่อเรา (Contact)</a></li>
                        <li><a href="{{ url('ma/content/footer') }}">ส่วนท้าย (Footer)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
