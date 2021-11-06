@extends('layouts.master')
@section('title', 'Datatables Server Side | Endless Admin Panel')
@section('styles')
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('breadcrumb-title', 'Datatables Server Side')
@section('breadcrumb-items')
<li class="breadcrumb-item">Tables</li>
<li class="breadcrumb-item">Data Tables</li>
<li class="breadcrumb-item active">Server Side</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <!-- Server Side Processing start-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Server Side Processing</h5><span>In some tables you might wish to have some content generated automatically.</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display datatables" id="server-side-datatable">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Server Side Processing end-->
    <!-- http Server Side start-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Custom HTTP variables</h5><span>The example below shows server-side processing being used with an extra parameter being sent to the server by using the ajax.data option as a function</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display datatables" id="datatable-http">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- http Server Side end-->
    <!-- post data Server Side start-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>POST Data</h5><span>The example below shows server-side processing being used with an extra parameter being sent to the server by using the ajax.data option as a function</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display datatables" id="datatable-post">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->          
@endsection
@section('scripts')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection