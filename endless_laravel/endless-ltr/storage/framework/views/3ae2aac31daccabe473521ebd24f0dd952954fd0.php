
<?php $__env->startSection('title', 'Endless - Premium Laravel Admin Template'); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chartist.css')); ?>">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<!-- Plugins css Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title', 'Default'); ?>
<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Default</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-8 xl-100">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">5789</span></h5>
                    <p>Total Visits</p>
                  </div><i data-feather="tag"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">4986</span></h5>
                    <p>Total Sale</p>
                  </div><i data-feather="shopping-cart"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">8568</span></h5>
                    <p>Total Value</p>
                  </div><i data-feather="sun"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h5>Production Valuation</h5>
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
              <div class="show-value-top d-flex">
                <div class="value-left d-inline-block">
                  <div class="square bg-primary d-inline-block"></div><span>Total Earning</span>
                </div>
                <div class="value-right d-inline-block">
                  <div class="square d-inline-block bg-smooth-chart"></div><span>Total Tax</span>
                </div>
              </div>
              <div class="smooth-chart flot-chart-container"></div>
              <div class="code-box-copy">
                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="show-value-top d-flex"&gt;
&lt;div class="value-left d-inline-block"&gt;
&lt;div class="square bg-primary d-inline-block"&gt;&lt;/div&gt;
&lt;span&gt;Total Earning&lt;/span&gt;
&lt;/div&gt;
&lt;div class="value-right d-inline-block"&gt;
&lt;div class="square d-inline-block bg-smooth-chart"&gt;&lt;/div&gt;
&lt;span&gt;Total Tax&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="smooth-chart flot-chart-container"&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-100">
      <div class="card">
        <div class="card-header">
          <h5>Activity</h5>
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
        <div class="card-body activity-scroll">
          <div class="activity">
            <div class="media">
              <div class="gradient-round m-r-30 gradient-line-1"><i data-feather="shopping-bag"></i></div>
              <div class="media-body">
                <h6>New Sale <span class="pull-right f-14">New</span></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.</p>
              </div>
            </div>
            <div class="media">
              <div class="gradient-round m-r-30 gradient-line-1"><i data-feather="message-circle"></i></div>
              <div class="media-body">
                <h6>New Message <span class="pull-right f-14">14m Ago</span></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.</p>
              </div>
            </div>
            <div class="media">
              <div class="gradient-round m-r-30 small-line"><i data-feather="minus-circle"></i></div>
              <div class="media-body">
                <h6>New Report <span class="pull-right f-14">14m Ago</span></h6>
                <p class="activity-xl">Lorem Ipsum is simply dummy text.</p>
              </div>
            </div>
            <div class="media">
              <div class="gradient-round m-r-30 gradient-line-1"><i data-feather="shopping-bag"></i></div>
              <div class="media-body">
                <h6>New Sale <span class="pull-right f-14">14m Ago</span></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.</p>
              </div>
            </div>
            <div class="media">
              <div class="gradient-round m-r-30 medium-line"><i data-feather="tag"></i></div>
              <div class="media-body">
                <h6>New Visits <span class="pull-right f-14">14m Ago</span></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.</p>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="activity"&gt;
