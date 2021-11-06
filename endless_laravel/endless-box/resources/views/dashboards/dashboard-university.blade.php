@extends('layouts.master')
@section('title', 'University | Endless - Premium Admin Template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/tour.css')}}">
@endsection

@section('breadcrumb-title', 'University')
@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">University</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 xl-100 set-col-12">
      <div class="card" data-intro="This is University Earning Chart">
        <div class="card-header university-header">
          <div class="row">
            <div class="col-sm-6">
              <h5>University Earning</h5>
            </div>
            <div class="col-sm-6">
              <div class="pull-right d-flex buttons-right">
                <div class="right-header">
                  <div class="onhover-dropdown">
                    <button class="btn btn-primary" type="button">Monthly <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                    <div class="onhover-show-div right-header-dropdown"><a class="d-block" href="#">Average</a><a class="d-block" href="#">Maximum</a><a class="d-block" href="#">Minimum</a></div>
                  </div>
                </div>
                <div class="right-header">
                  <div class="onhover-dropdown">
                    <button class="btn btn-light" type="button">yearly <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                    <div class="onhover-show-div right-header-dropdown"><a class="d-block" href="#">Average</a><a class="d-block" href="#">Maximum</a><a class="d-block" href="#">Minimum</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body height-curves">
          <div class="curves-2">
            <div class="animate-curve ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 xl-100 set-col-12">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="media feather-main">
                <div class="feather-icon-block"><i data-feather="command"></i></div>
                <div class="media-body align-self-center">
                  <h6>Total Admission</h6>
                  <p>5678</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="media feather-main">
                <div class="feather-icon-block"><i data-feather="navigation"></i></div>
                <div class="media-body align-self-center">
                  <h6>Total University Visit</h6>
                  <p>8569</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media chart-university">
                <div class="media-body">
                  <h3 class="mb-0"><i data-feather="dollar-sign"></i><span class="counter">5683</span></h3>
                  <p>Html Course</p>
                </div>
                <div class="small-bar">
                  <div class="ct-small-left flot-chart-container"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media chart-university">
                <div class="media-body">
                  <h3 class="mb-0"><i data-feather="dollar-sign"></i><span class="counter">7243</span></h3>
                  <p>PHP Course</p>
                </div>
                <div class="small-bar">
                  <div class="ct-small-right flot-chart-container"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5>Math Professors</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive professor-table">
                <table class="table table-bordernone">
                  <tbody>
                    <tr>
                      <td><img class="img-radius img-35 align-top m-r-15 rounded-circle" src="{{asset('assets/images/university/math-1.jpg')}}" alt="">
                        <div class="professor-block d-inline-block">luson keter
                          <p>Math Professors</p>
                        </div>
                      </td>
                      <td>
                        <label class="pull-right mb-0" for="edo-ani">
                          <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani">
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-radius img-25 align-top m-r-15 rounded-circle" src="{{asset('assets/images/university/math-2.jpg')}}" alt="">
                        <div class="professor-block d-inline-block">Elan hormas
                          <p>Bio Professors</p>
                        </div>
                      </td>
                      <td>
                        <label class="pull-right mb-0" for="edo-ani1">
                          <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" checked="">
                        </label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5>Bio Professors</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive professor-table">
                <table class="table table-bordernone">
                  <tbody>
                    <tr>
                      <td><img class="img-radius img-25 align-top m-r-15 rounded-circle" src="{{asset('assets/images/university/bio-1.jpg')}}" alt="">
                        <div class="professor-block d-inline-block">Erana siddy
                          <p>Director</p>
                        </div>
                      </td>
                      <td>
                        <label class="pull-right mb-0" for="edo-ani2">
                          <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-radius img-35 align-top m-r-15 rounded-circle" src="{{asset('assets/images/university/bio-2.jpg')}}" alt="">
                        <div class="professor-block d-inline-block">Tom kerrly
                          <p>Director</p>
                        </div>
                      </td>
                      <td>
                        <label class="pull-right mb-0" for="edo-ani3">
                          <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani">
                        </label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 set-col-6">
      <div class="card height-equal">
        <div class="card-header">
          <h5>Upcoming Event</h5>
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
          <div class="upcoming-event">
            <div class="upcoming-innner media">
              <div class="bg-primary left m-r-20"><i data-feather="help-circle"></i></div>
              <div class="media-body">
                <p class="mb-0">Demo Content <span class="pull-right">Mar 18</span></p>
                <h6 class="f-w-600">Quiz Compition</h6>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum</p>
              </div>
            </div>
            <div class="upcoming-innner media">
              <div class="bg-primary left m-r-20"><i data-feather="mic"></i></div>
              <div class="media-body">
                <p class="mb-0">Demo Content <span class="pull-right">Sep 18</span></p>
                <h6 class="f-w-600">Singing Compition</h6>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum</p>
              </div>
            </div>
            <div class="upcoming-innner media">
              <div class="bg-primary left m-r-20"><i data-feather="zap"></i></div>
              <div class="media-body">
                <p class="mb-0">Demo Content <span class="pull-right">Dec 18</span></p>
                <h6 class="f-w-600">Diwali Celebration</h6>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum</p>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="upcoming-event"&gt;
