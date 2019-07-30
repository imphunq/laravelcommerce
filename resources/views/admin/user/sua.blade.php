@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>{{$user->fullname}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/sua/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" name="userName" placeholder="Please Enter user name" value="{{$user->username}}" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="changePassword" id="changePassword">
                                <label>Change Password</label>
                                <input class="password form-control" name="password" placeholder="Please Enter Password" value="" / disabled="">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="fullName" placeholder="Please Enter Full Name" value="{{$user->fullname}}" />
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" placeholder="Please Enter Your Phone" value="{{$user->phone}}" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Please Enter Your Email" value="{{$user->email}}" readonly="" />
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <label class="radio-inline">
                                    <input name="gender" value="1" @if($user->gender==1) {{"checked"}} @endif type="radio">Male
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="0" @if($user->gender==0) {{"checked"}} @endif type="radio">Female
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Brithday</label>
                                <input class="form-control" name="birthday" placeholder="Please Enter Your Brithday" value="{{$user->birthday}}" />
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" placeholder="Please Enter Your Address" value="{{$user->address}}" />
                            </div>
                            
                            <div class="form-group">
                                <label>Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" @if($user->status==1) {{"checked"}} @endif type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="0" @if($user->status==0) {{"checked"}} @endif type="radio">Client
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">User Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#changePassword').change(function(){
                if($(this).is(":checked")){
                    $('.password').removeAttr('disabled');
                }
                else
                {
                    $('.password').attr('disabled','');
                }
            });
        });

    </script>
@endsection