@extends('layouts.profile')

@section('content')
	<h2>Your Profile</h2>

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
					//echo $bd->year;
				?>
			</script>
			{{$bd->year}}
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