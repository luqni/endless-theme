@extends('layouts.master')
@section('title', 'Blade Components | Endless Admin Panel')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'Blade Components')
@section('breadcrumb-items')
<li class="breadcrumb-item active">Blade Components</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      @card()
      @slot('header')
          <h3>Images </h3>
          <p style="font-family: monospace;">Figure with Image</p>
      @endslot
        <div class="my-gallery card-body row">
          @figure(['class'=>'col-xl-3 col-md-4 col-6 set-col-6', 'caption'=>'Image caption  1'])
              @slot('extra') itemprop="associatedMedia"
              @endslot
              @a(['href'=>asset('assets/images/big-lightgallry/013.jpg')])
                  @slot('extra') itemprop="contentUrl" data-size="1600x950"
                  @endslot
                  @img(['class'=>'img-thumbnail',  'src'=>asset('assets/images/lightgallry/013.jpg')])
                      @slot('extra') itemprop="thumbnail" alt="Image description"
                      @endslot
                  @endimg
              @enda
              @slot('extrafig')  itemprop="caption description"
              @endslot
              <div class="card-body" style="padding-top: 10px;">
                <h4 class="card-title">Sample Card</h4>
                <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                @a(['href'=>'#',  'class'=>'btn btn-primary btn-lg']) Click @enda
              </div>
          @endfigure

          @figure(['class'=>'col-xl-3 col-md-4 col-6 set-col-6', 'caption'=>'Image caption  1'])
              @slot('extra') itemprop="associatedMedia"
              @endslot
              @a(['href'=>asset('assets/images/big-lightgallry/014.jpg')])
                  @slot('extra') itemprop="contentUrl" data-size="1600x950"
                  @endslot
                  @img(['class'=>'img-thumbnail', 'src'=>asset('assets/images/lightgallry/014.jpg')])
                    @slot('extra')  itemprop="thumbnail" alt="Image description"
                    @endslot
                  @endimg
              @enda
              @slot('extrafig')
                  itemprop="caption description"
              @endslot
              <div class="card-body" style="padding-top: 10px;">
                <h4 class="card-title">Sample Card</h4>
                <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                @a(['href'=>'#',  'class'=>'btn btn-primary btn-lg']) Click @enda
              </div>
          @endfigure

          @figure(['class'=>'col-xl-3 col-md-4 col-6 set-col-6', 'caption'=>'Image caption  1'])
              @slot('extra') itemprop="associatedMedia"
              @endslot
              @a(['href'=>asset('assets/images/big-lightgallry/015.jpg')])
                  @slot('extra') itemprop="contentUrl" data-size="1600x950"
                  @endslot
                  @img(['class'=>'img-thumbnail',  'src'=>asset('assets/images/lightgallry/015.jpg')])
                    @slot('extra') itemprop="thumbnail" alt="Image description"
                    @endslot
                  @endimg
              @enda
              @slot('extrafig')  itemprop="caption description"
              @endslot
              <div class="card-body" style="padding-top: 10px;">
                <h4 class="card-title">Sample Card</h4>
                <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                @a(['href'=>'#',  'class'=>'btn btn-primary btn-lg']) Click @enda
              </div>
          @endfigure

          @figure(['class'=>'col-xl-3 col-md-4 col-6 set-col-6', 'caption'=>'Image caption  1'])
              @slot('extra')  itemprop="associatedMedia"
              @endslot
              @a(['href'=>asset('assets/images/big-lightgallry/016.jpg')])
                  @slot('extra')  itemprop="contentUrl" data-size="1600x950"
                  @endslot
                  @img(['class'=>'img-thumbnail',  'src'=>asset('assets/images/lightgallry/016.jpg')])
                    @slot('extra') itemprop="thumbnail" alt="Image description"
                    @endslot
                  @endimg
              @enda
              @slot('extrafig') itemprop="caption description"
              @endslot
              <div class="card-body" style="padding-top: 10px;">
                <h4 class="card-title">Sample Card</h4>
                <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                @a(['href'=>'#',  'class'=>'btn btn-primary btn-lg']) Click @enda
              </div>
          @endfigure
        </div>
        <!-- Root element of PhotoSwipe. Must have class pswp.-->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="pswp__bg"></div>
          <div class="pswp__scroll-wrap">
            <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
              <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
              </div>
            </div>
          </div>
        </div>
      @endcard
    </div>

    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>General Buttons</h5>
          <span>Use <code>.btn .btn-primary</code> class for general button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'btn btn-primary']) Primary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-secondary']) Secondary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-success']) Success @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-info']) Info @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-warning']) Warning @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-danger']) Danger @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-light']) Light @endbutton
        </div>
      @endcard
    </div>
    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>Outline Buttons</h5>
          <span>Use <code>.btn .btn-outline-primary</code> class for border button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'btn btn-outline-primary']) Primary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-outline-secondary']) Secondary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-outline-success']) Success @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-outline-info']) Info @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-outline-warning']) Warning @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-outline-danger']) Danger @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-outline-light']) @slot('extra') style="border-color:black;" @endslot Light @endbutton
        </div>
      @endcard
    </div>
    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>Edge General Buttons</h5>
          <span>Use <code>.btn .btn-pill btn-primary</code> class for General rounded button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-primary']) Primary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-secondary']) Secondary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-success']) Success @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-info']) Info @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-warning']) Warning @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-danger']) Danger @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-light']) @slot('extra') style="border-color:black;" @endslot Light @endbutton
        </div>
      @endcard
    </div>
    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>Edge outline Buttons</h5>
          <span>Use <code>.btn .btn-pill .btn-outline-primary</code> class for border rounded button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-outline-primary']) Primary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-outline-secondary']) Secondary @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-outline-success']) Success @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-outline-info']) Info @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-outline-warning']) Warning @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-outline-danger']) Danger @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-pill btn-outline-light']) @slot('extra') style="border-color:black;" @endslot Light @endbutton
        </div>
      @endcard
    </div>
    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>Disbale General Buttons</h5>
          <span>Use <code>.disabled .btn .btn-primary</code> class for disable general button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'disabled btn btn-primary']) Primary @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-secondary']) Secondary @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-success']) Success @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-info']) Info @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-warning']) Warning @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-danger']) Danger @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-light']) Light @endbutton
        </div>
      @endcard
    </div>
    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>Disable outline Buttons</h5>
          <span>Use <code>.disabled .btn .btn-outline-primary</code> class for disable outline button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'disabled btn btn-outline-primary']) Primary @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-outline-secondary']) Secondary @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-outline-success']) Success @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-outline-info']) Info @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-outline-warning']) Warning @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-outline-danger']) Danger @endbutton
          @button(['type' => 'button', 'class' => 'disabled btn btn-outline-light text-dark']) @slot('extra') style="border-color:black;" @endslot Light @endbutton
        </div>
      @endcard
    </div>
    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>Button Size with General Buttons</h5>
          <span>Use <code>.btn .btn-primary</code> class for general button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'btn btn-lg btn-primary']) Large .btn-lg @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-primary']) @slot('extra') style="border-color:black;" @endslot  Normal .btn @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-sm btn-primary']) Small  .btn-sm @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-xs btn-primary']) Tiny .btn-xs @endbutton
        </div>
      @endcard
    </div>
    <div class="col-sm-12 col-xl-6">
      @card()
        @slot('header')
          <h5>Button size with Outline Buttons</h5>
          <span>Use <code>.btn .btn-outline-primary</code> class for border button</span>
        @endslot
        <div class="card-body btn-showcase">
          @button(['type' => 'button', 'class' => 'btn btn-lg btn-outline-primary']) Large btn-lg @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-outline-primary']) Normal .btn @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-sm btn-outline-primary']) Small .btn-sm @endbutton
          @button(['type' => 'button', 'class' => 'btn btn-xs btn-outline-primary']) Tiny .btn-xs @endbutton
        </div>
      @endcard
    </div>

    <?php $p = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled." ?>


    <div class="col-xl-6 xl-100 col-lg-12 set-col-12">
      @card()
        @slot('header') <h5 class="pull-left">Simple Tab</h5>  @endslot
        <div class="card-body">
            <div class="tabbed-card">
              <ul class="pull-right nav nav-pills nav-primary" id="pills-clrtab1" role="tablist">
                <li class="nav-item">
                  @a(['class'=>'nav-link active', 'id'=>'pills-clrhome-tab1', 'href'=>"#pills-clrhome1"])
                    @slot('extra')
                      data-toggle="pill" role="tab" aria-controls="pills-clrhome1" aria-selected="true"
                    @endslot
                    Home
                  @enda
                </li>
                <li class="nav-item">
                  @a(['class'=>'nav-link', 'id'=>'pills-clrprofile-tab1', 'href'=>"#pills-clrprofile1"])
                      @slot('extra')
                          data-toggle="pill" role="tab" aria-controls="pills-clrprofile1" aria-selected="false"
                      @endslot
                      Profile
                  @enda
                 </li>
                <li class="nav-item">
                  @a(['class'=>'nav-link', 'id'=>'pills-clrcontact-tab1', 'href'=>"#pills-clrcontact1"])
                      @slot('extra')
                          data-toggle="pill" role="tab" aria-controls="pills-clrcontact1" aria-selected="false"
                      @endslot
                      Contact
                  @enda
              </ul>
              <div class="tab-content" id="pills-clrtabContent1">
                <div class="tab-pane fade show active" id="pills-clrhome1" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
                  <p>{{@$p}}</p>
                </div>
                <div class="tab-pane fade" id="pills-clrprofile1" role="tabpanel" aria-labelledby="pills-clrprofile-tab1">
                  <p>{{@$p}}</p>
                </div>
                <div class="tab-pane fade" id="pills-clrcontact1" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                  <p>{{@$p}}</p>
                </div>
              </div>
            </div>
          </div>
      @endcard
    </div>
    <div class="col-xl-6 xl-100 col-lg-12 set-col-12">
      @card()
        @slot('header')
          <h5 class="pull-left">Tab With Icon</h5>
        @endslot
        <div class="card-body">
          <div class="tabbed-card">
            <ul class="pull-right nav nav-pills nav-primary" id="pills-clrtab" role="tablist">
              <li class="nav-item">
                @a(['class'=>"nav-link active", 'id'=>"pills-clrhome-tab", 'href'=>"#pills-clrhome"])
                  @slot('extra')
                      data-toggle="pill"  role="tab" aria-controls="pills-clrhome" aria-selected="true"
                  @endslot
                @i(['class'=>'icofont icofont-ui-home']) @endi
                Home
                @enda
              </li>
              <li class="nav-item">
                @a(['class'=>"nav-link", 'id'=>"pills-clrprofile-tab", 'href'=>"#pills-clrprofile"])
                  @slot('extra')
                      data-toggle="pill"  role="tab" aria-controls="pills-clrprofile" aria-selected="false"
                  @endslot
                @i(['class'=>'icofont icofont-man-in-glasses']) @endi
                Profile
                @enda
              </li>
              <li class="nav-item">
                @a(['class'=>"nav-link", 'id'=>"pills-clrcontact-tab", 'href'=>"#pills-clrcontact"])
                  @slot('extra')
                      data-toggle="pill"  role="tab" aria-controls="pills-clrcontact" aria-selected="false"
                  @endslot
                @i(['class'=>'icofont icofont-contacts']) @endi
                Contact
                @enda
              </li>
            </ul>
            <div class="tab-content" id="pills-clrtabContent">
              <div class="tab-pane fade show active" id="pills-clrhome" role="tabpanel" aria-labelledby="pills-clrhome-tab">
                <p>{{@$p}}</p>
              </div>
              <div class="tab-pane fade" id="pills-clrprofile" role="tabpanel" aria-labelledby="pills-clrprofile-tab">
                <p>{{@$p}}</p>
              </div>
              <div class="tab-pane fade" id="pills-clrcontact" role="tabpanel" aria-labelledby="pills-clrcontact-tab">
                <p>{{@$p}}</p>
              </div>
            </div>
          </div>
        </div>
      @endcard
    </div>
    <div class="col-xl-6 xl-100 col-lg-12 set-col-12">
      @card()
        @slot('header')
          <h5 class="pull-left">Material tab</h5>
        @endslot
        <div class="card-body">
          <div class="tabbed-card">
            <ul class="pull-right nav nav-tabs border-tab" id="top-tab" role="tablist">
              <li class="nav-item">
                @a(['class'=>'nav-link', 'id'=>'top-home-tab', 'href'=>"#top-home"])
                  @slot('extra')
                    data-toggle="tab" role="tab" aria-controls="top-home" aria-selected="false"
                  @endslot
                  Home
                @enda
                <div class="material-border"></div>
              </li>
              <li class="nav-item">
                @a(['class'=>'nav-link active', 'id'=>'profile-top-tab', 'href'=>"#top-profile"])
                  @slot('extra')
                    data-toggle="tab" role="tab" aria-controls="top-profile" aria-selected="true"
                  @endslot
                  Profile
                @enda
                <div class="material-border"></div>
              </li>
              <li class="nav-item">
                @a(['class'=>'nav-link', 'id'=>'contact-top-tab', 'href'=>"#top-contact"])
                  @slot('extra')
                    data-toggle="tab" role="tab" aria-controls="top-contact" aria-selected="false"
                  @endslot
                  Contact
                @enda
                <div class="material-border"></div>
              </li>
            </ul>
            <div class="tab-content" id="top-tabContent">
              <div class="tab-pane fade" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                <p>{{@$p}}</p>
              </div>
              <div class="tab-pane fade active show" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                <p>{{@$p}}</p>
              </div>
              <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                <p>{{@$p}}</p>
              </div>
            </div>
          </div>
        </div>
      @endcard
    </div>
    <div class="col-xl-6 xl-100 col-lg-12 set-col-12">
      @card()
        @slot('header')
          <h5 class="pull-left">Material tab with icon</h5>
        @endslot
        <div class="card-body">
          <div class="tabbed-card">
            <ul class="pull-right nav nav-tabs border-tab" id="top-tab2" role="tablist">
              <li class="nav-item">
                @a(['class'=>'nav-link', 'id'=>'top-home-tab2', 'href'=>"#top-home2"])
                    @slot('extra')
                      data-toggle="tab" role="tab" aria-controls="top-home2" aria-selected="false"
                    @endslot
                  @i(['class'=>'icofont icofont-ui-home']) @endi
                  Home
                @enda
                <div class="material-border"></div>
              </li>
              <li class="nav-item">
                @a(['class'=>'nav-link active', 'id'=>'profile-top-tab2', 'href'=>"#top-profile2"])
                    @slot('extra')
                      data-toggle="tab" role="tab" aria-controls="top-profile2" aria-selected="true"
                    @endslot
                  @i(['class'=>'icofont icofont-man-in-glasses']) @endi
                  Profile
                @enda
                <div class="material-border"></div>
              </li>
              <li class="nav-item">
                @a(['class'=>'nav-link', 'id'=>'contact-top-tab2', 'href'=>"#top-contact2"])
                    @slot('extra')
                      data-toggle="tab" role="tab" aria-controls="top-contact2" aria-selected="false"
                    @endslot
                  @i(['class'=>'icofont icofont-contacts']) @endi
                  Contact
                @enda
                <div class="material-border"></div>
              </li>
            </ul>
            <div class="tab-content" id="top-tabContent2">
              <div class="tab-pane fade" id="top-home2" role="tabpanel" aria-labelledby="top-home-tab">
                <p>{{@$p}}</p>
              </div>
              <div class="tab-pane fade active show" id="top-profile2" role="tabpanel" aria-labelledby="profile-top-tab">
                <p>{{@$p}}</p>
              </div>
              <div class="tab-pane fade" id="top-contact2" role="tabpanel" aria-labelledby="contact-top-tab">
                <p>{{@$p}}</p>
              </div>
            </div>
          </div>
        </div>
      @endcard
    </div>
    <div class="col-xl-12 xl-100 col-lg-12 set-col-12">
      <div class="row ui-sortable" id="draggableMultiple">
        <div class="col-sm-12 col-xl-6">
          @card()
            @slot('header')
              <h5>Basic Card</h5>
            @endslot
            <div class="card-body">
              <p>{{@$p}}</p>
            </div>
          @endcard
        </div>
        <div class="col-sm-12 col-xl-6">
          @card()
            @slot('header')
              <h5><i class="icon-move mr-2"></i> Icon in Heading</h5>
            @endslot
            <div class="card-body">
              <p>{{@$p}}</p>
            </div>
          @endcard
        </div>
        <div class="col-sm-12 col-xl-6">
          @card()
            @slot('header')
              <h5>Card sub Title</h5><span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
            @endslot
            <div class="card-body">
              <p class="mb-0">{{@$p}}</p>
            </div>
          @endcard
        </div>
        <div class="col-sm-12 col-xl-6">
          @card()
            @slot('header')
              <h5>Card sub Title</h5><span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
            @endslot
            <div class="card-body">
              <p class="mb-0">{{@$p}}</p>
            </div>
          @endcard
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('script')
<script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/button-tooltip-custom.js')}}"></script>
<script src="{{asset('assets/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('assets/js/dragable/sortable.js')}}"></script>
<script src="{{asset('assets/js/dragable/sortable-custom.js')}}"></script>
@endsection