&lt;div class="upcoming-innner media"&gt;
&lt;div class="bg-primary left m-r-20"&gt;&lt;i data-feather="help-circle"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;p class="mb-0"&gt;Demo Content &lt;span class="pull-right"&gt;Mar 18&lt;/span&gt;&lt;/p&gt;
&lt;h6 class="f-w-600"&gt;Quiz Compition&lt;/h6&gt;
&lt;p class="mb-0"&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="upcoming-innner media"&gt;
&lt;div class="bg-primary left m-r-20"&gt;&lt;i data-feather="mic"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;p class="mb-0"&gt;Demo Content &lt;span class="pull-right"&gt;Sep 18&lt;/span&gt;&lt;/p&gt;
&lt;h6 class="f-w-600"&gt;Singing Compition&lt;/h6&gt;
&lt;p class="mb-0"&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="upcoming-innner media"&gt;
&lt;div class="bg-primary left m-r-20"&gt;&lt;i data-feather="zap"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;p class="mb-0"&gt;Demo Content &lt;span class="pull-right"&gt;Dec 18&lt;/span&gt;&lt;/p&gt;
&lt;h6 class="f-w-600"&gt;Diwali Celebration&lt;/h6&gt;
&lt;p class="mb-0"&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 set-col-6">
      <div class="card height-equal" data-intro="This is Ranker Ratio">
        <div class="card-header">
          <h5>Ranker Ratio</h5>
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
          <div class="knob-block text-center knob-sm">
            <input class="knob" data-width="295" data-height="295" data-angleoffset="-125" data-anglearc="250" data-fgcolor="#4466f2" data-thickness=".2" data-linecap="round" data-rotation="anticlockwise" value="35">
          </div>
          <div class="ranker text-center">
            <h6>Student</h6>
            <h5 class="mb-0">New Ranker 2018</h5>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="knob-block text-center knob-sm"&gt;
