@extends('layouts.master')
@section('title', 'Crypto | Endless Admin Panel')
@section('styles')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'Crypto')
@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Crypto</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-4">
      <div class="card">
        <div class="card-body">
          <div class="media bitcoin-graph"><img src="{{asset('assets/images/bitcoin/graph-icon-1.png')}}" alt="">
            <div class="top-bitcoin">
              <h5>BTC</h5><span>Bitcoin</span>
            </div>
            <div class="media-body">
              <div class="bitcoin-content text-right">
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 1h</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-down"></i></span> 0.12</h6>
                </div>
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 24h</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-up"></i></span> +0.30</h6>
                </div>
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 7d</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-down"></i></span> -0.20</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dashboard-chart-container">
          <div class="bitcoinchart-1"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <div class="card">
        <div class="card-body">
          <div class="media bitcoin-graph"><img src="{{asset('assets/images/bitcoin/graph-icon-2.png')}}" alt="">
            <div class="top-bitcoin">
              <h5>DASH</h5><span>Tranding</span>
            </div>
            <div class="media-body">
              <div class="bitcoin-content text-right">
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 1h</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-down"></i></span> 0.12</h6>
                </div>
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 24h</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-up"></i></span> +0.30</h6>
                </div>
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 7d</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-down"></i></span> -0.20</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dashboard-chart-container">
          <div class="bitcoinchart-2"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <div class="card">
        <div class="card-body">
          <div class="media bitcoin-graph"><img src="{{asset('assets/images/bitcoin/graph-icon-3.png')}}" alt="">
            <div class="top-bitcoin">
              <h5>ETH</h5><span>Ethereum</span>
            </div>
            <div class="media-body">
              <div class="bitcoin-content text-right">
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 1h</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-down"></i></span> 0.12</h6>
                </div>
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 24h</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-up"></i></span> +0.30</h6>
                </div>
                <div class="bitcoin-numbers d-inline-block">
                  <h6 class="mb-0">% 7d</h6>
                  <h6 class="mb-0 font-primary"><span><i class="font-primary" data-feather="arrow-down"></i></span> -0.20</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dashboard-chart-container">
          <div class="bitcoinchart-3"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-100">
      <div class="card">
        <div class="card-header b-l-primary">
          <h5>Market Value</h5>
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
          <div class="market-chart"></div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="market-chart"&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50">
      <div class="card">
        <div class="card-header b-l-primary">
          <div class="row">
            <div class="col-sm-5">
              <h5 class="bitcoin-header">Buy</h5>
            </div>
            <div class="col-sm-7">
              <div class="text-right right-header-color">
                <p class="mb-0">USD Balance: $ 5000.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="bitcoin-form">
            <div class="form-row">
              <div class="col-xl-4 mb-3 col-sm-3">
                <label class="f-w-600">Parchase</label>
                <div class="bitcoin-form-dropdown">
                  <div class="onhover-dropdown">
                    <button class="btn f-12" type="button">Amount <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                    <div class="onhover-show-div"><a class="d-block" href="#">Link 1</a><a class="d-block" href="#">Link 2</a><a class="d-block" href="#">Link 3</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 mb-3 col-sm-9">
                <label class="f-w-600" for="validationCustomUsername">Units</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-btc font-primary"></i></span></div>
                  <input class="form-control" id="validationCustomUsername" type="text" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
              <div class="col-xl-4 mb-3 col-sm-3">
                <label class="f-w-600">Bid</label>
                <div class="bitcoin-form-dropdown">
                  <div class="onhover-dropdown">
                    <button class="btn f-12" type="button">Limit <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                    <div class="onhover-show-div"><a class="d-block" href="#">Link 1</a><a class="d-block" href="#">Link 2</a><a class="d-block" href="#">Link 3</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 mb-3 col-sm-9">
                <label class="f-w-600" for="validationCustomUsername">Bid</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend1"><i class="fa fa-btc font-primary"></i></span></div>
                  <input class="form-control" id="validationCustomUsername1" type="text" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label class="f-w-600" for="validationCustomUsername">Total</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-btc font-primary"></i></span></div>
                  <input class="form-control" id="validationCustomUsername2" type="text" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="btn-bottom">
                  <button class="btn btn-primary" type="button">Buy Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50">
      <div class="card">
        <div class="card-header b-l-primary">
          <div class="row">
            <div class="col-sm-5">
              <h5 class="bitcoin-header">Sell</h5>
            </div>
            <div class="col-sm-7">
              <div class="text-right right-header-color">
                <p class="mb-0">BTC Balance: $ 5000.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="bitcoin-form">
            <div class="form-row">
              <div class="col-xl-4 mb-3 col-sm-3">
                <label class="f-w-600">Sell</label>
                <div class="bitcoin-form-dropdown">
                  <div class="onhover-dropdown">
                    <button class="btn f-12" type="button">Amount  <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                    <div class="onhover-show-div"><a class="d-block" href="#">Link 1</a><a class="d-block" href="#">Link 2</a><a class="d-block" href="#">Link 3</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 mb-3 col-sm-9">
                <label class="f-w-600" for="validationCustomUsername">Units</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend3"><i class="fa fa-btc font-primary"></i></span></div>
                  <input class="form-control" id="validationCustomUsername3" type="text" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
              <div class="col-xl-4 mb-3 col-sm-3">
                <label class="f-w-600">Bid</label>
                <div class="bitcoin-form-dropdown">
                  <div class="onhover-dropdown">
                    <button class="btn f-12" type="button">Limit <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                    <div class="onhover-show-div"><a class="d-block" href="#">Link 1</a><a class="d-block" href="#">Link 2</a><a class="d-block" href="#">Link 3</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 mb-3 col-sm-9">
                <label class="f-w-600" for="validationCustomUsername">Bid</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend5"><i class="fa fa-btc font-primary"></i></span></div>
                  <input class="form-control" id="validationCustomUsername5" type="text" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label class="f-w-600" for="validationCustomUsername">Total</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend6"><i class="fa fa-btc font-primary"></i></span></div>
                  <input class="form-control" id="validationCustomUsername6" type="text" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="btn-bottom">
                  <button class="btn btn-primary" type="button">Sell Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 xl-50">
      <div class="card">
        <div class="card-header b-l-primary">
          <h5>Active Order</h5>
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
          <div class="table-responsive active-order-table">
            <table class="table table-bordernone">
              <thead>
                <tr>
                  <th scope="col">Data</th>
                  <th scope="col">Type</th>
                  <th scope="col">Customer</th>
                  <th scope="col">Price</th>
                  <th scope="col">USD</th>
                  <th scope="col">Fee(%)</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p>2018-01-31</p>
                    <p class="mb-0">6:51:51</p>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-pill" type="button">Buy</button>
                  </td>
                  <td>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
                        <li class="d-inline-block">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <p>11900.12</p>
                  </td>
                  <td>
                    <p>$ 6979.78</p>
                  </td>
                  <td>
                    <p>0.2</p>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-pill" type="button">Status</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>2018-01-31</p>
                    <p class="mb-0">06:50:50</p>
                  </td>
                  <td>
                    <button class="btn btn-secondary btn-pill" type="button">Sell</button>
                  </td>
                  <td>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
                        <li class="d-inline-block">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <p>11900.12</p>
                  </td>
                  <td>
                    <p>$ 6979.78</p>
                  </td>
                  <td>
                    <p>0.2</p>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-pill" type="button">Status</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>2018-01-31</p>
                    <p class="mb-0">06:49:51</p>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-pill" type="button">Buy</button>
                  </td>
                  <td>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
                        <li class="d-inline-block">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <p>11900.12</p>
                  </td>
                  <td>
                    <p>$ 6979.78</p>
                  </td>
                  <td>
                    <p>0.2</p>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-pill" type="button">Status</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>2018-01-31</p>
                    <p class="mb-0">06:50:50</p>
                  </td>
                  <td>
                    <button class="btn btn-secondary btn-pill" type="button">Sell</button>
                  </td>
                  <td>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
                        <li class="d-inline-block">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <p>11900.12</p>
                  </td>
                  <td>
                    <p>$ 6979.78</p>
                  </td>
                  <td>
                    <p>0.2</p>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-pill" type="button">Status</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive active-order-table"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Data&lt;/th&gt;
