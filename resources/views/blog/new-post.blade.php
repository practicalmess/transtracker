@extends('layouts.blog')

@section('content')
	<h2>New Post</h2>

	@if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='glyphicon glyphicon-exclamation-sign'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

	<form action="/blog/publish-post" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<input type="text" name="title" placeholder="Title" class="form-control">
		<br>
		<textarea name="text" class="form-control blog-post"></textarea>
		<br>
		<input type="submit" class="btn btn-primary" value="Post!">
	</form>
@stop