@extends('layouts.profile')

@section('content')
<h2>Your Profile</h2>

<div class="profile">
	<div class="row">
		<div class="label">
			Name:
		</div>
		<div class="value">
			{{$user->name}}
		</div>
	</div>
	<div class="row">
		<div class="label">
			Birthday:
		</div>
		<div class="value">
			{{$user->birthday}}
		</div>
	</div>
	<div class="row">
		<div class="label">
			Gender:
		</div>
		<div class="value">
			{{$user->gender}}
		</div>
	</div>
	<div class="row">
		<div class="label">
			Pronouns:
		</div>
		<div class="value">
			{{$user->pronouns}}
		</div>
	</div>
</div>