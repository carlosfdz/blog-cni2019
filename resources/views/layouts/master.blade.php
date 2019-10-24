<html>
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Blog - @yield('titulo')</title>
	</head>
	<body>
		@yield('contenido')
	</body>
</html>