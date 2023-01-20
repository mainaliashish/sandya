@extends('auth.layouts.app')

@section('main-content')
<body class="hold-transition login-page" style="background: powderblue;margin-top: -80px;">
<div class="login-box">
    <div class="login-logo">
        @if(isset($site_logo))
            <img src="{{ asset(imagePath($site_logo, 'abouts')) }}" class="img img-rounded" alt="" style="width: 300px;height:90px;">
        @endif
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-blue text-bold">Sign in to start Your admin session</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <input type="email" id="email" class="form-control" name="email" :value="old('email')"  placeholder="Email" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-lg-4 col-sm-8">
            <button type="submit" class="btn btn-success btn-md">{{ __('Login') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
            {{ __('Forgot your password?') }}
        </a>
      @endif

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection

@section('headerElements')
<style>
    .card-body.login-card-body {
    background: lavender;
    box-shadow: 3px 3px 7px 5px grey;
}
</style>
@endsection
