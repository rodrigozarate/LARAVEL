@extends('layouts.app-master')
@section('content')
	    @auth
		<nav><ul><li><a href="/logout">Logout</a></li></ul></nav>
		@endauth
		<h1>Home is where the heart is.</h1>
		@auth
		<p>Wellcome {{auth()->user()->name ?? auth()->user()->user_name}}</p>
		@endauth
		@guest
		<p>Wellcome, please <a href="/login">Login here</a> if you want to see our content</p>
		<p>Don't have an account yet? <a href="/Register">Register here</a> </p>
		@endguest
@endsection