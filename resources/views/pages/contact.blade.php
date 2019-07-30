@extends('master')

@section('contact')

<div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{url('lien-he')}}" method="POST">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please Enter YourEmail" />
                            </div>
                           
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" rows="3" name="message"></textarea>
                            </div>
                            	                         
                            <button type="submit" class="btn btn-default">Send</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>

@endsection