&lt;th scope="col"&gt;Type&lt;/th&gt;
&lt;th scope="col"&gt;Customer&lt;/th&gt;
&lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;th scope="col"&gt;USD&lt;/th&gt;
&lt;th scope="col"&gt;Fee(%)&lt;/th&gt;
&lt;th scope="col"&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;p&gt;2018-01-31&lt;/p&gt;
&lt;p class="mb-0"&gt;6:51:51&lt;/p&gt;
&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-primary btn-pill"&gt;Buy&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;
&lt;div class="customers"&gt;
  &lt;ul&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/3.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/1.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;p class="f-12"&gt;+10 More&lt;/p&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;11900.12&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;$ 6979.78&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.2&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-primary btn-pill"&gt;Status&lt;/button&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;p&gt;2018-01-31&lt;/p&gt;
&lt;p class="mb-0"&gt;06:50:50&lt;/p&gt;
&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-secondary btn-pill"&gt;Sell&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;
&lt;div class="customers"&gt;
  &lt;ul&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/3.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/1.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;p class="f-12"&gt;+10 More&lt;/p&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;11900.12&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;$ 6979.78&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.2&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-primary btn-pill"&gt;Status&lt;/button&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;p&gt;2018-01-31&lt;/p&gt;
&lt;p class="mb-0"&gt;06:49:51&lt;/p&gt;
&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-primary btn-pill"&gt;Buy&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;
&lt;div class="customers"&gt;
  &lt;ul&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/3.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/1.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;p class="f-12"&gt;+10 More&lt;/p&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;11900.12&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;$ 6979.78&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.2&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-primary btn-pill"&gt;Status&lt;/button&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;p&gt;2018-01-31&lt;/p&gt;
