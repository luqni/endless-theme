@extends('layouts.master')
@section('title', 'Draggable Card | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Draggable Card')
@section('breadcrumb-items')
<li class="breadcrumb-item">Cards</li>
<li class="breadcrumb-item active">Draggable Card</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row ui-sortable" id="draggableMultiple">
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Basic Card</h5>
        </div>
        <div class="card-body">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card b-r-0">
        <div class="card-header">
          <h5>Flat Card</h5>
        </div>
        <div class="card-body">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card shadow-0 border">
        <div class="card-header">
          <h5>Without shadow Card</h5>
        </div>
        <div class="card-body">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5><i class="icon-move mr-2"></i> Icon in Heading</h5>
        </div>
        <div class="card-body">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Card sub Title</h5><span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
        </div>
        <div class="card-body">
          <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Card sub Title</h5><span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
        </div>
        <div class="card-body">
          <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('script')
<script src="{{asset('assets/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('assets/js/dragable/sortable.js')}}"></script>
<script src="{{asset('assets/js/dragable/sortable-custom.js')}}"></script>

@endsection
