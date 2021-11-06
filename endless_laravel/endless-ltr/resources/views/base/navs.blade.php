@extends('layouts.master')
@section('title', 'Navs | Endless Admin Panel')
@section('styles')
@endsection

@section('breadcrumb-title', 'Navs')
@section('breadcrumb-items')
<li class="breadcrumb-item">Base</li>
<li class="breadcrumb-item active">Navs</li>
@endsection

@section('content')
<!-- Container-fluid starts                 -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Default Nav</h5>
        </div>
        <div class="card-body">
          <ul class="icon-lists border navs-icon">
            <li><a href="#"><i data-feather="home"></i><span> Dashboard</span></a></li>
            <li><a href="#"><i data-feather="airplay"></i><span> Widgets</span></a></li>
            <li><a href="#"><i data-feather="box"></i><span> Base</span></a></li>
            <li><a href="#"><i data-feather="file-text"></i><span> Forms</span></a></li>
            <li><a href="#"><i data-feather="server"></i><span> Tables</span></a></li>
          </ul>
          <div class="onhover-dropdown navs-dropdown">
            <button class="btn btn-primary onhover-dropdown">Dropdown example <i class="icon-arrow-down"></i></button>
            <div class="onhover-show-div">
              <ul class="icon-lists navs-icon">
                <li><a href="#"><i data-feather="home"></i><span> Dashboard</span></a></li>
                <li><a href="#"><i data-feather="airplay"></i><span> Widgets</span></a></li>
                <li><a href="#"><i data-feather="box"></i><span> Base</span></a></li>
                <li><a href="#"><i data-feather="file-text"></i><span> Forms</span></a></li>
                <li><a href="#"><i data-feather="server"></i><span> Tables</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Item Bullets</h5>
        </div>
        <div class="card-body">
          <div class="border nav-list">
            <ul class="nav-list-disc">
              <li><a href="#"><i class="fa fa-angle-right"></i><span> Dashboard</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i><span> Widgets</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i><span> Base</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i><span> Forms</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i><span> Tables</span></a></li>
            </ul>
          </div>
          <div class="onhover-dropdown navs-dropdown">
            <button class="btn btn-primary onhover-dropdown">Dropdown example <i class="icon-arrow-down"></i></button>
            <div class="onhover-show-div">
              <div class="nav-list">
                <ul class="nav-list-disc">
                  <li><a href="#"><i class="fa fa-angle-right"></i><span> Dashboard</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i><span> Widgets</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i><span> Base</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i><span> Forms</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i><span> Tables</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card height-equal">
        <div class="card-header">
          <h5>Section and Separator</h5>
        </div>
        <div class="card-body">
          <ul class="icon-lists border navs-icon">
            <li>
              <h5 class="mb-0">General</h5>
            </li>
            <li><a href="#"><i data-feather="home"></i><span> Dashboard</span></a></li>
            <li class="pb-0"><a href="#"><i data-feather="airplay"></i><span> Widgets</span></a></li>
            <li class="main-section">
              <h5 class="mb-0">Layout</h5>
            </li>
            <li><a href="#"><i data-feather="sidebar"></i><span> Sidebar</span></a></li>
            <li><a href="#"><i data-feather="layout"></i><span> Page Layout</span></a></li>
            <li class="pb-0"><a href="#"><i data-feather="cloud-lightning"></i><span> Footers</span></a></li>
            <li class="separator"></li>
            <li class="pt-0">
              <button class="btn btn-pill btn-outline-primary">Log Out</button>
            </li>
          </ul>
          <div class="onhover-dropdown navs-dropdown">
            <button class="btn btn-primary onhover-dropdown">Dropdown example <i class="icon-arrow-down"></i></button>
            <div class="onhover-show-div">
              <ul class="icon-lists navs-icon">
                <li>
                  <h5 class="mb-0">General</h5>
                </li>
                <li><a href="#"><i data-feather="home"></i><span> Dashboard</span></a></li>
                <li><a href="#"><i data-feather="airplay"></i><span> Widgets</span></a></li>
                <li class="main-section">
                  <h5 class="mb-0">Layout</h5>
                </li>
                <li><a href="#"><i data-feather="sidebar"></i><span> Sidebar</span></a></li>
                <li><a href="#"><i data-feather="layout"></i><span> Page Layout</span></a></li>
                <li class="pb-0"><a href="#"><i data-feather="cloud-lightning"></i><span> Footers</span></a></li>
                <li class="separator"></li>
                <li class="pt-0">
                  <button class="btn btn-pill btn-outline-primary">Log Out</button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card height-equal">
        <div class="card-header">
          <h5>Active and Disabled Links</h5>
        </div>
        <div class="card-body">
          <ul class="icon-lists border navs-icon">
            <li><a class="active" href="#"><i data-feather="home"></i><span> Dashboard</span></a></li>
            <li><a href="#"><i data-feather="airplay"></i><span> Widgets</span></a></li>
            <li><a class="disabled" href="#"><i data-feather="box"></i><span> Base</span></a></li>
            <li><a href="#"><i data-feather="file-text"></i><span> Forms</span></a></li>
            <li><a href="#"><i data-feather="server"></i><span> Tables</span></a></li>
            <li><a href="#"><i data-feather="credit-card"></i><span> Cards</span></a></li>
            <li><a class="disabled" href="#"><i data-feather="sliders"></i><span> Timeline</span></a></li>
            <li><a href="#"><i data-feather="bar-chart"></i><span> Charts</span></a></li>
            <li><a href="#"><i data-feather="map"></i><span> Maps</span></a></li>
            <li><a href="#"><i data-feather="git-pull-request"></i><span> Editors</span></a></li>
          </ul>
          <div class="onhover-dropdown navs-dropdown">
            <button class="btn btn-primary onhover-dropdown">Dropdown example <i class="icon-arrow-down"></i></button>
            <div class="onhover-show-div">
              <ul class="icon-lists navs-icon">
                <li><a class="active" href="#"><i data-feather="home"></i><span> Dashboard</span></a></li>
                <li><a href="#"><i data-feather="airplay"></i><span> Widgets</span></a></li>
                <li><a class="disabled" href="#"><i data-feather="box"></i><span> Base</span></a></li>
                <li><a href="#"><i data-feather="file-text"></i><span> Forms</span></a></li>
                <li><a href="#"><i data-feather="server"></i><span> Tables</span></a></li>
                <li><a href="#"><i data-feather="credit-card"></i><span> Cards</span></a></li>
                <li><a class="disabled" href="#"><i data-feather="sliders"></i><span> Timeline</span></a></li>
                <li><a href="#"><i data-feather="bar-chart"></i><span> Charts</span></a></li>
                <li><a href="#"><i data-feather="map"></i><span> Maps</span></a></li>
                <li><a href="#"><i data-feather="git-pull-request"></i><span> Editors</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 xl-40 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h5>Inline Nav</h5>
        </div>
        <div class="card-body">
          <ul class="icon-lists border navs-icon inline-nav">
            <li><a href="#"><i data-feather="box"></i><span> Base</span></a></li>
            <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i><span> State Color</span></a></li>
            <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i><span> Typography</span></a></li>
            <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i><span> Grid</span></a></li>
            <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i><span> Tags & Pills</span></a></li>
            <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i><span> Progress</span></a></li>
            <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i><span> Modal</span></a></li>
            <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i><span> Alert</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xl-6 xl-60 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h5>Sub Nav</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div>
                <h5>Static Sub Nav</h5>
              </div>
              <ul class="icon-lists border navs-icon">
                <li><a href="#"><i data-feather="box"></i><span> Base</span></a></li>
                <li><a href="#"><i data-feather="folder-plus"></i><span> Advance</span></a>
                  <ul>
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Scrollable</a></li>
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Tree View</a></li>
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Rating</a></li>
                  </ul>
                </li>
                <li><a href="#"><i data-feather="file-text"></i><span> Forms</span></a></li>
                <li><a href="#"><i data-feather="server"></i><span> Tables</span></a></li>
              </ul>
            </div>
            <div class="col-lg-6 nav-md-mt">
              <div>
                <h5>Toggle Sub Nav</h5>
              </div>
              <ul class="icon-lists border navs-icon default-according style-1" id="accordionoc">
                <li><a href="#"><i data-feather="box"></i><span> Base</span></a></li>
                <li>
                  <button class="btn btn-link text-muted active" data-toggle="collapse" data-target="#collapseicon" aria-expanded="true"><i data-feather="folder-plus"></i><span> Advance</span></button>
                  <ul class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-parent="#accordionoc">
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Scrollable</a></li>
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Tree View</a></li>
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Rating</a></li>
                  </ul>
                </li>
                <li><a href="#"><i data-feather="file-text"></i><span> Forms</span></a></li>
                <li>
                  <button class="btn btn-link text-muted collapsed pb-0" data-toggle="collapse" data-target="#collapseicon1" aria-expanded="false"><i data-feather="server"></i> Tables</button>
                  <ul class="collapse" id="collapseicon1" data-parent="#accordionoc">
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>New</a></li>
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Replied</a></li>
                    <li class="pl-navs-inline"><a href="#"><i class="fa fa-angle-right"></i>Panding</a></li>
                  </ul>
                </li>
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
@section('scripts')
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
@endsection