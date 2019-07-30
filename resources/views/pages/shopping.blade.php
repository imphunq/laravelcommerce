<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="{{asset('img/core-img/bag.svg')}}" alt=""> <span>{{Cart::count()}}</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                @foreach(Cart::content() as $item)
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="{{asset('img/product-img/'.$item->options->img)}}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>{{$item->name}}</h6>
                            <p class="size">Size: {{$item->options->size}}</p>
                            <p class="color">Color: {{$item->options->color}}</p>
                            <p class="price">Price: {{$item->price}}</p>
                            <span>Số lượng: {{$item->qty}}</span>
                            <input type="number" value="{{$item->qty}}" name="">
                        </div>
                    </a>
                    <a class="xoa" href="{!!url('xoa-san-pham',['id'=>$item->rowId])!!}">Xóa sản phẩm</a>
                    {{-- <a class="sua" href="{!!url('chi-tiet-san-pham',['id'=>$item->rowId,'tenloai'=>$item->name])!!}">Sửa</a> --}}
                </div>
                @endforeach
                <!-- Single Cart Item -->
                

                <!-- Single Cart Item -->
                
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">
                <?php $total = Cart::subtotal() ?>
                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>Total:</span> <span>{{$total}}</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="{{url('checkout')}}" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
<!-- ##### Right Side Cart End ##### -->
<style type="text/css">
    .xoa:hover{
        color:red;
    }
    .sua:hover{
        color:red;
    }
</style>