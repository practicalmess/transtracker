@extends('layouts.milestones')

@section('content')
	<h2>Delete Milestone</h2>
	<p>
		Are you sure you want to delete the {{$event->type}} milestone from {{$event->date}}?
		<form method="POST" action="/milestones/event-deleted">
			<input type='hidden' value='{{ csrf_token() }}' name='_token'>
			<input type="hidden" name="id" value="{{$event->id}}">

			<button type="submit" class="btn btn-danger">Delete milestone</button>
		</form>
	</p>
@stop