@extends('layouts.blog')

@section('content')
	<h2>Delete Post</h2>
	<p>
		Are you sure you want to delete the post "{{ $post->title }}"?
		<form method="POST" action="/blog/post-deleted">
			<input type='hidden' value='{{ csrf_token() }}' name='_token'>
			<input type="hidden" name="id" value="{{$post->id}}">

			<button type="submit" class="btn btn-danger">Delete post</button>
		</form>
	</p>
@stop