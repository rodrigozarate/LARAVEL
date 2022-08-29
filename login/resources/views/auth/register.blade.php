<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel login</title>
        <!-- Styles -->

        <style>
            body {
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
		<form action="/register" method="POST">
			@csrf
            <div>
            <label for="name">Name</label>
			<input type="text" name="name">
            </div>
            <div>
            <label for="user_name">User name</label>
			<input type="text" name="user_name">
            </div>
            <div>
            <label for="user_id">ID</label>
			<input type="number" name="user_id">
            </div>
            <div>
            <label for="email">email</label>
			<input type="email" name="email">
            </div>
            <div>
            <label for="password">Password</label>
			<input type="password" name="password">
            </div>
            <div>
            <label for="password_confirmation">Password confirmation</label>
			<input type="password" name="password_confirmation">
            </div>
			<input type="submit" value="Registrarme">
		</form>
	</body>
</html>