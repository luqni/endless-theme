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

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='blade-components' ? 'active' : ''); ?>" href="<?php echo e(route('blade-components')); ?>"><i data-feather="menu"></i><span>Blade Components</span></a></li>
      
      <li class="<?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'active' : ''); ?>">
        <a class="sidebar-header" href="#"><i data-feather="home"></i><span>Dashboard</span>
          <span class="badge badge-pill badge-primary">6</span><i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('default')); ?>" class="<?php echo e(Route::currentRouteName()=='default' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Default</a></li>
          <li><a href="<?php echo e(route('e-commerce')); ?>" class="<?php echo e(Route::currentRouteName()=='e-commerce' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>E-commerce</a></li>
          <li><a href="<?php echo e(route('university')); ?>" class="<?php echo e(Route::currentRouteName()=='university' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>University</a></li>
          <li><a href="<?php echo e(route('crypto')); ?>" class="<?php echo e(Route::currentRouteName()=='crypto' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Crypto</a></li>
          <li><a href="<?php echo e(route('server')); ?>" class="<?php echo e(Route::currentRouteName()=='server' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Server</a></li>
          <li><a href="<?php echo e(route('project')); ?>" class="<?php echo e(Route::currentRouteName()=='project' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Project Dashboard</a></li>
        </ul>
      </li>
      
      <li class="<?php echo e(request()->route()->getPrefix() == '/widgets' ? 'active' : ''); ?>">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>Widgets</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('general-widget')); ?>" class="<?php echo e(Route::currentRouteName()=='general-widget' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>General widget</a></li>
          <li><a href="<?php echo e(route('chart-widget')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-widget' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Chart widget</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/base' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="box"></i><span> Base</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(Route::currentRouteName()=='state-color' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>State color</a></li>
          <li><a href="<?php echo e(route('typography')); ?>" class="<?php echo e(Route::currentRouteName()=='typography' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Typography</a></li>
          <li><a href="<?php echo e(route('avatars')); ?>" class="<?php echo e(Route::currentRouteName()=='avatars' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Avatars</a></li>
          <li><a href="<?php echo e(route('helper-classes')); ?>" class="<?php echo e(Route::currentRouteName()=='helper-classes' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>helper classes</a></li>
          <li><a href="<?php echo e(route('grid')); ?>" class="<?php echo e(Route::currentRouteName()=='grid' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Grid</a></li>
          <li><a href="<?php echo e(route('tag-pills')); ?>" class="<?php echo e(Route::currentRouteName()=='tag-pills' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Tag & pills</a></li>
          <li><a href="<?php echo e(route('progress-bar')); ?>" class="<?php echo e(Route::currentRouteName()=='progress-bar' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Progress</a></li>
          <li><a href="<?php echo e(route('modal')); ?>" class="<?php echo e(Route::currentRouteName()=='modal' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Modal</a></li>
          <li><a href="<?php echo e(route('alert')); ?>" class="<?php echo e(Route::currentRouteName()=='alert' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Alert</a></li>
          <li><a href="<?php echo e(route('popover')); ?>" class="<?php echo e(Route::currentRouteName()=='popover' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Popover</a></li>
          <li><a href="<?php echo e(route('tooltip')); ?>" class="<?php echo e(Route::currentRouteName()=='tooltip' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Tooltip</a></li>
          <li><a href="<?php echo e(route('loader')); ?>" class="<?php echo e(Route::currentRouteName()=='loader' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Spinners</a></li>
          <li><a href="<?php echo e(route('dropdown')); ?>" class="<?php echo e(Route::currentRouteName()=='dropdown' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Dropdown</a></li> 
          <li class="tab-nav <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active':''); ?>">
            <a href="#"><i class="fa fa-circle dot"></i> Tabs <i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'menu-open':''); ?> " >
              <li><a href="<?php echo e(route('tab-bootstrap')); ?>" class="<?php echo e(Route::currentRouteName()=='tab-bootstrap' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Bootstrap Tabs</a></li>
              <li><a href="<?php echo e(route('tab-material')); ?>" class="<?php echo e(Route::currentRouteName()=='tab-material' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Line Tabs</a></li>
            </ul>
          </li>          
          <li><a href="<?php echo e(route('according')); ?>" class="<?php echo e(Route::currentRouteName()=='according' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>According</a></li>
          <li><a href="<?php echo e(route('navs')); ?>" class="<?php echo e(Route::currentRouteName()=='navs' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Navs</a></li>
          <li><a href="<?php echo e(route('box-shadow')); ?>" class="<?php echo e(Route::currentRouteName()=='box-shadow' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Shadow</a></li>
          <li><a href="<?php echo e(route('list')); ?>" class="<?php echo e(Route::currentRouteName()=='list' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Lists</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/advance' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="folder-plus"></i><span> Advance</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('scrollable')); ?>" class="<?php echo e(Route::currentRouteName()=='scrollable' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Scrollable</a></li>
          <li><a href="<?php echo e(route('tree')); ?>" class="<?php echo e(Route::currentRouteName()=='tree' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Tree view</a></li>
          <li><a href="<?php echo e(route('bootstrap-notify')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-notify' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Bootstrap Notify</a></li>
          <li><a href="<?php echo e(route('rating')); ?>" class="<?php echo e(Route::currentRouteName()=='rating' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Rating</a></li>
          <li><a href="<?php echo e(route('dropzone')); ?>" class="<?php echo e(Route::currentRouteName()=='dropzone' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>dropzone</a></li>
          <li><a href="<?php echo e(route('tour')); ?>" class="<?php echo e(Route::currentRouteName()=='tour' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Tour</a></li>
          <li><a href="<?php echo e(route('sweet-alert2')); ?>" class="<?php echo e(Route::currentRouteName()=='sweet-alert2' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>SweetAlert2</a></li>
          <li><a href="<?php echo e(route('modal-animated')); ?>" class="<?php echo e(Route::currentRouteName()=='modal-animated' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Animated Modal</a></li>
          <li><a href="<?php echo e(route('owl-carousel')); ?>" class="<?php echo e(Route::currentRouteName()=='owl-carousel' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Owl Carousel</a></li>
          <li><a href="<?php echo e(route('ribbons')); ?>" class="<?php echo e(Route::currentRouteName()=='ribbons' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Ribbons</a></li>
          <li><a href="<?php echo e(route('pagination')); ?>" class="<?php echo e(Route::currentRouteName()=='pagination' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Pagination</a></li>
          <li><a href="<?php echo e(route('steps')); ?>" class="<?php echo e(Route::currentRouteName()=='steps' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Steps</a></li>
          <li><a href="<?php echo e(route('breadcrumb')); ?>" class="<?php echo e(Route::currentRouteName()=='breadcrumb' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Breadcrumb</a></li>
          <li><a href="<?php echo e(route('range-slider')); ?>" class="<?php echo e(Route::currentRouteName()=='range-slider' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Range Slider</a></li>
          <li><a href="<?php echo e(route('image-cropper')); ?>" class="<?php echo e(Route::currentRouteName()=='image-cropper' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Image cropper</a></li>
          <li><a href="<?php echo e(route('sticky')); ?>" class="<?php echo e(Route::currentRouteName()=='sticky' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Sticky</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/animation' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="cloud-drizzle"></i><span>Animation<span class="badge badge-danger ml-3">Hot</span></span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('animate')); ?>" class="<?php echo e(Route::currentRouteName()=='animate' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Animate</a></li>
          <li><a href="<?php echo e(route('scroll-reveal')); ?>" class="<?php echo e(Route::currentRouteName()=='scroll-reveal' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Scroll Reveal</a></li>
          <li><a href="<?php echo e(route('aos')); ?>" class="<?php echo e(Route::currentRouteName()=='aos' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>AOS Animation</a></li>
          <li><a href="<?php echo e(route('tilt')); ?>" class="<?php echo e(Route::currentRouteName()=='tilt' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Tilt Animation</a></li>
          <li><a href="<?php echo e(route('wow')); ?>" class="<?php echo e(Route::currentRouteName()=='wow' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Wow Animation</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/icons' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="command"></i><span>Icons</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('flag-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='flag-icon' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Flag icon</a></li>
          <li><a href="<?php echo e(route('font-awesome')); ?>" class="<?php echo e(Route::currentRouteName()=='font-awesome' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Fontawesome Icon</a></li>
          <li><a href="<?php echo e(route('ico-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='ico-icon' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Ico Icon</a></li>
          <li><a href="<?php echo e(route('themify-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='themify-icon' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Thimify Icon</a></li>
          <li><a href="<?php echo e(route('feather-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='feather-icon' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Feather icon</a></li>
          <li><a href="<?php echo e(route('whether-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='whether-icon' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Whether Icon</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/buttons' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="cloud"></i><span>Buttons</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('buttons')); ?>" class="<?php echo e(Route::currentRouteName()=='buttons' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Default Style</a></li>
          <li><a href="<?php echo e(route('buttons-flat')); ?>" class="<?php echo e(Route::currentRouteName()=='buttons-flat' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Flat Style</a></li>
          <li><a href="<?php echo e(route('buttons-edge')); ?>" class="<?php echo e(Route::currentRouteName()=='buttons-edge' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Edge Style</a></li>
          <li><a href="<?php echo e(route('raised-button')); ?>" class="<?php echo e(Route::currentRouteName()=='raised-button' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Raised Style</a></li>
          <li><a href="<?php echo e(route('button-group')); ?>" class="<?php echo e(Route::currentRouteName()=='button-group' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Button Group</a></li>
        </ul>
      </li>

      <li class="<?php echo e(in_array(Route::currentRouteName(), ['form-validation','base-input', 'radio-checkbox-control', 'input-group', 'megaoptions', 'datepicker', 'time-picker', 'datetimepicker', 'daterangepicker', 'touchspin', 'select2', 'switch', 'typeahead', 'clipboard', 'default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'active':''); ?>"><a class="sidebar-header" href="#"><i data-feather="file-text"></i><span>Forms</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li class="<?php echo e(request()->route()->getPrefix() == '/form-controls' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Form Controls<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('form-validation')); ?>" class="<?php echo e(Route::currentRouteName()=='form-validation' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Form Validation</a></li>
              <li><a href="<?php echo e(route('base-input')); ?>" class="<?php echo e(Route::currentRouteName()=='base-input' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Base Inputs</a></li>
              <li><a href="<?php echo e(route('radio-checkbox-control')); ?>" class="<?php echo e(Route::currentRouteName()=='radio-checkbox-control' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Checkbox & Radio</a></li>
              <li><a href="<?php echo e(route('input-group')); ?>" class="<?php echo e(Route::currentRouteName()=='input-group' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Input Groups</a></li>
              <li><a href="<?php echo e(route('megaoptions')); ?>" class="<?php echo e(Route::currentRouteName()=='megaoptions' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Mega Options</a></li>
            </ul>
          </li>
          <li class="<?php echo e(request()->route()->getPrefix() == '/form-widgets' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Form Widgets<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('datepicker')); ?>" class="<?php echo e(Route::currentRouteName()=='datepicker' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Datepicker</a></li>
              <li><a href="<?php echo e(route('time-picker')); ?>" class="<?php echo e(Route::currentRouteName()=='time-picker' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Timepicker</a></li>
              <li><a href="<?php echo e(route('datetimepicker')); ?>" class="<?php echo e(Route::currentRouteName()=='datetimepicker' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Datetimepicker</a></li>
              <li><a href="<?php echo e(route('daterangepicker')); ?>" class="<?php echo e(Route::currentRouteName()=='daterangepicker' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Daterangepicker</a></li>
              <li><a href="<?php echo e(route('touchspin')); ?>" class="<?php echo e(Route::currentRouteName()=='touchspin' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Touchspin</a></li>
              <li><a href="<?php echo e(route('select2')); ?>" class="<?php echo e(Route::currentRouteName()=='select2' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Select2</a></li>
              <li><a href="<?php echo e(route('switch')); ?>" class="<?php echo e(Route::currentRouteName()=='switch' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Switch</a></li>
              <li><a href="<?php echo e(route('typeahead')); ?>" class="<?php echo e(Route::currentRouteName()=='typeahead' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Typeahead</a></li>
              <li><a href="<?php echo e(route('clipboard')); ?>" class="<?php echo e(Route::currentRouteName()=='clipboard' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Clipboard</a></li>
            </ul>
          </li>
          <li class="<?php echo e(request()->route()->getPrefix() == '/form-layout' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Form Layout<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('default-form')); ?>" class="<?php echo e(Route::currentRouteName()=='default-form' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Default Forms</a></li>
              <li><a href="<?php echo e(route('form-wizard')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Form Wizard 1</a></li>
              <li><a href="<?php echo e(route('form-wizard-two')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard-two' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Form Wizard 2</a></li>
              <li><a href="<?php echo e(route('form-wizard-three')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard-three' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Form Wizard 3</a></li>
              <li><a href="<?php echo e(route('form-wizard-four')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard-four' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Form Wizard 4</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="<?php echo e(in_array(Route::currentRouteName(), ['bootstrap-basic-table','bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components', 'datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source', 'datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller', 'jsgrid-table']) ? 'active':''); ?>"><a class="sidebar-header" href="#"><i data-feather="server"></i><span>Tables</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li class="<?php echo e(request()->route()->getPrefix() == '/bootstrap-tables' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Bootstrap Tables<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('bootstrap-basic-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-basic-table' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Basic Tables</a></li>
              <li><a href="<?php echo e(route('bootstrap-sizing-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-sizing-table' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Sizing Tables</a></li>
              <li><a href="<?php echo e(route('bootstrap-border-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-border-table' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Border Tables</a></li>
              <li><a href="<?php echo e(route('bootstrap-styling-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-styling-table' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Styling Tables</a></li>
              <li><a href="<?php echo e(route('table-components')); ?>" class="<?php echo e(Route::currentRouteName()=='table-components' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Table components</a></li>
            </ul>
          </li>
          <li class="<?php echo e(request()->route()->getPrefix() == '/data-tables' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Data Tables<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('datatable-basic-init')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-basic-init' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Basic Init</a></li>
              <li><a href="<?php echo e(route('datatable-advance')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-advance' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Advance Init</a></li>
              <li><a href="<?php echo e(route('datatable-styling')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-styling' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Styling</a></li>
              <li><a href="<?php echo e(route('datatable-ajax')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ajax' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>AJAX</a></li>
              <li><a href="<?php echo e(route('datatable-server-side')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-server-side' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Server Side</a></li>
              <li><a href="<?php echo e(route('datatable-plugin')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-plugin' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Plug-in</a></li>
              <li><a href="<?php echo e(route('datatable-api')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-api' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>API</a></li>
              <li><a href="<?php echo e(route('datatable-data-source')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-data-source' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Data Sources</a></li>
            </ul>
          </li>
          <li class="<?php echo e(request()->route()->getPrefix() == '/extension-data-tables' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Extension Data Tables<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('datatable-ext-autofill')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-autofill' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Auto Fill</a></li>
              <li><a href="<?php echo e(route('datatable-ext-basic-button')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-basic-button' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Basic Button</a></li>
              <li><a href="<?php echo e(route('datatable-ext-col-reorder')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-col-reorder' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Column Reorder</a></li>
              <li><a href="<?php echo e(route('datatable-ext-fixed-header')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-fixed-header' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Fixed Header</a></li>
              <li><a href="<?php echo e(route('datatable-ext-html-5-data-export')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-html-5-data-export' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>HTML 5 Export</a></li>
              <li><a href="<?php echo e(route('datatable-ext-key-table')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-key-table' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Key Table</a></li>
              <li><a href="<?php echo e(route('datatable-ext-responsive')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-responsive' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Responsive</a></li>
              <li><a href="<?php echo e(route('datatable-ext-row-reorder')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-row-reorder' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Row Reorder</a></li>
              <li><a href="<?php echo e(route('datatable-ext-scroller')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-scroller' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Scroller</a></li>
            </ul>
          </li>
          <li class="<?php echo e(request()->route()->getPrefix() == '/tables' ? 'active' : ''); ?>"><a href="<?php echo e(route('jsgrid-table')); ?>" class="<?php echo e(Route::currentRouteName()=='jsgrid-table' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Js Grid Table</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/cards' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="book"></i><span>Cards</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('basic-card')); ?>" class="<?php echo e(Route::currentRouteName()=='basic-card' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Basic Card</a></li>
          <li><a href="<?php echo e(route('creative-card')); ?>" class="<?php echo e(Route::currentRouteName()=='creative-card' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Creative Card</a></li>
          <li><a href="<?php echo e(route('tabbed-card')); ?>" class="<?php echo e(Route::currentRouteName()=='tabbed-card' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Tabbed Card</a></li>
          <li><a href="<?php echo e(route('dragable-card')); ?>" class="<?php echo e(Route::currentRouteName()=='dragable-card' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Draggable Card</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/timeline' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="sliders"></i><span>Timeline</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('timeline-v-1')); ?>" class="<?php echo e(Route::currentRouteName()=='timeline-v-1' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Timeline 1</a></li>
          <li><a href="<?php echo e(route('timeline-v-2')); ?>" class="<?php echo e(Route::currentRouteName()=='timeline-v-2' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Timeline 2</a></li>
          <li><a href="<?php echo e(route('timeline-small')); ?>" class="<?php echo e(Route::currentRouteName()=='timeline-small' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Timeline 3</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/charts' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="bar-chart"></i><span>Charts</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('chart-google')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-google' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Google Chart</a></li>
          <li><a href="<?php echo e(route('chart-sparkline')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-sparkline' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>sparkline chart</a></li>
          <li><a href="<?php echo e(route('chart-flot')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-flot' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Flot Chart</a></li>
          <li><a href="<?php echo e(route('chart-knob')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-knob' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Knob Chart</a></li>
          <li><a href="<?php echo e(route('chart-morris')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-morris' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Morris Chart</a></li>
          <li><a href="<?php echo e(route('chartjs')); ?>" class="<?php echo e(Route::currentRouteName()=='chartjs' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>chatjs Chart</a></li>
          <li><a href="<?php echo e(route('chartist')); ?>" class="<?php echo e(Route::currentRouteName()=='chartist' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>chartist Chart</a></li>
          <li><a href="<?php echo e(route('chart-peity')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-peity' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Peity Chart</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/maps' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="map"></i><span>Maps</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('map-js')); ?>" class="<?php echo e(Route::currentRouteName()=='map-js' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Maps JS</a></li>
          <li><a href="<?php echo e(route('vector-map')); ?>" class="<?php echo e(Route::currentRouteName()=='vector-map' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Vector Maps</a></li>
        </ul>
      </li>

      <li class="<?php echo e(in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'template-email-2', 'ecommerce-templates', 'email-order-success']) ? 'active':''); ?>"><a class="sidebar-header" href="#"><i data-feather="printer"></i><span>Email Templates</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li class="<?php echo e(request()->route()->getPrefix() == 'email-template/basic' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Basic<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('basic-template')); ?>" class="<?php echo e(Route::currentRouteName()=='basic-template' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Basic Email</a></li>
              <li><a href="<?php echo e(route('email-header')); ?>" class="<?php echo e(Route::currentRouteName()=='email-header' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Basic With Header</a></li>
            </ul>
          </li>
        </ul>
        <ul class="sidebar-submenu">
          <li class="<?php echo e(request()->route()->getPrefix() == 'email-template/ecommerce' ? 'active' : ''); ?>"><a href="#"><i class="fa fa-circle"></i>Ecommerce<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo e(route('template-email')); ?>" class="<?php echo e(Route::currentRouteName()=='template-email' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Email Template</a></li>
              <li><a href="<?php echo e(route('template-email-2')); ?>" class="<?php echo e(Route::currentRouteName()=='template-email-2' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Email Template 2</a></li>
              <li><a href="<?php echo e(route('ecommerce-templates')); ?>" class="<?php echo e(Route::currentRouteName()=='ecommerce-templates' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Ecommerce Email</a></li>
              <li><a href="<?php echo e(route('email-order-success')); ?>" class="<?php echo e(Route::currentRouteName()=='email-order-success' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Order Success </a></li>              
            </ul>
          </li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/editors' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="git-pull-request"></i><span>Editors</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('summernote')); ?>" class="<?php echo e(Route::currentRouteName()=='summernote' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Summer Note</a></li>
          <li><a href="<?php echo e(route('ckeditor')); ?>" class="<?php echo e(Route::currentRouteName()=='ckeditor' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>CK editor</a></li>
          <li><a href="<?php echo e(route('simple-mde')); ?>" class="<?php echo e(Route::currentRouteName()=='simple-mde' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>MDE editor</a></li>
          <li><a href="<?php echo e(route('ace-code-editor')); ?>" class="<?php echo e(Route::currentRouteName()=='ace-code-editor' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>ACE code editor</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Users Profile</a></li>
          <li><a href="<?php echo e(route('edit-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='edit-profile' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Users Edit</a></li>
          <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Users Cards</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/calender' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="calendar"></i><span>Calender</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('calendar')); ?>" class="<?php echo e(Route::currentRouteName()=='calendar' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Full Calender Basic</a></li>
          <li><a href="<?php echo e(route('calendar-event')); ?>" class="<?php echo e(Route::currentRouteName()=='calendar-event' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Full Calender Events</a></li>
          <li><a href="<?php echo e(route('calendar-advanced')); ?>" class="<?php echo e(Route::currentRouteName()=='calendar-advanced' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Full Calender Advance</a></li>
        </ul>
      </li>

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='internationalization' ? 'active' : ''); ?>" href="<?php echo e(route('internationalization')); ?>"><i data-feather="aperture"></i><span>Internationalization</span></a></li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/gallery' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="image"></i><span>Gallery</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('gallery')); ?>" class="<?php echo e(Route::currentRouteName()=='gallery' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Gallery Grid</a></li>
          <li><a href="<?php echo e(route('gallery-with-description')); ?>" class="<?php echo e(Route::currentRouteName()=='gallery-with-description' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Gallery Grid with Desc</a></li>
          <li><a href="<?php echo e(route('masonry-gallery')); ?>" class="<?php echo e(Route::currentRouteName()=='masonry-gallery' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Masonry Gallery</a></li>
          <li><a href="<?php echo e(route('masonry-gallery-with-disc')); ?>" class="<?php echo e(Route::currentRouteName()=='masonry-gallery-with-disc' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Masonry Gallery Desc</a></li>
          <li><a href="<?php echo e(route('gallery-hover')); ?>" class="<?php echo e(Route::currentRouteName()=='gallery-hover' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Hover Effects</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/email' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="mail"></i><span>Email</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('email-application')); ?>" class="<?php echo e(Route::currentRouteName()=='email-application' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Email App</a></li>
          <li><a href="<?php echo e(route('email-compose')); ?>" class="<?php echo e(Route::currentRouteName()=='email-compose' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Email Compose</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/blog' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="edit"></i><span>Blog</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('blog')); ?>" class="<?php echo e(Route::currentRouteName()=='blog' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Blog Details</a></li>
          <li><a href="<?php echo e(route('blog-single')); ?>" class="<?php echo e(Route::currentRouteName()=='blog-single' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Blog Single</a></li>
          <li><a href="<?php echo e(route('add-post')); ?>" class="<?php echo e(Route::currentRouteName()=='add-post' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Add-Post</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/chat' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="message-square"></i><span>Chat</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('chat')); ?>" class="<?php echo e(Route::currentRouteName()=='chat' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Chat App</a></li>
          <li><a href="<?php echo e(route('call-chat')); ?>" class="<?php echo e(Route::currentRouteName()=='call-chat' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Video chat</a></li>
        </ul>
      </li>

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='social-app' ? 'active' : ''); ?>" href="<?php echo e(route('social-app')); ?>"><i data-feather="chrome"></i><span>Social App</span></a></li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/job-search' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="user-check"></i><span>Job Search</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('job-cards-view')); ?>" class="<?php echo e(Route::currentRouteName()=='job-cards-view' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Cards view</a></li>
          <li><a href="<?php echo e(route('job-list-view')); ?>" class="<?php echo e(Route::currentRouteName()=='job-list-view' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>List View</a></li>
          <li><a href="<?php echo e(route('job-details')); ?>" class="<?php echo e(Route::currentRouteName()=='job-details' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Job Details</a></li>
          <li><a href="<?php echo e(route('job-apply')); ?>" class="<?php echo e(Route::currentRouteName()=='job-apply' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Apply</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/learning' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="layers"></i><span>Learning</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('learning-list-view')); ?>" class="<?php echo e(Route::currentRouteName()=='learning-list-view' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Learning List</a></li>
          <li><a href="<?php echo e(route('learning-detailed')); ?>" class="<?php echo e(Route::currentRouteName()=='learning-detailed' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Detailed Course </a></li>
        </ul>
      </li>

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='faq' ? 'active' : ''); ?>" href="<?php echo e(route('faq')); ?>"><i data-feather="help-circle"></i><span>FAQ</span></a></li>

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='knowledgebase' ? 'active' : ''); ?>" href="<?php echo e(route('knowledgebase')); ?>"><i data-feather="database"></i><span>Knowledgebase</span></a></li>

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='support-ticket' ? 'active' : ''); ?>" href="<?php echo e(route('support-ticket')); ?>"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='to-do' ? 'active' : ''); ?>" href="<?php echo e(route('to-do')); ?>"><i data-feather="mic"></i><span>To-Do</span></a></li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/ecommerce' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="shopping-bag"></i><span>Ecommerce</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('product')); ?>" class="<?php echo e(Route::currentRouteName()=='product' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Product</a></li>
          <li><a href="<?php echo e(route('product-page')); ?>" class="<?php echo e(Route::currentRouteName()=='product-page' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Product page</a></li>
          <li><a href="<?php echo e(route('product-list')); ?>" class="<?php echo e(Route::currentRouteName()=='product-list' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Product list</a></li>
          <li><a href="<?php echo e(route('payment-details')); ?>" class="<?php echo e(Route::currentRouteName()=='payment-details' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Payment Details</a></li>
          <li><a href="<?php echo e(route('order-history')); ?>" class="<?php echo e(Route::currentRouteName()=='order-history' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Order History</a></li>
          <li><a href="<?php echo e(route('invoice-template')); ?>" class="<?php echo e(Route::currentRouteName()=='invoice-template' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Invoice</a></li>
          <li><a href="<?php echo e(route('cart')); ?>" class="<?php echo e(Route::currentRouteName()=='cart' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Cart</a></li>
          <li><a href="<?php echo e(route('list-wish')); ?>" class="<?php echo e(Route::currentRouteName()=='list-wish' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Wishlist</a></li>
          <li><a href="<?php echo e(route('checkout')); ?>" class="<?php echo e(Route::currentRouteName()=='checkout' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Checkout</a></li>
        </ul>
      </li>
      
      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='pricing' ? 'active' : ''); ?>" href="<?php echo e(route('pricing')); ?>"><i data-feather="dollar-sign"></i><span> Pricing</span></a></li>

      <li><a class="sidebar-header <?php echo e(Route::currentRouteName()=='sample-page' ? 'active' : ''); ?>" href="<?php echo e(route('sample-page')); ?>"><i data-feather="file"></i><span> Sample Page</span></a></li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/search-pages' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="search"></i><span>Search Pages</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('search')); ?>" class="<?php echo e(Route::currentRouteName()=='search' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Search Website</a></li>
          <li><a href="<?php echo e(route('search-images')); ?>" class="<?php echo e(Route::currentRouteName()=='search-images' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Search Images</a></li>
          <li><a href="<?php echo e(route('search-video')); ?>" class="<?php echo e(Route::currentRouteName()=='search-video' ? 'active' : ''); ?>"><i class="fa fa-circle"></i>Search Video</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/errors' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="alert-octagon"></i><span> Error Pages</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('400')); ?>" class="<?php echo e(Route::currentRouteName()=='400' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Error 400</a></li>
          <li><a href="<?php echo e(route('401')); ?>" class="<?php echo e(Route::currentRouteName()=='401' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Error 401</a></li>
          <li><a href="<?php echo e(route('403')); ?>" class="<?php echo e(Route::currentRouteName()=='403' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Error 403</a></li>
          <li><a href="<?php echo e(route('404')); ?>" class="<?php echo e(Route::currentRouteName()=='404' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Error 404</a></li>
          <li><a href="<?php echo e(route('500')); ?>" class="<?php echo e(Route::currentRouteName()=='500' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Error 500</a></li>
          <li><a href="<?php echo e(route('503')); ?>" class="<?php echo e(Route::currentRouteName()=='503' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Error 503</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/authentication' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="unlock"></i><span> Authentication</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('login')); ?>" class="<?php echo e(Route::currentRouteName()=='login' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Login Simple</a></li>
          <li><a href="<?php echo e(route('login-image')); ?>" class="<?php echo e(Route::currentRouteName()=='login-image' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Login with Bg Image</a></li>
          <li><a href="<?php echo e(route('login-video')); ?>" class="<?php echo e(Route::currentRouteName()=='login-video' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Login with Bg video</a></li>
          <li><a href="<?php echo e(route('signup')); ?>" class="<?php echo e(Route::currentRouteName()=='signup' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Register Simple</a></li>
          <li><a href="<?php echo e(route('signup-image')); ?>" class="<?php echo e(Route::currentRouteName()=='signup-image' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Register with Bg Image</a></li>
          <li><a href="<?php echo e(route('signup-video')); ?>" class="<?php echo e(Route::currentRouteName()=='signup-video' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Register with Bg video</a></li>
          <li><a href="<?php echo e(route('unlock')); ?>" class="<?php echo e(Route::currentRouteName()=='unlock' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Unlock User</a></li>
          <li><a href="<?php echo e(route('forget-password')); ?>" class="<?php echo e(Route::currentRouteName()=='forget-password' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Forget Password</a></li>
          <li><a href="<?php echo e(route('reset-password')); ?>" class="<?php echo e(Route::currentRouteName()=='reset-password' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Reset Password</a></li>
        </ul>
      </li>

      <li class="<?php echo e(request()->route()->getPrefix() == '/coming-soon' ? 'active' : ''); ?>"><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>Coming Soon</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo e(route('comingsoon')); ?>" class="<?php echo e(Route::currentRouteName()=='comingsoon' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Coming Simple</a></li>
          <li><a href="<?php echo e(route('comingsoon-bg-img')); ?>" class="<?php echo e(Route::currentRouteName()=='comingsoon-bg-img' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Coming with Bg Image</a></li>
          <li><a href="<?php echo e(route('comingsoon-bg-video')); ?>" class="<?php echo e(Route::currentRouteName()=='comingsoon-bg-video' ? 'active' : ''); ?>" target="_blank"><i class="fa fa-circle"></i>Coming with Bg video</a></li>
        </ul>
      </li>
      
      <li><a class="sidebar-header" href="<?php echo e(route('maintenance')); ?>" class="<?php echo e(Route::currentRouteName()=='maintenance' ? 'active' : ''); ?>" target="_blank"><i data-feather="settings"></i><span> Maintenance</span></a></li>
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
<!-- Right sidebar Ends --><?php /**PATH /home/ekta/backup/html Theme/laravel endless/endless-box/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>