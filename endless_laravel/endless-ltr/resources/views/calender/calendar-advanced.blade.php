@extends('layouts.master')
@section('title', 'Calendar Advance | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/calendar.css')}}">
@endsection

@section('breadcrumb-title', 'Calendar Advance')
@section('breadcrumb-items')
<li class="breadcrumb-item">Calendar</li>
<li class="breadcrumb-item active">Full Calendar Advance</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="calendar-wrap">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Dragging Event</h5>
          </div>
          <div class="card-body">
            <div class="basic-calendar">
              <div class="row">
                <div class="col-md-4 col-xl-3">
                  <div class="external-events text-left" id="external-events">
                    <div class="fc-events-container">
                      <div class="fc-event" data-color="#4466f2">All Day Event</div>
                      <div class="fc-event" data-color="#1ea6ec">Meeting</div>
                      <div class="fc-event" data-color="#22af47">Long Event</div>
                      <div class="fc-event" data-color="#007bff">Birthday party</div>
                      <div class="fc-event" data-color="#ff9f40">Party</div>
                      <div class="fc-event" data-color="#ff5370">Lunch</div>
                      <div class="fc-event" data-color="#536dfe">Conference Meeting</div>
                      <div class="fc-event" data-color="#fb6d9d">Happy Hour</div>
                      <h6 class="f-12 m-t-20">Drag and drop your event or click in the calendar</h6>
                      <div class="checkbox checkbox-primary">
                        <input id="drop-remove" type="checkbox" checked="">
                        <label for="drop-remove">Remove After Drop</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 col-xl-9">
                  <div id="fc-external-drag"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/fullcalendar-custom.js')}}"></script>
@endsection