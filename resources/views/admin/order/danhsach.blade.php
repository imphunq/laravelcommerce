@extends('admin.layout.index')

<?php 
    $user = DB::table('user')->select('username','id')->get();
?>

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Size
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Total</th>
                                <th>dateCreate</th>
                                <th>Fullname</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $order)
                            <tr class="odd gradeX" align="center">
                                <td>{{$order->id}}</td>
                                
                                <td>@foreach($user as $u)@if($order->user_id==$u->id){{$u->username}}@endif
                                @endforeach
                                </td>
                                
                                <td>{{$order->total}}</td>
                                <td>{{$order->dateCreate}}</td>
                                <td>{{$order->fullName}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->mobile}}</td>
                                <td>{{$order->email}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection