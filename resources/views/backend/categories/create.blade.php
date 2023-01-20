@extends('backend.layouts.app')
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Create Category'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::open(array('method'=>'POST','route' => 'backend.categories.store')) !!}
            
                @include('backend.categories._form', ['button_text' => 'Create Category'])
           
            {!! Form::close() !!}
        </div>
    

</section>
<!-- /.content-wrapper -->
@endsection

