@extends('layouts.profile')

@section('content')
	<h2>Your Profile</h2>

	<div class="profile">
		<div class="row">
			<strong>Name: </strong>
			{{$user->name}}
		</div>
		<div class="row">
			<strong>Birthday:  </strong>
			<!--Allow birthday to display in a more human-readable format-->
			<script>
				<?php
					$bd = Carbon\Carbon::parse($user->birthday);
				?>
			</script>
			<!--Display birthday in readable format-->
			@if ($bd->year != "-0001")
				{{$bd->toFormattedDateString()}}
			@else
				<em>Empty</em>
			@endif
		</div>
		<div class="row">
			<strong>Gender:  </strong>
			@if ($user->gender != "")
				{{$user->gender}}
			@else
				<em>Empty</em>
			@endif
		</div>
		<div class="row">
			<strong>Pronouns:  </strong>
			@if ($user->pronouns != "")
				{{$user->pronouns}}
			@else
				<em>Empty</em>
			@endif
		</div>
	</div>
	<a href="/profile/edit" class="btn btn-primary" id="edit-profile" role="button">Edit</a>

@stop