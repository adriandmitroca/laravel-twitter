<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title . ' | '}}Twitter</title>

    <link href="{{ URL::to('/') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<div class="container-fluid">
  		<div class="col-md-12">
  			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="{{ URL::to('/') }}">Twitter</a>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="{{ URL::action('PostController@showTimeline') }}">Home</a></li>
				        <li><a href="#">Profile</a></li>
				        <li><a href="#">Trends</a></li>
				      </ul>

				      <ul class="nav navbar-nav navbar-right">
				      @if(Auth::check())
				      	<li><a href="#" class="user"><img src="{{ URL::to('/') . '/media/avatars/' . Auth::user()->avatar }}" class="img-circle">  Hello, {{ Auth::user()->username }}</a></li>
				      	<li><a href="{{ URL::route('account-sign-out') }}">Sign out</a></li>
				      @else
				        <li><a href="{{ URL::route('account-sign-in') }}">Log in</a></li>
				        <li><a href="#">Sign up</a></li>
				      @endif
				      </ul>
				    </div>
				  </div>
				</nav>
		</div>

		<div class="col-md-offset-2 col-md-8 content">
			@if(Session::has('alert'))
				<div class="alert alert-danger" role="alert">{{ Session::get('alert') }}</div>
			@endif
			@if(Session::has('success'))
				<div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
			@endif
			@yield('content')
		</div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/bootstrap.min.js"></script>
  </body>
</html>