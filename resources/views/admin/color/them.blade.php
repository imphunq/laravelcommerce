@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Color
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/color/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Color Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                            </div>

                            <div class="form-group">
                                <label>Code Color</label>
                                <input type="color" class="form-control" placeholder="Nhập tên danh mục"  name="code" id="code" value="" />
                            </div>

                            <div class="form-group">
                                <label>dateCreate</label>
                                <input class="form-control" name="dateCreate" placeholder="Please Enter Category Name" />
                            </div>

                            <div class="form-group">
                                <label>Color Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
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