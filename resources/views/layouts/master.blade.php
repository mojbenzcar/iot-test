<!DOCTYPE html>
<html>
<head>
	<title>@yield('title',"Iot Test")</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Bootstrap -->
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- styles -->
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

	<![endif]-->
</head>
<body>
<div class="header">
	@include('layouts._partials.header')

</div>

<div class="page-content">
	<div class="row">
		@include('layouts._partials.side_navigation')
		<div class="col-md-10">
			@include('layouts._partials.notification')
			@yield('content')
		</div>
	</div>
</div>

<footer>
	<div class="container">

		<div class="copy text-center">
			Copyright 2017
		</div>

	</div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
@yield('footer_scripts')
</body>
</html>