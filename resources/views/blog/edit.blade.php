@extends('layouts.blog')

@section('content')
	<h2>Edit Post</h2>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='glyphicon glyphicon-exclamation-sign'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

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