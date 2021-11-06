@extends('layouts.master')
@section('title', 'E-commerce | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'E-commerce')
@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">E-commerce</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-7 xl-100">
      <div class="row">
        <div class="owl-carousel owl-theme" id="owl-carousel-14">
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="dollar-sign"></i>
                <div><span>Total Earning</span></div>
                <h4 class="font-primary mb-0 counter">72</h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="map-pin"></i>
                <div><span>Total Web Visitor</span></div>
                <h4 class="font-primary mb-0 counter">65</h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="shopping-cart"></i>
                <div><span>Total Sale Product</span></div>
                <h4 class="font-primary mb-0 counter">96</h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="trending-down"></i>
                <div><span>Company Loss</span></div>
                <h4 class="font-primary mb-0 counter">89</h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="dollar-sign"></i>
                <div><span>Total Earning</span></div>
                <h4 class="font-primary mb-0 counter">72</h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="map-pin"></i>
                <div><span>Total Web Visitor</span></div>
                <h4 class="font-primary mb-0 counter">65</h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="shopping-cart"></i>
                <div><span>Total Sale Product</span></div>
                <h4 class="font-primary mb-0 counter">96</h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body ecommerce-icons text-center"><i data-feather="trending-down"></i>
                <div><span>Company Loss</span></div>
                <h4 class="font-primary mb-0 counter">89</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Total Sale</h5>
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
            <div class="card-body charts-box">
              <div class="flot-chart-container">
                <div class="flot-chart-placeholder" id="graph123"></div>
              </div>
              <div class="code-box-copy">
                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body charts-box"&gt;
&lt;div class="flot-chart-container"&gt;
&lt;div id="graph123" class="flot-chart-placeholder"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-5 xl-100">
      <div class="card">
        <div class="card-header">
          <h5>Best Sellers</h5>
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
          <div class="table-responsive sellers">
            <table class="table table-bordernone">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Sale</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Categories</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/6.jpg')}}" alt="">
                      <div class="d-inline-block">
                        <p>Alana Slacker</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>8956</p>
                  </td>
                  <td>
                    <p>54</p>
                  </td>
                  <td>
                    <p>Product No: 1</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/2.png')}}" alt="">
                      <div class="d-inline-block">
                        <p>Alana Slacker</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>8956</p>
                  </td>
                  <td>
                    <p>54</p>
                  </td>
                  <td>
                    <p>Product No: 1</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="">
                      <div class="d-inline-block">
                        <p>Alana Slacker</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>8956</p>
                  </td>
                  <td>
                    <p>54</p>
                  </td>
                  <td>
                    <p>Product No: 1</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                      <div class="d-inline-block">
                        <p>Alana Slacker</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>8956</p>
                  </td>
                  <td>
                    <p>54</p>
                  </td>
                  <td>
                    <p>Product No: 1</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="">
                      <div class="d-inline-block">
                        <p>Alana Slacker</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>8956</p>
                  </td>
                  <td>
                    <p>54</p>
                  </td>
                  <td>
                    <p>Product No: 1</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/15.png')}}" alt="">
                      <div class="d-inline-block">
                        <p>Alana Slacker</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>8956</p>
                  </td>
                  <td>
                    <p>54</p>
                  </td>
                  <td>
                    <p>Product No: 1</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive sellers"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Name&lt;/th&gt;
&lt;th scope="col"&gt;Sale&lt;/th&gt;
&lt;th scope="col"&gt;Stock&lt;/th&gt;
&lt;th scope="col"&gt;Categories&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/6.jpg')}}" class="img-radius img-30 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alana Slacker&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;8956&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;54&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Product No: 1&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/2.png')}}" class="img-radius img-30 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alana Slacker&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;8956&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;54&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Product No: 1&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/3.jpg')}}" class="img-radius img-30 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alana Slacker&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;8956&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;54&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Product No: 1&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/4.jpg')}}" class="img-radius img-30 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alana Slacker&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;8956&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;54&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Product No: 1&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-radius img-30 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alana Slacker&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;8956&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;54&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Product No: 1&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/15.png')}}" class="img-radius img-30 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alana Slacker&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;8956&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;54&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Product No: 1&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="number-widgets">
            <div class="media">
              <div class="media-body align-self-center">
                <h6 class="mb-0">Payment Status</h6>
              </div>
              <div class="radial-bar radial-bar-95 radial-bar-primary" data-label="95%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="number-widgets">
            <div class="media">
              <div class="media-body align-self-center">
                <h6 class="mb-0">Work Process</h6>
              </div>
              <div class="radial-bar radial-bar-75 radial-bar-primary" data-label="75%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="number-widgets">
            <div class="media">
              <div class="media-body align-self-center">
                <h6 class="mb-0">Sale Completed</h6>
              </div>
              <div class="radial-bar radial-bar-90 radial-bar-primary" data-label="90%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="number-widgets">
            <div class="media">
              <div class="media-body align-self-center">
                <h6 class="mb-0">Payment Done</h6>
              </div>
              <div class="radial-bar radial-bar-80 radial-bar-primary" data-label="80%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Total Income</h5>
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
        <div class="card-body chart-block">
          <canvas id="myLineCharts"></canvas>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body chart-block"&gt;
