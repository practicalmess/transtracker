@extends('layouts.milestones')

@section('content')
	<h2>Milestone added!</h2>

	<ul class="list-group">
		<li class="list-group-item">
			<span class="glyphicon glyphicon-{{$glyph}}" aria-hidden="true"></span>
			{{$title}}
		</li>
		<li class="list-group-item">{{$date}}</li>
		<li class="list-group-item">{{$desc}}</li>
	</ul>
@stop