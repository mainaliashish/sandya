@extends('backend.layouts.app')
{{-- {{ dd($team) }} --}}
@section('main-content')

@include('backend.partials._content-header', ['header_title' => 'Update Admin Profile'])

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="col-12 col-md-12 col-sm-12 center">
                {!! Form::model($user, ['method'=>'PATCH', 'route' => ['backend.accounts.updateproflie', $user->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Full Name : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('name', $user->name ?? '' , ['class' => 'form-control','placeholder'=>'Enter User name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('email', $user->email ?? '' , ['class' => 'form-control','placeholder'=>'Enter User email']) !!}
                </div>

                {!! Form::label('image', 'Profile Image :', ['class' => 'font-weight-bold']) !!}
                @if(isset($user->profile_image))
                <div class="form-group" id="userImageDiv">
                    <img src="{{ asset(imagePath($user->profile_image, 'settings')) }}" class="img img-circle" alt="" style="width: 120px;height:120px">
                </div>
                @endif
                <div class="form-group">
                    <img id="userImageShow" class="img img-circle" src="#" alt="" style="" />
                </div>

                <div class="custom-file mb-2">
                    <input type="file" name="profile_image" class="custom-file-input" id="userImage">
                    <label class="custom-file-label" for="userImage">Select Profile Image</label>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-md float-right mb-3" value="Update Profile">
                    <a href="{{ route('backend.dashboard') }}" class="btn btn-primary float-left">Cancel</a>
                </div>

            </div>
        </div>
</section>
<!-- /.content -->
<!-- /.content-wrapper -->
@endsection

@section('footerelements')

<script>
userImage.onchange = evt => {
const [file] = userImage.files
if (file) {
userImageShow.src = URL.createObjectURL(file)
$('#userImageShow').css({"height":"120px", "width":"120px"})
$('#userImageDiv').remove();
}
}

</script>
@endsection
