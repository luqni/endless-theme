@extends('layouts.master')
@section('title', 'Avatars | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Avatars')
@section('breadcrumb-items')
<li class="breadcrumb-item">Base</li>
<li class="breadcrumb-item active">Avatars</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="user-profile">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Sizing</h5>
          </div>
          <div class="card-body avatar-showcase">
            <div class="avatars">
              <div class="avatar"><img class="img-100 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-90 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-80 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-60 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-20 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Status Indicator</h5>
          </div>
          <div class="card-body avatar-showcase">
            <div class="avatars">
              <div class="avatar"><img class="img-100 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-100 bg-success"> </div>
              </div>
              <div class="avatar"><img class="img-90 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-90"></div>
              </div>
              <div class="avatar"><img class="img-80 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-80 bg-success"></div>
              </div>
              <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-70"></div>
              </div>
              <div class="avatar"><img class="img-60 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-60 bg-success"></div>
              </div>
              <div class="avatar"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-50"> </div>
              </div>
              <div class="avatar"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-40"></div>
              </div>
              <div class="avatar"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                <div class="status status-30"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Initials</h5>
          </div>
          <div class="card-body avatar-showcase">
            <div class="avatars">
              <div class="avatar"><img class="img-100 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-90 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-80 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-60 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-20 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
              <div class="avatar"><img class="img-10 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 xl-100">
        <div class="card">
          <div class="card-header">
            <h5>Shape</h5>
          </div>
          <div class="card-body avatar-showcase">
            <div class="avatars">
              <div class="avatar"><img class="img-100 b-r-8" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-90 b-r-30" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-80 b-r-35" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-60 b-r-25" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar"><img class="img-50 b-r-15" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 xl-100">
        <div class="card">
          <div class="card-header">
            <h5>Ratio</h5>
          </div>
          <div class="card-body avatar-showcase">
            <div class="avatars">
              <div class="avatar ratio"><img class="b-r-8 height-100" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar ratio"><img class="b-r-8 height-90" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar ratio"><img class="b-r-8 height-80" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar ratio"><img class="b-r-8 height-70" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar ratio"><img class="b-r-8 height-60" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
              <div class="avatar ratio"><img class="b-r-8 height-50" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Groups</h5>
          </div>
          <div class="card-body avatar-showcase">
            <div class="customers d-inline-block avatar-group">
              <ul>
                <li class="d-inline-block"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                <li class="d-inline-block"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                <li class="d-inline-block"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
              </ul>
            </div>
            <div class="customers d-inline-block avatar-group">
              <ul>
                <li class="d-inline-block"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                <li class="d-inline-block"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                <li class="d-inline-block"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
              </ul>
            </div>
            <div class="customers d-inline-block avatar-group">
              <ul>
                <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
              </ul>
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

@endsection