&lt;p class="mb-0"&gt;06:50:50&lt;/p&gt;
&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-secondary btn-pill"&gt;Sell&lt;/button&gt;&lt;/td&gt;
&lt;td&gt;
&lt;div class="customers"&gt;
  &lt;ul&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/3.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;img src="{{asset('assets/images/user/1.jpg')}}" class="img-40 rounded-circle" alt=""&gt;&lt;/li&gt;
    &lt;li class="d-inline-block"&gt;&lt;p class="f-12"&gt;+10 More&lt;/p&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;11900.12&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;$ 6979.78&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.2&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;button type="button" class="btn btn-primary btn-pill"&gt;Status&lt;/button&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50">
      <div class="card">
        <div class="card-header b-l-primary">
          <h5>Market News</h5>
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
          <div class="media markets"><img src="{{asset('assets/images/bitcoin/market-1.jpg')}}" alt="">
            <div class="media-body">
              <h5 class="font-primary">03 Jan</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum
              </p>
            </div>
          </div>
          <div class="media markets"><img src="{{asset('assets/images/bitcoin/market-2.jpg')}}" alt="">
            <div class="media-body">
              <h5 class="font-primary">03 Jan</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum
              </p>
            </div>
          </div>
          <div class="media markets"><img src="{{asset('assets/images/bitcoin/market-3.jpg')}}" alt="">
            <div class="media-body">
              <h5 class="font-primary">03 Jan</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum
              </p>
            </div>
          </div>
          <div class="media markets mb-0"><img src="{{asset('assets/images/bitcoin/market-4.jpg')}}" alt="">
            <div class="media-body">
              <h5 class="font-primary">03 Jan</h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum
              </p>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="media markets"&gt;
&lt;img src="{{asset('assets/images/bitcoin/market-news/1.jpg')}}" alt=""&gt;
&lt;div class="media-body"&gt;
&lt;h5 class="font-primary"&gt;03 Jan&lt;/h5&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media markets"&gt;
&lt;img src="{{asset('assets/images/bitcoin/market-news/2.jpg')}}" alt=""&gt;
&lt;div class="media-body"&gt;
&lt;h5 class="font-primary"&gt;03 Jan&lt;/h5&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media markets"&gt;
&lt;img src="{{asset('assets/images/bitcoin/market-news/3.jpg')}}" alt=""&gt;
&lt;div class="media-body"&gt;
&lt;h5 class="font-primary"&gt;03 Jan&lt;/h5&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media markets mb-0"&gt;
&lt;img src="{{asset('assets/images/bitcoin/market-news/4.jpg')}}" alt=""&gt;
&lt;div class="media-body"&gt;
&lt;h5 class="font-primary"&gt;03 Jan&lt;/h5&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header b-l-primary">
          <h5>Sales Statistics</h5>
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
          <div class="show-value-top d-flex pull-right">
            <div class="value-left d-inline-block">
              <div class="circle-graph bg-primary d-inline-block m-r-5"></div><span>Total Earning</span>
            </div>
            <div class="value-right d-inline-block">
              <div class="circle-graph d-inline-block bg-secondary m-r-5"></div><span>Total Tax</span>
            </div>
          </div>
          <div class="chart-block">
            <canvas id="linecharts-bitcoin"></canvas>
          </div>
          <div class="row chart-bottom">
            <div class="col text-center">
              <div class="d-inline-block">
                <h5 class="font-primary counter">75,000</h5>
                <h6 class="mb-0">Total Sale</h6>
              </div>
            </div>
            <div class="col text-center">
              <div class="d-inline-block">
                <h5 class="font-primary counter">40,000</h5>
                <h6 class="mb-0">Bitcoin Sale</h6>
              </div>
            </div>
            <div class="col text-center">
              <div class="d-inline-block">
                <h5 class="font-primary counter">35,000</h5>
                <h6 class="mb-0">Ethereum Sale</h6>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="show-value-top d-flex pull-right"&gt;
