@extends('layouts.profile')

@section('content')
	<h2>Edit Profile</h2>

	@if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='glyphicon glyphicon-exclamation-sign'></span> Birthday does not match the format 'm/d/yyyy'</li>
            @endforeach
        </ul>
    @endif

    <form action="/profile/edit" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<label for="name">Name:</label>
		<input type="text" name="name" value="{{$user->name}}" class="form-control">
		<br>
		<label for="birthday">Birthday (m/d/yyyy):</label>
			<!--Convert birthday to display in a more human-readable format-->
			<script>
				<?php
					$bd = Carbon\Carbon::parse($user->birthday);
					if ($bd->year != "-0001") {
						$bdDisplay = $bd->format('n/j/Y');
					} else {
						$bdDisplay = "";
					}
				?>
			</script>
		<input type="text" name="birthday" value="{{$bdDisplay}}" class="form-control">
		<br>
		<label for="gender">Gender:</label>
		<input type="text" name="gender" value="{{$user->gender}}" class="form-control">
		<br>
		<label for="pronouns">Pronouns:</label>
		<input type="text" name="pronouns" placeholder="ex. she/her/hers" value="{{$user->pronouns}}" class="form-control">
		<br>
		<input type="submit" class="btn btn-success" value="Save">
		<a href="/profile" class="btn btn-info" role="button">Cancel</a>
	</form>

@stop