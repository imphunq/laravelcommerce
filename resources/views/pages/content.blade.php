@extends('master')
@section('content')


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
                  <?php 
                    $i=0;
                  ?>
                  @foreach($product as $pro)
                  <?php $i++ ?>
                  @endforeach
                  {{$i}}
                </span> products found</p>
              </div>
              <!-- Sorting -->
              <div class="product-sorting d-flex">
                <p>Sort by:</p>
                <?php 
                  $options = DB::table('options')->get();
                ?>
                {{-- <form action="#" method="get"> --}}
                  <select name="select" id="sortByselect">
                  @foreach($options as $opt)
                    <option value="{{$opt->id}}">{{$opt->name}}</option>
                  @endforeach
                  </select>
                  {{-- <input type="submit" class="d-none" value=""> --}}
                {{-- </form> --}}
              </div>
            </div>
          </div>
        </div>
        <div id="ajax-content">
          <div class="row">
            <?php 
            $i=0;
            ?>

            <!-- Single Product -->
            @foreach($product as $pro)
            <?php $i++ ?>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="single-product-wrapper">
                <!-- Product Image -->
                <div class="product-img">
                  <img src="resources/upload/{{$pro->images}}" alt="">
                  <!-- Hover Thumb -->
                  <img class="hover-img" src="resources/upload/product-big-3.jpg" alt="">

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
  </div>
</section>
@endsection