&lt;div class="value-left d-inline-block"&gt;
&lt;div class="circle-graph bg-primary d-inline-block"&gt;&lt;/div&gt;
&lt;span&gt;Total Earning&lt;/span&gt;
&lt;/div&gt;
&lt;div class="value-right d-inline-block"&gt;
&lt;div class="circle-graph d-inline-block bg-secondary"&gt;&lt;/div&gt;
&lt;span&gt;Total Tax&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="chart-block"&gt;
&lt;canvas id="linecharts-bitcoin"&gt;&lt;/canvas&gt;
&lt;/div&gt;
&lt;div class="row chart-bottom"&gt;
&lt;div class="col text-center"&gt;
&lt;div class="d-inline-block"&gt;
&lt;h5 class="font-primary counter"&gt;75,000&lt;/h5&gt;
&lt;h6 class="mb-0"&gt;Total Sale&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col text-center"&gt;
&lt;div class="d-inline-block"&gt;
&lt;h5 class="font-primary counter"&gt;40,000&lt;/h5&gt;
&lt;h6 class="mb-0"&gt;Bitcoin Sale&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col text-center"&gt;
&lt;div class="d-inline-block"&gt;
&lt;h5 class="font-primary counter"&gt;35,000&lt;/h5&gt;
&lt;h6 class="mb-0"&gt;Ethereum Sale&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header b-l-primary">
          <h5>Datatables Market</h5>
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
        <div class="card-body tab-content">
          <div class="market-table table-responsive tab-pane active" id="htc">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Market</th>
                  <th scope="col">Price</th>
                  <th scope="col">Change</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 02157</p>
                  </td>
                  <td>
                    <p>0.025486854</p>
                  </td>
                  <td>
                    <p>-05.15%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>-18.23%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="market-table table-responsive tab-pane fade" id="eth">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Market</th>
                  <th scope="col">Price</th>
                  <th scope="col">Change</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 02157</p>
                  </td>
                  <td>
                    <p>0.025486854</p>
                  </td>
                  <td>
                    <p>-05.15%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>-18.23%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="market-table table-responsive tab-pane fade" id="dash">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Market</th>
                  <th scope="col">Price</th>
                  <th scope="col">Change</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 02157</p>
                  </td>
                  <td>
                    <p>0.025486854</p>
                  </td>
                  <td>
                    <p>-05.15%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>-18.23%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="market-table table-responsive tab-pane fade" id="ltc">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Market</th>
                  <th scope="col">Price</th>
                  <th scope="col">Change</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 02157</p>
                  </td>
                  <td>
                    <p>0.025486854</p>
                  </td>
                  <td>
                    <p>-05.15%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>-18.23%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="market-table table-responsive tab-pane fade" id="xrp">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Market</th>
                  <th scope="col">Price</th>
                  <th scope="col">Change</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 02157</p>
                  </td>
                  <td>
                    <p>0.025486854</p>
                  </td>
                  <td>
                    <p>-05.15%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>+16.23%</p>
                    <div class="text-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="font-primary">BTC - 12458</p>
                  </td>
                  <td>
                    <p>0.002548548</p>
                  </td>
                  <td>
                    <p>-18.23%</p>
                    <div class="text-center"><i class="font-secondary" data-feather="arrow-down"></i></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body tab-content"&gt;
