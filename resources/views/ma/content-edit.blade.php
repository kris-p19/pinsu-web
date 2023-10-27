@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('ma/content') }}" class="btn btn-warning btn-sm">ย้อนกลับ</a>
                    แก้ไขเนื้อหาเว็บไซต์ - <b><u>{{ $title }}</u></b>
                    {{ url('/') }}
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
                                <textarea id="content_th" name="content_th" class="form-control">{{ $data->content_th }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>เนื้อหา (ภาษาอังกฤษ)</label>
                                <textarea id="content_en" name="content_en" class="form-control">{{ $data->content_en }}</textarea>
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

@section('script')
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