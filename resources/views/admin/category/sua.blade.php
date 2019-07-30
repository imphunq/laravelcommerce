@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>{{$cat->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $err)
                                    <li>
                                        {{$err}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="admin/category/sua/{{$cat->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Category Name" value="{{$cat->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <p><img src="resources/upload/{{$cat->images}}" width="200px"></p>
                                <input type="file" name="images" />
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Please Enter Category Keywords" value="{{$cat->title}}" />
                            </div>
                            <div class="form-group">
                                <label>Date Create</label>
                                <input type="text" name="dateCreate" value="{{$cat->dateCreate}}">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <label class="radio-inline">
                                    <input name="status" value="1" @if($cat->status==1) {{"checked"}}  @endif type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="status"  @if($cat->status==2) {{"checked"}} @endif value="2" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection