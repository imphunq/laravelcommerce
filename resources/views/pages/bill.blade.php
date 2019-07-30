<p>Đơn hàng cần mua</p>
<ul>
	{{-- @foreach(Cart::content() as $item) --}}
	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Số lượng</th>
		</tr>
		@foreach(Cart::content() as $item)
		<tr>
			<td>{{$item->name}}</td>
			<td>{{$item->price}}</td>
			<td>{{$item->qty}}</td>
		</tr>
		@endforeach
	</table>
	
</ul>
<p>Tên khách hàng: {{$name}} </p>
<p>Số điện thoại: {{$phone}}</p>
<p>Email: {{$mail}}</p>
<p>Địa chỉ: {{$address}}</p>
<p>Cách trả tiền: {{$transport}}</p>