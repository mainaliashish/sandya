@extends('backend.layouts.app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
@include('backend.partials._content-header', ['header_title' => 'Update Admin Password'])


    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Your Admin Password</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($user, ['method'=>'PATCH', 'route' => ['backend.accounts.updatepassword', $user->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('current-password', 'Current password:', ['class' => 'font-weight-bold']) !!}
                    {!! Form::password('current-password', ['class' => 'form-control','placeholder'=>'Enter current password'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('new-password', 'New password:', ['class' => 'font-weight-bold']) !!}
                    {!! Form::password('new-password', ['class'=> 'form-control', 'placeholder' => 'Enter new password']) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('new-password_confirmation', 'Confirm password:', ['class' => 'font-weight-bold']) !!}
                    {!! Form::password('new-password_confirmation', ['class' => 'form-control','placeholder'=>'Enter confirm password']) !!}
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-md float-right mb-3" value="Update Password">
                    <a href="{{ route('backend.dashboard') }}" class="btn btn-primary float-left">Cancel</a>
                </div>

            </div>
            <!-- /.card-body -->

    </section>

<!-- /.content-wrapper -->
@endsection
