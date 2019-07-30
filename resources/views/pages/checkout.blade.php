@extends('master')
@section('detail')
<?php
 $transport = DB::table('transport')->select('id','name')->get();
 ?>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Checkout Area Start ##### -->
<div class="checkout_area section-padding-80">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-page-heading mb-30">
                        <h5>Billing Address</h5>
                    </div>

                    <form action="{{url('checkout')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="last_name"> Name <span>*</span></label>
                                <input type="text" class="form-control" name="name" id="name" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="street_address">Address <span>*</span></label>
                                <input type="text" class="form-control mb-3" name="street_address" id="street_address" value="">
                            </div>
                           
                            <div class="col-12 mb-3">
                                <label for="phone_number">Phone No <span>*</span></label>
                                <input type="number" class="form-control" name="phone_number" id="phone_number" min="0" value="">
                            </div>
                            <div class="col-12 mb-4">
                                <label for="email_address">Email Address <span>*</span></label>
                                <input type="email" class="form-control" name="email_address" id="email_address" value="">
                            </div>
                             <div class="col-12 mb-3">
                                    <label for="country">Phương thức thanh toán<span>*</span></label>
                                    <select class="w-100" name="transport" id="transport">
                                        <option value="0">----Chọn----</option>
                                        @foreach($transport as $ts)
                                        <option value="{{$ts->id}}">{{$ts->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                             <button type="submit" class="btn btn-success">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                <div class="order-details-confirmation">

                    <div class="cart-page-heading">
                        <h5>Your Order</h5>
                        <p>The Details</p>
                    </div>

                    <ul class="order-details-form mb-4">
                        <li><span>Product</span> <span>Total</span></li>
                        @foreach(Cart::content() as $item)
                        <li><span>{{$item->name}}</span> <span>{{$item->price}}</span></li>
                        @endforeach
                        
                        <li><span>Total</span> <span>{{Cart::subtotal()}}</span></li>
                    </ul>
                   {{--  <a href="{{url('checkout')}}" class="btn essence-btn">Place Order</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection