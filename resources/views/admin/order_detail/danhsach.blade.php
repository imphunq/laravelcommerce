@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Order Detail
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Order_id</th>
                                    <th>Product_id</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $order)
                                  <tr class="odd gradeX" align="center">
                                      <td>{{$order->id}}</td>
                                      <td>{{$order->order_id}}</td>
                                      <td>{{$order->product_id}}</td>
                                      <td>{{$order->price}}</td>
                                      <td>{{$order->quanlity}}</td>    
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
</div>
@endsection