&lt;div class="market-table table-responsive tab-pane active" id="htc"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Market&lt;/th&gt;
&lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;th scope="col"&gt;Change&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 02157&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.025486854&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-05.15%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-18.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class="market-table table-responsive tab-pane fade" id="eth"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Market&lt;/th&gt;
&lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;th scope="col"&gt;Change&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 02157&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.025486854&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-05.15%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-18.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class="market-table table-responsive tab-pane fade" id="dash"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Market&lt;/th&gt;
&lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;th scope="col"&gt;Change&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 02157&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.025486854&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-05.15%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-18.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class="market-table table-responsive tab-pane fade" id="dash"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Market&lt;/th&gt;
&lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;th scope="col"&gt;Change&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 02157&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.025486854&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-05.15%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-18.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class="market-table table-responsive tab-pane fade" id="ltc"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Market&lt;/th&gt;
&lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;th scope="col"&gt;Change&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 02157&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.025486854&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-05.15%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-18.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class="market-table table-responsive tab-pane fade" id="xrp"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Market&lt;/th&gt;
&lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;th scope="col"&gt;Change&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 02157&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.025486854&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-05.15%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+16.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-up" class="font-primary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;p class="font-primary"&gt;BTC - 12458&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;0.002548548&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;-18.23%&lt;/p&gt;
  &lt;div class="text-center"&gt;
    &lt;i data-feather="arrow-down" class="font-secondary"&gt;&lt;/i&gt;
  &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-footer b-t-primary market-tabs p-0"&gt;
&lt;ul class="nav nav-pills" role="tablist"&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link active" data-toggle="pill" href="#htc"&gt;Users&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-toggle="pill" href="#eth"&gt;Email&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-toggle="pill" href="#dash"&gt;Blog&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-toggle="pill" href="#ltc"&gt;Chat&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-toggle="pill" href="#xrp"&gt;Ecommerce&lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
        <div class="card-footer b-t-primary market-tabs p-0">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#htc">Users</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#eth">Email</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#dash">Blog</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#ltc">Chat</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#xrp">Ecommerce</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-12 xl-100">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body bg-primary">
              <div class="icons-section text-center"><img src="{{asset('assets/images/bitcoin/1.png')}}" alt="">
                <h6>Bitcoin</h6>
                <h5><span><i data-feather="dollar-sign"></i></span>760.03 <span><i data-feather="arrow-down"></i></span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body bg-secondary">
              <div class="icons-section text-center"><img src="{{asset('assets/images/bitcoin/2.png')}}" alt="">
                <h6>Ethereum</h6>
                <h5><span><i data-feather="dollar-sign"></i></span>750.03 <span><i data-feather="arrow-up"></i></span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body bg-primary">
              <div class="icons-section text-center"><img src="{{asset('assets/images/bitcoin/3.png')}}" alt="">
                <h6>Balance</h6>
                <h5><span><i data-feather="dollar-sign"></i></span>9,980 <span><i data-feather="arrow-down"></i></span></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50">
      <div class="card">
        <div class="card-header b-l-primary">
          <h5>Chat</h5>
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
        <div class="card-body chat-box">
          <div class="chat-right-aside bitcoin-chat">
            <div class="chat">
              <div class="chat-history chat-msg-box custom-scrollbar">
                <ul>
                  <li>
                    <div class="message my-message"><img class="rounded-circle float-left chat-user-img" src="{{asset('assets/images/bitcoin/chat-1.jpg')}}" alt="">
                      <div class="message-data text-right"><span class="message-data-time">1:00 pm</span></div>                                                        Project has been already finished and
                                                                              I have results to show you.
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="message other-message pull-right"><img class="rounded-circle float-right chat-user-img" src="{{asset('assets/images/bitcoin/chat-2.jpg')}}" alt="">
                      <div class="message-data"><span class="message-data-time">1:08 pm</span></div>                                                        Well I am not sure. The rest of the
                                                                              team is not here yet.
                    </div>
                  </li>
                  <li>
                    <div class="message my-message mb-0"><img class="rounded-circle float-left chat-user-img" src="{{asset('assets/images/bitcoin/chat-1.jpg')}}" alt="">
                      <div class="message-data text-right"><span class="message-data-time">1:12 pm</span></div>                                                        Actually everything was fine. I'm very
                                                                              excited to show this to our team.
                    </div>
                  </li>
                </ul>
              </div>
              <div class="bitcoin-message clearfix">
                <div class="row">
                  <div class="col-xl-12 d-flex">
                    <div class="smiley-box bg-primary">
                      <div class="picker"><img src="{{asset('assets/images/smiley.png')}}" alt=""></div>
                    </div>
                    <div class="input-group text-box">
                      <input class="form-control input-txt-bx" id="message-to-send" type="text" name="message-to-send" placeholder="Type a message......">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">SEND</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body chat-box"&gt;
