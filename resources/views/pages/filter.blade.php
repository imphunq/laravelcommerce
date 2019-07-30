@extends('master')
@section('content')



<!-- ##### Right Side Cart End ##### -->

<!-- ##### Breadcumb Area Start ##### -->

<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Catagories</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <!-- Single Item -->
                                
                                <!-- Single Item -->
                                <?php 
                                    $cate = DB::table('category')->select('id','name','images','title','status','dateCreate')->get();

                                 ?>
                                 <li>
                                     <a href="{{URL::route('trangchu')}}">All</a>
                                 </li>
                                 @foreach($cate as $cate)
                                <li data-toggle="collapse" data-target="#{{$cate->name}}" class="collapsed">
                                    <a href="{{URL::route('sanpham',$cate->id)}}">{{$cate->name}}</a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget price mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Filter by</h6>
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Price</p>

                        {{-- <div class="widget-desc">
                            <div class="slider-range">
                                <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="range-price">Range: $49.00 - $360.00</div>
                            </div>
                        </div> --}}
                    </div>

                    <!-- ##### Single Widget ##### -->
                    {{-- <div class="widget color mb-50">
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Color</p>
                        <div class="widget-desc">
                            <ul class="d-flex">
                                <li><a href="#" class="color1"></a></li>
                                <li><a href="#" class="color2"></a></li>
                                <li><a href="#" class="color3"></a></li>
                                <li><a href="#" class="color4"></a></li>
                                <li><a href="#" class="color5"></a></li>
                                <li><a href="#" class="color6"></a></li>
                                <li><a href="#" class="color7"></a></li>
                                <li><a href="#" class="color8"></a></li>
                                <li><a href="#" class="color9"></a></li>
                                <li><a href="#" class="color10"></a></li>
                            </ul>
                        </div>
                    </div> --}}

                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Brands</p>
                        <div class="widget-desc">
                            <ul>
                                <li><a href="#">Asos</a></li>
                                <li><a href="#">Mango</a></li>
                                <li><a href="#">River Island</a></li>
                                <li><a href="#">Topshop</a></li>
                                <li><a href="#">Zara</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p><span>
                                        <?php $i=0 ?>
                                        @foreach($product as $pro)
                                            <?php $i++ ?>
                                        @endforeach
                                        {{$i}}
                                    </span> products found</p>
                                </div>
                                <!-- Sorting -->
                                {{-- <div class="product-sorting d-flex">
                                    <p>Sort by:</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortByselect">
                                            <option value="value">Highest Rated</option>
                                            <option value="value">Newest</option>
                                            <option value="value">Price: $$ - $</option>
                                            <option value="value">Price: $ - $$</option>
                                        </select>
                                        <input type="submit" class="d-none" value="">
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                       
                        <!-- Single Product -->
                        @foreach($product as $pro)
                       
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('resources/upload/')}}/{{$pro->images}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="{{asset('resources/upload/product-big-3.jpg')}}" alt="">

                                    <!-- Product Badge -->
                                    <div class="product-badge offer-badge">
                                        <span>{{$pro->sale_of}}%</span>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>

                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>topshop</span>
                                    <a href="{{URL::route('chi-tiet-san-pham',[$pro->id,$pro->nameProduct])}}">
                                        <h6>{{$pro->nameProduct}}</h6>
                                    </a>
                                    <p class="product-price"><span class="old-price">${{number_format($pro->price)}}</span> $55.00</p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="{{url('chi-tiet-san-pham',[$pro->id,$pro->nameProduct])}}" class="btn essence-btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <nav aria-label="navigation">
                    <ul class="pagination mt-50 mb-70">
                        @if($product->currentPage()!=1)
                        <li class="page-item"><a class="page-link" href="{{$product->url($product->currentPage()-1)}}"><i class="fa fa-angle-left"></i></a></li>
                        @endif
                        @for($i=1;$i<=$product->lastPage();$i=$i+1)
                        <li class="page-item {{ ($product->currentPage()==$i) ? 'active' : '' }}"><a class="page-link" href="{{$product->url($i)}}">{{$i}}</a></li>
                        @endfor
                        @if($product->currentPage() != $product->lastPage())
                        <li class="page-item"><a class="page-link" href="{{$product->url($product->currentPage()+1)}}"><i class="fa fa-angle-right"></i></a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
    @endsection