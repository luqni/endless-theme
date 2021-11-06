@extends('authentication.layouts.master')
@section('title', 'Reset-Password | Endless Admin Panel')
@section('styles')

@endsection

@section('content')
<div class="container-fluid">
  <!-- Reset Password page start-->
  <div class="authentication-main">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="auth-innerright">
          <div class="authentication-box">
            <div class="text-center"><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></div>
            <div class="card mt-4 p-4">
              <form class="theme-form">
                <h5 class="f-16 mb-3 f-w-600">CREATE YOUR PASSWORD</h5>
                <div class="form-group">
                  <label class="col-form-label">New Password</label>
                  <input class="form-control" type="password" placeholder="*****">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Retype Password</label>
                  <input class="form-control" type="password" placeholder="*****">
                </div>
                <div class="form-group form-row mb-0">
                  <div class="col-md-2">
                    <button class="btn btn-primary" type="submit">Done</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Reset Password page end-->
</div>
@endsection
@section('scripts')
@endsection     