&lt;div class="media"&gt;
&lt;div class="gradient-round m-r-30 gradient-line-1"&gt;
&lt;i data-feather="shopping-bag"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6&gt;New Sale &lt;span class="pull-right f-14"&gt;New&lt;/span&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="gradient-round m-r-30 gradient-line-1"&gt;
&lt;i data-feather="message-circle"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6&gt;New Message &lt;span class="pull-right f-14"&gt;14m Ago&lt;/span&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="gradient-round m-r-30 small-line"&gt;
&lt;i data-feather="minus-circle"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6&gt;New Report &lt;span class="pull-right f-14"&gt;14m Ago&lt;/span&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="gradient-round m-r-30 gradient-line-1"&gt;
&lt;i data-feather="shopping-bag"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6&gt;New Sale &lt;span class="pull-right f-14"&gt;14m Ago&lt;/span&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="gradient-round m-r-30 medium-line"&gt;
&lt;i data-feather="tag"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6&gt;New Visits &lt;span class="pull-right f-14"&gt;14m Ago&lt;/span&gt;&lt;/h6&gt;
&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry.&lt;/p&gt;
&lt;/div&gt;
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
          <h5>Total Profit</h5><span class="d-block fonts-dashboard">All Custom Income</span>
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
          <div class="knob-block text-center">
            <input class="knob" data-width="280" data-height="280" data-thickness=".2" data-angleoffset="90" data-fgcolor="#4466f2" data-bgcolor="#f6f7fb" data-linecap="round" value="35">
          </div>
          <div class="show-value d-flex">
            <div class="value-left">
              <div class="square bg-primary d-inline-block"></div><span>Total Profit</span>
            </div>
            <div class="value-right">
              <div class="square bg-light d-inline-block"></div><span>Total Investment</span>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="knob-block text-center"&gt;
