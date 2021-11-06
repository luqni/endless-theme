@extends('layouts.master')
@section('title', 'Cart | Endless Admin Panel')
@section('style')
@endsection

@section('breadcrumb-title', 'Cart')
@section('breadcrumb-items')
<li class="breadcrumb-item">ECommerce</li>
<li class="breadcrumb-item active">Cart</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Cart</h5>
        </div>
        <div class="card-body cart">
          <div class="order-history table-responsive wishlist">
            <table class="table table-bordernone">
              <thead>
                <tr>
                  <th>Prdouct</th>
                  <th>Prdouct Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Action</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="title-orders">
                  <td colspan="12">New Orders</td>
                </tr>
                <tr>
                  <td><img class="img-fluid img-60" src="{{asset('assets/images/product/1.png')}}" alt="#"></td>
                  <td>
                    <div class="product-name"><a href="#">Long Top</a></div>
                  </td>
                  <td>$21</td>
                  <td> 
                    <fieldset class="qty-box">
                      <div class="input-group">
                        <input class="touchspin text-center" type="text" value="5">
                      </div>
                    </fieldset>
                  </td>
                  <td><i data-feather="x-circle"></i></td>
                  <td>$12456</td>
                </tr>
                <tr>
                  <td><img class="img-fluid img-60" src="{{asset('assets/images/product/13.png')}}" alt="#"></td>
                  <td>
                    <div class="product-name"><a href="#">Fancy watch</a></div>
                  </td>
                  <td>$50</td>
                  <td>
                    <fieldset class="qty-box">
                      <div class="input-group">
                        <input class="touchspin text-center" type="text" value="5">
                      </div>
                    </fieldset>
                  </td>
                  <td><i data-feather="x-circle"></i></td>
                  <td>$12456</td>
                </tr>
                <tr>
                  <td><img class="img-fluid img-60" src="{{asset('assets/images/product/4.png')}}" alt="#"></td>
                  <td>
                    <div class="product-name"><a href="#">Man shoes</a></div>
                  </td>
                  <td>$11</td>
                  <td> 
                    <fieldset class="qty-box">
                      <div class="input-group">
                        <input class="touchspin text-center" type="text" value="5">
                      </div>
                    </fieldset>
                  </td>
                  <td><i data-feather="x-circle"></i></td>
                  <td>$12456</td>
                </tr>
                <tr>
                  <td class="total-amount" colspan="5"> 
                    <h6 class="m-0"> <span class="f-w-600">Total Price:</span></h6>
                  </td>
                  <td><span>$6935.00 </span></td>
                </tr>
                <tr>
                  <td colspan="5"><a class="btn btn-primary cart-btn-transform" href="#">continue shopping</a></td>
                  <td><a class="btn btn-primary cart-btn-transform" href="#">check out</a></td>
                </tr>
              </tbody>
            </table>
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
@endsection