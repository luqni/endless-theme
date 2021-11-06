@extends('layouts.master')
@section('title', 'Project Dashboard | Endless - Premium Admin Template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'Project Dashboard')
@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Project Dashboard</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 theme-tab">
      <ul class="tabs tab-title">
        <li class="current"><a href="tab-1"><i data-feather="home"></i>Home</a></li>
        <li><a href="tab-2"><i data-feather="activity"></i>Budget Summary</a></li>
        <li><a href="tab-3"><i data-feather="users"></i>Team Members</a></li>
      </ul>
      <div class="tab-content-cls">
        <div class="tab-content active default" id="tab-1">
          <div class="row">
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="select2-drpdwn-project select-options">
                      <select class="form-control form-control-primary btn-square" name="select">
                        <option value="opt1">Today</option>
                        <option value="opt2">Yesterday</option>
                        <option value="opt3">Tomorrow</option>
                        <option value="opt4">Monthly</option>
                        <option value="opt5">Weekly</option>
                      </select>
                    </div>
                  </div>
                  <div class="project-widgets text-center">
                    <h1 class="font-primary counter">45</h1>
                    <h6 class="mb-0">Due Tasks</h6>
                  </div>
                </div>
                <div class="card-footer project-footer">
                  <h6 class="mb-0">Completed:<span class="counter">14</span></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <h5 class="mb-0">Features</h5>
                  </div>
                  <div class="project-widgets text-center">
                    <h1 class="font-primary counter">80</h1>
                    <h6 class="mb-0">Proposals</h6>
                  </div>
                </div>
                <div class="card-footer project-footer">
                  <h6 class="mb-0">Implemented:<span class="counter">14</span></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <h5 class="mb-0">Issues</h5>
                  </div>
                  <div class="project-widgets text-center">
                    <h1 class="font-primary counter">34</h1>
                    <h6 class="mb-0">Open</h6>
                  </div>
                </div>
                <div class="card-footer project-footer">
                  <h6 class="mb-0">Closed today:<span class="counter">10</span></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <h5 class="mb-0">Overdue</h5>
                  </div>
                  <div class="project-widgets text-center">
                    <h1 class="font-primary counter">7</h1>
                    <h6 class="mb-0">Tasks</h6>
                  </div>
                </div>
                <div class="card-footer project-footer">
                  <h6 class="mb-0">Task Solved:<span class="counter">4</span></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header project-header">
                  <div class="row">
                    <div class="col-sm-8">
                      <h5>Task Distribution</h5>
                    </div>
                    <div class="col-sm-4">
                      <div class="select2-drpdwn-project select-options">
                        <select class="form-control form-control-primary btn-square" name="select">
                          <option value="opt1">Today</option>
                          <option value="opt2">Yesterday</option>
                          <option value="opt3">Tomorrow</option>
                          <option value="opt4">Monthly</option>
                          <option value="opt5">Weekly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body chart-block chart-vertical-center project-charts">
                  <canvas id="myDoughnutGraph"></canvas>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header project-header">
                  <div class="row">
                    <div class="col-sm-8">
                      <h5>Schedule</h5>
                    </div>
                    <div class="col-sm-4">
                      <div class="select2-drpdwn-project select-options">
                        <select class="form-control form-control-primary btn-square" name="select">
                          <option value="opt1">Today</option>
                          <option value="opt2">Yesterday</option>
                          <option value="opt3">Tomorrow</option>
                          <option value="opt4">Monthly</option>
                          <option value="opt5">Weekly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="schedule">
                    <div class="media">
                      <div class="media-body">
                        <h6>Group Meeting</h6>
                        <p>30 minutes</p>
                      </div>
                      <div class="dropdown schedule-dropdown">
                        <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-horizontal"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Project</a><a class="dropdown-item" href="#">Requirements</a><a class="dropdown-item" href="#">Discussion</a><a class="dropdown-item" href="#">Planning</a></div>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-body">
                        <h6>Public Beta Release</h6>
                        <p>10:00 PM</p>
                      </div><i data-feather="more-horizontal"></i>
                    </div>
                    <div class="media">
                      <div class="media-body">
                        <h6>Lunch</h6>
                        <p>12:30 PM</p>
                      </div><i data-feather="more-horizontal"></i>
                    </div>
                    <div class="media">
                      <div class="media-body">
                        <h6>Clients Timing</h6>
                        <p>2:00 PM to 6:00 PM</p>
                      </div><i data-feather="more-horizontal"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Github Isuues</h5>
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
                  <div class="row">
                    <div class="col-xl-6 xl-100">
                      <div class="row more-projects">
                        <div class="col-sm-6 xl-4">
                          <div class="projects-main">
                            <div class="project-content">
                              <h6>Created</h6>
                              <h5 class="counter mb-0">27</h5>
                            </div>
                            <div class="project-small-chart-1 project-small"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 xl-4">
                          <div class="projects-main">
                            <div class="project-content">
                              <h6>Fixed</h6>
                              <h5 class="counter mb-0">8</h5>
                            </div>
                            <div class="project-small-chart-2 project-small"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 xl-4">
                          <div class="projects-main">
                            <div class="project-content">
                              <h6>Re-opened</h6>
                              <h5 class="counter mb-0">2</h5>
                            </div>
                            <div class="project-small-chart-3 project-small"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 xl-4">
                          <div class="projects-main">
                            <div class="project-content">
                              <h6>Closed</h6>
                              <h5 class="counter mb-0">10</h5>
                            </div>
                            <div class="project-small-chart-4 project-small"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 xl-4">
                          <div class="projects-main">
                            <div class="project-content">
                              <h6>Wont'fix</h6>
                              <h5 class="counter mb-0">25</h5>
                            </div>
                            <div class="project-small-chart-5 project-small"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 xl-4">
                          <div class="projects-main">
                            <div class="project-content">
                              <h6>Need's test</h6>
                              <h5 class="counter mb-0">5</h5>
                            </div>
                            <div class="project-small-chart-6 project-small"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 xl-100 github-lg">
                      <div class="show-value-top d-flex">
                        <div class="value-left d-inline-block">
                          <div class="square bg-primary d-inline-block"></div><span>Closed Issues</span>
                        </div>
                        <div class="value-right d-inline-block">
                          <div class="square d-inline-block bg-smooth-chart"></div><span>Issues</span>
                        </div>
                      </div>
                      <div class="github-chart">
                        <div class="flot-chart-placeholder" id="github-issues"></div>
                      </div>
                    </div>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="row"&gt;
&lt;div class="col-lg-6"&gt;
&lt;div class="row more-projects"&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="projects-main"&gt;
&lt;div class="project-content"&gt;
  &lt;h6&gt;Created&lt;/h6&gt;
  &lt;h5 class="counter mb-0"&gt;27&lt;/h5&gt;
&lt;/div&gt;
&lt;div class="project-small-chart-1 project-small"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="projects-main"&gt;
&lt;div class="project-content"&gt;
  &lt;h6&gt;Fixed&lt;/h6&gt;
  &lt;h5 class="counter mb-0"&gt;8&lt;/h5&gt;
&lt;/div&gt;
&lt;div class="project-small-chart-2 project-small"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="projects-main"&gt;
&lt;div class="project-content"&gt;
  &lt;h6&gt;Re-opened&lt;/h6&gt;
  &lt;h5 class="counter mb-0"&gt;2&lt;/h5&gt;
&lt;/div&gt;
&lt;div class="project-small-chart-3 project-small"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="projects-main"&gt;
&lt;div class="project-content"&gt;
  &lt;h6&gt;Closed&lt;/h6&gt;
  &lt;h5 class="counter mb-0"&gt;10&lt;/h5&gt;
&lt;/div&gt;
&lt;div class="project-small-chart-4 project-small"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="projects-main"&gt;
&lt;div class="project-content"&gt;
  &lt;h6&gt;Wont'fix&lt;/h6&gt;
  &lt;h5 class="counter mb-0"&gt;25&lt;/h5&gt;
&lt;/div&gt;
&lt;div class="project-small-chart-5 project-small"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-sm-6"&gt;
&lt;div class="projects-main"&gt;
&lt;div class="project-content"&gt;
  &lt;h6&gt;Need's test&lt;/h6&gt;
  &lt;h5 class="counter mb-0"&gt;5&lt;/h5&gt;
&lt;/div&gt;
&lt;div class="project-small-chart-6 project-small"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-lg-6"&gt;
&lt;div class="show-value-top d-flex"&gt;
&lt;div class="value-left d-inline-block"&gt;
&lt;div class="square bg-primary d-inline-block"&gt;&lt;/div&gt;
&lt;span&gt;Closed Issues&lt;/span&gt;
&lt;/div&gt;
&lt;div class="value-right d-inline-block"&gt;
&lt;div class="square d-inline-block bg-smooth-chart"&gt;&lt;/div&gt;
&lt;span&gt;Issues&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="github-chart"&gt;
&lt;div id="github-issues" class="flot-chart-placeholder"&gt;&lt;/div&gt;
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
        <div class="tab-content" id="tab-2">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Current Progress</h5>
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
                  <div class="table-responsive current-progress">
                    <table class="table table-bordernone">
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                              <div class="d-inline-block">
                                <h6>Web application</h6>
                                <p>Design & development</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle"><span>Latest Updated Today at 1:30 PM</span><span class="ml-current"><i class="fa fa-clock-o"></i>10:32</span><span class="ml-current"><i class="fa fa-comment"></i>540</span></div>
                          </td>
                          <td>
                            <div class="progress sm-progress-bar">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                              <div class="d-inline-block">
                                <h6>Login module</h6>
                                <p>Development</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle"><span>Latest Updated Today at 4:00 PM</span><span class="ml-current"><i class="fa fa-clock-o"></i>1:32</span><span class="ml-current"><i class="fa fa-comment"></i>700</span></div>
                          </td>
                          <td>
                            <div class="progress sm-progress-bar">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/7.jpg')}}" alt="">
                              <div class="d-inline-block">
                                <h6>Module testing</h6>
                                <p>Testing</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle"><span>Latest Updated Today at 5:45 PM</span><span class="ml-current"><i class="fa fa-clock-o"></i>11:40</span><span class="ml-current"><i class="fa fa-comment"></i>425</span></div>
                          </td>
                          <td>
                            <div class="progress sm-progress-bar">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive current-progress"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/1.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;h6&gt;Web application&lt;/h6&gt;
    &lt;p&gt;Design &amp; development&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;span&gt;Latest Updated Today at 1:30 PM&lt;/span&gt;
  &lt;span class="ml-current"&gt;&lt;i class="fa fa-clock-o"&gt;&lt;/i&gt;10:32&lt;/span&gt;
  &lt;span class="ml-current"&gt;&lt;i class="fa fa-comment"&gt;&lt;/i&gt;540&lt;/span&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="progress sm-progress-bar"&gt;
  &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/4.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;h6&gt;Login module&lt;/h6&gt;
    &lt;p&gt;Development&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;span&gt;Latest Updated Today at 4:00 PM&lt;/span&gt;
  &lt;span class="ml-current"&gt;&lt;i class="fa fa-clock-o"&gt;&lt;/i&gt;1:32&lt;/span&gt;
  &lt;span class="ml-current"&gt;&lt;i class="fa fa-comment"&gt;&lt;/i&gt;700&lt;/span&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="progress sm-progress-bar"&gt;
  &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/7.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;h6&gt;Module testing&lt;/h6&gt;
    &lt;p&gt;Testing&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;span&gt;Latest Updated Today at 5:45 PM&lt;/span&gt;
  &lt;span class="ml-current"&gt;&lt;i class="fa fa-clock-o"&gt;&lt;/i&gt;11:40&lt;/span&gt;
  &lt;span class="ml-current"&gt;&lt;i class="fa fa-comment"&gt;&lt;/i&gt;425&lt;/span&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="progress sm-progress-bar"&gt;
  &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
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
            <div class="col-xl-12 xl-100">
              <div class="card">
                <div class="card-header">
                  <h5>Budget Distribution</h5>
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
                  <div class="flot-chart-container budget-chart">
                    <div class="flot-chart-placeholder" id="default-pie-flot-chart"></div>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body chart-block"&gt;
&lt;div class="flot-chart-container budget-chart"&gt;
&lt;div id="default-pie-flot-chart" class="flot-chart-placeholder"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12 xl-100">
              <div class="card">
                <div class="card-header project-header">
                  <div class="row">
                    <div class="col-sm-8">
                      <h5>Spent</h5>
                    </div>
                    <div class="col-sm-4">
                      <div class="select2-drpdwn-project select-options">
                        <select class="form-control form-control-primary btn-square" name="select">
                          <option value="opt1">Today</option>
                          <option value="opt2">Yesterday</option>
                          <option value="opt3">Tomorrow</option>
                          <option value="opt4">Monthly</option>
                          <option value="opt5">Weekly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body spent">
                  <div class="spent-graph">
                    <div class="d-flex">
                      <div class="project-budget">
                        <h6>Weekly spent</h6>
                        <h2 class="mb-0"><span><i data-feather="dollar-sign"></i>12,5000</span></h2>
                      </div>
                      <div class="projects-main mb-0">
                        <div class="xm-mb-peity"><span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body spent">
                  <div class="spent-graph">
                    <div class="d-flex">
                      <div class="project-budget">
                        <h6>Total spent</h6>
                        <h2 class="mb-0"><span><i data-feather="dollar-sign"></i>15,7452</span></h2>
                      </div>
                      <div class="projects-main mb-0">
                        <div class="xm-mb-peity"><span class="bar-colours-2">5,7,3,5,2,3,9,6,5,9,5,3,5,2,5,3,3,9,6,5,9,7,9,6,5,9,7,3,5,2</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body spent">
                  <div class="spent-graph">
                    <div class="d-flex">
                      <div class="project-budget">
                        <h6>Remaining</h6>
                        <h2 class="mb-0"><span><i data-feather="dollar-sign"></i>18,5438</span></h2>
                      </div>
                      <div class="projects-main mb-0">
                        <div class="xm-mb-peity"><span class="bar-colours-3">9,7,3,5,2,5,3,5,3,9,6,5,9,3,5,2,5,3,6,5,9,7,9,2,5,3,7,9,5,6</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer spent">
                  <div class="spent-graph">
                    <div class="d-flex">
                      <div class="project-budget m-0">
                        <h6>Total Budget</h6>
                        <h2 class="mb-0"><span><i data-feather="dollar-sign"></i>34,5812</span></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-content" id="tab-3">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Team Members</h5>
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
                  <div class="table-responsive sellers team-members">
                    <table class="table table-bordernone">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Position</th>
                          <th scope="col">Office</th>
                          <th scope="col">E-Mail</th>
                          <th scope="col">Phone</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/6.jpg')}}" alt="">
                              <div class="d-inline-block">
                                <p>Jerry Patterson</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>Design Manager</p>
                          </td>
                          <td>
                            <p>Integer</p>
                          </td>
                          <td>
                            <p>jerry13@gmail.com</p>
                          </td>
                          <td>
                            <p>+91 264 570 4611</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/2.png')}}" alt="">
                              <div class="d-inline-block">
                                <p>Rosa Matthews</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>Director of Sales</p>
                          </td>
                          <td>
                            <p>Ipsum</p>
                          </td>
                          <td>
                            <p>ros456@gmail.com</p>
                          </td>
                          <td>
                            <p>+01 967 487 1873</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="">
                              <div class="d-inline-block">
                                <p>Alvaro Aguirre</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>Office Assistant</p>
                          </td>
                          <td>
                            <p>Praesent</p>
                          </td>
                          <td>
                            <p>alvar76@gmail.com</p>
                          </td>
                          <td>
                            <p>+48 724 585 0012</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/15.png')}}" alt="">
                              <div class="d-inline-block">
                                <p>Jerry Patterson</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>Programmer Analyst</p>
                          </td>
                          <td>
                            <p>Ipsum</p>
                          </td>
                          <td>
                            <p>jerry13@gmail.com</p>
                          </td>
                          <td>
                            <p>+91 264 570 4611</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                              <div class="d-inline-block">
                                <p>Anne Snyder</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>Social Worker</p>
                          </td>
                          <td>
                            <p>Donec</p>
                          </td>
                          <td>
                            <p>annsny@gmail.com</p>
                          </td>
                          <td>
                            <p>+61 480 087 1175</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="">
                              <div class="d-inline-block">
                                <p>Alana Slacker</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>Systems Engineer</p>
                          </td>
                          <td>
                            <p>Etiam</p>
                          </td>
                          <td>
                            <p>alana82@gmail.com</p>
                          </td>
                          <td>
                            <p>+75 483 761 4680</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive sellers team-members"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Name&lt;/th&gt;
&lt;th scope="col"&gt;Position&lt;/th&gt;
&lt;th scope="col"&gt;Office&lt;/th&gt;
&lt;th scope="col"&gt;E-Mail&lt;/th&gt;
&lt;th scope="col"&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/6.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Jerry Patterson&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Design Manager&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Integer&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;jerry13@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+91 264 570 4611&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/2.png')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Rosa Matthews&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Director of Sales&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Ipsum&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;ros456@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+01 967 487 1873&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/3.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alvaro Aguirre&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Office Assistant&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Praesent&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;alvar76@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+48 724 585 0012&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/15.png')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Jerry Patterson&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Programmer Analyst&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Ipsum&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;jerry13@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+91 264 570 4611&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/4.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Anne Snyder&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Social Worker&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Donec&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;annsny@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+61 480 087 1175&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
  &lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
  &lt;div class="d-inline-block"&gt;
    &lt;p&gt;Alana Slacker&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Systems Engineer&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Etiam&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;alana82@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+75 483 761 4680&lt;/p&gt;&lt;/td&gt;
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
<script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/excanvas.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.symbol.js')}}"></script>
<script src="{{asset('assets/js/chart/google/google-chart-loader.js')}}"></script>
<script src="{{asset('assets/js/chart/peity-chart/peity.jquery.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/project-custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection