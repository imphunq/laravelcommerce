@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Size
                            <small>{{$size->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/size/sua/{{$size->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Size Name</label>
{{--                                 @foreach($size as $size)
                                    <option value="{{$size->id}}">Size: {{$size->name}}</option>
                                @endforeach --}}
                                <input class="form-control" name="name" placeholder="Please Enter Size Name" value="{{$size->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Date Create</label>
                                <input class="form-control" name="dateCreate" placeholder="Please Enter Date" value="{{$size->dateCreate}}" />
                            </div>
                            <div class="form-group">
                                <label>Size Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" @if($size->status==1) {{"checked"}} @endif value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" @if($size->status==2) {{"checked"}} @endif value="2" type="radio">Invisible
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