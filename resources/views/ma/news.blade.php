@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                            <label>ชื่อเรื่อง (ภาษาไทย)</label>
                            <input type="text" class="form-control" placeholder="ชื่อเรื่อง" name="subject_th" value="{{ !empty(request()->edit)?DB::table('news')->where('id',request()->edit)->first()->subject_th:'' }}">
                        </div>
                        <div class="form-group">
                            <label>เนื้อหา (ภาษาไทย)</label>
                            <textarea class="form-control" name="content_th" id="content_th">{{ !empty(request()->edit)?DB::table('news')->where('id',request()->edit)->first()->content_th:'' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>ชื่อเรื่อง (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" placeholder="ชื่อเรื่อง" name="subject_en" value="{{ !empty(request()->edit)?DB::table('news')->where('id',request()->edit)->first()->subject_en:'' }}">
                        </div>
                        <div class="form-group">
                            <label>เนื้อหา (ภาษาอังกฤษ)</label>
                            <textarea class="form-control" name="content_en" id="content_en">{{ !empty(request()->edit)?DB::table('news')->where('id',request()->edit)->first()->content_en:'' }}</textarea>
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">รายการข่าว</div>

                <div class="card-body" style="overflow-y: scroll;height:calc(100vh - 200px);">
                    <ul>
                        @foreach ($data as $item)
                            <li style="border-bottom: 1px solid #ccc;margin-bottom:5px;">
                                {{ $item->created_at . ' ' . $item->subject_th }}
                                <br>
                                <a style="margin:5px;width:50px;border-radius:20px;" class="btn btn-success btn-sm" href="{{ url('news/read') }}?id={{ $item->id }}" target="_blank">อ่าน</a>
                                <a style="margin:5px;width:50px;border-radius:20px;" class="btn btn-warning btn-sm" href="{{ url('ma/news') }}?edit={{ $item->id }}">แก้ไข</a>
                                <a style="margin:5px;width:50px;border-radius:20px;" class="btn btn-danger btn-sm" href="{{ url('ma/news') }}?delete={{ $item->id }}">ลบ</a>
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
    <script src="{{ asset('absbmdm/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea#content_th',
            theme: "modern",
            height: 300,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        tinymce.init({
            selector: 'textarea#content_en',
            theme: "modern",
            height: 300,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        tinymce.suffix = ".min";
        tinyMCE.baseURL = "{{ url('absbmdm/plugins/tinymce') }}";
      </script>
@endsection