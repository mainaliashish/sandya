@extends('backend.layouts.app')
{{-- {{ dd($team) }} --}}
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Create Team'])
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="col-12 col-md-12 col-sm-12 center">
          {!! Form::open(array('method'=>'POST','route' => 'backend.teams.store', 'files'=>true)) !!}
          @include('backend.teams._form', ['button_text' => 'Create Team'])
          {!! Form::close() !!}
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('headelements')
@endsection

@section('footerelements')
<script>
    teamImage.onchange = evt => {
        const [file] = teamImage.files
        if (file) {
            teamImageShow.src = URL.createObjectURL(file)
            $('#teamImageShow').css({
                "height": "220px"
                , "width": "400px"
            })
            $('#teamImageDiv').remove();
        }
    }

</script>

@endsection