&lt;input class="knob" data-width="295" data-height="295" data-angleOffset=-125 data-angleArc=250 data-fgColor="#4466f2" data-thickness=".2" data-linecap="round" data-rotation="anticlockwise" value="35"&gt;
&lt;/div&gt;
&lt;div class="ranker text-center"&gt;
&lt;h6&gt;Student&lt;/h6&gt;
&lt;h5 class="mb-0"&gt;New Ranker 2018&lt;/h5&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-100 set-col-12">
      <div class="card height-equal">
        <div class="card-header">
          <h5>Notification</h5>
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
        <div class="card-body pb-0">
          <div class="notifiaction-media">
            <div class="media">
              <div class="media-body">
                <div class="circle-left"></div>
                <h6>You are confirmation visit..<span class="pull-right f-12">1 Day Ago</span></h6>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <div class="circle-left"></div>
                <h6>Lorem Ipsum has been the..<span class="pull-right f-12">5 Day Ago</span></h6>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <div class="circle-left"></div>
                <h6>Standard dummy text ever..<span class="pull-right f-12">7 Day Ago</span></h6>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <div class="circle-left"></div>
                <h6>When an unknown printer..<span class="pull-right f-12">9 Day Ago</span></h6>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <div class="circle-left"></div>
                <h6>Took a gallery of type..<span class="pull-right f-12">6 Day Ago</span></h6>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <div class="circle-left"></div>
                <h6>Scrambled it to make a type..<span class="pull-right f-12">2 Day Ago</span></h6>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body"&gt;
&lt;div class="notifiaction-media"&gt;
&lt;div class="media"&gt;
&lt;div class="media-body"&gt;
&lt;div class="circle-left"&gt;&lt;/div&gt;&lt;h6&gt;You are confirmation visit..&lt;span class="pull-right f-12"&gt;1 Day Ago&lt;/span&gt;&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="media-body"&gt;
&lt;div class="circle-left"&gt;&lt;/div&gt;&lt;h6&gt;Lorem Ipsum has been the..&lt;span class="pull-right f-12"&gt;5 Day Ago&lt;/span&gt;&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="media-body"&gt;
&lt;div class="circle-left"&gt;&lt;/div&gt;&lt;h6&gt;Standard dummy text ever..&lt;span class="pull-right f-12"&gt;7 Day Ago&lt;/span&gt;&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="media-body"&gt;
&lt;div class="circle-left"&gt;&lt;/div&gt;&lt;h6&gt;When an unknown printer..&lt;span class="pull-right f-12"&gt;9 Day Ago&lt;/span&gt;&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="media-body"&gt;
&lt;div class="circle-left"&gt;&lt;/div&gt;&lt;h6&gt;Took a gallery of type..&lt;span class="pull-right f-12"&gt;6 Day Ago&lt;/span&gt;&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media mb-0"&gt;
&lt;div class="media-body"&gt;
&lt;div class="circle-left"&gt;&lt;/div&gt;&lt;h6&gt;Scrambled it to make a type..&lt;span class="pull-right f-12"&gt;2 Day Ago&lt;/span&gt;&lt;/h6&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-footer btn-more text-center"&gt;
&lt;a href="#"&gt;MORE...&lt;/a&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
        <div class="card-footer btn-more text-center"><a href="#">MORE...</a></div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <h5>Statistics</h5>
              <button class="btn btn-primary btn-sm header-btn btn-pill">2017</button>
            </div>
            <div class="col-sm-6">
              <div class="pull-right statistics">
                <h5 class="counter">85</h5>
                <p class="f-12 mb-0">Statistics 2017</p>
                <div class="font-primary font-weight-bold d-flex f-11 pull-right"><i class="fa fa-sort-up mr-2"></i><span class="number"><span class="counter">100</span>%</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="curves-2">
            <div class="animate-curve2 ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <h5>Last 5 Year Board</h5>
              <p class="f-12 header-small mb-0">18 september, 2018</p>
            </div>
            <div class="col-sm-6">
              <div class="pull-right statistics">
                <h5 class="counter">50</h5>
                <p class="f-12 mb-0">Board 2018</p>
                <div class="font-primary font-weight-bold d-flex f-11 pull-right"><i class="fa fa-sort-up mr-2"></i><span class="number"><span class="counter">78</span>%</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="board-chart ct-golden-section"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 xl-50 set-col-12">
      <div class="card" data-intro="This is Our Topper List">
        <div class="card-header">
          <h5>Our Topper List</h5>
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
          <div class="table-responsive topper-lists">
            <table class="table table-bordernone">
              <tbody>
                <tr>
                  <td>
                    <div class="d-inline-block align-self-center">
                      <div class="form-group d-inline-block">
                        <div class="checkbox">
                          <input id="checkbox1" type="checkbox">
                          <label for="checkbox1"></label>
                        </div>
                      </div><img class="img-radius img-40 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                      <div class="d-inline-block"><span class="f-w-600">Ossim Keter</span>
                        <p>1<sup>st</sup> year</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">+48 605 562 215</span>
                      <p>Phone Number</p>
                    </div>
                  </td>
                  <td><img class="align-top" src="{{asset('assets/images/university/chart-1.png')}}" alt=""></td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">1</span>
                      <p>Rank</p>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">590/600</span>
                      <p>Total marks</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-self-center">
                      <div class="form-group d-inline-block">
                        <div class="checkbox">
                          <input id="checkbox2" type="checkbox" checked="">
                          <label for="checkbox2"></label>
                        </div>
                      </div><img class="img-radius img-40 align-top m-r-15 rounded-circle" src="{{asset('assets/images/university/math-1.jpg')}}" alt="">
                      <div class="check-dot d-inline-block"></div>
                      <div class="d-inline-block"><span class="f-w-600">Venter Loren</span>
                        <p>1<sup>st</sup> year</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">+25 598 559 368</span>
                      <p>Phone Number</p>
                    </div>
                  </td>
                  <td><img class="align-top" src="{{asset('assets/images/university/chart-2.png')}}" alt=""></td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">2</span>
                      <p>Rank</p>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">570/600</span>
                      <p>Total marks</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-self-center">
                      <div class="form-group d-inline-block">
                        <div class="checkbox">
                          <input id="checkbox3" type="checkbox">
                          <label for="checkbox3"></label>
                        </div>
                      </div><img class="img-radius img-40 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/2.png')}}" alt="">
                      <div class="d-inline-block"><span class="f-w-600">Fran Loain</span>
                        <p>1<sup>st</sup> year</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">+65 659 145 235</span>
                      <p>Phone Number</p>
                    </div>
                  </td>
                  <td><img class="align-top" src="{{asset('assets/images/university/chart-3.png')}}" alt=""></td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">3</span>
                      <p>Rank</p>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">565/600</span>
                      <p>Total marks</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-self-center">
                      <div class="form-group d-inline-block">
                        <div class="checkbox">
                          <input id="checkbox4" type="checkbox">
                          <label for="checkbox4"></label>
                        </div>
                      </div><img class="img-radius img-40 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="">
                      <div class="d-inline-block"><span class="f-w-600">Loften Horen</span>
                        <p>1<sup>st</sup> year</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">+37 595 367 368</span>
                      <p>Phone Number</p>
                    </div>
                  </td>
                  <td><img class="align-top" src="{{asset('assets/images/university/chart-4.png')}}" alt=""></td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">4</span>
                      <p>Rank</p>
                    </div>
                  </td>
                  <td>
                    <div class="d-inline-block text-center"><span class="f-w-600">540/600</span>
                      <p>Total marks</p>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive topper-lists"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-self-center"&gt;
