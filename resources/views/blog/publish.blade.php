@extends('layouts.blog')

@section('content')
	<h2>Post published</h2>
	<p>"{{$title}}" published successfully.</p>
	<a href="/blog">View posts</a><br>
	<a href="/blog/new-post">Publish another post</a>
@stop
