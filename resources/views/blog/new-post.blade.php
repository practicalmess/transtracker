@extends('layouts.blog')

@section('head')
	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
 	</script>
@stop

@section('content')
	<h2>New Post</h2>

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

	<form action="/blog/publish-post" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
	
		<input type="text" name="title" placeholder="Title" value="{{old('title')}}" class="form-control">
		<br>
		<label for="date">Date (m/d/yyyy)</label>
		<script> //Get current date and convert it to human readable format
			<?php
				$currentDate = Carbon\Carbon::now();
				$dateDisplay = $currentDate->format('n/j/Y');
			?>
		</script>
		<input type="text" id="datepicker" name="date" class="form-control" value="{{$dateDisplay}}">
		<br>
		<textarea name="text" class="form-control blog-post">{{old('text')}}</textarea>
		<br>
		<input type="submit" class="btn btn-primary" value="Post!">
	</form>
@stop