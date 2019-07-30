@extends('admin.layout.index')
<?php 
    $cate = DB::table('category')->select('name','id')->get();
    $size = DB::table('size')->select('name','id')->get();
    $color = DB::table('color')->select('name','id')->get();
?>
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/product/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" name="nameProduct" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="images" \>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="0">Please Choose Category</option>
                                    @foreach($cate as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <select class="form-control" name="size">
                                    <option value="0">Please Choose Size</option>
                                    @foreach($size as $size)
                                    <option value="{{$size->id}}">{{$size->name}}</option>
                                    @endforeach
                                </select> 
                            </div>
                            <div class="form-group">
                                <label>Color</label>
                                <select class="form-control" name="color">
                                    <option value="0">Please Choose Color</option>
                                    @foreach($color as $color)
                                    <option value="{{$color->id}}">{{$color->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control" name="amount" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Sale_of</label>
                                <input class="form-control" name="sale_of" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <div class="form-group">
                                <label>dateCreate</label>
                                <input class="form-control" name="dateCreate
                                " placeholder="" />
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