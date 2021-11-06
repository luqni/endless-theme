@extends('layouts.master')
@section('title', 'Chart Widget | Endless - Premium Admin Template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'Chart Widget')
@section('breadcrumb-items')
<li class="breadcrumb-item">Widgets</li>
<li class="breadcrumb-item active">Chart Widget</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <!-- Chart widget top Start-->
  <div class="row">
    <div class="col-xl-4 col-md-12">
      <div class="card">
        <div class="chart-widget-top">
          <div class="row card-body">
            <div class="col-5">
              <h5 class="font-primary">SALE</h5><span class="num"><span class="counter">90</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
            </div>
            <div class="col-7 text-right">
              <h4 class="num total-value">$ <span class="counter">3654</span>.00</h4>
            </div>
          </div>
          <div>
            <div class="flot-chart-placeholder" id="chart-widget-top-first"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-12">
      <div class="card">
        <div class="chart-widget-top">
          <div class="row card-body">
            <div class="col-7">
              <h5 class="font-primary">PROJECTS</h5><span class="num"><span class="counter">30</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
            </div>
            <div class="col-5 text-right">
              <h4 class="num total-value counter">12569</h4>
            </div>
          </div>
          <div>
            <div class="flot-chart-placeholder" id="chart-widget-top-second"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-12">
      <div class="card">
        <div class="chart-widget-top">
          <div class="row card-body">
            <div class="col-8">
              <h5 class="font-primary">PRODUCTS</h5><span class="num"><span class="counter">68</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
            </div>
            <div class="col-4 text-right">
              <h4 class="num total-value"><span class="counter">93</span>M</h4>
            </div>
          </div>
          <div>
            <div class="flot-chart-placeholder" id="chart-widget-top-third"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Chart widget top Ends-->
  <!-- Chart widget with bar chart Start-->
  <div class="row">
    <div class="col-xl-6 col-md-12 set-col-12">
      <div class="card o-hidden">
        <div class="bar-chart-widget">
          <div class="top-content bg-primary">
            <div class="row">
              <div class="col-7">
                <div class="bar-chart card-body pb-0" id="chart-bar-widget-first"></div>
              </div>
              <div class="col-5">
                <div class="earning-details">
                  <div class="text-left"><span>Marketing Expenses</span>
                    <h4 class="mt-1 num mb-0">$ <span class="counter">3654</span></h4>
                  </div><i class="icon-announcement"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-content card-body">
            <div class="row">
              <div class="col-4 b-r-light">
                <div><span class="num font-primary">12%<i class="icon-angle-up f-12 ml-1"></i></span><span class="text-muted mt-2 mb-2 block-bottom">Marketing</span>
                  <h4 class="num m-0">$<span class="counter color-bottom">9313</span></h4>
                </div>
              </div>
              <div class="col-4 b-r-light">
                <div><span class="num font-primary">15%<i class="icon-angle-up f-12 ml-1"></i></span><span class="text-muted mt-2 mb-2 block-bottom">Affiliate</span>
                  <h4 class="num m-0">$<span class="counter color-bottom">2314</span></h4>
                </div>
              </div>
              <div class="col-4">
                <div><span class="num font-primary">34%<i class="icon-angle-up f-12 ml-1"></i></span><span class="text-muted mt-2 mb-2 block-bottom">Advertise</span>
                  <h4 class="num m-0">$<span class="counter color-bottom"> 4219</span></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 set-col-12">
      <div class="card o-hidden">
        <div class="bar-chart-widget">
          <div class="top-content bg-primary">
            <div class="row">
              <div class="col-7">
                <div class="bar-chart card-body pb-0" id="chart-bar-widget-second"></div>
              </div>
              <div class="col-5">
                <div class="earning-details">
                  <div class="text-left"><span>Total Earning</span>
                    <h4 class="mt-1 num mb-0"><span class="counter">3653</span> M</h4>
                  </div><i class="icofont icofont-coins"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-content card-body">
            <div class="row">
              <div class="col-4 b-r-light">
                <div><span class="num font-primary">12%<i class="icon-angle-up f-12 ml-1"></i></span><span class="text-muted mt-2 mb-2 block-bottom">Year</span>
                  <h4 class="num m-0"><span class="counter color-bottom">3659</span>M</h4>
                </div>
              </div>
              <div class="col-4 b-r-light">
                <div><span class="num font-primary">15%<i class="icon-angle-up f-12 ml-1"></i></span><span class="text-muted mt-2 mb-2 block-bottom">Month</span>
                  <h4 class="num m-0"><span class="counter color-bottom">698</span>M</h4>
                </div>
              </div>
              <div class="col-4">
                <div><span class="num font-primary">34%<i class="icon-angle-up f-12 ml-1"></i></span><span class="text-muted mt-2 mb-2 block-bottom">Today</span>
                  <h4 class="num m-0"><span class="counter color-bottom">9361</span>M</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Chart widget with bar chart Ends-->
  <!-- small widgets Start-->
  <div class="row">
    <!-- Live Product chart widget Start-->
    <div class="xl-50 col-md-6">
      <div class="small-chart-widget chart-widgets-small">
        <div class="card">
          <div class="card-header">
            <h5>Live Products</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body bg-primary">
            <div class="chart-container">
              <div class="live-products"></div>
            </div>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body bg-primary"&gt;
&lt;div class="chart-container"&gt;
&lt;div class="live-products"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Live Product chart widget Ends-->
    <!-- Turnover chart widget Start-->
    <div class="xl-50 col-md-6">
      <div class="small-chart-widget chart-widgets-small">
        <div class="card">
          <div class="card-header">
            <h5>Turnover</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body bg-secondary">
            <div class="chart-container">
              <div class="turnover"></div>
            </div>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body bg-secondary"&gt;
&lt;div class="chart-container"&gt;
&lt;div class="turnover"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Turnover chart widget Ends-->
    <!-- Monthly Sale chart widget Start-->
    <div class="xl-50 col-md-6">
      <div class="small-chart-widget chart-widgets-small">
        <div class="card">
          <div class="card-header">
            <h5>Monthly Sales</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body bg-secondary">
            <div class="chart-container">
              <div class="monthly"></div>
            </div>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body bg-secondary"&gt;
&lt;div class="chart-container"&gt;
&lt;div class="monthly"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Monthly Sale chart widget Ends-->
    <!-- Uses chart widget Start-->
    <div class="xl-50 col-md-6">
      <div class="small-chart-widget chart-widgets-small">
        <div class="card">
          <div class="card-header">
            <h5>Uses</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body bg-primary">
            <div class="chart-container">
              <div class="uses"></div>
            </div>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body bg-primary"&gt;
&lt;div class="chart-container"&gt;
&lt;div class="uses"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Uses chart widget Ends-->
  </div>
  <!-- small widgets Ends-->
  <!-- status widget Start-->
  <div class="row">
    <div class="col-xl-4 col-lg-12">
      <div class="status-widget">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Finance </h5>
              </div>
              <div class="col-3 text-sm-right"><i class="text-muted" data-feather="navigation"></i></div>
            </div>
          </div>
          <div class="card-body">
            <div class="status-details">
              <div class="row">
                <div class="col-6 text-center"><span>Investor</span>
                  <h4 class="counter mb-0">3659</h4>
                </div>
                <div class="col-6 text-center"><span>Earning</span>
                  <h4 class="mb-0"><span class="counter">86</span>%</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="status-chart bg-primary">
            <div class="chart-container">
              <div class="flot-chart-placeholder" id="finance-graph"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12">
      <div class="status-widget">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Order Status</h5>
              </div>
              <div class="col-3 text-sm-right"><i class="text-muted" data-feather="shopping-bag"></i></div>
            </div>
          </div>
          <div class="card-body">
            <div class="status-details">
              <div class="row">
                <div class="col-6 text-center"><span>Complete</span>
                  <h4 class="mb-0"><span class="counter">62</span>%</h4>
                </div>
                <div class="col-6 text-center"><span>Cancle</span>
                  <h4 class="mb-0"><span class="counter">20</span>%</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="status-chart bg-secondary">
            <div class="chart-container">
              <div class="flot-chart-placeholder" id="order-graph"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12">
      <div class="status-widget">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Skill Status</h5>
              </div>
              <div class="col-3 text-sm-right"><i class="text-muted" data-feather="trending-up"></i></div>
            </div>
          </div>
          <div class="card-body">
            <div class="status-details">
              <div class="row">
                <div class="col-6 text-center"><span>Design</span>
                  <h4 class="mb-0"><span class="counter">25</span>%</h4>
                </div>
                <div class="col-6 text-center"><span>Market</span>
                  <h4 class="mb-0"><span class="counter">40</span>%</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="status-chart bg-primary">
            <div class="chart-container">
              <div class="flot-chart-placeholder" id="skill-graph"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- status widget Ends-->
  <!-- Browser uses and website visiter widget Start-->
  <div class="row">
    <!-- browser uses widget chart Start-->
    <div class="col-sm-6">
      <div class="donut-chart-widget">
        <div class="card">
          <div class="card-header">
            <h5>Browser Uses</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <div class="flot-chart-placeholder" id="browser-uses-chart"></div>
            </div>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
&lt;div id="#browser-uses-chart" class="flot-chart-placeholder"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- browser uses widget chart Ends-->
    <!-- Website visiter widget Start-->
    <div class="col-sm-6">
      <div class="donut-chart-widget">
        <div class="card">
          <div class="card-header">
            <h5>Website Visiter</h5>
            <div class="card-header-right">
              <ul class="list-unstyled card-option">
                <li><i class="icofont icofont-simple-left"></i></li>
                <li><i class="view-html fa fa-code"></i></li>
                <li><i class="icofont icofont-maximize full-card"></i></li>
                <li><i class="icofont icofont-minus minimize-card"></i></li>
                <li><i class="icofont icofont-refresh reload-card"></i></li>
                <li><i class="icofont icofont-error close-card"></i></li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <div class="flot-chart-placeholder" id="website-visiter-chart"></div>
            </div>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
              <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
&lt;div id="#website-visiter-chart" class="flot-chart-placeholder"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
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
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/raphael.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/morris.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/prettify.min.js')}}"></script>
<script src="{{asset('assets/js/chart/sparkline/sparkline.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/chart-widget.js')}}"></script>

@endsection