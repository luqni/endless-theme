@extends('layouts.master')
@section('title', 'Sticky | Endless - Premium Admin Template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sticky.css')}}">
@endsection

@section('breadcrumb-title', 'Sticky')
@section('breadcrumb-items')
<li class="breadcrumb-item">Advance</li>
<li class="breadcrumb-item active">Sticky</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row sticky-header-main">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Sticky Note <a class="btn btn-primary pull-right m-l-10" id="add_new" href="javascript:;">Add New Note</a></h5>
        </div>
        <div class="card-body">
          <div class="sticky-note" id="board"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->

@endsection
@section('script')
<script src="{{asset('assets/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('assets/js/sticky/sticky.js')}}"></script>

@endsection