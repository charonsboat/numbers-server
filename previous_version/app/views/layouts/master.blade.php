<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no">
	<title>Numbers{{{ isset($title) ? ' | '.$title : null }}}</title>

	{{ HTML::style('/assets/css/vendor/reset.css') }}
	{{ HTML::style('/assets/css/main.css') }}
	{{ $customCss or null }}
</head>
<body>
	<header></header>
	<main>
		@yield('main')
	</main>
	<footer></footer>
	{{ HTML::script('/assets/js/main.js') }}
	{{ $customJs or null }}

	<!-- Need to make minified scripts -->
</body>
</html>