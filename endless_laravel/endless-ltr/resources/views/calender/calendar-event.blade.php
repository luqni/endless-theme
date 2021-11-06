@extends('layouts.master')
@section('title', 'Calendar Events | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/calendar.css')}}">
@endsection

@section('breadcrumb-title', 'Calendar Events')
@section('breadcrumb-items')
<li class="breadcrumb-item">Calendar</li>
<li class="breadcrumb-item active">Full Calendar Events</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="calendar-wrap">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Background Event</h5><span>Events that appear as background highlights can be achieved by an Event Object's property to "background".</span>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div id="cal-bg-events"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Event Colors</h5><span>You can change the color of all events on the calendar using the eventColor option.</span>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div id="cal-event-colors"></div>
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