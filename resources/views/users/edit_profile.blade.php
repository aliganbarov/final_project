@extends('layout')

@section('header')
	<style>
		form {
			padding-top: 80px;
		}
		input {
			margin-bottom: 10px;
		}
	</style>
@stop

@section('content')
	<div class="container">
		<form class="form-group" method="post" action="/profile/updateprofile" enctype="multipart/form-data">
			<p>NAME</p>
			<input type="text" name="name" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" placeholder="{{$user->name}}">
			@if ($errors->has('name'))
	            <span class= "alert-danger">
	                <strong>{{ $errors->first('name') }}</strong>
	            </span>
	        @endif

	        <p>SURNAME</p>
			<input type="text" name="user_surname" class="form-control{{ $errors->has('user_surname') ? ' has-error' : '' }}" placeholder="{{$user->user_surname}}">
			@if ($errors->has('user_surname'))
	            <span class= "alert-danger">
	                <strong>{{ $errors->first('user_surname') }}</strong>
	            </span>
	        @endif

	        <p>TYPE</p>
			<input type="text" name="user_type" class="form-control{{ $errors->has('user_type') ? ' has-error' : '' }}" placeholder="{{$user->user_type}}">
			@if ($errors->has('user_type'))
	            <span class= "alert-danger">
	                <strong>{{ $errors->first('user_type') }}</strong>
	            </span>
	        @endif

	        <p>EMAIL</p>
			<input type="text" name="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="{{$user->email}}">
			@if ($errors->has('email'))
	            <span class= "alert-danger">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	        @endif

	        <p>PASSWORD</p>
			<input type="text" name="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}">
			@if ($errors->has('password'))
	            <span class= "alert-danger">
	                <strong>{{ $errors->first('password') }}</strong>
	            </span>
	        @endif

	        <p>UPLOAD PHOTO</p>
			<input type="file" name="avatar" class="form-control{{ $errors->has('avatar') ? ' has-error' : '' }}">
			@if ($errors->has('avatar'))
                <span class="alert-danger">
                    <strong>{{ $errors->first('avatar') }}</strong>
                </span>
            @endif

            <input type="submit" name="submit" value="Update Profile" class="btn btn-success">
            <a href="/profile" class="btn btn-primary">Go Back</a>

			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
	
@stop
