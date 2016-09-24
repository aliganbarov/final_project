@extends('layout')

@section('header')
	<style>
		.container {
			padding-top: 50px;
		}
	</style>
@stop

@section('content')
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h3>SHARE NEW ITEM</h3>

			<form class="form-group" method="post" action="/newFile" enctype="multipart/form-data">
				<p>TITLE</p>
				<input type="text" name="share_title" class="form-control">
				<p>DESCRIPTION</p>
				<textarea type="text" name="share_description" class="form-control"></textarea>
				<p>SELECT FILE</p>
				<input type="file" name="photo" class="form-control">
				<input type="submit" name="submit" value="Add File">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</div>
	</div>
@stop