&lt;div class="form-group d-inline-block"&gt;
&lt;div class="checkbox"&gt;
&lt;input id="checkbox1" type="checkbox"&gt;
&lt;label for="checkbox1"&gt;&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;img src="{{asset('assets/images/user/4.jpg')}}" class="img-radius img-40 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;span class="f-w-600"&gt;Ossim Keter&lt;/span&gt;
&lt;p&gt;1&lt;sup&gt;st&lt;/sup&gt; year&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;+48 605 562 215&lt;/span&gt;
&lt;p&gt;Phone Number&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;img src="{{asset('assets/images/university/topper-chart/chart-1.png')}}" class="align-top" alt=""&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;1&lt;/span&gt;
&lt;p&gt;Rank&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;590/600&lt;/span&gt;
&lt;p&gt;Total marks&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-self-center"&gt;
&lt;div class="form-group d-inline-block"&gt;
&lt;div class="checkbox"&gt;
&lt;input id="checkbox2" type="checkbox" checked&gt;
&lt;label for="checkbox2"&gt;&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;img src="{{asset('assets/images/university/math-1.jpg')}}" class="img-radius img-40 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="check-dot d-inline-block"&gt;&lt;/div&gt;
&lt;div class="d-inline-block"&gt;
&lt;span class="f-w-600"&gt;Venter Loren&lt;/span&gt;
&lt;p&gt;1&lt;sup&gt;st&lt;/sup&gt; year&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;+25 598 559 368&lt;/span&gt;
&lt;p&gt;Phone Number&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;img src="{{asset('assets/images/university/topper-chart/chart-2.png')}}" class="align-top" alt=""&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;2&lt;/span&gt;
&lt;p&gt;Rank&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;570/600&lt;/span&gt;
&lt;p&gt;Total marks&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-self-center"&gt;
&lt;div class="form-group d-inline-block"&gt;
&lt;div class="checkbox"&gt;
&lt;input id="checkbox3" type="checkbox"&gt;
&lt;label for="checkbox3"&gt;&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;img src="{{asset('assets/images/user/2.png')}}" class="img-radius img-40 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;span class="f-w-600"&gt;Fran Loain&lt;/span&gt;
&lt;p&gt;1&lt;sup&gt;st&lt;/sup&gt; year&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;+65 659 145 235&lt;/span&gt;
&lt;p&gt;Phone Number&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;img src="{{asset('assets/images/university/topper-chart/chart-3.png')}}" class="align-top" alt=""&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;3&lt;/span&gt;
&lt;p&gt;Rank&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;565/600&lt;/span&gt;
&lt;p&gt;Total marks&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-self-center"&gt;
&lt;div class="form-group d-inline-block"&gt;
&lt;div class="checkbox"&gt;
&lt;input id="checkbox4" type="checkbox"&gt;
&lt;label for="checkbox4"&gt;&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-radius img-40 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;span class="f-w-600"&gt;Loften Horen&lt;/span&gt;
&lt;p&gt;1&lt;sup&gt;st&lt;/sup&gt; year&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;+37 595 367 368&lt;/span&gt;
&lt;p&gt;Phone Number&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;img src="{{asset('assets/images/university/topper-chart/chart-4.png')}}" class="align-top" alt=""&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;4&lt;/span&gt;
&lt;p&gt;Rank&lt;/p&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block text-center"&gt;
&lt;span class="f-w-600"&gt;540/600&lt;/span&gt;
&lt;p&gt;Total marks&lt;/p&gt;
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
    <div class="col-xl-4 xl-50 set-col-12">
      <div class="card card-gradient">
        <div class="card-body text-center">
          <div class="knob-header">
            <h5>Total Student</h5>
            <div class="d-inline-block pull-right f-16">120 / <span>130</span></div>
          </div>
          <div class="knob-block text-center knob-center">
            <input class="knob" data-width="180" data-height="180" data-thickness=".1" data-angleoffset="90" data-fgcolor="#fff" data-bgcolor="#256dd4" data-linecap="round" value="85">
          </div><img class="round-image" src="{{asset('assets/images/university/round.png')}}" alt="">
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 set-col-6">
      <div class="card" data-intro="This is Date picker">
        <div class="datepicker-here date-picker-university" data-language="en"></div>
      </div>
    </div>
    <div class="col-xl-8 xl-50 set-col-6">
      <div class="card">
        <div class="card-header">
          <h5>Admission Ratio</h5>
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
        <div class="card-body chart-block admission-chart">
          <canvas id="myLineCharts"></canvas>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body chart-block admission-chart"&gt;
&lt;canvas id="myLineCharts"&gt;&lt;/canvas&gt;
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
@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/university-custom.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/tour/intro.js')}}"></script>
<script src="{{asset('assets/js/tour/intro-init.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>

@endsection