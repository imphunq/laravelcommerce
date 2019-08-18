@extends('master')
@section('detail')
<!-- ##### Right Side Cart Area ##### -->
<div class="cart-bg-overlay"></div>


<!-- ##### Right Side Cart End ##### -->

<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

    <!-- Single Product Thumb -->
    <div class="single_product_thumb clearfix">
        <div class="product_thumbnail_slides owl-carousel">
            <img src="{{asset('img/product-img/product-big-1.jpg')}}" alt="">
            <img src="{{asset('img/product-img/product-big-2.jpg')}}" alt="">
            <img src="{{asset('img/product-img/product-big-3.jpg')}}" alt="">
        </div>
    </div>

    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        <span>mango</span>
        <a href="cart.html">
            <h2>{{$product_detail->nameProduct}}</h2>
        </a>
        <p class="product-price"><span class="old-price">${{$product_detail->price}}</span> $49.00</p>
        <p class="product-desc">{{$product_detail->description}}</p>

        <!-- Form -->
    
        <form action=" {{url('mua-hang',[$product_detail->id,$product_detail->nameProduct])}}" class="cart-form clearfix" method="post">
           {{csrf_field()}}
            <!-- Select Box -->
            <div class="select-box d-flex mt-50 mb-30">
                <?php 
                    $size = DB::table('size')->select('id','name')->get();
                    $color= DB::table('color')->get();  
                ?>
                <select name="selectsize" id="productSize" class="mr-5">
                    @foreach($size as $size)
                        <option value="{{$size->id}}">Size: {{$size->name}}</option>
                    @endforeach
                </select>
                <select name="selectcolor" id="productColor">
                
                    @foreach($color as $color)
                    <option value="{{$color->id}}">Color: {{$color->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
            Quantity: <input type="number" class="form-control" name="quantity" id="quantity" value="1">
            </div>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center" style="margin-top: 20px">
                <!-- Cart -->
               {{--  <a href="{{url('mua-hang',[$product_detail->id,$product_detail->nameProduct])}}" class="btn essence-btn">Add to Cart</a> --}}
               <button type="submit" class="btn btn-success">Add to Cart</button>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->
@endsection