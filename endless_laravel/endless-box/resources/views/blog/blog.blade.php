@extends('layouts.master')
@section('title', 'Blog Details | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Blog Details')
@section('breadcrumb-items')
<li class="breadcrumb-item">Blog</li>
<li class="breadcrumb-item active">Blog Details</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 set-col-12">
      <div class="card">
        <div class="blog-box blog-shadow"><img class="img-fluid" src="{{asset('assets/images/blog/blog.jpg')}}" alt="">
          <div class="blog-details">
            <p class="digits">25 July 2018</p>
            <h4>Accusamus et iusto odio dignissimos ducimus qui blanditiis.</h4>
            <ul class="blog-social">
              <li><i class="icofont icofont-user"></i>Mark Jecno</li>
              <li class="digits"><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
              <li class="digits"><i class="icofont icofont-ui-chat"></i>598 Comments</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 set-col-12">
      <div class="card">
        <div class="blog-box blog-list row">
          <div class="col-sm-5"><img class="img-fluid sm-100-w" src="{{asset('assets/images/blog/blog-2.jpg')}}" alt=""></div>
          <div class="col-sm-7">
            <div class="blog-details">
              <div class="blog-date digits"><span>02</span> January 2018</div>
              <h6>Perspiciatis unde omnis iste natus error sit voluptatem </h6>
              <div class="blog-bottom-content">
                <ul class="blog-social">
                  <li>by: Admin</li>
                  <li class="digits">0 Hits</li>
                </ul>
                <hr>
                <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="blog-box blog-list row">
          <div class="col-sm-5"><img class="img-fluid sm-100-w" src="{{asset('assets/images/blog/blog-3.jpg')}}" alt=""></div>
          <div class="col-sm-7">
            <div class="blog-details">
              <div class="blog-date digits"><span>03</span> January 2018</div>
              <h6>Perspiciatis unde omnis iste natus error sit voluptatem </h6>
              <div class="blog-bottom-content">
                <ul class="blog-social">
                  <li>by: Admin</li>
                  <li class="digits">02 Hits</li>
                </ul>
                <hr>
                <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3 set-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/blog/blog-5.png')}}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li class="digits">9 April 2018</li>
              <li class="digits">by: Admin</li>
              <li class="digits">0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3 set-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/blog/blog-6.png')}}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li class="digits">9 April 2018</li>
              <li class="digits">by: Admin</li>
              <li class="digits">0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3 set-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/blog/blog-5.png')}}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li class="digits">9 April 2018</li>
              <li class="digits">by: Admin</li>
              <li class="digits">0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3 set-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/blog/blog-6.png')}}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li class="digits">9 April 2018</li>
              <li class="digits">by: Admin</li>
              <li class="digits">0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('script')

@endsection