&lt;div class="chat-right-aside bitcoin-chat"&gt;
&lt;div class="chat"&gt;
&lt;div class="chat-history chat-msg-box custom-scrollbar"&gt;
&lt;ul&gt;
&lt;li&gt;
  &lt;div class="message my-message"&gt;
    &lt;img src="{{asset('assets/images/bitcoin/chat/2.jpg')}}" class="rounded-circle float-left chat-user-img" alt=""&gt;
    &lt;div class="message-data text-right"&gt;
      &lt;span class="message-data-time"&gt;1:00 pm&lt;/span&gt;
    &lt;/div&gt;
Project has been already finished and I have results to show you.
  &lt;/div&gt;
&lt;/li&gt;
&lt;li class="clearfix"&gt;
  &lt;div class="message other-message pull-right"&gt;
    &lt;img src="{{asset('assets/images/bitcoin/chat/1.jpg')}}" class="rounded-circle float-right chat-user-img" alt=""&gt;
    &lt;div class="message-data"&gt;
      &lt;span class="message-data-time"&gt;1:08 pm&lt;/span&gt;
    &lt;/div&gt;
Well I am not sure. The rest of the team is not here yet.
  &lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;
  &lt;div class="message my-message mb-0"&gt;
    &lt;img src="{{asset('assets/images/bitcoin/chat/2.jpg')}}" class="rounded-circle float-left chat-user-img" alt=""&gt;
    &lt;div class="message-data text-right"&gt;
      &lt;span class="message-data-time"&gt;1:12 pm&lt;/span&gt;
    &lt;/div&gt;
Actually everything was fine. I'm very excited to show this to our team.
  &lt;/div&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="bitcoin-message clearfix"&gt;