&lt;input class="knob" data-width="280" data-height="280" data-thickness=".2" data-angleOffset=90 data-fgColor="#4466f2" data-bgColor="#f6f7fb" data-linecap=round value="35"&gt;
&lt;/div&gt;
&lt;div class="show-value d-flex"&gt;
&lt;div class="value-left"&gt;
&lt;div class="square bg-primary d-inline-block"&gt;&lt;/div&gt;
&lt;span&gt;Total Profit&lt;/span&gt;
&lt;/div&gt;
&lt;div class="value-right"&gt;
&lt;div class="square bg-light d-inline-block"&gt;&lt;/div&gt;
&lt;span&gt;Total Investment&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 col-md-6">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body progress-media">
              <div class="media">
                <div class="media-body">
                  <h5>Total Review</h5><span class="mb-0 d-block">Customer Review</span>
                </div><i data-feather="thumbs-up"></i>
              </div>
              <div class="progress-bar-showcase">
                <div class="progress sm-progress-bar">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="progress-change"><span>Change</span><span class="pull-right">95%</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-body progress-media">
              <div class="media">
                <div class="media-body">
                  <h5>Total Feedback</h5><span class="mb-0 d-block">Feedback</span>
                </div><i data-feather="message-circle"></i>
              </div>
              <div class="progress-bar-showcase">
                <div class="progress sm-progress-bar">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="progress-change"><span>Change</span><span class="pull-right">85%</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 col-md-6">
      <div class="card user-card">
        <div class="card-body">
          <div class="online-user">
            <h5 class="font-primary f-18 mb-0">Online</h5>
          </div>
          <div class="user-card-image"><img class="img-fluid rounded-circle image-radius" src="<?php echo e(asset('assets/images/dashboard/designer.jpg')); ?>" alt=""></div>
          <div class="user-deatils text-center">
            <h5>Marshi Kisteen</h5>
            <h6 class="mb-0">marshikisteen@gmail.com</h6>
          </div>
          <div class="user-badge text-center"><a class="badge badge-pill badge-light" href="#">Dashboard</a><a class="badge badge-pill badge-light" href="#">Ui</a><a class="badge badge-pill badge-light" href="#">Xi</a><a href="#"><span class="badge badge-pill badge-light active">2+</span></a></div>
          <div class="card-footer row pb-0 text-center">
            <div class="col-6">
              <div class="d-flex user-footer"><i class="m-r-10" data-feather="message-square"></i>
                <h6 class="f-18 mb-0">Message</h6>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex user-footer"><i class="m-r-10" data-feather="briefcase"></i>
                <h6 class="f-18 mb-0">Portfolio</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal">
        <div class="card-header card-header-border">
          <div class="row">
            <div class="col-sm-6">
              <h5>New User</h5>
            </div>
            <div class="col-sm-6">
              <div class="pull-right right-header"><span>Month</span><span>
                  <button class="btn btn-primary btn-pill">Today</button></span></div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="new-users">
            <div class="media"><img class="rounded-circle image-radius m-r-15" src="<?php echo e(asset('assets/images/user/2.png')); ?>" alt="">
              <div class="media-body">
                <h6 class="mb-0 f-w-700">Nick Stone</h6>
                <p>Visual Designer, Github Inc</p>
              </div><span class="pull-right">
                <button class="btn btn-pill btn-outline-light">Follow</button></span>
            </div>
            <div class="media"><img class="rounded-circle image-radius m-r-15" src="<?php echo e(asset('assets/images/user/5.jpg')); ?>" alt="">
              <div class="media-body">
                <h6 class="mb-0 f-w-700">Milano Esco</h6>
                <p>Visual Designer, Github Inc</p>
              </div><span class="pull-right">
                <button class="btn btn-pill btn-outline-light">Follow</button></span>
            </div>
            <div class="media"><img class="rounded-circle image-radius m-r-15" src="<?php echo e(asset('assets/images/user/3.jpg')); ?>" alt="">
              <div class="media-body">
                <h6 class="mb-0 f-w-700">Wiltor Noice</h6>
                <p>Visual Designer, Github Inc</p>
              </div><span class="pull-right">
                <button class="btn btn-pill btn-outline-light">Follow</button></span>
            </div>
            <div class="media"><img class="rounded-circle image-radius m-r-15" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
              <div class="media-body">
                <h6 class="mb-0 f-w-700">Anna Strong</h6>
                <p>Visual Designer, Github Inc</p>
              </div><span class="pull-right">
                <button class="btn btn-pill btn-outline-light">Follow</button></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal">
        <div class="card-header card-header-border">
          <div class="row">
            <div class="col-sm-7">
              <h5>Recent Notification</h5>
            </div>
            <div class="col-sm-5">
              <div class="pull-right right-header">
                <div class="onhover-dropdown">
                  <button class="btn btn-primary btn-pill" type="button">All <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                  <div class="onhover-show-div right-header-dropdown"><a class="d-block" href="#">Order</a><a class="d-block" href="#">Download</a><a class="d-block" href="#">Trash</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body recent-notification">
          <div class="media">
            <h6>09:00</h6>
            <div class="media-body"><span>Lorem ipsum dolor sit amit,consectetur eiusmdd.</span>
              <p class="f-12">By Kan</p>
            </div>
          </div>
          <div class="media">
            <h6>10:50</h6>
            <div class="media-body"><span>Lorem ipsum.</span>
              <p class="f-12">By Tailer</p>
            </div>
          </div>
          <div class="media">
            <h6>01:00</h6>
            <div class="media-body"><span>Lorem ipsum dolor sit amit,consectetur eiusmdd.</span>
              <p class="f-12">By Kaint</p>
            </div>
          </div>
          <div class="media">
            <h6>05:00</h6>
            <div class="media-body"><span>Lorem ipsum dolor sit amit.</span>
              <p class="f-12">By call</p>
            </div>
          </div>
          <div class="media">
            <h6>12:00</h6>
            <div class="media-body"><span>Lorem ipsum dolor sit.</span>
              <p class="f-12">By Waiter</p>
            </div>
          </div>
          <div class="media">
            <h6>08:20</h6>
            <div class="media-body"><span>Lorem ipsum dolor sit amit,consectetur eiusmdd dolor sit amit.</span>
              <p class="f-12">By Comman</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Calculation</h5>
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
          <div class="show-value-top d-flex">
            <div class="value-left d-inline-block">
              <div class="square bg-primary d-inline-block"></div><span>Total Income</span>
            </div>
            <div class="value-right d-inline-block">
              <div class="square d-inline-block bg-smooth-chart"></div><span>Total Loss</span>
            </div>
          </div>
          <div class="ct-svg flot-chart-container"></div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="show-value-top d-flex"&gt;
