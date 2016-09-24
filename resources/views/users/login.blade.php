@extends('layout')

@section('header')
	<style>
		.container {
			padding-top: 75px;
		}
		input {
			margin-bottom: 10px;
		}
	</style>
@stop

@section('content')
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<form method="post" class="form-group" action="/checkLogin">
				<p>Email</p>
				<input type="text" name="user_email" required class="form-control">
				<p>Password</p>
				<input type="password" name="user_password" required class="form-control">
				<input type="submit" name="submit" class="btn btn-primary">
			</form>
		</div>
	</div>
@stop