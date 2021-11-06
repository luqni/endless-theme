@extends('authentication.layouts.master')
@section('title', 'Login')
@section('style')

@endsection

@section('content')
<div class="container-fluid p-0">
  <!-- login page with video background start-->
  <div class="auth-bg-video">
    <video id="bgvid" poster="{{asset('assets/images/other-images/coming-soon-bg.jpg')}}" playsinline="" autoplay="" muted="" loop="">
      <source src="{{asset('assets/video/auth-bg.mp4')}}" type="video/mp4">
    </video>
    <div class="authentication-box">
      <div class="text-center"><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></div>
      <div class="card mt-4">
        <div class="card-body">
          <div class="text-center">
            <h4>LOGIN</h4>
            <h6>Enter your Username and Password </h6>
          </div>
          <form class="theme-form">
            <div class="form-group">
              <label class="col-form-label pt-0">Your Name</label>
              <input class="form-control" type="text" required="">
            </div>
            <div class="form-group">
              <label class="col-form-label">Password</label>
              <input class="form-control" type="password" required="">
            </div>
            <div class="checkbox p-0">
              <input id="checkbox1" type="checkbox">
              <label for="checkbox1">Remember me</label>
            </div>
            <div class="form-group form-row mt-3 mb-0">
              <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
            <div class="form-group form-row mt-3 mb-0">
              <button class="btn btn-secondary btn-block" type="submit">Login With Auth0</button>
            </div>
            <div class="login-divider"></div>
            <div class="social mt-3">
              <div class="form-group btn-showcase d-flex">
                <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                <button class="btn social-btn btn-google d-inline-block"><i class="fa fa-twitter"></i></button>
                <button class="btn social-btn btn-github d-inline-block"><i class="fa fa-github"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- login page with video background end-->
</div>
@endsection
@section('script')
@endsection