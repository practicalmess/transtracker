@extends('layouts.profile')

@section('content')
	<h2>Your Profile</h2>
	<a href="/profile/edit" class="btn btn-primary" role="button">Edit</a>

	<div class="profile">
		<div class="row">
			<strong>Name:</strong><br>
			{{$user->name}}
		</div>
		<div class="row">
			<strong>Birthday:</strong><br>
			<!--Convert birthday to display in a more human-readable format-->
			<script>
				<?php
					$bd = Carbon\Carbon::parse($user->birthday);

				?>
			</script>
			<!--Display birthday in readable format-->
			@if ($bd->year === 0000)
				{{$bd->toFormattedDateString()}}
			@endif
		</div>
		<div class="row">
			<strong>Gender:</strong><br>
			{{$user->gender}}
		</div>
		<div class="row">
			<strong>Pronouns:</strong><br>
			{{$user->pronouns}}
		</div>
	</div>
@stop