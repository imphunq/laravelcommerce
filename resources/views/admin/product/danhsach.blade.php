@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>nameProduct</th>
                                <th>Images</th>
                                <th>cat_id</th>
                                <th>price</th>
                                <th>size_id</th>
                                <th>color_id</th>
                                <th>amount</th>
                                <th>sale_of</th>
                                <th>description</th>
                                <th>status</th>
                                <th>dateCreate</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($pro as $sp)
                                
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->id}}</td>
                                <td>{{$sp->nameProduct}}</td>
                                <td>{{$sp->images}}</td>
                                <td>{{$sp->cat_id}}</td>
                                <td>{{$sp->price}}</td>
                                <td>{{$sp->size_id}}</td>
                                <td>{{$sp->color_id}}</td>
                                <td>{{$sp->amount}}</td>
                                <td>{{$sp->sale_of}}</td>
                                <td>{{$sp->description}}</td>
                                <td>{{$sp->status}}</td>
                                <td>{{$sp->dateCreate}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/xoa/{{$sp->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/sua/{{$sp->id}}">Edit</a></td>
                            </tr>
                        @endforeach
                            {{-- <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>Bóng Đá</td>
                                <td>Thể Thao</td>
                                <td>Ẩn</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection