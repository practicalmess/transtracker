@extends('layouts.blog')


@section('content')
	<h2>View blog posts for {{$userName}}</h2>
	<a href="/blog/new-post">New Post</a>
	@foreach($posts as $post)
		<div class="list-post">
			<h3>{{$post->title}}</h3>
			{{$post->date}}<br>
			<p>{{$post->text}}</p>
		</div>
	@endforeach

@stop