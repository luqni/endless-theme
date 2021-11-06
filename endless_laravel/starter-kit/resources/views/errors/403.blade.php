@extends('errors.layouts.master')
@section('title', '403 Error | Endless Admin Panel')
@section('styles')

@endsection

@section('content')
<!-- error-403 start-->
<div class="error-wrapper">
  <div class="container"><img class="img-100" src="{{asset('assets/images/other-images/sad.png')}}" alt="">
    <div class="error-heading">
      <h2 class="headline font-success">403</h2>
    </div>
    <div class="col-md-8 offset-md-2">
      <p class="sub-content">The page you are attempting to reach is currently not available. This may be because the page does not exist or has been moved.</p>
    </div>
    <div><a class="btn btn-success-gradien btn-lg" href="index.html">BACK TO HOME PAGE</a></div>
  </div>
</div>
<!-- error-403 end-->
@endsection
@section('scripts')
@endsection