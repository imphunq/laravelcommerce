@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
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
                        <form action="admin/user/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" name="userName" placeholder="Please Enter user name" value="{{old('userName')}}" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Please Enter Password" value="{{old('password')}}" />
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="fullName" placeholder="Please Enter Full Name" value="{{old('fullName')}}" />
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" placeholder="Please Enter Your Phone" value="{{old('phone')}}" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Please Enter Your Email" value="{{old('email')}}" />
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <label class="radio-inline">
                                    <input name="gender" value="1" checked="" type="radio">Male
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="0" type="radio">Female
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Brithday</label>
                                <input class="form-control" name="birthday" placeholder="Please Enter Your Brithday" value="{{old('birthday')}}" />
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" placeholder="Please Enter Your Address" value="{{old('address')}}" />
                            </div>
                            
                            <div class="form-group">
                                <label>Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="0" type="radio">Client
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