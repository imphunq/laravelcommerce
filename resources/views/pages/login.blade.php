@extends('master')
@section('content')
<br><br><br>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    	@if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $err)
                                    <li>{{$err}}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif 
                    	@if(Session::has('flag'))
 						<div class="alert alert-{{Session::get('flag')}}">{{Session::get('thongbao')}}</div>
 						@endif
                        <form role="form" action="{{URL::route('dang-nhap')}}" method="post">
                            <fieldset>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection