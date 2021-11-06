@extends('maintenance.layouts.master')
@section('title', 'Maintenance | Endless Admin Panel')
@section('style')

@endsection

@section('content')
<!-- Maintenance start-->
<div class="error-wrapper">
  <div class="container">
    <ul class="maintenance-icons">
      <li><i class="fa fa-cog"></i></li>
      <li><i class="fa fa-cog"></i></li>
      <li><i class="fa fa-cog"></i></li>
    </ul>
    <div class="maintenance-heading">
      <h2 class="headline">MAINTENANCE</h2>
    </div>
    <h4 class="sub-content">Our Site is Currently under maintenance We will be back Shortly<br>                Thank You For Patience</h4>
    <div><a class="btn btn-info-gradien btn-lg text-light" href="index.html">BACK TO HOME PAGE</a></div>
  </div>
</div>
<!-- Maintenance end-->
@endsection
@section('script')
@endsection

   