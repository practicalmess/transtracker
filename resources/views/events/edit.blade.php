@extends('layouts.milestones')


@section('content')
	<h2>New Milestone</h2>

	@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
	@endif

	<form action="/milestones/edit" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<input type="hidden" name="id" value="{{$event->id}}">
		<label for="type">Type</label>
		<select name="type" class="form-control">
			<option value="Coming Out"
				@if($event->type=='Coming Out')
					selected
				@endif
				>
				Coming Out</option>
			<option value="Presentation" 
			@if($event->type=='Presentation')
					selected
				@endif
				>Presentation</option>
			<option value="Legal" 
			@if($event->type=='Legal')
					selected
				@endif
			>Legal</option>
			<option value="Physical/Medical" 
			@if($event->type=='Physical/Medical')
					selected
				@endif
			>Physical/Medical</option>
			<option value="Other" 
			@if($event->type=='Other')
					selected
				@endif
			>Other</option>
		</select>
		<br>
		<label for="date">Date</label>
		<script>
			<?php
				$date = Carbon\Carbon::parse($event->date);
				$dateFormatted = $date->format('n/j/Y');
			?>
		</script>
		<input type="text" name="date" value="{{$dateFormatted}}" class="form-control">
		<br>
		<label for="description">Description</label>
		<textarea name="description" class="form-control">{{$event->description}}</textarea>
		<br>
		<input type="submit" value="Save" class="btn btn-primary">
	</form>
@stop
	