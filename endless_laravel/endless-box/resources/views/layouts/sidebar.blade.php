<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="{{route('/')}}"><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
        <div class="profile-edit"><a href="#" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14">ELANA</h6>
      <p>general manager.</p>
    </div>
    <ul class="sidebar-menu">

      <li><a class="sidebar-header {{ Route::currentRouteName()=='blade-components' ? 'active' : '' }}" href="{{route('blade-components')}}"><i data-feather="menu"></i><span>Blade Components</span></a></li>
      
      <li class="{{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}">
        <a class="sidebar-header" href="#"><i data-feather="home"></i><span>Dashboard</span>
          <span class="badge badge-pill badge-primary">6</span><i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('default')}}" class="{{ Route::currentRouteName()=='default' ? 'active' : '' }}"><i class="fa fa-circle"></i>Default</a></li>
          <li><a href="{{route('e-commerce')}}" class="{{ Route::currentRouteName()=='e-commerce' ? 'active' : '' }}"><i class="fa fa-circle"></i>E-commerce</a></li>
          <li><a href="{{route('university')}}" class="{{ Route::currentRouteName()=='university' ? 'active' : '' }}"><i class="fa fa-circle"></i>University</a></li>
          <li><a href="{{route('crypto')}}" class="{{ Route::currentRouteName()=='crypto' ? 'active' : '' }}"><i class="fa fa-circle"></i>Crypto</a></li>
          <li><a href="{{route('server')}}" class="{{ Route::currentRouteName()=='server' ? 'active' : '' }}"><i class="fa fa-circle"></i>Server</a></li>
          <li><a href="{{route('project')}}" class="{{ Route::currentRouteName()=='project' ? 'active' : '' }}"><i class="fa fa-circle"></i>Project Dashboard</a></li>
        </ul>
      </li>
      
      <li class="{{request()->route()->getPrefix() == '/widgets' ? 'active' : '' }}">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>Widgets</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('general-widget')}}" class="{{ Route::currentRouteName()=='general-widget' ? 'active' : '' }}"><i class="fa fa-circle"></i>General widget</a></li>
          <li><a href="{{route('chart-widget')}}" class="{{ Route::currentRouteName()=='chart-widget' ? 'active' : '' }}"><i class="fa fa-circle"></i>Chart widget</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/base' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="box"></i><span> Base</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('state-color')}}" class="{{ Route::currentRouteName()=='state-color' ? 'active' : '' }}"><i class="fa fa-circle"></i>State color</a></li>
          <li><a href="{{route('typography')}}" class="{{ Route::currentRouteName()=='typography' ? 'active' : '' }}"><i class="fa fa-circle"></i>Typography</a></li>
          <li><a href="{{route('avatars')}}" class="{{ Route::currentRouteName()=='avatars' ? 'active' : '' }}"><i class="fa fa-circle"></i>Avatars</a></li>
          <li><a href="{{route('helper-classes')}}" class="{{ Route::currentRouteName()=='helper-classes' ? 'active' : '' }}"><i class="fa fa-circle"></i>helper classes</a></li>
          <li><a href="{{route('grid')}}" class="{{ Route::currentRouteName()=='grid' ? 'active' : '' }}"><i class="fa fa-circle"></i>Grid</a></li>
          <li><a href="{{route('tag-pills')}}" class="{{ Route::currentRouteName()=='tag-pills' ? 'active' : '' }}"><i class="fa fa-circle"></i>Tag & pills</a></li>
          <li><a href="{{route('progress-bar')}}" class="{{ Route::currentRouteName()=='progress-bar' ? 'active' : '' }}"><i class="fa fa-circle"></i>Progress</a></li>
          <li><a href="{{route('modal')}}" class="{{ Route::currentRouteName()=='modal' ? 'active' : '' }}"><i class="fa fa-circle"></i>Modal</a></li>
          <li><a href="{{route('alert')}}" class="{{ Route::currentRouteName()=='alert' ? 'active' : '' }}"><i class="fa fa-circle"></i>Alert</a></li>
          <li><a href="{{route('popover')}}" class="{{ Route::currentRouteName()=='popover' ? 'active' : '' }}"><i class="fa fa-circle"></i>Popover</a></li>
          <li><a href="{{route('tooltip')}}" class="{{ Route::currentRouteName()=='tooltip' ? 'active' : '' }}"><i class="fa fa-circle"></i>Tooltip</a></li>
          <li><a href="{{route('loader')}}" class="{{ Route::currentRouteName()=='loader' ? 'active' : '' }}"><i class="fa fa-circle"></i>Spinners</a></li>
          <li><a href="{{route('dropdown')}}" class="{{ Route::currentRouteName()=='dropdown' ? 'active' : '' }}"><i class="fa fa-circle"></i>Dropdown</a></li> 
          <li class="tab-nav {{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active':''}}">
            <a href="#"><i class="fa fa-circle dot"></i> Tabs <i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'menu-open':''}} " >
              <li><a href="{{route('tab-bootstrap')}}" class="{{ Route::currentRouteName()=='tab-bootstrap' ? 'active' : '' }}"><i class="fa fa-circle"></i>Bootstrap Tabs</a></li>
              <li><a href="{{route('tab-material')}}" class="{{ Route::currentRouteName()=='tab-material' ? 'active' : '' }}"><i class="fa fa-circle"></i>Line Tabs</a></li>
            </ul>
          </li>          
          <li><a href="{{route('according')}}" class="{{ Route::currentRouteName()=='according' ? 'active' : '' }}"><i class="fa fa-circle"></i>According</a></li>
          <li><a href="{{route('navs')}}" class="{{ Route::currentRouteName()=='navs' ? 'active' : '' }}"><i class="fa fa-circle"></i>Navs</a></li>
          <li><a href="{{route('box-shadow')}}" class="{{ Route::currentRouteName()=='box-shadow' ? 'active' : '' }}"><i class="fa fa-circle"></i>Shadow</a></li>
          <li><a href="{{route('list')}}" class="{{ Route::currentRouteName()=='list' ? 'active' : '' }}"><i class="fa fa-circle"></i>Lists</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/advance' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="folder-plus"></i><span> Advance</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('scrollable')}}" class="{{ Route::currentRouteName()=='scrollable' ? 'active' : '' }}"><i class="fa fa-circle"></i>Scrollable</a></li>
          <li><a href="{{route('tree')}}" class="{{ Route::currentRouteName()=='tree' ? 'active' : '' }}"><i class="fa fa-circle"></i>Tree view</a></li>
          <li><a href="{{route('bootstrap-notify')}}" class="{{ Route::currentRouteName()=='bootstrap-notify' ? 'active' : '' }}"><i class="fa fa-circle"></i>Bootstrap Notify</a></li>
          <li><a href="{{route('rating')}}" class="{{ Route::currentRouteName()=='rating' ? 'active' : '' }}"><i class="fa fa-circle"></i>Rating</a></li>
          <li><a href="{{route('dropzone')}}" class="{{ Route::currentRouteName()=='dropzone' ? 'active' : '' }}"><i class="fa fa-circle"></i>dropzone</a></li>
          <li><a href="{{route('tour')}}" class="{{ Route::currentRouteName()=='tour' ? 'active' : '' }}"><i class="fa fa-circle"></i>Tour</a></li>
          <li><a href="{{route('sweet-alert2')}}" class="{{ Route::currentRouteName()=='sweet-alert2' ? 'active' : '' }}"><i class="fa fa-circle"></i>SweetAlert2</a></li>
          <li><a href="{{route('modal-animated')}}" class="{{ Route::currentRouteName()=='modal-animated' ? 'active' : '' }}"><i class="fa fa-circle"></i>Animated Modal</a></li>
          <li><a href="{{route('owl-carousel')}}" class="{{ Route::currentRouteName()=='owl-carousel' ? 'active' : '' }}"><i class="fa fa-circle"></i>Owl Carousel</a></li>
          <li><a href="{{route('ribbons')}}" class="{{ Route::currentRouteName()=='ribbons' ? 'active' : '' }}"><i class="fa fa-circle"></i>Ribbons</a></li>
          <li><a href="{{route('pagination')}}" class="{{ Route::currentRouteName()=='pagination' ? 'active' : '' }}"><i class="fa fa-circle"></i>Pagination</a></li>
          <li><a href="{{route('steps')}}" class="{{ Route::currentRouteName()=='steps' ? 'active' : '' }}"><i class="fa fa-circle"></i>Steps</a></li>
          <li><a href="{{route('breadcrumb')}}" class="{{ Route::currentRouteName()=='breadcrumb' ? 'active' : '' }}"><i class="fa fa-circle"></i>Breadcrumb</a></li>
          <li><a href="{{route('range-slider')}}" class="{{ Route::currentRouteName()=='range-slider' ? 'active' : '' }}"><i class="fa fa-circle"></i>Range Slider</a></li>
          <li><a href="{{route('image-cropper')}}" class="{{ Route::currentRouteName()=='image-cropper' ? 'active' : '' }}"><i class="fa fa-circle"></i>Image cropper</a></li>
          <li><a href="{{route('sticky')}}" class="{{ Route::currentRouteName()=='sticky' ? 'active' : '' }}"><i class="fa fa-circle"></i>Sticky</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/animation' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="cloud-drizzle"></i><span>Animation<span class="badge badge-danger ml-3">Hot</span></span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('animate')}}" class="{{ Route::currentRouteName()=='animate' ? 'active' : '' }}"><i class="fa fa-circle"></i>Animate</a></li>
          <li><a href="{{route('scroll-reveal')}}" class="{{ Route::currentRouteName()=='scroll-reveal' ? 'active' : '' }}"><i class="fa fa-circle"></i>Scroll Reveal</a></li>
          <li><a href="{{route('aos')}}" class="{{ Route::currentRouteName()=='aos' ? 'active' : '' }}"><i class="fa fa-circle"></i>AOS Animation</a></li>
          <li><a href="{{route('tilt')}}" class="{{ Route::currentRouteName()=='tilt' ? 'active' : '' }}"><i class="fa fa-circle"></i>Tilt Animation</a></li>
          <li><a href="{{route('wow')}}" class="{{ Route::currentRouteName()=='wow' ? 'active' : '' }}"><i class="fa fa-circle"></i>Wow Animation</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/icons' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="command"></i><span>Icons</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('flag-icon')}}" class="{{ Route::currentRouteName()=='flag-icon' ? 'active' : '' }}"><i class="fa fa-circle"></i>Flag icon</a></li>
          <li><a href="{{route('font-awesome')}}" class="{{ Route::currentRouteName()=='font-awesome' ? 'active' : '' }}"><i class="fa fa-circle"></i>Fontawesome Icon</a></li>
          <li><a href="{{route('ico-icon')}}" class="{{ Route::currentRouteName()=='ico-icon' ? 'active' : '' }}"><i class="fa fa-circle"></i>Ico Icon</a></li>
          <li><a href="{{route('themify-icon')}}" class="{{ Route::currentRouteName()=='themify-icon' ? 'active' : '' }}"><i class="fa fa-circle"></i>Thimify Icon</a></li>
          <li><a href="{{route('feather-icon')}}" class="{{ Route::currentRouteName()=='feather-icon' ? 'active' : '' }}"><i class="fa fa-circle"></i>Feather icon</a></li>
          <li><a href="{{route('whether-icon')}}" class="{{ Route::currentRouteName()=='whether-icon' ? 'active' : '' }}"><i class="fa fa-circle"></i>Whether Icon</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/buttons' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="cloud"></i><span>Buttons</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('buttons')}}" class="{{ Route::currentRouteName()=='buttons' ? 'active' : '' }}"><i class="fa fa-circle"></i>Default Style</a></li>
          <li><a href="{{route('buttons-flat')}}" class="{{ Route::currentRouteName()=='buttons-flat' ? 'active' : '' }}"><i class="fa fa-circle"></i>Flat Style</a></li>
          <li><a href="{{route('buttons-edge')}}" class="{{ Route::currentRouteName()=='buttons-edge' ? 'active' : '' }}"><i class="fa fa-circle"></i>Edge Style</a></li>
          <li><a href="{{route('raised-button')}}" class="{{ Route::currentRouteName()=='raised-button' ? 'active' : '' }}"><i class="fa fa-circle"></i>Raised Style</a></li>
          <li><a href="{{route('button-group')}}" class="{{ Route::currentRouteName()=='button-group' ? 'active' : '' }}"><i class="fa fa-circle"></i>Button Group</a></li>
        </ul>
      </li>

      <li class="{{ in_array(Route::currentRouteName(), ['form-validation','base-input', 'radio-checkbox-control', 'input-group', 'megaoptions', 'datepicker', 'time-picker', 'datetimepicker', 'daterangepicker', 'touchspin', 'select2', 'switch', 'typeahead', 'clipboard', 'default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'active':''}}"><a class="sidebar-header" href="#"><i data-feather="file-text"></i><span>Forms</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li class="{{request()->route()->getPrefix() == '/form-controls' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Form Controls<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('form-validation')}}" class="{{ Route::currentRouteName()=='form-validation' ? 'active' : '' }}"><i class="fa fa-circle"></i>Form Validation</a></li>
              <li><a href="{{route('base-input')}}" class="{{ Route::currentRouteName()=='base-input' ? 'active' : '' }}"><i class="fa fa-circle"></i>Base Inputs</a></li>
              <li><a href="{{route('radio-checkbox-control')}}" class="{{ Route::currentRouteName()=='radio-checkbox-control' ? 'active' : '' }}"><i class="fa fa-circle"></i>Checkbox & Radio</a></li>
              <li><a href="{{route('input-group')}}" class="{{ Route::currentRouteName()=='input-group' ? 'active' : '' }}"><i class="fa fa-circle"></i>Input Groups</a></li>
              <li><a href="{{route('megaoptions')}}" class="{{ Route::currentRouteName()=='megaoptions' ? 'active' : '' }}"><i class="fa fa-circle"></i>Mega Options</a></li>
            </ul>
          </li>
          <li class="{{request()->route()->getPrefix() == '/form-widgets' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Form Widgets<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('datepicker')}}" class="{{ Route::currentRouteName()=='datepicker' ? 'active' : '' }}"><i class="fa fa-circle"></i>Datepicker</a></li>
              <li><a href="{{route('time-picker')}}" class="{{ Route::currentRouteName()=='time-picker' ? 'active' : '' }}"><i class="fa fa-circle"></i>Timepicker</a></li>
              <li><a href="{{route('datetimepicker')}}" class="{{ Route::currentRouteName()=='datetimepicker' ? 'active' : '' }}"><i class="fa fa-circle"></i>Datetimepicker</a></li>
              <li><a href="{{route('daterangepicker')}}" class="{{ Route::currentRouteName()=='daterangepicker' ? 'active' : '' }}"><i class="fa fa-circle"></i>Daterangepicker</a></li>
              <li><a href="{{route('touchspin')}}" class="{{ Route::currentRouteName()=='touchspin' ? 'active' : '' }}"><i class="fa fa-circle"></i>Touchspin</a></li>
              <li><a href="{{route('select2')}}" class="{{ Route::currentRouteName()=='select2' ? 'active' : '' }}"><i class="fa fa-circle"></i>Select2</a></li>
              <li><a href="{{route('switch')}}" class="{{ Route::currentRouteName()=='switch' ? 'active' : '' }}"><i class="fa fa-circle"></i>Switch</a></li>
              <li><a href="{{route('typeahead')}}" class="{{ Route::currentRouteName()=='typeahead' ? 'active' : '' }}"><i class="fa fa-circle"></i>Typeahead</a></li>
              <li><a href="{{route('clipboard')}}" class="{{ Route::currentRouteName()=='clipboard' ? 'active' : '' }}"><i class="fa fa-circle"></i>Clipboard</a></li>
            </ul>
          </li>
          <li class="{{request()->route()->getPrefix() == '/form-layout' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Form Layout<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('default-form')}}" class="{{ Route::currentRouteName()=='default-form' ? 'active' : '' }}"><i class="fa fa-circle"></i>Default Forms</a></li>
              <li><a href="{{route('form-wizard')}}" class="{{ Route::currentRouteName()=='form-wizard' ? 'active' : '' }}"><i class="fa fa-circle"></i>Form Wizard 1</a></li>
              <li><a href="{{route('form-wizard-two')}}" class="{{ Route::currentRouteName()=='form-wizard-two' ? 'active' : '' }}"><i class="fa fa-circle"></i>Form Wizard 2</a></li>
              <li><a href="{{route('form-wizard-three')}}" class="{{ Route::currentRouteName()=='form-wizard-three' ? 'active' : '' }}"><i class="fa fa-circle"></i>Form Wizard 3</a></li>
              <li><a href="{{route('form-wizard-four')}}" class="{{ Route::currentRouteName()=='form-wizard-four' ? 'active' : '' }}"><i class="fa fa-circle"></i>Form Wizard 4</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="{{ in_array(Route::currentRouteName(), ['bootstrap-basic-table','bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components', 'datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source', 'datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller', 'jsgrid-table']) ? 'active':''}}"><a class="sidebar-header" href="#"><i data-feather="server"></i><span>Tables</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li class="{{request()->route()->getPrefix() == '/bootstrap-tables' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Bootstrap Tables<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('bootstrap-basic-table')}}" class="{{ Route::currentRouteName()=='bootstrap-basic-table' ? 'active' : '' }}"><i class="fa fa-circle"></i>Basic Tables</a></li>
              <li><a href="{{route('bootstrap-sizing-table')}}" class="{{ Route::currentRouteName()=='bootstrap-sizing-table' ? 'active' : '' }}"><i class="fa fa-circle"></i>Sizing Tables</a></li>
              <li><a href="{{route('bootstrap-border-table')}}" class="{{ Route::currentRouteName()=='bootstrap-border-table' ? 'active' : '' }}"><i class="fa fa-circle"></i>Border Tables</a></li>
              <li><a href="{{route('bootstrap-styling-table')}}" class="{{ Route::currentRouteName()=='bootstrap-styling-table' ? 'active' : '' }}"><i class="fa fa-circle"></i>Styling Tables</a></li>
              <li><a href="{{route('table-components')}}" class="{{ Route::currentRouteName()=='table-components' ? 'active' : '' }}"><i class="fa fa-circle"></i>Table components</a></li>
            </ul>
          </li>
          <li class="{{request()->route()->getPrefix() == '/data-tables' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Data Tables<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('datatable-basic-init')}}" class="{{ Route::currentRouteName()=='datatable-basic-init' ? 'active' : '' }}"><i class="fa fa-circle"></i>Basic Init</a></li>
              <li><a href="{{route('datatable-advance')}}" class="{{ Route::currentRouteName()=='datatable-advance' ? 'active' : '' }}"><i class="fa fa-circle"></i>Advance Init</a></li>
              <li><a href="{{route('datatable-styling')}}" class="{{ Route::currentRouteName()=='datatable-styling' ? 'active' : '' }}"><i class="fa fa-circle"></i>Styling</a></li>
              <li><a href="{{route('datatable-ajax')}}" class="{{ Route::currentRouteName()=='datatable-ajax' ? 'active' : '' }}"><i class="fa fa-circle"></i>AJAX</a></li>
              <li><a href="{{route('datatable-server-side')}}" class="{{ Route::currentRouteName()=='datatable-server-side' ? 'active' : '' }}"><i class="fa fa-circle"></i>Server Side</a></li>
              <li><a href="{{route('datatable-plugin')}}" class="{{ Route::currentRouteName()=='datatable-plugin' ? 'active' : '' }}"><i class="fa fa-circle"></i>Plug-in</a></li>
              <li><a href="{{route('datatable-api')}}" class="{{ Route::currentRouteName()=='datatable-api' ? 'active' : '' }}"><i class="fa fa-circle"></i>API</a></li>
              <li><a href="{{route('datatable-data-source')}}" class="{{ Route::currentRouteName()=='datatable-data-source' ? 'active' : '' }}"><i class="fa fa-circle"></i>Data Sources</a></li>
            </ul>
          </li>
          <li class="{{request()->route()->getPrefix() == '/extension-data-tables' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Extension Data Tables<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('datatable-ext-autofill')}}" class="{{ Route::currentRouteName()=='datatable-ext-autofill' ? 'active' : '' }}"><i class="fa fa-circle"></i>Auto Fill</a></li>
              <li><a href="{{route('datatable-ext-basic-button')}}" class="{{ Route::currentRouteName()=='datatable-ext-basic-button' ? 'active' : '' }}"><i class="fa fa-circle"></i>Basic Button</a></li>
              <li><a href="{{route('datatable-ext-col-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-col-reorder' ? 'active' : '' }}"><i class="fa fa-circle"></i>Column Reorder</a></li>
              <li><a href="{{route('datatable-ext-fixed-header')}}" class="{{ Route::currentRouteName()=='datatable-ext-fixed-header' ? 'active' : '' }}"><i class="fa fa-circle"></i>Fixed Header</a></li>
              <li><a href="{{route('datatable-ext-html-5-data-export')}}" class="{{ Route::currentRouteName()=='datatable-ext-html-5-data-export' ? 'active' : '' }}"><i class="fa fa-circle"></i>HTML 5 Export</a></li>
              <li><a href="{{route('datatable-ext-key-table')}}" class="{{ Route::currentRouteName()=='datatable-ext-key-table' ? 'active' : '' }}"><i class="fa fa-circle"></i>Key Table</a></li>
              <li><a href="{{route('datatable-ext-responsive')}}" class="{{ Route::currentRouteName()=='datatable-ext-responsive' ? 'active' : '' }}"><i class="fa fa-circle"></i>Responsive</a></li>
              <li><a href="{{route('datatable-ext-row-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-row-reorder' ? 'active' : '' }}"><i class="fa fa-circle"></i>Row Reorder</a></li>
              <li><a href="{{route('datatable-ext-scroller')}}" class="{{ Route::currentRouteName()=='datatable-ext-scroller' ? 'active' : '' }}"><i class="fa fa-circle"></i>Scroller</a></li>
            </ul>
          </li>
          <li class="{{request()->route()->getPrefix() == '/tables' ? 'active' : '' }}"><a href="{{route('jsgrid-table')}}" class="{{ Route::currentRouteName()=='jsgrid-table' ? 'active' : '' }}"><i class="fa fa-circle"></i>Js Grid Table</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/cards' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="book"></i><span>Cards</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('basic-card')}}" class="{{ Route::currentRouteName()=='basic-card' ? 'active' : '' }}"><i class="fa fa-circle"></i>Basic Card</a></li>
          <li><a href="{{route('creative-card')}}" class="{{ Route::currentRouteName()=='creative-card' ? 'active' : '' }}"><i class="fa fa-circle"></i>Creative Card</a></li>
          <li><a href="{{route('tabbed-card')}}" class="{{ Route::currentRouteName()=='tabbed-card' ? 'active' : '' }}"><i class="fa fa-circle"></i>Tabbed Card</a></li>
          <li><a href="{{route('dragable-card')}}" class="{{ Route::currentRouteName()=='dragable-card' ? 'active' : '' }}"><i class="fa fa-circle"></i>Draggable Card</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/timeline' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="sliders"></i><span>Timeline</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('timeline-v-1')}}" class="{{ Route::currentRouteName()=='timeline-v-1' ? 'active' : '' }}"><i class="fa fa-circle"></i>Timeline 1</a></li>
          <li><a href="{{route('timeline-v-2')}}" class="{{ Route::currentRouteName()=='timeline-v-2' ? 'active' : '' }}"><i class="fa fa-circle"></i>Timeline 2</a></li>
          <li><a href="{{route('timeline-small')}}" class="{{ Route::currentRouteName()=='timeline-small' ? 'active' : '' }}"><i class="fa fa-circle"></i>Timeline 3</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/charts' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="bar-chart"></i><span>Charts</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('chart-google')}}" class="{{ Route::currentRouteName()=='chart-google' ? 'active' : '' }}"><i class="fa fa-circle"></i>Google Chart</a></li>
          <li><a href="{{route('chart-sparkline')}}" class="{{ Route::currentRouteName()=='chart-sparkline' ? 'active' : '' }}"><i class="fa fa-circle"></i>sparkline chart</a></li>
          <li><a href="{{route('chart-flot')}}" class="{{ Route::currentRouteName()=='chart-flot' ? 'active' : '' }}"><i class="fa fa-circle"></i>Flot Chart</a></li>
          <li><a href="{{route('chart-knob')}}" class="{{ Route::currentRouteName()=='chart-knob' ? 'active' : '' }}"><i class="fa fa-circle"></i>Knob Chart</a></li>
          <li><a href="{{route('chart-morris')}}" class="{{ Route::currentRouteName()=='chart-morris' ? 'active' : '' }}"><i class="fa fa-circle"></i>Morris Chart</a></li>
          <li><a href="{{route('chartjs')}}" class="{{ Route::currentRouteName()=='chartjs' ? 'active' : '' }}"><i class="fa fa-circle"></i>chatjs Chart</a></li>
          <li><a href="{{route('chartist')}}" class="{{ Route::currentRouteName()=='chartist' ? 'active' : '' }}"><i class="fa fa-circle"></i>chartist Chart</a></li>
          <li><a href="{{route('chart-peity')}}" class="{{ Route::currentRouteName()=='chart-peity' ? 'active' : '' }}"><i class="fa fa-circle"></i>Peity Chart</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/maps' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="map"></i><span>Maps</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('map-js')}}" class="{{ Route::currentRouteName()=='map-js' ? 'active' : '' }}"><i class="fa fa-circle"></i>Maps JS</a></li>
          <li><a href="{{route('vector-map')}}" class="{{ Route::currentRouteName()=='vector-map' ? 'active' : '' }}"><i class="fa fa-circle"></i>Vector Maps</a></li>
        </ul>
      </li>

      <li class="{{ in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'template-email-2', 'ecommerce-templates', 'email-order-success']) ? 'active':''}}"><a class="sidebar-header" href="#"><i data-feather="printer"></i><span>Email Templates</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li class="{{request()->route()->getPrefix() == 'email-template/basic' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Basic<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('basic-template')}}" class="{{ Route::currentRouteName()=='basic-template' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Basic Email</a></li>
              <li><a href="{{route('email-header')}}" class="{{ Route::currentRouteName()=='email-header' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Basic With Header</a></li>
            </ul>
          </li>
        </ul>
        <ul class="sidebar-submenu">
          <li class="{{request()->route()->getPrefix() == 'email-template/ecommerce' ? 'active' : '' }}"><a href="#"><i class="fa fa-circle"></i>Ecommerce<i class="fa fa-angle-down pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('template-email')}}" class="{{ Route::currentRouteName()=='template-email' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Email Template</a></li>
              <li><a href="{{route('template-email-2')}}" class="{{ Route::currentRouteName()=='template-email-2' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Email Template 2</a></li>
              <li><a href="{{route('ecommerce-templates')}}" class="{{ Route::currentRouteName()=='ecommerce-templates' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Ecommerce Email</a></li>
              <li><a href="{{route('email-order-success')}}" class="{{ Route::currentRouteName()=='email-order-success' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Order Success </a></li>              
            </ul>
          </li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/editors' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="git-pull-request"></i><span>Editors</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('summernote')}}" class="{{ Route::currentRouteName()=='summernote' ? 'active' : '' }}"><i class="fa fa-circle"></i>Summer Note</a></li>
          <li><a href="{{route('ckeditor')}}" class="{{ Route::currentRouteName()=='ckeditor' ? 'active' : '' }}"><i class="fa fa-circle"></i>CK editor</a></li>
          <li><a href="{{route('simple-mde')}}" class="{{ Route::currentRouteName()=='simple-mde' ? 'active' : '' }}"><i class="fa fa-circle"></i>MDE editor</a></li>
          <li><a href="{{route('ace-code-editor')}}" class="{{ Route::currentRouteName()=='ace-code-editor' ? 'active' : '' }}"><i class="fa fa-circle"></i>ACE code editor</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/users' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('user-profile')}}" class="{{ Route::currentRouteName()=='user-profile' ? 'active' : '' }}"><i class="fa fa-circle"></i>Users Profile</a></li>
          <li><a href="{{route('edit-profile')}}" class="{{ Route::currentRouteName()=='edit-profile' ? 'active' : '' }}"><i class="fa fa-circle"></i>Users Edit</a></li>
          <li><a href="{{route('user-cards')}}" class="{{ Route::currentRouteName()=='user-cards' ? 'active' : '' }}"><i class="fa fa-circle"></i>Users Cards</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/calender' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="calendar"></i><span>Calender</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('calendar')}}" class="{{ Route::currentRouteName()=='calendar' ? 'active' : '' }}"><i class="fa fa-circle"></i>Full Calender Basic</a></li>
          <li><a href="{{route('calendar-event')}}" class="{{ Route::currentRouteName()=='calendar-event' ? 'active' : '' }}"><i class="fa fa-circle"></i>Full Calender Events</a></li>
          <li><a href="{{route('calendar-advanced')}}" class="{{ Route::currentRouteName()=='calendar-advanced' ? 'active' : '' }}"><i class="fa fa-circle"></i>Full Calender Advance</a></li>
        </ul>
      </li>

      <li><a class="sidebar-header {{ Route::currentRouteName()=='internationalization' ? 'active' : '' }}" href="{{route('internationalization')}}"><i data-feather="aperture"></i><span>Internationalization</span></a></li>

      <li class="{{request()->route()->getPrefix() == '/gallery' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="image"></i><span>Gallery</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('gallery')}}" class="{{ Route::currentRouteName()=='gallery' ? 'active' : '' }}"><i class="fa fa-circle"></i>Gallery Grid</a></li>
          <li><a href="{{route('gallery-with-description')}}" class="{{ Route::currentRouteName()=='gallery-with-description' ? 'active' : '' }}"><i class="fa fa-circle"></i>Gallery Grid with Desc</a></li>
          <li><a href="{{route('masonry-gallery')}}" class="{{ Route::currentRouteName()=='masonry-gallery' ? 'active' : '' }}"><i class="fa fa-circle"></i>Masonry Gallery</a></li>
          <li><a href="{{route('masonry-gallery-with-disc')}}" class="{{ Route::currentRouteName()=='masonry-gallery-with-disc' ? 'active' : '' }}"><i class="fa fa-circle"></i>Masonry Gallery Desc</a></li>
          <li><a href="{{route('gallery-hover')}}" class="{{ Route::currentRouteName()=='gallery-hover' ? 'active' : '' }}"><i class="fa fa-circle"></i>Hover Effects</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/email' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="mail"></i><span>Email</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('email-application')}}" class="{{ Route::currentRouteName()=='email-application' ? 'active' : '' }}"><i class="fa fa-circle"></i>Email App</a></li>
          <li><a href="{{route('email-compose')}}" class="{{ Route::currentRouteName()=='email-compose' ? 'active' : '' }}"><i class="fa fa-circle"></i>Email Compose</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/blog' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="edit"></i><span>Blog</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('blog')}}" class="{{ Route::currentRouteName()=='blog' ? 'active' : '' }}"><i class="fa fa-circle"></i>Blog Details</a></li>
          <li><a href="{{route('blog-single')}}" class="{{ Route::currentRouteName()=='blog-single' ? 'active' : '' }}"><i class="fa fa-circle"></i>Blog Single</a></li>
          <li><a href="{{route('add-post')}}" class="{{ Route::currentRouteName()=='add-post' ? 'active' : '' }}"><i class="fa fa-circle"></i>Add-Post</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/chat' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="message-square"></i><span>Chat</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('chat')}}" class="{{ Route::currentRouteName()=='chat' ? 'active' : '' }}"><i class="fa fa-circle"></i>Chat App</a></li>
          <li><a href="{{route('call-chat')}}" class="{{ Route::currentRouteName()=='call-chat' ? 'active' : '' }}"><i class="fa fa-circle"></i>Video chat</a></li>
        </ul>
      </li>

      <li><a class="sidebar-header {{ Route::currentRouteName()=='social-app' ? 'active' : '' }}" href="{{route('social-app')}}"><i data-feather="chrome"></i><span>Social App</span></a></li>

      <li class="{{request()->route()->getPrefix() == '/job-search' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="user-check"></i><span>Job Search</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('job-cards-view')}}" class="{{ Route::currentRouteName()=='job-cards-view' ? 'active' : '' }}"><i class="fa fa-circle"></i>Cards view</a></li>
          <li><a href="{{route('job-list-view')}}" class="{{ Route::currentRouteName()=='job-list-view' ? 'active' : '' }}"><i class="fa fa-circle"></i>List View</a></li>
          <li><a href="{{route('job-details')}}" class="{{ Route::currentRouteName()=='job-details' ? 'active' : '' }}"><i class="fa fa-circle"></i>Job Details</a></li>
          <li><a href="{{route('job-apply')}}" class="{{ Route::currentRouteName()=='job-apply' ? 'active' : '' }}"><i class="fa fa-circle"></i>Apply</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/learning' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="layers"></i><span>Learning</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('learning-list-view')}}" class="{{ Route::currentRouteName()=='learning-list-view' ? 'active' : '' }}"><i class="fa fa-circle"></i>Learning List</a></li>
          <li><a href="{{route('learning-detailed')}}" class="{{ Route::currentRouteName()=='learning-detailed' ? 'active' : '' }}"><i class="fa fa-circle"></i>Detailed Course </a></li>
        </ul>
      </li>

      <li><a class="sidebar-header {{ Route::currentRouteName()=='faq' ? 'active' : '' }}" href="{{route('faq')}}"><i data-feather="help-circle"></i><span>FAQ</span></a></li>

      <li><a class="sidebar-header {{ Route::currentRouteName()=='knowledgebase' ? 'active' : '' }}" href="{{route('knowledgebase')}}"><i data-feather="database"></i><span>Knowledgebase</span></a></li>

      <li><a class="sidebar-header {{ Route::currentRouteName()=='support-ticket' ? 'active' : '' }}" href="{{route('support-ticket')}}"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>

      <li><a class="sidebar-header {{ Route::currentRouteName()=='to-do' ? 'active' : '' }}" href="{{route('to-do')}}"><i data-feather="mic"></i><span>To-Do</span></a></li>

      <li class="{{request()->route()->getPrefix() == '/ecommerce' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="shopping-bag"></i><span>Ecommerce</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('product')}}" class="{{ Route::currentRouteName()=='product' ? 'active' : '' }}"><i class="fa fa-circle"></i>Product</a></li>
          <li><a href="{{route('product-page')}}" class="{{ Route::currentRouteName()=='product-page' ? 'active' : '' }}"><i class="fa fa-circle"></i>Product page</a></li>
          <li><a href="{{route('product-list')}}" class="{{ Route::currentRouteName()=='product-list' ? 'active' : '' }}"><i class="fa fa-circle"></i>Product list</a></li>
          <li><a href="{{route('payment-details')}}" class="{{ Route::currentRouteName()=='payment-details' ? 'active' : '' }}"><i class="fa fa-circle"></i>Payment Details</a></li>
          <li><a href="{{route('order-history')}}" class="{{ Route::currentRouteName()=='order-history' ? 'active' : '' }}"><i class="fa fa-circle"></i>Order History</a></li>
          <li><a href="{{route('invoice-template')}}" class="{{ Route::currentRouteName()=='invoice-template' ? 'active' : '' }}"><i class="fa fa-circle"></i>Invoice</a></li>
          <li><a href="{{route('cart')}}" class="{{ Route::currentRouteName()=='cart' ? 'active' : '' }}"><i class="fa fa-circle"></i>Cart</a></li>
          <li><a href="{{route('list-wish')}}" class="{{ Route::currentRouteName()=='list-wish' ? 'active' : '' }}"><i class="fa fa-circle"></i>Wishlist</a></li>
          <li><a href="{{route('checkout')}}" class="{{ Route::currentRouteName()=='checkout' ? 'active' : '' }}"><i class="fa fa-circle"></i>Checkout</a></li>
        </ul>
      </li>
      
      <li><a class="sidebar-header {{ Route::currentRouteName()=='pricing' ? 'active' : '' }}" href="{{route('pricing')}}"><i data-feather="dollar-sign"></i><span> Pricing</span></a></li>

      <li><a class="sidebar-header {{ Route::currentRouteName()=='sample-page' ? 'active' : '' }}" href="{{route('sample-page')}}"><i data-feather="file"></i><span> Sample Page</span></a></li>

      <li class="{{request()->route()->getPrefix() == '/search-pages' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="search"></i><span>Search Pages</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('search')}}" class="{{ Route::currentRouteName()=='search' ? 'active' : '' }}"><i class="fa fa-circle"></i>Search Website</a></li>
          <li><a href="{{route('search-images')}}" class="{{ Route::currentRouteName()=='search-images' ? 'active' : '' }}"><i class="fa fa-circle"></i>Search Images</a></li>
          <li><a href="{{route('search-video')}}" class="{{ Route::currentRouteName()=='search-video' ? 'active' : '' }}"><i class="fa fa-circle"></i>Search Video</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/errors' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="alert-octagon"></i><span> Error Pages</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('400')}}" class="{{ Route::currentRouteName()=='400' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Error 400</a></li>
          <li><a href="{{route('401')}}" class="{{ Route::currentRouteName()=='401' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Error 401</a></li>
          <li><a href="{{route('403')}}" class="{{ Route::currentRouteName()=='403' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Error 403</a></li>
          <li><a href="{{route('404')}}" class="{{ Route::currentRouteName()=='404' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Error 404</a></li>
          <li><a href="{{route('500')}}" class="{{ Route::currentRouteName()=='500' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Error 500</a></li>
          <li><a href="{{route('503')}}" class="{{ Route::currentRouteName()=='503' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Error 503</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/authentication' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="unlock"></i><span> Authentication</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('login')}}" class="{{ Route::currentRouteName()=='login' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Login Simple</a></li>
          <li><a href="{{route('login-image')}}" class="{{ Route::currentRouteName()=='login-image' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Login with Bg Image</a></li>
          <li><a href="{{route('login-video')}}" class="{{ Route::currentRouteName()=='login-video' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Login with Bg video</a></li>
          <li><a href="{{route('signup')}}" class="{{ Route::currentRouteName()=='signup' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Register Simple</a></li>
          <li><a href="{{route('signup-image')}}" class="{{ Route::currentRouteName()=='signup-image' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Register with Bg Image</a></li>
          <li><a href="{{route('signup-video')}}" class="{{ Route::currentRouteName()=='signup-video' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Register with Bg video</a></li>
          <li><a href="{{route('unlock')}}" class="{{ Route::currentRouteName()=='unlock' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Unlock User</a></li>
          <li><a href="{{route('forget-password')}}" class="{{ Route::currentRouteName()=='forget-password' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Forget Password</a></li>
          <li><a href="{{route('reset-password')}}" class="{{ Route::currentRouteName()=='reset-password' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Reset Password</a></li>
        </ul>
      </li>

      <li class="{{request()->route()->getPrefix() == '/coming-soon' ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>Coming Soon</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('comingsoon')}}" class="{{ Route::currentRouteName()=='comingsoon' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Coming Simple</a></li>
          <li><a href="{{route('comingsoon-bg-img')}}" class="{{ Route::currentRouteName()=='comingsoon-bg-img' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Coming with Bg Image</a></li>
          <li><a href="{{route('comingsoon-bg-video')}}" class="{{ Route::currentRouteName()=='comingsoon-bg-video' ? 'active' : '' }}" target="_blank"><i class="fa fa-circle"></i>Coming with Bg video</a></li>
        </ul>
      </li>
      
      <li><a class="sidebar-header" href="{{route('maintenance')}}" class="{{ Route::currentRouteName()=='maintenance' ? 'active' : '' }}" target="_blank"><i data-feather="settings"></i><span> Maintenance</span></a></li>
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
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/1.jpg')}}" alt="">
              <div class="status-circle online"></div>
              <div class="about">
        <div class="name">Vincent Porter</div>
        <div class="status"> Online</div>
      </div>
    </li>
    <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/2.png')}}" alt="">
      <div class="status-circle away"></div>
      <div class="about">
        <div class="name">Ain Chavez</div>
        <div class="status"> 28 minutes ago</div>
      </div>
    </li>
    <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/8.jpg')}}" alt="">
      <div class="status-circle online"></div>
      <div class="about">
        <div class="name">Kori Thomas</div>
        <div class="status"> Online</div>
      </div>
    </li>
    <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/4.jpg')}}" alt="">
      <div class="status-circle online"></div>
      <div class="about">
        <div class="name">Erica Hughes</div>
        <div class="status"> Online</div>
      </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/5.jpg')}}" alt="">
              <div class="status-circle offline"></div>
              <div class="about">
                <div class="name">Ginger Johnston</div>
                <div class="status"> 2 minutes ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/6.jpg')}}" alt="">
              <div class="status-circle away"></div>
              <div class="about">
                <div class="name">Prasanth Anand</div>
                <div class="status"> 2 hour ago</div>
              </div>
            </li>
            <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/7.jpg')}}" alt="">
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
<!-- Right sidebar Ends -->