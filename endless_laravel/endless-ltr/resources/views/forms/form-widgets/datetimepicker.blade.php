@extends('layouts.master')
@section('title', 'Date Time Picker | Endless Admin Panel')
@section('styles')

@endsection

@section('breadcrumb-title', 'Date Time Picker')
@section('breadcrumb-items')
<li class="breadcrumb-item">Forms</li>
<li class="breadcrumb-item">Form Widgets</li>
<li class="breadcrumb-item active">Date Time Picker</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h5>Date  Time Picker</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="datetime-picker">
            <form class="theme-form">
              <div class="form-group form-row">
                <label class="col-sm-3 col-form-label text-right">Minimum Setup</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <div class="input-group date" id="dt-minimum" data-target-input="nearest">
                    <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-minimum">
                    <div class="input-group-append" data-target="#dt-minimum" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group form-row">
                <label class="col-sm-3 col-form-label text-right">Using Locales</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <div class="input-group date" id="dt-local" data-target-input="nearest">
                    <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-local">
                    <div class="input-group-append" data-target="#dt-local" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group form-row">
                <label class="col-sm-3 col-form-label text-right">Time Only</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <div class="input-group date" id="dt-time" data-target-input="nearest">
                    <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-time">
                    <div class="input-group-append" data-target="#dt-time" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group form-row">
                <label class="col-sm-3 col-form-label text-right">Date Only</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <div class="input-group date" id="dt-date" data-target-input="nearest">
                    <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-date">
                    <div class="input-group-append" data-target="#dt-date" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group form-row">
                <label class="col-sm-3 col-form-label text-right">No Icon (input field only)</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <input class="form-control datetimepicker-input digits" id="dt-noicon" type="text" data-toggle="datetimepicker" data-target="#dt-noicon">
                </div>
              </div>
              <div class="form-group form-row">
                <label class="col-sm-3 col-form-label text-right">Enabled/Disabled Dates</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <div class="input-group date" id="dt-enab-disab-date" data-target-input="nearest">
                    <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-enab-disab-date">
                    <div class="input-group-append" data-target="#dt-enab-disab-date" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group form-row">
                <label class="col-sm-3 col-form-label text-right">View Mode</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <div class="input-group date" id="dt-view" data-target-input="nearest">
                    <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-view">
                    <div class="input-group-append" data-target="#dt-view" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group form-row mb-0">
                <label class="col-sm-3 col-form-label text-right">Disabled Days of the Week</label>
                <div class="col-xl-5 col-sm-7 col-lg-8">
                  <div class="input-group date" id="dt-disab-days" data-target-input="nearest">
                    <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-disab-days">
                    <div class="input-group-append" data-target="#dt-disab-days" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/datepicker/date-time-picker/moment.min.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-time-picker/datetimepicker.custom.js')}}"></script>
@endsection