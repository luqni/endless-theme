<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="<?php echo e(route('/')); ?>"><img src="<?php echo e(asset('assets/images/endless-logo.png')); ?>" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="#">
        <div class="profile-edit"><a href="#" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14">ELANA</h6>
      <p>general manager.</p>
    </div>
    <ul class="sidebar-menu">
      <li><a class="sidebar-header" href="<?php echo e(route('/')); ?>" target="_blank"><i data-feather="home"></i><span>Dashboard</span></a></li>
      <li class="active"><a class="sidebar-header" href="#"><i data-feather="anchor"></i><span>Starter Kit</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li class="active"><a href="#"><i class="fa fa-circle"></i>color version<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a class="active" href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Layout Light</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Layout Dark</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle"></i>Sidebar<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Light Sidebar</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Compact Sidebar</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Compact Icon Sidebar</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Dark Sidebar</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Sidebar Hidden</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Sidebar Fixed</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Sidebar With Image</a></li>
              <li><a class="disabled" href="" onclick="return false;"><i class="fa fa-circle"></i>Disable</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle"></i>Page layout<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Boxed</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>RTL</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>1 Column</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle"></i>Menu Options<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Hide menu on Scroll</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Vertical Menu</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Mega Menu</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Fix Header</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Fix Header & Sidebar                </a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle"></i>Footers<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Footer Light</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Footer Dark</a></li>
              <li><a href="<?php echo e(route('inner-page')); ?>"><i class="fa fa-circle"></i>Footer Fixed                                </a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a class="sidebar-header" href="http://support.pixelstrap.com/help-center" target="_blank"><i data-feather="headphones"></i><span>Raise Support</span></a></li>
      <li><a class="sidebar-header" href="<?php echo e(route('inner-page')); ?>" target="_blank"><i data-feather="file-text"></i><span>Documentation</span></a></li>
    </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->
<!-- Right sidebar Start-->
<div class="right-sidebar" id="right_side_bar">
  <div>
    <div class="container p-0">
      <div class="modal-header p-l-20 p-r-20">
        <div class="col-sm-8 p-0">
          <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
        </div>
        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
      </div>
    </div>
    <div class="friend-list-search mt-0">
      <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
    </div>
    <div class="p-l-30 p-r-30">
      <div class="chat-box">
        <div class="people-list friend-list">
          <ul class="list">
            <li class="clearfix"><img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Vincent Porter</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/2.png')); ?>" alt="">
              <div class="status-circle away"></div>
              <div class="about">
                <div class="name">Ain Chavez</div>
                <div class="status"> 28 minutes ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/8.jpg')); ?>" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Kori Thomas</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Erica Hughes</div>
                <div class="status"> Online</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/5.jpg')); ?>" alt="">
              <div class="status-circle offline"></div>
              <div class="about">
                <div class="name">Ginger Johnston</div>
                <div class="status"> 2 minutes ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/6.jpg')); ?>" alt="">
              <div class="status-circle away"></div>
              <div class="about">
                <div class="name">Prasanth Anand</div>
                <div class="status"> 2 hour ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/7.jpg')); ?>" alt="">
              <div class="status-circle online"></div>
              <div class="about">
                <div class="name">Hileri Jecno</div>
                <div class="status"> Online</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Right sidebar Ends--><?php /**PATH C:\wamp64\www\starter-kit\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>