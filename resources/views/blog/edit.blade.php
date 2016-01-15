@extends('layouts.blog')


@section('content')
	<h2>Edit Post</h2>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                @if ($error != "The date does not match the format n/j/Y.")
                	<li><span class='glyphicon glyphicon-exclamation-sign'></span> {{ $error }}</li>
            	@else
            		<li><span class='glyphicon glyphicon-exclamation-sign'></span> The date does not match the format "m/d/yyyy".</li>
            	@endif
            @endforeach
        </ul>
    @endif

	<form action="/blog/edit" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<input type="hidden" name="id" value="{{$post->id}}">
		<input type="text" name="title" value="{{$post->title}}" class="form-control">
		<br>
		<label for="date">Date (m/d/yyyy)</label>
		<script>
			<?php
				$date = Carbon\Carbon::parse($post->date);
				$dateFormatted = $date->format('n/j/Y');
			?>
		</script>
		<input type="text" name="date" class="form-control" value="{{$dateFormatted}}">
		<br>
		<textarea name="text" class="form-control blog-post">{{$post->text}}</textarea>
		<br>
		<input type="submit" class="btn btn-primary" value="Save">
	</form>
@stop