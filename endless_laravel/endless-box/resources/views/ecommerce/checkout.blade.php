@extends('layouts.master')
@section('title', 'Checkout | Endless Admin Panel')
@section('style')
@endsection

@section('breadcrumb-title', 'Checkout')
@section('breadcrumb-items')
<li class="breadcrumb-item">ECommerce</li>
<li class="breadcrumb-item active">Checkout</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid checkout">
  <div class="card">
    <div class="card-header">
      <h5>Billing Details</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <form>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="firstName">First Name</label>
                <input class="form-control" id="firstName" type="email">
              </div>
              <div class="form-group col-sm-6">
                <label for="lastName">Last Name</label>
                <input class="form-control" id="lastName" type="password">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="phone">Phone</label>
                <input class="form-control" id="phone" type="email">
              </div>
              <div class="form-group col-sm-6">
                <label for="emailAddress">Email Address</label>
                <input class="form-control" id="emailAddress" type="password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputCountry">Country</label>
              <select class="form-control" id="inputCountry">
                <option selected="">Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input class="form-control" id="inputAddress" type="text">
            </div>
            <div class="form-group">
              <label for="inputCity">Town/City</label>
              <input class="form-control" id="inputCity" type="text">
            </div>
            <div class="form-group">
              <label for="inputState">State/Country</label>
              <input class="form-control" id="inputState" type="text">
            </div>
            <div class="form-group">
              <label for="inputpostal">Postal Code</label>
              <input class="form-control" id="inputpostal" type="text">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" id="gridCheck" type="checkbox">
                <label class="form-check-label" for="gridCheck">Check me out</label>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="checkout-details">
            <div class="order-box">
              <div class="title-box">
                <div class="checkbox-title">
                  <h4>Product </h4><span>Total</span>
                </div>
              </div>
              <ul class="qty">
                <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
              </ul>
              <ul class="sub-total">
                <li>Subtotal <span class="count">$380.10</span></li>
                <li class="shipping-class">Shipping
                  <div class="shopping-checkout-option">
                    <label class="d-block" for="chk-ani">
                      <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">Option 1
                    </label>
                    <label class="d-block" for="chk-ani1">
                      <input class="checkbox_animated" id="chk-ani1" type="checkbox">Option 2
                    </label>
                  </div>
                </li>
              </ul>
              <ul class="sub-total total">
                <li>Total <span class="count">$620.00</span></li>
              </ul>
              <div class="animate-chk">
                <div class="row">
                  <div class="col">
                    <label class="d-block" for="edo-ani">
                      <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="">Check Payments
                    </label>
                    <label class="d-block" for="edo-ani1">
                      <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="">Cash On Delivery
                    </label>
                    <label class="d-block" for="edo-ani2">
                      <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="">PayPal<img class="img-paypal" src="{{asset('assets/images/checkout/paypal.png')}}" alt="">
                    </label>
                  </div>
                </div>
              </div>
              <div class="text-right"><a class="btn btn-primary" href="#">Place Order  </a></div>
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
@endsection