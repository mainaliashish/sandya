@extends('backend.layouts.app')
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Update Contact'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::model($contact, ['method'=>'PATCH', 'route' => ['backend.contacts.update', $contact]]) !!}

            @include('backend.contacts._form', ['button_text' => 'Update Contact'])

            {!! Form::close() !!}
        </div>
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

