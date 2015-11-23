@extends('layouts.blog')

@section('content')
	<h2>Edit Post</h2>

	<form action="/blog/edit" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<input type="hidden" name="id" value="{{$post->id}}">
		<input type="text" name="title" value="{{$post->title}}" class="form-control">
		<br>
		<textarea name="text" class="form-control blog-post">{{$post->text}}</textarea>
		<br>
		<input type="submit" class="btn btn-primary" value="Save">
	</form>
@stop