&lt;canvas id="myLineCharts"&gt;&lt;/canvas&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Total Profit</h5>
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
        <div class="card-body chart-block">
          <canvas id="profitchart"></canvas>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body chart-block"&gt;
&lt;canvas id="profitchart"&gt;&lt;/canvas&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Profile Status</h5>
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
        <div class="card-body height-equal">
          <div class="progress-block">
            <div class="progress-title"><span>Basic Information</span><span class="pull-right">15/18</span></div>
            <div class="progress" style="height: 3px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress-block">
            <div class="progress-title"><span>Portfolio</span><span class="pull-right">5/6</span></div>
            <div class="progress" style="height: 3px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress-block">
            <div class="progress-title"><span>Legal Document</span><span class="pull-right">12/20</span></div>
            <div class="progress" style="height: 3px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress-block">
            <div class="progress-title"><span>Interest</span><span class="pull-right">5/10</span></div>
            <div class="progress" style="height: 3px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress-block">
            <div class="progress-title"><span>Product Info</span><span class="pull-right">15/17</span></div>
            <div class="progress" style="height: 3px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress-block mb-0">
            <div class="progress-title"><span>Billing Details</span><span class="pull-right">2/5</span></div>
            <div class="progress" style="height: 3px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="progress-block"&gt;
&lt;div class="progress-title"&gt;
&lt;span&gt;Basic Information&lt;/span&gt;
&lt;span class="pull-right"&gt;15/18&lt;/span&gt;
&lt;/div&gt;
&lt;div class="progress" style="height: 3px;"&gt;
&lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-block"&gt;
&lt;div class="progress-title"&gt;
&lt;span&gt;Portfolio&lt;/span&gt;
&lt;span class="pull-right"&gt;5/6&lt;/span&gt;
&lt;/div&gt;
&lt;div class="progress" style="height: 3px;"&gt;
&lt;div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-block"&gt;
&lt;div class="progress-title"&gt;
&lt;span&gt;Legal Document&lt;/span&gt;
&lt;span class="pull-right"&gt;12/20&lt;/span&gt;
&lt;/div&gt;
&lt;div class="progress" style="height: 3px;"&gt;
&lt;div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-block"&gt;
&lt;div class="progress-title"&gt;
&lt;span&gt;Interest&lt;/span&gt;
&lt;span class="pull-right"&gt;5/10&lt;/span&gt;
&lt;/div&gt;
&lt;div class="progress" style="height: 3px;"&gt;
&lt;div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-block"&gt;
&lt;div class="progress-title"&gt;
&lt;span&gt;Product Info&lt;/span&gt;
&lt;span class="pull-right"&gt;15/17&lt;/span&gt;
&lt;/div&gt;
&lt;div class="progress" style="height: 3px;"&gt;
&lt;div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-block mb-0"&gt;
&lt;div class="progress-title"&gt;
&lt;span&gt;Billing Details&lt;/span&gt;
&lt;span class="pull-right"&gt;2/5&lt;/span&gt;
&lt;/div&gt;
&lt;div class="progress" style="height: 3px;"&gt;
&lt;div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Logs</h5>
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
        <div class="card-body height-equal log-content">
          <div class="logs-element">
            <div class="circle-double-odd"></div><span>New User Registration</span><span class="pull-right">14:12</span>
          </div>
          <div class="logs-element">
            <div class="circle-double-even"></div><span>New sale: souffle.</span><span class="pull-right">19:00</span>
          </div>
          <div class="logs-element">
            <div class="circle-double-odd"></div><span>14 products added.</span><span class="pull-right">05:22</span>
          </div>
          <div class="logs-element">
            <div class="circle-double-even"></div><span>New sale: Napole.</span><span class="pull-right">08:45</span>
          </div>
          <div class="logs-element">
            <div class="circle-double-odd"></div><span>New User Registration</span><span class="pull-right">06:51</span>
          </div>
          <div class="logs-element">
            <div class="circle-double-even"></div><span>New User Registration</span><span class="pull-right">09:42</span>
          </div>
          <div class="logs-element">
            <div class="circle-double-odd"></div><span>New User Registration</span><span class="pull-right">10:45</span>
          </div>
          <div class="logs-element mb-0">
            <div class="circle-double-even"></div><span>New User Registration</span><span class="pull-right">02:05</span>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body height-equal log-content"&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-odd"&gt;&lt;/div&gt;
