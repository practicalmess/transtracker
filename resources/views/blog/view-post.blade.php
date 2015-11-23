@extends('layouts.blog')


@section('content')

	<h2>{{$post->title}}</h2>
	{{$post->date}}
	<a href="/blog/edit/{{$post->id}}" class="btn btn-success">Edit</a><br>
	<p>{{ $post->text }}</p>

@stop