@extends('layouts.milestones')

@section('content')
	<h2>Timeline</h2>
	<a href="/milestones/new-event" class="btn btn-primary" role="button">Add new milestone</a>
	<p>Use milestones to celebrate how far you've come. A milestone can be big or small, from changing how you wear your hair to coming out to your best friend to legally changing your name.</p>
	@if (count($events) > 0)
		@foreach($events as $event)
			<ul class="nav nav-tabs">
				<li role="presentation">
					<span class="glyphicon glyphicon-{{$event->glyph}}" aria-hidden="true"></span>
					{{$event->type}}
				</li>
				<!--Allow post date to display in more human readable format-->
				<script>
					<?php
						$date = Carbon\Carbon::parse($event->date);
					?>
				</script>
				<li role="presentation">{{$date->format('n/j/Y')}}</li>
				<li role="presentation"><a href="/milestones/edit/{{$event->id}}">Edit</a></li>
				<li role="presentation"><a href="/milestones/delete/{{$event->id}}">Delete</a></li>
			</ul>
			<p class="timeline">{{$event->description}}</p>
		@endforeach
	@else
		<h3 class="no-posts">No milestones added yet!</h3>
	@endif

@stop