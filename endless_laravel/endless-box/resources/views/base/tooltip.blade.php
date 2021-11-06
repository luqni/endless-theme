@extends('layouts.master')
@section('title', 'Tooltip | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Tooltip')
@section('breadcrumb-items')
<li class="breadcrumb-item">Base</li>
<li class="breadcrumb-item active">Tooltip</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Basic Tooltip</h5>
        </div>
        <div class="card-body btn-showcase">
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="top" title="Popover title">Hover Me</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Directions</h5>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
          <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
          <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
          <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>HTML elements</h5>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary" type="button" data-toggle="m-tooltip" data-placement="top" title="" data-html="true" data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?" data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click me</button>
          <button class="btn btn-primary" type="button" data-toggle="m-tooltip" data-placement="right" title="" data-html="true" data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?" data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click me</button>
          <button class="btn btn-primary" type="button" data-toggle="m-tooltip" data-placement="bottom" title="" data-html="true" data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?" data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click me</button>
          <button class="btn btn-primary" type="button" data-toggle="m-tooltip" data-placement="left" title="" data-html="true" data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?" data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click me</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Offset</h5>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary" type="button" data-offset="20px 20px" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Tooltip title">20px 20px</button>
          <button class="btn btn-primary" type="button" data-offset="0px -20px" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Tooltip title">0px -20px</button>
          <button class="btn btn-primary" type="button" data-offset="20px 0px" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Tooltip title">20px 0px</button>
          <button class="btn btn-primary" type="button" data-offset="-30px 0px" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Tooltip title">-30px -30px</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->

@endsection
@section('script')

@endsection