@extends('backend.layouts.app')
{{-- {{ dd($team) }} --}}
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Update Team'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="col-12 col-md-12 col-sm-12 center">

            {!! Form::model($team, ['method'=>'PATCH', 'route' => ['backend.teams.update', $team->id], 'files'=>true]) !!}
            @include('backend.teams._form', ['button_text' => 'Save Changes'])
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
