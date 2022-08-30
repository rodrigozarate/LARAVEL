<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login App</title>
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/login.css')}}">
</head>
<body class="text-center">
	@include('layouts.blocks.basic-logo')
	<main class="form-signin w-100 m-auto">
		@yield('content')
	</main>
	<script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>