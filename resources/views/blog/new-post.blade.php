@extends('layouts.blog')

@section('content')
	<h2>New Post</h2>

	<form action="/blog/publish-post" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<input type="text" name="title" placeholder="Title">
		<br>
		<textarea name="text"></textarea>
		<br>
		<input type="submit" value="Post!">
	</form>
@stop