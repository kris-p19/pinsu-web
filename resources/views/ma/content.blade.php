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
                        <li>
                            หน้าหลัก
                            <ul>
                                <li><a href="{{ url('ma/content/home') }}">หน้าหลัก (Home)</a></li>
                                <li><a href="{{ url('ma/content/company') }}">บริษัท (Company)</a></li>
                                <li><a href="{{ url('ma/content/product') }}">สินค้า (Product)</a></li>
                                <li><a href="{{ url('ma/content/contact') }}">ติดต่อเรา (Contact)</a></li>
                                <li><a href="{{ url('ma/content/footer') }}">ส่วนท้าย (Footer)</a></li>
                            </ul>
                        </li>
                        <li>
                            หน้าย่อย
                            <ul>
                                <li><a href="{{ url('ma/content/Glass-Fabrics') }}">Glass Fabrics</a></li>
                                <li><a href="{{ url('ma/content/Silica-Fabrics') }}">Silica Fabrics</a></li>
                                <li><a href="{{ url('ma/content/Ceramic-Fabrics') }}">Ceramic Fabrics</a></li>
                                <li><a href="{{ url('ma/content/Silicone-Coated-Fabrics') }}">Silicone Coated Fabrics</a></li>
                                <li><a href="{{ url('ma/content/PTFE-Coated-Fabrics') }}">PTFE Coated Fabrics</a></li>
                                <li><a href="{{ url('ma/content/Hi-Temp-Fabric-Tape') }}">Hi Temp Fabric Tape</a></li>
                                <li><a href="{{ url('ma/content/Flexible-Joint-Ducts') }}">Flexible Joint - Ducts</a></li>
                                <li><a href="{{ url('ma/content/Welding-Blanket-Fire-Blanket') }}">Welding Blanket - Fire Blanket</a></li>
                                <li><a href="{{ url('ma/content/Removable-Insulation') }}">Removable Insulation</a></li>
                                <li><a href="{{ url('ma/content/Insulation-Accessories') }}">Insulation Accessories</a></li>
                                <li><a href="{{ url('ma/content/Hi-Temp-Sewing-Thread') }}">Hi-Temp Sewing Thread</a></li>
                                <li><a href="{{ url('ma/content/Temporary-Work-Shop') }}">Temporary Work Shop</a></li>
                                <li><a href="{{ url('ma/content/Fiber-Blanket') }}">Fiber Blanket</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
