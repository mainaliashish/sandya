@extends('backend.layouts.app')
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Update Category'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
		    {!! Form::model($category, ['method'=>'PATCH', 'route' => ['backend.categories.update', $category]]) !!}

                @include('backend.categories._form', ['button_text' => 'Update Category'])

            {!! Form::close() !!}
        </div>
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

