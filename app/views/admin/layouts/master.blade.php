<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" user-scalable="no">

	<title>@yield('title', 'Admin')</title>

	<link rel="stylesheet" href="{{ asset('stylesheets/application.css') }}">

	<!--[if lte IE 8]>
	<script src="{{ asset('javascripts/polyfill.min.js') }}"></script>
	<![endif]-->

</head>
<body>

	<!--[if lt IE 8]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header>
		<!-- ... -->
	</header>
	
	@yield('content')

	<footer>
		<!-- ... -->
	</footer>
	
	<script>
		var config = {
			base_url: '{{ route("homepage") }}'
		}
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{ asset('javascripts/jquery-1.10.2.min.js') }}"><\/script>')</script>
	<script src="{{ asset('javascripts/vendor.min.js') }}"></script>
	<script src="{{ asset('javascripts/application.min.js') }}"></script>

</body>
</html>