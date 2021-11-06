@extends('layouts.master')
@section('title', 'Sweet Alert | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.css')}}">
@endsection

@section('breadcrumb-title', 'Sweet Alert')
@section('breadcrumb-items')
<li class="breadcrumb-item">Advance</li>
<li class="breadcrumb-item active">Sweet Alert</li>
@endsection

@section('content')
<!-- Container-fluid starts                    -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Basic Examples</h5>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary sweet-1" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Basic</button>
          <button class="btn btn-primary sweet-2" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">With Title alert</button>
          <button class="btn btn-primary sweet-3" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Success alert</button>
          <button class="btn btn-primary sweet-4" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Warning alert</button>
          <button class="btn btn-primary sweet-5" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Warning alert</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Advanced State</h5>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary sweet-12" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-12']);">Success</button>
          <button class="btn btn-primary sweet-11" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-11']);">Danger</button>
          <button class="btn btn-primary sweet-13" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-13']);">Information</button>
          <button class="btn btn-primary sweet-10" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-10']);">Warning</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Alert State</h5>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-success sweet-8" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-8']);">Success</button>
          <button class="btn btn-danger sweet-7" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-7']);">Danger</button>
          <button class="btn btn-info sweet-9" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-9']);">Information</button>
          <button class="btn btn-warning sweet-6" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-6']);">Warning</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/sweet-alert/app.js')}}"></script>
@endsection
