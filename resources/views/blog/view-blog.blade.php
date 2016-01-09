@extends('layouts.blog')


@section('content')
	<h2>View blog posts for {{$userName}}</h2>
	<a href="/blog/new-post" class="btn btn-primary" role="button">New Post</a>
	@if (count($posts) > 0)
		@foreach($posts as $post)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><a href="/blog/post/{{$post->id}}">{{$post->title}}</a></h3>
					<a href="/blog/edit/{{$post->id}}" class="btn btn-success">Edit</a>
					<a href="/blog/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
				</div>
				<div class="panel-body">
					<span class="post-date">{{$post->date}}</span>
					<br>
					{{ str_limit($post->text, 400) }}
				</div>
			</div>
		@endforeach
	@else
		<h3 class="no-posts">No blog posts yet!</h3>
	@endif

@stop