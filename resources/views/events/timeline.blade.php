@extends('layouts.milestones')

@section('content')
	<h2>Timeline</h2>
	<a href="/milestones/new-event">Add new milestone</a>
	<p>Use milestones to celebrate how far you've come. A milestone can be big or small, from changing how you wear your hair to coming out to your best friend to legally changing your name.</p>
	@foreach($events as $event)
		<ul class="nav nav-tabs">
			<li role="presentation">
				<span class="glyphicon glyphicon-{{$event->glyph}}" aria-hidden="true"></span>
				{{$event->type}}
			</li>
			<li role="presentation">{{$event->date}}</li>
			<li role="presentation"><a href="/milestones/edit/{{$event->id}}">Edit</a></li>
			<li role="presentation"><a href="/milestones/delete/{{$event->id}}">Delete</a></li>
		</ul>
		<p class="timeline">{{$event->description}}</p>
	@endforeach
@stop