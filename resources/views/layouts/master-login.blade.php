<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sistem Management System</title>
	<link rel="stylesheet" type="text/css" href={{ asset('template/themes/default/easyui.css') }}>
	<link rel="stylesheet" type="text/css" href={{ asset("template/themes/icon.css") }}>
	<link rel="stylesheet" type="text/css" href="../demo.css">
	<script type="text/javascript" src={{ asset("template/jquery.min.js") }}></script>
	<script type="text/javascript" src={{ asset("template/jquery.easyui.min.js") }}></script>
</head>

<body>

	@yield('content')

	@stack('scripts')
</body>

</html>