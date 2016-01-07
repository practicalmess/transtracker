@extends('layouts.profile')

@section('head')
	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
 	</script>
@stop

@section('content')
	<h2>Edit Profile</h2>

	@if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='glyphicon glyphicon-exclamation-sign'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/profile/edit" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<label for="name">Name:</label>
		<input type="text" name="name" value="{{$user->name}}" class="form-control">
		<br>
		<label for="birthday">Birthday (mm/dd/yyyy):</label>
		<input type="text" id="datepicker" name="birthday" value="{{$user->birthday}}" class="form-control">
		<br>
		<!--<label for="gender">Gender:</label>
		<input type="text" name="gender" class="form-control">
		<br>-->
		<input type="submit" class="btn btn-primary" value="Save">
	</form>

@stop