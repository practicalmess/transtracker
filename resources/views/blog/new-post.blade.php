@extends('layouts.blog')

@section('content')
	<h2>New Post</h2>

	<form action="/blog/publish-post" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<input type="text" name="title" placeholder="Title" class="form-control">
		<br>
		<textarea name="text" class="form-control blog-post"></textarea>
		<br>
		<input type="submit" class="btn btn-primary" value="Post!">
	</form>
@stop