@extends('layouts.blog')

@section('head')
	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
 	</script>
@stop

@section('content')
	<h2>Edit Post</h2>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                @if ($error != "The date does not match the format m/d/Y.")
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
		<input type="text" id="datepicker" name="date" class="form-control" value="{{$post->date}}">
		<br>
		<textarea name="text" class="form-control blog-post">{{$post->text}}</textarea>
		<br>
		<input type="submit" class="btn btn-primary" value="Save">
	</form>
@stop