&lt;div class="row"&gt;
&lt;div class="col-xl-12 d-flex"&gt;
  &lt;div class="smiley-box bg-primary"&gt;
    &lt;div class="picker"&gt;&lt;img src="{{asset('assets/images/smiley.png')}}" class="" alt=""&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="input-group text-box"&gt;
    &lt;input type="text" class="form-control input-txt-bx" name="message-to-send" id="message-to-send" placeholder="Type a message......"&gt;
    &lt;div class="input-group-append"&gt;
      &lt;button class="btn btn-primary" type="button"&gt;SEND&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50">
      <div class="card">
        <div class="default-according style-1 bitcoin-accordion" id="accordionoc">
          <div class="card">
            <div class="card-header bg-primary">
              <h5 class="mb-0">
                <button class="btn btn-link txt-white" data-toggle="collapse" data-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">BTC</button>
              </h5>
            </div>
            <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-parent="#accordionoc">
              <div class="media-accordion">
                <div class="media">
                  <div>
                    <h6>BTC/USD</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>11916.9</p>
                    <p class="font-primary">283.1 USD (+2.33%)</p>
                    <p class="font-secondary">1029.1906 BTC</p>
                  </div>
                </div>
                <div class="media">
                  <div>
                    <h6>BTC/EUR</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>9213.9</p>
                    <p class="font-primary">200.1 EUR (+2.33%)</p>
                    <p class="font-secondary">1599.1906 BTC</p>
                  </div>
                </div>
                <div class="media">
                  <div>
                    <h6>BTC/GBP</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>1459.9</p>
                    <p class="font-primary">-283.1 USD (-2.33%)</p>
                    <p class="font-secondary">350.1906 BTC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-primary">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed txt-white" data-toggle="collapse" data-target="#collapseicon1" aria-expanded="false">ETH</button>
              </h5>
            </div>
            <div class="collapse" id="collapseicon1" aria-labelledby="collapseicon1" data-parent="#accordionoc">
              <div class="media-accordion">
                <div class="media">
                  <div>
                    <h6>BTC/USD</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>11916.9</p>
                    <p class="font-primary">283.1 USD (+2.33%)</p>
                    <p class="font-secondary">1029.1906 BTC</p>
                  </div>
                </div>
                <div class="media">
                  <div>
                    <h6>BTC/EUR</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>9213.9</p>
                    <p class="font-primary">200.1 EUR (+2.33%)</p>
                    <p class="font-secondary">1599.1906 BTC</p>
                  </div>
                </div>
                <div class="media">
                  <div>
                    <h6>BTC/GBP</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>1459.9</p>
                    <p class="font-primary">-283.1 USD (-2.33%)</p>
                    <p class="font-secondary">350.1906 BTC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-primary">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed txt-white" data-toggle="collapse" data-target="#collapseicon2" aria-expanded="false" aria-controls="collapseicon2">DASH</button>
              </h5>
            </div>
            <div class="collapse" id="collapseicon2" data-parent="#accordionoc">
              <div class="media-accordion">
                <div class="media">
                  <div>
                    <h6>BTC/USD</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>11916.9</p>
                    <p class="font-primary">283.1 USD (+2.33%)</p>
                    <p class="font-secondary">1029.1906 BTC</p>
                  </div>
                </div>
                <div class="media">
                  <div>
                    <h6>BTC/EUR</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>9213.9</p>
                    <p class="font-primary">200.1 EUR (+2.33%)</p>
                    <p class="font-secondary">1599.1906 BTC</p>
                  </div>
                </div>
                <div class="media">
                  <div>
                    <h6>BTC/GBP</h6>
                    <p>24h Change</p>
                    <p>24h Volume</p>
                  </div>
                  <div class="media-body text-right">
                    <p>1459.9</p>
                    <p class="font-primary">-283.1 USD (-2.33%)</p>
                    <p class="font-secondary">350.1906 BTC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-100">
      <div class="card">
        <div class="card-header b-l-primary">
          <h5>Invest</h5>
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
          <div class="pull-right right-header invest-dropdown">
            <div class="onhover-dropdown">
              <button class="btn" type="button">Today <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
              <div class="onhover-show-div right-header-dropdown"><a class="d-block" href="#">Link 1</a><a class="d-block" href="#">Link 2</a><a class="d-block" href="#">Link 3</a></div>
            </div>
          </div>
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="bitcoin-morris"></div>
          </div>
          <div class="show-value-top d-flex mb-0 bottom-morris-chart">
            <div class="value-left d-inline-block">
              <div class="circle-graph bg-primary d-inline-block m-r-5"></div><span>Bitcoin</span>
            </div>
            <div class="value-right d-inline-block">
              <div class="circle-graph d-inline-block bg-secondary m-r-5"></div><span>Ripple</span>
            </div>
            <div class="value-third d-inline-block">
              <div class="circle-graph d-inline-block bg-light m-r-5"></div><span>Invest</span>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body chart-block"&gt;
&lt;div class="pull-right right-header invest-dropdown"&gt;
&lt;div class="onhover-dropdown"&gt;
&lt;button type="button" class="btn"&gt;
Today &lt;span class="pr-0"&gt;&lt;i class="fa fa-angle-down"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="onhover-show-div right-header-dropdown"&gt;
&lt;a class="d-block" href="#"&gt;Link 1&lt;/a&gt;
&lt;a class="d-block" href="#"&gt;Link 2&lt;/a&gt;
&lt;a class="d-block" href="#"&gt;Link 3&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="flot-chart-container"&gt;
&lt;div id="bitcoin-morris" class="flot-chart-placeholder"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="show-value-top d-flex mb-0 bottom-morris-chart"&gt;
&lt;div class="value-left d-inline-block"&gt;
&lt;div class="circle-graph bg-primary d-inline-block"&gt;&lt;/div&gt;
&lt;span&gt;Bitcoin&lt;/span&gt;
&lt;/div&gt;
&lt;div class="value-right d-inline-block"&gt;
&lt;div class="circle-graph d-inline-block bg-secondary"&gt;&lt;/div&gt;
&lt;span&gt;Ripple&lt;/span&gt;
&lt;/div&gt;
&lt;div class="value-third d-inline-block"&gt;
&lt;div class="circle-graph d-inline-block bg-light"&gt;&lt;/div&gt;
&lt;span&gt;Invest&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
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
<!-- Plugins JS start-->
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/raphael.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/morris.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/prettify.min.js')}}"></script>
<script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/bitcoin-custom.js')}}"></script>
@endsection