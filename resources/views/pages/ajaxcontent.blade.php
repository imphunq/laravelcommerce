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