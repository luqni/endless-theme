@extends('layouts.master')
@section('title', 'Popover | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Popover')
@section('breadcrumb-items')
<li class="breadcrumb-item">Base</li>
<li class="breadcrumb-item active">Popover</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row popover-main">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Basic Examples</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary example-popover" type="button" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button><a class="example-popover btn btn-primary" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
          <button class="example-popover btn btn-primary" type="button" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="bottom" title="Popover title" data-offset="-20px -20px" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On Hover Tooltip</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Direction</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
        <div class="card-body btn-showcase">
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="top" title="Popover title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button>
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>HTML Content</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
        <div class="card-body btn-showcase">
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="top" title="Popover title" data-html="true" data-content="Just add &lt;code&gt;data-html='true'&lt;/code&gt; attribute and you can purse &lt;b&gt;html&lt;/b&gt; code">Popover HTML on top</button>
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-content="Just add &lt;code&gt;data-html='true'&lt;/code&gt; attribute and you can purse &lt;b&gt;html&lt;/b&gt; code">Popover HTML on right</button>
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Just add &lt;code&gt;data-html='true'&lt;/code&gt; attribute and you can purse &lt;b&gt;html&lt;/b&gt; code.">Popover HTML on bottom</button>
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="left" data-html="true" data-content="Just add &lt;code&gt;data-html='true'&lt;/code&gt; attribute and you can purse &lt;b&gt;html&lt;/b&gt; code.">Popover HTML on left</button>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Offset to Tooltip</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
        <div class="card-body btn-showcase">
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="top" title="Popover title" data-offset="20px 20px" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">20px 20px</button>
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="top" title="Popover title" data-offset="0px" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">0px</button>
          <button class="example-popover btn btn-primary" type="button" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="top" title="Popover title" data-offset="20px 20px" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">20px 20px On Hover</button>
          <button class="example-popover btn btn-primary" type="button" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="top" title="Popover title" data-offset="0px" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">0px On Hover</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('script')
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/popover-custom.js')}}"></script>

@endsection