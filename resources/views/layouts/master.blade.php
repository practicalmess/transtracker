<!doctype html>
<html>
<head>
	<title>
		@yield('title', 'Translate - A Gender Transition App')
	</title>
	<meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <link href="/css/main.css" type='text/css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    @yield('head')
</head>

<header>
	@yield('header')
</header>

<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">
	       	<strong>Translate</strong>
	      </a>
	    </div>
	    <ul class="nav navbar-nav">
	    	<li><a href="/blog">Blog</a></li>
	    	<li><a href="/milestones">Timeline</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    	@if(Auth::check())
	    		<!-- Check if it is user's bithday -->
		    	<script>
		    	<?php
		    		$bd = \Auth::user()->birthday;
		    		$today = Carbon\Carbon::today();
		    		if ($bd->isBirthday($today)) {
		    			$message = "Happy birthday, ";
		    		} else {
		    			$message = "Not birthday, ";
		    		}
		    	?>
		    	</script>
				<!--Display message based on whether it is user's birthday-->
				<li><strong>
					{{$message or 'Problem! '}}
			    	<a href="/profile">{{\Auth::user()->name}}</a>!
			    </strong></li>
		    	<li><a href="/logout">Sign out</a></li>
			@else
		    	<li><a href="/login">Sign in</a></li>
		    	<li><a href="/register">New User</a></li>
	    	@endif
	    </ul>
	  </div>
	</nav>

	@if(\Session::has('flash_message'))
    <div class="alert alert-success">
        {{ \Session::get('flash_message') }}
    </div>
    @endif
    @if(\Session::has('flash_error'))
    <div class="alert alert-warning">
        {{ \Session::get('flash_error') }}
    </div>
    @endif



	<section>
		@yield('content')
	</section>

	<footer>
        &copy; {{ date('Y') }}
    </footer>

    

</body>
</html>
