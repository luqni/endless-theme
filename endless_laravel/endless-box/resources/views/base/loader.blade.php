@extends('layouts.master')
@section('title', 'Spinners | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Spinners')
@section('breadcrumb-items')
<li class="breadcrumb-item">Base</li>
<li class="breadcrumb-item active">Spinners</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Loader Style</h5>
        </div>
        <div class="card-body row">
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Default Loader</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-primary"></div>
                <div class="line bg-primary"></div>
                <div class="line bg-primary"></div>
                <div class="line bg-primary"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Dotted style</h6>
            <div class="loader-box"><span class="rotate dotted"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Dashed style</h6>
            <div class="loader-box"><span class="rotate dashed"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Double style</h6>
            <div class="loader-box"><span class="rotate double"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Groove style</h6>
            <div class="loader-box"><span class="rotate groove"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Ridge style</h6>
            <div class="loader-box"><span class="rotate ridge"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Inset style</h6>
            <div class="loader-box"><span class="rotate inset"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Outset style</h6>
            <div class="loader-box"><span class="rotate outset"></span></div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5>Loader Color</h5>
        </div>
        <div class="card-body row">
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Default</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Primary</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-primary"></div>
                <div class="line bg-primary"></div>
                <div class="line bg-primary"></div>
                <div class="line bg-primary"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Secondary</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-secondary"></div>
                <div class="line bg-secondary"></div>
                <div class="line bg-secondary"></div>
                <div class="line bg-secondary"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Success</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-success"></div>
                <div class="line bg-success"></div>
                <div class="line bg-success"></div>
                <div class="line bg-success"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Info</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-info"></div>
                <div class="line bg-info"></div>
                <div class="line bg-info"></div>
                <div class="line bg-info"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Warning</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-warning"></div>
                <div class="line bg-warning"></div>
                <div class="line bg-warning"></div>
                <div class="line bg-warning"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Danger</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-danger"></div>
                <div class="line bg-danger"></div>
                <div class="line bg-danger"></div>
                <div class="line bg-danger"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Dark</h6>
            <div class="loader-box">
              <div class="loader">
                <div class="line bg-dark"></div>
                <div class="line bg-dark"></div>
                <div class="line bg-dark"></div>
                <div class="line bg-dark"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5>Loader Multi Color</h5>
        </div>
        <div class="card-body row">
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Solid style</h6>
            <div class="loader-box"><span class="rotate solid colored"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Dotted style</h6>
            <div class="loader-box"><span class="rotate dotted colored"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Dashed style</h6>
            <div class="loader-box"><span class="rotate dashed colored"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Double style</h6>
            <div class="loader-box"><span class="rotate double colored"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Groove style</h6>
            <div class="loader-box"><span class="rotate groove colored"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Ridge style</h6>
            <div class="loader-box"><span class="rotate ridge colored"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Inset style</h6>
            <div class="loader-box"><span class="rotate inset colored"></span></div>
          </div>
          <div class="col-md-3">
            <h6 class="sub-title mb-0">Outset style</h6>
            <div class="loader-box"><span class="rotate outset colored"></span></div>
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