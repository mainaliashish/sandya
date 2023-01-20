@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Create Service'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::open(array('method'=>'POST','route' => 'backend.services.store', 'files'=>true)) !!}
            @include('backend.services._form', ['button_text' => 'Create Service'])
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


<script>
    serviceImage.onchange = evt => {
        const [file] = serviceImage.files
        if (file) {
            serviceImageShow.src = URL.createObjectURL(file)
            $('#serviceImageShow').css({
                "height": "220px"
                , "width": "400px"
            })
            $('#serviceImageDiv').remove();
        }
    }

</script>
@endsection


