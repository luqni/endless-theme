@extends('layouts.master')
@section('title', 'List View | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'List View')
@section('breadcrumb-items')
<li class="breadcrumb-item">Job Search</li>
<li class="breadcrumb-item active">List View</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-3 xl-40 set-col-5">
      <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">Filter</button>
                </h5>
              </div>
              <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-parent="#accordion">
                <div class="card-body filter-cards-view animate-chk">
                  <div class="job-filter">
                    <div class="faq-form">
                      <input class="form-control" type="text" placeholder="Search.."><i class="search-icon" data-feather="search"></i>
                    </div>
                  </div>
                  <div class="job-filter">
                    <div class="faq-form">
                      <input class="form-control" type="text" placeholder="location.."><i class="search-icon" data-feather="map-pin"></i>
                    </div>
                  </div>
                  <div class="checkbox-animated">
                    <label class="d-block" for="chk-ani">
                      <input class="checkbox_animated" id="chk-ani" type="checkbox">                            Full Time
                    </label>
                    <label class="d-block" for="chk-ani1">
                      <input class="checkbox_animated" id="chk-ani1" type="checkbox">                            Part Time
                    </label>
                    <label class="d-block" for="chk-ani2">
                      <input class="checkbox_animated" id="chk-ani2" type="checkbox">                            Remote
                    </label>
                  </div>
                  <button class="btn btn-primary text-center" type="button">Find jobs</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1">Location</button>
                </h5>
              </div>
              <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1" data-parent="#accordion">
                <div class="card-body animate-chk">
                  <div class="location-checkbox">
                    <label class="d-block" for="chk-ani3">
                      <input class="checkbox_animated" id="chk-ani3" type="checkbox">                            Letraset<span class="d-block">New Delhi, Delhi</span>
                    </label>
                    <label class="d-block" for="chk-ani4">
                      <input class="checkbox_animated" id="chk-ani4" type="checkbox">                            Established<span class="d-block">New Delhi, Delhi</span>
                    </label>
                    <label class="d-block mb-0" for="chk-ani5">
                      <input class="checkbox_animated" id="chk-ani5" type="checkbox">                            Contrary<span class="d-block">New Delhi, Delhi</span>
                    </label>
                  </div>
                </div>
                <button class="btn btn-block btn-primary text-center" type="button">All Locations</button>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">Job Title</button>
                </h5>
              </div>
              <div class="collapse show" id="collapseicon2" data-parent="#accordion" aria-labelledby="collapseicon2">
                <div class="card-body animate-chk">
                  <label class="d-block" for="chk-ani6">
                    <input class="checkbox_animated" id="chk-ani6" type="checkbox">                          UI/Ux designer(25)
                  </label>
                  <label class="d-block" for="chk-ani7">
                    <input class="checkbox_animated" id="chk-ani7" type="checkbox">                          Graphic designer(10)
                  </label>
                  <label class="d-block" for="chk-ani8">
                    <input class="checkbox_animated" id="chk-ani8" type="checkbox">                          Front end designer(15)
                  </label>
                  <label class="d-block" for="chk-ani9">
                    <input class="checkbox_animated" id="chk-ani9" type="checkbox">                          PHP developer(42)
                  </label>
                  <label class="d-block mb-0" for="chk-ani10">
                    <input class="checkbox_animated" id="chk-ani10" type="checkbox">                          Software engineer(5)
                  </label>
                </div>
                <button class="btn btn-block btn-primary text-center" type="button">All Job Title</button>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon3" aria-expanded="true" aria-controls="collapseicon3">Industry</button>
                </h5>
              </div>
              <div class="collapse show" id="collapseicon3" data-parent="#accordion" aria-labelledby="collapseicon3">
                <div class="card-body animate-chk">
                  <label class="d-block" for="chk-ani11">
                    <input class="checkbox_animated" id="chk-ani11" type="checkbox">                          Computer Software(14)
                  </label>
                  <label class="d-block" for="chk-ani12">
                    <input class="checkbox_animated" id="chk-ani12" type="checkbox">                          IT Engineer(10)
                  </label>
                  <label class="d-block" for="chk-ani13">
                    <input class="checkbox_animated" id="chk-ani13" type="checkbox">                          Service industry(20)
                  </label>
                  <label class="d-block" for="chk-ani14">
                    <input class="checkbox_animated" id="chk-ani14" type="checkbox">                          Helathcare(34)
                  </label>
                  <label class="d-block mb-0" for="chk-ani15">
                    <input class="checkbox_animated" id="chk-ani15" type="checkbox">                          Financial Services(5)
                  </label>
                </div>
                <button class="btn btn-block btn-primary text-center" type="button">All Industries</button>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon4" aria-expanded="true" aria-controls="collapseicon4">Specific skills</button>
                </h5>
              </div>
              <div class="collapse show" id="collapseicon4" data-parent="#accordion" aria-labelledby="collapseicon4">
                <div class="card-body animate-chk">
                  <label class="d-block" for="chk-ani16">
                    <input class="checkbox_animated" id="chk-ani16" type="checkbox">                          HTML,scss & sass
                  </label>
                  <label class="d-block" for="chk-ani17">
                    <input class="checkbox_animated" id="chk-ani17" type="checkbox">                          Javascript
                  </label>
                  <label class="d-block" for="chk-ani18">
                    <input class="checkbox_animated" id="chk-ani18" type="checkbox">                          Node.js
                  </label>
                  <label class="d-block" for="chk-ani19">
                    <input class="checkbox_animated" id="chk-ani19" type="checkbox">                          Gulp & Pug
                  </label>
                  <label class="d-block mb-0" for="chk-ani20">
                    <input class="checkbox_animated" id="chk-ani20" type="checkbox">                          Angular.js
                  </label>
                </div>
                <button class="btn btn-block btn-primary text-center" type="button">All Skills</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-9 xl-60 set-col-7">
      <div class="card">
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/1.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">Front end designer</a><span class="badge badge-primary pull-right">New</span></h6>
                <p>HP <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i></span></p>
              </div>
            </div>
            <p>Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/2.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">UI designer E-commerce</a><span class="badge badge-primary pull-right">New</span></h6>
                <p>Ericsson <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-o"></i></span></p>
              </div>
            </div>
            <p>Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly answered.</p>
          </div>
        </div>
      </div>
      <div class="card ribbon-vertical-left-wrapper">
        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-secondary"><i class="icofont icofont-love"></i></div>
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/3.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">Senior UX designer</a><span class="pull-right">2 days ago</span></h6>
                <p>Sutherland <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-half-o"></i><i class="fa fa-star font-warning-o"></i></span></p>
              </div>
            </div>
            <p>Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned behind polite piqued enough at. Forbade few through inquiry blushes you. Cousin no itself eldest it in dinner latter missed no.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/4.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">Front end web developer</a><span class="pull-right">3 days ago</span></h6>
                <p>Cisco <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-half-o"></i></span></p>
              </div>
            </div>
            <p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/5.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">Graphic designer</a><span class="pull-right">3 days ago</span></h6>
                <p>Infosys <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-half-o"></i><i class="fa fa-star font-warning-o"></i></span></p>
              </div>
            </div>
            <p>Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/6.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">Designer, CRM</a><span class="pull-right">3 days ago</span></h6>
                <p>Citrix <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-o"></i><i class="fa fa-star font-warning-o"></i></span></p>
              </div>
            </div>
            <p>Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly answered.</p>
          </div>
        </div>
      </div>
      <div class="card ribbon-vertical-left-wrapper">
        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-secondary"><i class="icofont icofont-love"></i></div>
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/2.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">UI designer E-commerce</a><span class="pull-right">5 days ago</span></h6>
                <p>Ericsson <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-o"></i></span></p>
              </div>
            </div>
            <p>Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly answered.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="job-search">
          <div class="card-body">
            <div class="media"><img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/3.jpg')}}" alt="">
              <div class="media-body">
                <h6 class="f-w-600"><a href="#">Senior UX designer</a><span class="pull-right">5 days ago</span></h6>
                <p>Sutherland <span>Lelystad, Netherlands </span><span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning-half-o"></i><i class="fa fa-star font-warning-o"></i></span></p>
              </div>
            </div>
            <p>Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned behind polite piqued enough at. Forbade few through inquiry blushes you. Cousin no itself eldest it in dinner latter missed no.</p>
          </div>
        </div>
      </div>
      <div class="job-pagination">
        <nav aria-label="Page navigation example">
          <ul class="pagination pagination-primary">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('script')

@endsection