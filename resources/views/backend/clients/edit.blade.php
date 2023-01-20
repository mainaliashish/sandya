@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Update Client Image'])

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="col-12 col-md-12 col-sm-12 center">
                {!! Form::model($client, ['method'=>'PATCH', 'route' => ['backend.clients.update', $client->id], 'files'=>true]) !!}
                @include('backend.clients._form', ['button_text' => 'Update Client'])
                {!! Form::close() !!}
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
                , ['para', ['ol', 'ul', 'paragraph', 'height']]
                , ['table', ['table']]
                , ['insert', ['link']]
                , ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
            ]
        });
    })

</script>

@endsection
