@extends('layouts.master')
@section('title', 'Wishlist | Endless Admin Panel')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection

@section('breadcrumb-title', 'Wishlist')
@section('breadcrumb-items')
<li class="breadcrumb-item">ECommerce</li>
<li class="breadcrumb-item active">Wishlist</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Wishlist</h5>
        </div>
        <div class="card-body">
          <div class="order-history table-responsive wishlist">
            <table class="table table-bordernone">
              <thead>
                <tr>
                  <th>Prdouct</th>
                  <th>Prdouct Name</th>
                  <th>Price</th>
                  <th>Availability</th>
                  <th>Action</th>
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
                  <td>In Stock</td>
                  <td><i data-feather="x-circle"></i></td>
                </tr>
                <tr>
                  <td><img class="img-fluid img-60" src="{{asset('assets/images/product/13.png')}}" alt="#"></td>
                  <td>
                    <div class="product-name"><a href="#">Fancy watch</a></div>
                  </td>
                  <td>$50</td>
                  <td>In Stock</td>
                  <td><i data-feather="x-circle"></i></td>
                </tr>
                <tr>
                  <td><img class="img-fluid img-60" src="{{asset('assets/images/product/4.png')}}" alt="#"></td>
                  <td>
                    <div class="product-name"><a href="#">Man shoes</a></div>
                  </td>
                  <td>$11</td>
                  <td>In Stock</td>
                  <td><i data-feather="x-circle"></i></td>
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
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection