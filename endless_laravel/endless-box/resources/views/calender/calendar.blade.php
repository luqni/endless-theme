@extends('layouts.master')
@section('title', 'Calendar Basic | Endless - Premium Admin Template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/calendar.css')}}">
@endsection

@section('breadcrumb-title', 'Calendar Basic')
@section('breadcrumb-items')
<li class="breadcrumb-item">Calendar</li>
<li class="breadcrumb-item active">Full Calendar Basic</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="calendar-wrap">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Basic</h5><span>This is the basic example having navigation button to navigate next and previous months and today button. This basic example lists all the events on the calendar.</span>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div id="cal-basic"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Basic Views</h5><span>This is the basic example having navigation buttons as well as month, week and day views. In this example the option to change your view to a basicWeek or basicDay view. In the Basic Week or Basic Day View events are listed all together.</span>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div id="cal-basic-view"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Agenda Views</h5><span>The following example demonstrates agenda views and the defaultView option is set to agendaWeek.</span>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div id="cal-agenda-view"></div>
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
@section('script')
<script src="{{asset('assets/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/fullcalendar-custom.js')}}"></script>

@endsection