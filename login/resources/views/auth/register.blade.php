@extends('layouts.auth-master')
@section('content')
		<form action="/register" method="POST">
			@csrf
            <div class="form-floating">
                <input type="text" name="name" id="name" class="form-control" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating">
                
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="User name">
                <label for="user_name">User name</label>
            </div>
            <div class="form-floating">
                
                <input type="number" name="user_id" id="user_id" class="form-control" placeholder="ID">
                <label for="user_id">ID</label>
            </div>
            <div class="form-floating">
                
                <input type="email" name="email" id="email" class="form-control" placeholder="email">
                <label for="email">email</label>
            </div>
            <div class="form-floating">
                
                <input type="password" name="password" id="password" class="form-control" placeholder="password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating">
                
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password confirmation">
                <label for="password_confirmation">Password confirmation</label>
            </div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
        <p>Already have an account? <a href="/login">Login here</a></p>
@endsection