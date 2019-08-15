@extends('master')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
				<div class="panel-title text-center" style="margin-top: 50px; margin-bottom: 30px"><h1>Giỏ hàng của bạn</h1></div>
				
				<div class="panel-options">
					<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
				</div>
			</div>
				<div class="panel-body">
					<table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>Image</th>
	                  <th>Name Product</th>
	                  <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Delete</th>
	                </tr>
	              </thead>
	              <tbody>
                @foreach(Cart::content() as $item)
	                <tr>
	                  <td><img src="{{asset('img/product-img/'.$item->options->img)}}" class="cart-thumb" alt="" style="width: 100px"></td>
	                  <td class="cart">{{$item->name}}</td>
                    <td class="cart">{{$item->options->size}}</td>
                    <td class="cart">{{$item->options->color}}</td>
                    <td class="cart">{{$item->price}}</td>
                    <td>
                      <form method="post">
                        {!! csrf_field() !!}
                        <input type="number" class="changeNumberProduct" value="{{$item->qty}}" data-id="{{$item->rowId}}" name="">
                      </form>
                    </td>
	                  <td class="cart"><a class="xoa" href="{!!url('xoa-san-pham',['id'=>$item->rowId])!!}">Xóa sản phẩm</a></td>
	                </tr>
                @endforeach
	              </tbody>
	            </table>
				</div>
			</div>
		</div>
  </div>
@endsection