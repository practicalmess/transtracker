<!doctype html>
<html>
<head>
	<title>
		@yield('title', 'Translate')
	</title>
	<meta charset='utf-8'>
	<link href="/css/main.css" type='text/css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    @yield('head')
</head>
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
	    	<li><a href="/login">Sign in</a></li>
	    	<li><a href="/signup">New User</a></li>
	    </ul>
	  </div>
	</nav>

	<header>
		@yield('header')
	</header>



	<section>
		@yield('content')
	</section>

	<footer>
        &copy; {{ date('Y') }}
    </footer>

    

</body>
</html>
