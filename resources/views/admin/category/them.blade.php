@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif --}}
                        <form action="admin/category/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="images" />
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>Date Create</label>
                                <input type="text" name="dateCreate">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <label class="radio-inline">
                                    <input name="status" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="status" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>

@endsection