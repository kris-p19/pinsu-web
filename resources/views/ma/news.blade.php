@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">โพสต์ข่าว{{ !empty(request()->edit)?' - แก้ไขเนื้อข่าว':'' }}</div>
                <div class="card-body" style="overflow-y: scroll;height:calc(100vh - 200px);">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ !empty(request()->edit)?url('ma/news/post-update'):url('ma/news/post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>ชื่อเรื่อง</label>
                            <input type="text" class="form-control" placeholder="ชื่อเรื่อง" name="subject" value="{{ !empty(request()->edit)?DB::table('news')->where('id',request()->edit)->first()->subject:'' }}">
                        </div>
                        <div class="form-group">
                            <label>เนื้อหา</label>
                            <textarea class="form-control" name="content" rows="10">{{ !empty(request()->edit)?DB::table('news')->where('id',request()->edit)->first()->content:'' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>ภาพ</label>
                            <a class="btn btn-success btn-sm" onclick="addElement();">เพิ่มรูป</a>
                            @if (!empty(request()->edit))
                                <input type="hidden" name="id" value="{{ request()->edit }}">
                                <div class="row">
                                    @if (!empty(DB::table('news')->where('id',request()->edit)->first()->picture))
                                        @foreach (json_decode(DB::table('news')->where('id',request()->edit)->first()->picture) as $img)
                                        <div class="col-md-3">
                                            <a href="{{ asset('images/news/'.$img) }}" target="_blank">
                                                <img src="{{ asset('images/news/'.$img) }}" class="img-responsive" style="width:100%;border:1px solid;">
                                            </a>
                                            <a href="{{ url('ma/news') }}?edit={{ request()->edit }}&delete={{ request()->edit }}&name={{ $img }}">ลบภาพนี้</a>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endif
                            <div id="list-input-file"></div>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">โพสต์</button>
                            {!! !empty(request()->edit)?'<a href="' . url()->previous() . '" class="btn btn-warning">ย้อนกลับ</a> <a href="' . url('ma/news') . '" class="btn btn-warning">ยกเลิก</a>':'' !!}
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">รายการข่าว</div>

                <div class="card-body" style="overflow-y: scroll;height:calc(100vh - 200px);">
                    <ul>
                        @foreach ($data as $item)
                            <li>
                                {{ $item->created_at . ' ' . $item->subject }}
                                <a href="{{ url('ma/news') }}?edit={{ $item->id }}">แก้ไข</a>
                                <a href="{{ url('ma/news') }}?delete={{ $item->id }}">ลบ</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        function addElement() {
            $('#list-input-file').append('<div class="col-md-4"><input type="file" name="picture[]" class="form-control" style="padding:4px;margin-top:10px;"></div><div class="col-md-8 tmp-picture"></div>');
        }
    </script>
@endsection