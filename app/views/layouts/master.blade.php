<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" user-scalable="no">

	<meta name="robots" content="{{ asset('robots.txt') }}">

	<title>@yield('title', 'Website')</title>

	<link rel="stylesheet" href="{{ asset('stylesheets/vendor.css') }}">
	<link rel="stylesheet" href="{{ asset('stylesheets/application.css') }}">

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
	<link rel="sitemap" type="application/xml" title="Sitemap" href="{{ asset('sitemap.xml') }}">

	<link rel="apple-touch-icon" href="{{ asset('images/favicon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/144x144.png') }}">

	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	
	<meta property="twitter:title" content="">
	<meta property="twitter:card" content="summary">
	<meta property="twitter:url" content="">
	<meta property="twitter:description" content="">
	<meta property="twitter:image" content="">

	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<!--[if lte IE 8]>
	<script src="{{ asset('javascripts/polyfill.min.js') }}"></script>
	<![endif]-->

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-xxxxxx-x', 'domain.com');
		ga('send', 'pageview');
	</script>

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