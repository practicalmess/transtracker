@extends('layouts.milestones')

@section('head')
	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
 	 </script>
@stop

@section('content')
	<h2>New Milestone</h2>

	@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
	@endif

	<form action="/milestones/publish" method="POST">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<label for="type">Type</label>
		<select name="type" class="form-control">
			<option value="Coming Out">Coming Out</option>
			<option value="Presentation">Presentation</option>
			<option value="Legal">Legal</option>
			<option value="Physical/Medical">Physical/Medical</option>
			<option value="Other">Other</option>
		</select>
		<br>
		<label for="date">Date (mm/dd/yyyy)</label>
		<input type="text" id="datepicker" name="date" class="form-control">
		<br>
		<label for="description">Description</label>
		<textarea name="description" class="form-control"></textarea>
		<br>
		<input type="submit" value="Post!" class="btn btn-primary">
	</form>
@stop
	