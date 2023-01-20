@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Create Event'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::open(array('method'=>'POST','route' => 'backend.events.store', 'files'=>true)) !!}
            @include('backend.events._form', ['button_text' => 'Create event'])
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
<link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

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

<script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>

<script src="{{ asset('backend/plugins/inputmask/jquery.inputmask.min.js') }}"></script>

<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>


<script>

 $(function () {
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'Y-MM-DD'
    });
 });
 </script>

@endsection

