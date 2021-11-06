@extends('layouts.master')
@section('title', 'Form Vertical Wizard | Endless Admin Panel')
@section('styles')

@endsection

@section('breadcrumb-title', 'Form Vertical Wizard')
@section('breadcrumb-items')
<li class="breadcrumb-item">Forms</li>
<li class="breadcrumb-item">Form Layout</li>
<li class="breadcrumb-item active">Form Vertical Wizard</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Form Vertical Wizard</h5>
                  </div>
                  <div class="card-body">
                    <!-- Smart Wizard start-->
                    <div class="wizard-4" id="wizard">
                      <ul>
                        <li><a href="#step-1">Step 1<small>Registration</small></a></li>
                        <li><a href="#step-2">Step 2<small>Email</small></a></li>
                        <li><a href="#step-3">Step 3<small>Birth Date</small></a></li>
                        <li class="pb-0"><a href="#step-4">Step 4<small>Login Info</small></a></li>
                      </ul>
                      <div id="step-1">
                        <div class="col-sm-12 pl-0">
                          <div class="form-group">
                            <label for="name">First Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Johan" required="required">
                          </div>
                          <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input class="form-control" id="lname" type="text" placeholder="Deo">
                          </div>
                          <div class="form-group">
                            <label for="contact">Contact No.</label>
                            <input class="form-control digits" id="contact" type="number" placeholder="123456789">
                          </div>
                        </div>
                      </div>
                      <div id="step-2">
                        <div class="col-sm-12 pl-0">
                          <div class="form-group m-t-15">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input class="form-control" id="exampleInputcPassword1" type="password" placeholder="Enter again">
                          </div>
                        </div>
                      </div>
                      <div id="step-3">
                        <div class="col-sm-12 pl-0">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Birthday:</label>
                            <input class="form-control digits" type="date">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Age</label>
                            <input class="form-control digits" placeholder="Age" type="text">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Have Passport</label>
                            <input class="form-control digits" placeholder="Yes/No" type="text">
                          </div>
                        </div>
                      </div>
                      <div id="step-4">
                        <div class="col-sm-12 pl-0">
                          <div class="form-group">
                            <label class="control-label">Country</label>
                            <input class="form-control mt-1" type="text" placeholder="Country" required="required">
                          </div>
                          <div class="form-group">
                            <label class="control-label">State</label>
                            <input class="form-control mt-1" type="text" placeholder="State" required="required">
                          </div>
                          <div class="form-group">
                            <label class="control-label">City</label>
                            <input class="form-control mt-1" type="text" placeholder="City" required="required">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Smart Wizard Ends-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/form-wizard/form-wizard-five.js')}}"></script>
@endsection