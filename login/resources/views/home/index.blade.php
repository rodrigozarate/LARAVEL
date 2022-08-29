@extends('layouts.app-master')
@section('content')
	    @auth
		<nav><ul><li><a href="/logout">Logout</a></li></ul></nav>
		@endauth
		<h1>Home is where the heart is.</h1>
		@auth
		<p>Bienvenido {{auth()->user()->name ?? auth()->user()->user_name}}</p>
		@endauth
		@guest
		<p>Bienvenido, para ver el contenido debes autenticarte <a href="/login">Login</a> </p>
		<p>Si aún no tienes una cuenta aquí la puedes crear <a href="/Register">Register</a> </p>
		@endguest
@endsection