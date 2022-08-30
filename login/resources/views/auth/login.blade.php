@extends('layouts.auth-master')
@section('content')
		<form action="/login" method="POST">
			@csrf

            <div class="form-floating">
			<input type="text" name="user_name" id="user_name" class="form-control" placeholder="User name or email">
			<label for="user_name">User name or email</label>
            </div>

            <div class="form-floating">
			<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			<label for="password">Password</label>
            </div>

			<button type="submit" class="btn btn-primary">Login</button>
		</form>
		<p>Don't have an account yet? <a href="/register">Register here</a></p>
@endsection