&lt;span&gt;New User Registration&lt;/span&gt;
&lt;span class="pull-right"&gt;14:12&lt;/span&gt;
&lt;/div&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-even"&gt;&lt;/div&gt;
&lt;span&gt;New sale: souffle.&lt;/span&gt;
&lt;span class="pull-right"&gt;19:00&lt;/span&gt;
&lt;/div&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-odd"&gt;&lt;/div&gt;
&lt;span&gt;14 products added.&lt;/span&gt;4
&lt;span class="pull-right"&gt;05:22&lt;/span&gt;
&lt;/div&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-even"&gt;&lt;/div&gt;
&lt;span&gt;New sale: Napole.&lt;/span&gt;
&lt;span class="pull-right"&gt;08:45&lt;/span&gt;
&lt;/div&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-odd"&gt;&lt;/div&gt;
&lt;span&gt;New User Registration&lt;/span&gt;
&lt;span class="pull-right"&gt;06:51&lt;/span&gt;
&lt;/div&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-even"&gt;&lt;/div&gt;
&lt;span&gt;New User Registration&lt;/span&gt;
&lt;span class="pull-right"&gt;09:42&lt;/span&gt;
&lt;/div&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-odd"&gt;&lt;/div&gt;
&lt;span&gt;New User Registration&lt;/span&gt;
&lt;span class="pull-right"&gt;10:45&lt;/span&gt;
&lt;/div&gt;
&lt;div class="logs-element"&gt;
&lt;div class="circle-double-even"&gt;&lt;/div&gt;
&lt;span&gt;New User Registration&lt;/span&gt;
&lt;span class="pull-right"&gt;02:05&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-100">
      <div class="card">
        <div class="card-header">
          <h5>statics</h5>
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
        <div class="card-body updating-chart height-equal">
          <div class="upadates text-center">
            <h2 class="font-primary"><i data-feather="dollar-sign"></i><span class="counter"> 89.68 </span><i data-feather="arrow-up"></i></h2>
            <p>Week2 +<span class="counter">15.44</span></p>
          </div>
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="updating-data-morris-chart"></div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body updating-chart height-equal"&gt;
&lt;div class="upadates text-center"&gt;
&lt;h2 class="font-primary"&gt;&lt;i data-feather="dollar-sign"&gt;&lt;/i&gt;&lt;span class="counter"&gt; 89.68 &lt;/span&gt;&lt;i data-feather="arrow-up"&gt;&lt;/i&gt;&lt;/h2&gt;
&lt;p&gt;Week2 +&lt;span class="counter"&gt;15.44&lt;/span&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;div class="flot-chart-container"&gt;
&lt;div id="updating-data-morris-chart" class="flot-chart-placeholder"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 xl-100">
      <div class="card">
        <div class="card-header">
          <h5>Shopping Cart</h5>
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
          <div class="table-responsive shopping-table text-center">
            <table class="table table-bordernone">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Status</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Computer</td>
                  <td>5</td>
                  <td>
                    <button class="btn btn-primary btn-pill">Active</button>
                  </td>
                  <td>15000</td>
                  <td><i data-feather="x"></i></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Headphone</td>
                  <td>8</td>
                  <td>
                    <button class="btn btn-primary btn-pill">Disable</button>
                  </td>
                  <td>8000</td>
                  <td><i data-feather="x"></i></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Furniture</td>
                  <td>3</td>
                  <td>
                    <button class="btn btn-primary btn-pill">Paused</button>
                  </td>
                  <td>12000</td>
                  <td><i data-feather="x"></i></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>shoes</td>
                  <td>9</td>
                  <td>
                    <button class="btn btn-primary btn-pill">On Way</button>
                  </td>
                  <td>5500</td>
                  <td><i data-feather="x"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head7">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive shopping-table text-center"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;No&lt;/th&gt;
