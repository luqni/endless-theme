@extends('layouts.master')
@section('title', 'Blade Loops | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'Blade Loops')
@section('breadcrumb-items')
<li class="breadcrumb-item active">Blade Loops</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>IMAGE GALLERY</h5>
        </div>
        <div class="my-gallery card-body row">
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/013.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/013.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  1</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/015.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/015.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  2</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/014.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/014.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  3</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/016.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/016.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  4</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  5</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/04.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/04.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  8</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/05.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/05.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  9</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/06.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/06.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  10</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/07.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/07.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  11</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  12</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/07.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/07.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  11</figcaption>
          </figure>
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia"><a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description"></a>
            <figcaption itemprop="caption description">Image caption  12</figcaption>
          </figure>
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
      </div>
    </div>
    <div class="col-xl-12 xl-100 col-lg-12">      
      <h3 class="pull-left">Buttons</h3>            
    </div> 
    <div class="col-sm-12 col-xl-6">
    </div>
    <div class="col-sm-12 col-xl-6">
    </div>
    <div class="col-sm-12 col-xl-6">
    </div>
    <div class="col-sm-12 col-xl-6">
    </div>
    <div class="col-sm-12 col-xl-6">
    </div>
    <div class="col-sm-12 col-xl-6">
    </div>
    <div class="col-sm-12 col-xl-6">
    </div>
    <div class="col-sm-12 col-xl-6">
    </div>

    <?php $p = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled." ?>

    <div class="col-xl-12 xl-100 col-lg-12">      
      <h3 class="pull-left">Tabbed-Cards</h3>            
    </div>      
    <div class="col-xl-6 xl-100 col-lg-12">
    </div>
    <div class="col-xl-6 xl-100 col-lg-12">
    </div>
    <div class="col-xl-6 xl-100 col-lg-12">
    </div>
    <div class="col-xl-6 xl-100 col-lg-12">
    </div>
    <div class="col-xl-12 xl-100 col-lg-12">      
      <h3 class="pull-left">Draggable Cards</h3>            
    </div>
    <div class="row ui-sortable" id="draggableMultiple">
    </div> 
  </div>
</div>
<!-- Container-fluid Ends-->  
@endsection
@section('scripts')
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