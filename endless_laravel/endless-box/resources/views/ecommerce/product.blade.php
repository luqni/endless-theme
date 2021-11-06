@extends('layouts.master')
@section('title', 'Product | Endless Admin Panel')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/range-slider.css')}}">
@endsection

@section('breadcrumb-title', 'Product')
@section('breadcrumb-items')
<li class="breadcrumb-item">ECommerce</li>
<li class="breadcrumb-item active">Product</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid product-wrapper">
  <div class="product-sidebar">
    <div class="filter-section">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header toggle-data">
              <h6 class="mb-0 f-w-600">Filters<span class="pull-right"> <i class="fa fa-chevron-down"></i></span></h6>
            </div>
            <div class="left-filter">
              <div class="card-body filter-cards-view animate-chk">
                <div class="product-filter">
                  <h6 class="f-w-600">Category</h6>
                  <div class="checkbox-animated mt-0">
                    <label class="d-block" for="edo-ani5">
                      <input class="radio_animated" id="edo-ani5" type="radio">Man Shirt
                    </label>
                    <label class="d-block" for="edo-ani6">
                      <input class="radio_animated" id="edo-ani6" type="radio">Man Jeans
                    </label>
                    <label class="d-block" for="edo-ani7">
                      <input class="radio_animated" id="edo-ani7" type="radio">Woman Top
                    </label>
                    <label class="d-block" for="edo-ani8">
                      <input class="radio_animated" id="edo-ani8" type="radio">Woman Jeans
                    </label>
                    <label class="d-block" for="edo-ani9">
                      <input class="radio_animated" id="edo-ani9" type="radio">Man T-shirt
                    </label>
                  </div>
                </div>
                <div class="product-filter">
                  <h6 class="f-w-600">Brand</h6>
                  <div class="checkbox-animated mt-0">
                    <label class="d-block" for="chk-ani">
                      <input class="checkbox_animated" id="chk-ani" type="checkbox"> Levi's
                    </label>
                    <label class="d-block" for="chk-ani1">
                      <input class="checkbox_animated" id="chk-ani1" type="checkbox">Diesel
                    </label>
                    <label class="d-block" for="chk-ani2">
                      <input class="checkbox_animated" id="chk-ani2" type="checkbox">Lee
                    </label>
                    <label class="d-block" for="chk-ani3">
                      <input class="checkbox_animated" id="chk-ani3" type="checkbox">Hudson
                    </label>
                    <label class="d-block" for="chk-ani4">
                      <input class="checkbox_animated" id="chk-ani4" type="checkbox">Denizen
                    </label>
                    <label class="d-block" for="chk-ani5">
                      <input class="checkbox_animated" id="chk-ani5" type="checkbox">Spykar      
                    </label>
                  </div>
                </div>
                <div class="product-filter slider-product">
                  <h6 class="f-w-600">Colors</h6>
                  <div class="color-selector">
                    <ul>
                      <li class="white"></li>
                      <li class="gray"></li>
                      <li class="black"></li>
                      <li class="orange"></li>
                      <li class="green"></li>
                      <li class="pink"></li>
                      <li class="yellow"></li>
                      <li class="blue"></li>
                      <li class="red"></li>
                    </ul>
                  </div>
                </div>
                <div class="product-filter pb-0">
                  <h6 class="f-w-600">Price</h6>
                  <input id="u-range-03" type="text">
                </div>
                <div class="product-filter new-products">
                  <h6 class="f-w-600">New Products</h6>
                  <div class="owl-carousel owl-theme" id="testimonial">
                    <div class="item">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                          <p class="mb-0">Fancy Shirt</p>
                          <div class="product-price">$100.00</div>
                        </div>
                      </div>
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                          <p class="mb-0">Fancy Shirt</p>
                          <div class="product-price">$100.00</div>
                        </div>
                      </div>
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                          <p class="mb-0">Fancy Shirt</p>
                          <div class="product-price">$100.00</div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                          <p class="mb-0">Fancy Shirt</p>
                          <div class="product-price">$100.00</div>
                        </div>
                      </div>
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                          <p class="mb-0">Fancy Shirt</p>
                          <div class="product-price">$100.00</div>
                        </div>
                      </div>
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                          <p class="mb-0">Fancy Shirt</p>
                          <div class="product-price">$100.00  </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-filter"><img class="img-fluid banner-product" src="{{asset('assets/images/ecommerce/banner.jpg')}}" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-grid">
    <div class="feature-products">
      <div class="row">
        <div class="col-md-9 set-col-8 products-total"><span class="d-none-productlist filter-toggle"><a href="#"><i data-feather="align-justify"></i></a></span><span class="f-w-600">Showing Products 1 - 24 Of 200 Results</span>
          <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#"><i data-feather="grid"></i></a></div>
          <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#"><i data-feather="list"></i></a></div>
          <div class="grid-options d-inline-block">
            <ul>
              <li><a class="product-2-layout-view" href="#"><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
              <li><a class="product-3-layout-view" href="#"><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 set-col-4">
          <div class="pull-right">
            <div class="select2-drpdwn-product select-options d-inline-block">
              <select class="form-control btn-square" name="select">
                <option value="opt1">Featured</option>
                <option value="opt2">Lowest Prices</option>
                <option value="opt3">Highest Prices</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <form>
        <div class="form-group m-0">
          <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i>
        </div>
      </form>
    </div>
    <div class="product-wrapper-grid">
      <div class="row">
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter1"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter2"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter3"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter4"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter4" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="ribbon ribbon-secondary ribbon-vertical-left"><i class="icon-gift"></i></div>
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter5"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter5" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter6"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter6" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter7"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter7" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter8"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter8" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter9"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter9" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter10"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter10" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×            </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter11"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter11" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×          </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-info"><i class="icofont icofont-love"></i></div><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter12"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter12" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                    </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter13"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter13" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                              </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-clip ribbon-warning">Hot</div><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter14"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter14" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                              </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter15"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter15" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                        </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter16"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter16" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter16" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                  </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter17"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter17" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter17" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                            </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter18"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter18" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter18" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                                      </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter19"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter19" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter19" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                                                </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter20"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter20" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter20" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                                                          </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter21"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter21" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter21" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                                                                    </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter22"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter22" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter22" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                                                                              </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4 set-col-33">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter23"><i class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter23" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter23" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-md-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
                        <div class="product-details col-md-6 text-left">
                          <h4>Woman</h4>
                          <div class="product-price">
                            <del>$350.00    </del>$26.00
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li> 
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li> 
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn">
                              <button class="btn btn-primary" type="button">Add to Cart</button>
                              <button class="btn btn-primary" type="button">View Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×                                                                                                                        </span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <h4>Woman</h4>
                <p>Simply dummy text of the printing.</p>
                <div class="product-price">
                  <del>$350.00    </del>$26.00
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
<script src="{{asset('assets/js/touchspin/vendors.min.js')}}"></script>
<script src="{{asset('assets/js/touchspin/touchspin.js')}}"></script>
<script src="{{asset('assets/js/touchspin/input-groups.min.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/range-slider/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/range-slider/rangeslider-script.js')}}"></script>
<script src="{{asset('assets/js/product-tab.js')}}"></script>
@endsection