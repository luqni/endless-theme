@extends('layouts.master')
@section('title', 'Tag & Pills | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Tag & Pills')
@section('breadcrumb-items')
<li class="breadcrumb-item">Base</li>
<li class="breadcrumb-item active">Tag & Pills</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Contextual variations</h5>
        </div>
        <div class="card-body"><span class="badge badge-primary">Primary</span><span class="badge badge-secondary">Secondary</span><span class="badge badge-success">Success</span><span class="badge badge-info">Info</span><span class="badge badge-warning">Warning</span><span class="badge badge-danger">Danger</span><span class="badge badge-light">Light</span><span class="badge badge-dark tag-pills-sm-mb">Dark</span></div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Contextual variations</h5>
        </div>
        <div class="card-body"><span class="badge badge-pill badge-primary">Primary</span><span class="badge badge-pill badge-secondary">Secondary</span><span class="badge badge-pill badge-success">Success</span><span class="badge badge-pill badge-info">Info</span><span class="badge badge-pill badge-warning">Warning</span><span class="badge badge-pill badge-danger">Danger</span><span class="badge badge-pill badge-light">Light</span><span class="badge badge-pill badge-dark tag-pills-sm-mb">Dark</span></div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Tags with number</h5>
        </div>
        <div class="card-body digits"><a class="badge badge-primary" href="#">1</a><a class="badge badge-secondary" href="#">2</a><a class="badge badge-success" href="#">3</a><a class="badge badge-info" href="#">4</a><a class="badge badge-warning" href="#">5</a><a class="badge badge-danger" href="#">6</a><a class="badge badge-light" href="#">7</a><a class="badge badge-dark" href="#">8</a></div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Pills with number</h5>
        </div>
        <div class="card-body digits"><span class="badge badge-pill badge-primary">1</span><span class="badge badge-pill badge-secondary">2</span><span class="badge badge-pill badge-success">3</span><span class="badge badge-pill badge-info">4</span><span class="badge badge-pill badge-warning">5</span><span class="badge badge-pill badge-danger">6</span><span class="badge badge-pill badge-light">7</span><span class="badge badge-pill badge-dark">8</span></div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Tags With icon</h5>
        </div>
        <div class="card-body"><a class="badge badge-primary" href="#"><i data-feather="dollar-sign"></i></a><a class="badge badge-secondary" href="#"><i data-feather="headphones"></i></a><a class="badge badge-success" href="#"><i data-feather="link"></i></a><a class="badge badge-info" href="#"><i data-feather="github"></i></a><a class="badge badge-warning" href="#"><i data-feather="award"></i></a><a class="badge badge-danger" href="#"><i data-feather="activity"></i></a><a class="badge badge-light" href="#"><i data-feather="heart"></i></a><a class="badge badge-dark" href="#"><i data-feather="mail"></i></a></div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Pills with Icon</h5>
        </div>
        <div class="card-body"><a class="badge badge-pill badge-primary" href="#"><i data-feather="dollar-sign"></i></a><a class="badge badge-pill badge-secondary" href="#"><i data-feather="headphones"></i></a><a class="badge badge-pill badge-success" href="#"><i data-feather="link"></i></a><a class="badge badge-pill badge-info" href="#"><i data-feather="github"></i></a><a class="badge badge-pill badge-warning" href="#"><i data-feather="award"></i></a><a class="badge badge-pill badge-danger" href="#"><i data-feather="activity"></i></a><a class="badge badge-pill badge-light" href="#"><i data-feather="heart"></i></a><a class="badge badge-pill badge-dark" href="#"><i data-feather="mail"></i></a></div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card height-equal">
        <div class="card-header">
          <h5>Badges Example</h5>
        </div>
        <div class="card-body">
          <h1>heading <span class="badge badge-primary">New</span></h1>
          <h2>heading <span class="badge badge-primary">New</span></h2>
          <h3>heading <span class="badge badge-primary">New</span></h3>
          <h4>heading <span class="badge badge-primary">New</span></h4>
          <h5>heading <span class="badge badge-primary">New</span></h5>
          <h6>heading <span class="badge badge-primary">New</span></h6>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card height-equal">
        <div class="card-header">
          <h5>Badges as part buttons</h5>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <button class="btn btn-primary" type="button">Messages <span class="badge badge-pill badge-light"><i data-feather="mail"></i></span></button>
          </div>
          <div class="mb-3">
            <button class="btn btn-secondary" type="button">Notifications <span class="badge badge-pill badge-light"><i data-feather="bell"></i></span></button>
          </div>
          <div class="mb-3">
            <button class="btn badge-success" type="button">Update available <span class="badge badge-pill badge-light"><i data-feather="settings"></i></span></button>
          </div>
          <div class="mb-3">
            <button class="btn badge-info" type="button">Playing Now <span class="badge badge-pill badge-light"><i data-feather="music"></i></span></button>
          </div>
          <div class="mb-3">
            <button class="btn badge-warning" type="button">1.2 GB Used <span class="badge badge-pill badge-light"><i data-feather="alert-triangle"></i></span></button>
          </div>
          <div>
            <button class="btn badge-danger" type="button">Alert <span class="badge badge-pill badge-light"><i data-feather="alert-circle"></i></span></button>
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