&lt;th scope="col"&gt;Product&lt;/th&gt;
&lt;th scope="col"&gt;Quantity&lt;/th&gt;
&lt;th scope="col"&gt;Status&lt;/th&gt;
&lt;th scope="col"&gt;Amount&lt;/th&gt;
&lt;th scope="col"&gt;Delete&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;1&lt;/td&gt;
&lt;td&gt;Computer&lt;/td&gt;
&lt;td&gt;5&lt;/td&gt;
&lt;td&gt;&lt;button class="btn btn-primary btn-pill"&gt;Active&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;15000&lt;/td&gt;
&lt;td&gt;&lt;i data-feather="x"&gt;&lt;/i&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;2&lt;/td&gt;
&lt;td&gt;Headphone&lt;/td&gt;
&lt;td&gt;8&lt;/td&gt;
&lt;td&gt;&lt;button class="btn btn-primary btn-pill"&gt;Disable&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;8000&lt;/td&gt;
&lt;td&gt;&lt;i data-feather="x"&gt;&lt;/i&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;3&lt;/td&gt;
&lt;td&gt;Furniture&lt;/td&gt;
&lt;td&gt;3&lt;/td&gt;
&lt;td&gt;&lt;button class="btn btn-primary btn-pill"&gt;Paused&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;12000&lt;/td&gt;
&lt;td&gt;&lt;i data-feather="x"&gt;&lt;/i&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;4&lt;/td&gt;
&lt;td&gt;shoes&lt;/td&gt;
&lt;td&gt;9&lt;/td&gt;
&lt;td&gt;&lt;button class="btn btn-primary btn-pill"&gt;On Way&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;5500&lt;/td&gt;
&lt;td&gt;&lt;i data-feather="x"&gt;&lt;/i&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-100">
      <div class="card">
        <div class="card-header">
          <h5>Review</h5>
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
          <div class="text-center ecommerce-knob">
            <input class="knob" data-width="294" data-height="294" data-angleoffset="180" data-fgcolor="#4466f2" data-skin="tron" data-thickness=".1" value="35">
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head8">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="text-center ecommerce-knob"&gt;
&lt;input class="knob" data-width="294" data-height="294" data-angleOffset="180" data-fgColor="#4466f2" data-skin="tron" data-thickness=".1" value="35"&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <h5>Customer Support</h5>
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
          <div class="support-table table-responsive custom-scrollbar">
            <table class="table table-bordernone">
              <tbody>
                <tr>
                  <td>
                    <div class="circle-rounded">
                      <h6>A</h6>
                    </div>
                  </td>
                  <td>
                    <h6 class="f-w-600">Edverd Jonshan<small>15 Sep 2018</small></h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i class="fa fa-square font-primary"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Priority</h6>
                      <ul class="status-dropdown onhover-show-div">
                        <li><a href="#"><i class="fa fa-square mr-2 font-success"></i>Low</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-secondary"></i>Medium</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-warning"></i>High</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-danger"></i>Urgent</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i data-feather="user"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Assigned To</h6>
                      <ul class="assign-dropdown onhover-show-div">
                        <li>
                          <div class="form">
                            <div class="form-group mb-0">
                              <input class="form-control" type="text" placeholder="serach.."><i class="fa fa-search"></i>
                            </div>
                          </div>
                        </li>
                        <li><a href="#">Alana Slacker</a></li>
                        <li><a href="#">Nick Stone</a></li>
                        <li><a href="#">Anna Strong</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i data-feather="activity"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Status</h6>
                      <ul class="status-dropdown onhover-show-div">
                        <li><a href="#">Open</a></li>
                        <li><a href="#">Pending</a></li>
                        <li><a href="#">Resolved</a></li>
                        <li><a href="#">Close</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="circle-rounded">
                      <h6>A</h6>
                    </div>
                  </td>
                  <td>
                    <h6 class="f-w-600">Edverd Jonshan<small>15 Sep 2018</small></h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i class="fa fa-square font-primary"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Priority</h6>
                      <ul class="status-dropdown onhover-show-div">
                        <li><a href="#"><i class="fa fa-square mr-2 font-success"></i>Low</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-secondary"></i>Medium</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-warning"></i>High</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-danger"></i>Urgent</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i data-feather="user"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Assigned To</h6>
                      <ul class="assign-dropdown onhover-show-div">
                        <li>
                          <div class="form">
                            <div class="form-group mb-0">
                              <input class="form-control" type="text" placeholder="serach.."><i class="fa fa-search"></i>
                            </div>
                          </div>
                        </li>
                        <li><a href="#">Alana Slacker</a></li>
                        <li><a href="#">Nick Stone</a></li>
                        <li><a href="#">Anna Strong  </a></li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i data-feather="activity"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Status</h6>
                      <ul class="status-dropdown onhover-show-div">
                        <li><a href="#">Open</a></li>
                        <li><a href="#">Pending</a></li>
                        <li><a href="#">Resolved</a></li>
                        <li><a href="#">Close</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="circle-rounded">
                      <h6>A</h6>
                    </div>
                  </td>
                  <td>
                    <h6 class="f-w-600">Edverd Jonshan<small>15 Sep 2018</small></h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i class="fa fa-square font-primary"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Priority</h6>
                      <ul class="status-dropdown onhover-show-div">
                        <li><a href="#"><i class="fa fa-square mr-2 font-success"></i>Low</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-secondary"></i>Medium</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-warning"></i>High</a></li>
                        <li><a href="#"><i class="fa fa-square mr-2 font-danger"></i>Urgent</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i data-feather="user"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Assigned To</h6>
                      <ul class="assign-dropdown onhover-show-div">
                        <li>
                          <div class="form">
                            <div class="form-group mb-0">
                              <input class="form-control" type="text" placeholder="serach.."><i class="fa fa-search"></i>
                            </div>
                          </div>
                        </li>
                        <li><a href="#">Alana Slacker</a></li>
                        <li><a href="#">Nick Stone</a></li>
                        <li><a href="#">Anna Strong</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <div class="onhover-dropdown"><i data-feather="activity"></i>
                      <h6 class="f-w-600 mb-0 d-inline-block">Status</h6>
                      <ul class="status-dropdown onhover-show-div">
                        <li><a href="#">Open</a></li>
                        <li><a href="#">Pending</a></li>
                        <li><a href="#">Resolved</a></li>
                        <li><a href="#">Close</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head9" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head9">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="support-table table-responsive custom-scrollbar"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="circle-rounded"&gt;
  &lt;h6&gt;A&lt;/h6&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="f-w-600"&gt;Edverd Jonshan&lt;small&gt;15 Sep 2018&lt;/small&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i class="fa fa-square font-primary"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Priority&lt;/h6&gt;
  &lt;ul class="status-dropdown onhover-show-div"&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-success"&gt;&lt;/i&gt;Low&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-secondary"&gt;&lt;/i&gt;Medium&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-warning"&gt;&lt;/i&gt;High&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-danger"&gt;&lt;/i&gt;Urgent&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i data-feather="user"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Assigned To&lt;/h6&gt;
  &lt;ul class="assign-dropdown onhover-show-div"&gt;
    &lt;li&gt;
      &lt;div class="form"&gt;
        &lt;div class="form-group mb-0"&gt;
          &lt;input class="form-control" type="text" placeholder="serach.."&gt;
          &lt;i class="fa fa-search"&gt;&lt;/i&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Alana Slacker&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Nick Stone&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Anna Strong&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i data-feather="activity"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Status&lt;/h6&gt;
  &lt;ul class="status-dropdown onhover-show-div"&gt;
    &lt;li&gt;&lt;a href="#"&gt;Open&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Pending&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Resolved&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Close&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="circle-rounded"&gt;
  &lt;h6&gt;A&lt;/h6&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="f-w-600"&gt;Edverd Jonshan&lt;small&gt;15 Sep 2018&lt;/small&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i class="fa fa-square font-primary"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Priority&lt;/h6&gt;
  &lt;ul class="status-dropdown onhover-show-div"&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-success"&gt;&lt;/i&gt;Low&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-secondary"&gt;&lt;/i&gt;Medium&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-warning"&gt;&lt;/i&gt;High&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-danger"&gt;&lt;/i&gt;Urgent&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i data-feather="user"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Assigned To&lt;/h6&gt;
  &lt;ul class="assign-dropdown onhover-show-div"&gt;
    &lt;li&gt;
      &lt;div class="form"&gt;
        &lt;div class="form-group mb-0"&gt;
          &lt;input class="form-control" type="text" placeholder="serach.."&gt;
          &lt;i class="fa fa-search"&gt;&lt;/i&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Alana Slacker&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Nick Stone&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Anna Strong  &lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i data-feather="activity"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Status&lt;/h6&gt;
  &lt;ul class="status-dropdown onhover-show-div"&gt;
    &lt;li&gt;&lt;a href="#"&gt;Open&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Pending&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Resolved&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Close&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="circle-rounded"&gt;
  &lt;h6&gt;A&lt;/h6&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="f-w-600"&gt;Edverd Jonshan&lt;small&gt;15 Sep 2018&lt;/small&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i class="fa fa-square font-primary"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Priority&lt;/h6&gt;
  &lt;ul class="status-dropdown onhover-show-div"&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-success"&gt;&lt;/i&gt;Low&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-secondary"&gt;&lt;/i&gt;Medium&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-warning"&gt;&lt;/i&gt;High&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fa fa-square mr-2 font-danger"&gt;&lt;/i&gt;Urgent&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i data-feather="user"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Assigned To&lt;/h6&gt;
  &lt;ul class="assign-dropdown onhover-show-div"&gt;
    &lt;li&gt;
      &lt;div class="form"&gt;
        &lt;div class="form-group mb-0"&gt;
          &lt;input class="form-control" type="text" placeholder="serach.."&gt;
          &lt;i class="fa fa-search"&gt;&lt;/i&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Alana Slacker&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Nick Stone&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Anna Strong&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="onhover-dropdown"&gt;
  &lt;i data-feather="activity"&gt;&lt;/i&gt;
  &lt;h6 class="f-w-600 mb-0 d-inline-block"&gt;Status&lt;/h6&gt;
  &lt;ul class="status-dropdown onhover-show-div"&gt;
    &lt;li&gt;&lt;a href="#"&gt;Open&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Pending&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Resolved&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Close&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->

@endsection
@section('scripts')
<script src="{{asset('assets/js/chart/morris-chart/raphael.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/morris.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/prettify.min.js')}}"></script>
<script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/todo/todo.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard-ecommerce/chart.custom.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard-ecommerce/morris-script.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard-ecommerce/owl-carousel.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
@endsection