&lt;div class="value-left d-inline-block"&gt;
&lt;div class="square bg-primary d-inline-block"&gt;&lt;/div&gt;
&lt;span&gt;Total Income&lt;/span&gt;
&lt;/div&gt;
&lt;div class="value-right d-inline-block"&gt;
&lt;div class="square d-inline-block bg-smooth-chart"&gt;&lt;/div&gt;
&lt;span&gt;Total Loss&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ct-svg flot-chart-container"&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-7 xl-100">
      <div class="card">
        <div class="card-header card-header-border chat-header-default">
          <div class="row">
            <div class="col-sm-6">
              <h5>Conversations</h5>
            </div>
            <div class="col-sm-6">
              <div class="right-header pull-right m-t-5">
                <div class="onhover-dropdown"><i data-feather="more-horizontal"></i>
                  <div class="onhover-show-div right-header-dropdown more-dropdown"><a class="d-block" href="#">View</a><a class="d-block" href="#">Media</a><a class="d-block" href="#">Search</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body chat-box dashboard-chat">
          <div class="chat">
            <div class="media left-side-chat"><img class="rounded-circle chat-user-img img-60 m-r-20" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
              <div class="media-body">
                <div class="message-main">
                  <p class="mb-0">Lorem Ipsum is simply dummy text of the </p>
                </div>
              </div>
            </div>
            <div class="media right-side-chat">
              <div class="media-body text-right">
                <div class="message-main">
                  <p class="pull-right">Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has been the industry's</p>
                  <div class="clearfix"></div>
                </div>
                <div class="sub-message message-main">
                  <p class="pull-right mb-0">Lorem Ipsum is simply dummy text of the </p>
                  <div class="clearfix"></div>
                </div>
              </div><img class="rounded-circle chat-user-img img-60 m-l-20" src="<?php echo e(asset('assets/images/user/5.jpg')); ?>" alt="">
            </div>
            <div class="media left-side-chat"><img class="rounded-circle chat-user-img img-60 m-r-20" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
              <div class="media-body">
                <div class="message-main">
                  <p>Lorem Ipsum is simply dummy text of the printing</p>
                </div>
                <div class="sub-message message-main smiley-bg"><img src="<?php echo e(asset('assets/images/dashboard/smily.png')); ?>" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <div class="media chat-footer bg-primary"><i class="icon-face-smile"></i>
          <div class="media-body">
            <input class="form-control" type="text" placeholder="Type your message" required="">
          </div><i data-feather="send"></i>
        </div>
      </div>
    </div>
    <div class="col-xl-5 xl-100">
      <div class="card">
        <div class="card-header card-header-border">
          <div class="row">
            <div class="col-sm-6">
              <h5>Selling Update</h5>
            </div>
            <div class="col-sm-6">
              <div class="pull-right right-header">
                <div class="onhover-dropdown">
                  <button class="btn btn-primary btn-pill" type="button">All <span class="pr-0"><i class="fa fa-angle-down"></i></span></button>
                  <div class="onhover-show-div right-header-dropdown"><a class="d-block" href="#">Shipping</a><a class="d-block" href="#">Purchase</a><a class="d-block" href="#">Total Sell</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <div class="selling-update text-center"><i data-feather="activity"></i>
                <h5 class="mb-0 f-18">+500</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center"><i data-feather="anchor"></i>
                <h5 class="mb-0 f-18">+120</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center"><i data-feather="box"></i>
                <h5 class="mb-0 f-18">-410</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center"><i data-feather="book"></i>
                <h5 class="mb-0 f-18">-155</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center"><i data-feather="compass"></i>
                <h5 class="mb-0 f-18">+920</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center"><i data-feather="cpu"></i>
                <h5 class="mb-0 f-18">+500</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center mb-0 xs-mb-selling"><i data-feather="dollar-sign"></i>
                <h5 class="mb-0 f-18">+500</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center mb-0 xs-mb-selling"><i data-feather="slack"></i>
                <h5 class="mb-0 f-18">+120</h5>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selling-update text-center mb-0"><i data-feather="umbrella"></i>
                <h5 class="mb-0 f-18">-410</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/chart/chartist/chartist.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/knob/knob.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/knob/knob-chart.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/dashboard/default.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/index.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ekta/backup/html Theme/laravel endless/endless/resources/views/dashboards/default.blade.php ENDPATH**/ ?>