@extends('layouts.milestones')


@section('content')
	<h2>New Milestone</h2>

	@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            @if ($error != "The date does not match the format m/d/Y.")
                <li><span class='glyphicon glyphicon-exclamation-sign'></span> {{ $error }}</li>
            @else
            	<li><span class='glyphicon glyphicon-exclamation-sign'></span> The date does not match the format "m/d/yyyy".</li>
            @endif
        @endforeach
    </ul>
	@endif

	<form action="/milestones/publish" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<label for="type">Type</label>
		<select name="type" class="form-control">
			<option value="Coming Out">Coming Out</option>
			<option value="Presentation">Presentation</option>
			<option value="Legal">Legal</option>
			<option value="Physical/Medical">Physical/Medical</option>
			<option value="Other">Other</option>
		</select>
		<br>
		<script> //Get current date and convert it to human readable format
			<?php
				$currentDate = Carbon\Carbon::now();
				$dateDisplay = $currentDate->format('n/j/Y');
			?>
		</script>
		<label for="date">Date (m/d/yyyy)</label>
		<input type="text" name="date" class="form-control" value="{{$dateDisplay}}">
		<br>
		<label for="description">Description</label>
		<textarea name="description" class="form-control">{{old('description')}}</textarea>
		<br>
		<input type="submit" value="Post!" class="btn btn-primary">
	</form>
@stop
	