@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Update Announcement'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::model($announcement, ['method'=>'PATCH', 'route' => ['backend.announcements.update', $announcement], 'files'=>true]) !!}
            @include('backend.announcements._form', ['button_text' => 'Save Changes'])
            {!! Form::close() !!}
        </div>
    </div>
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('headerElements')
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('footerelements')
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })

</script>
@endsection

