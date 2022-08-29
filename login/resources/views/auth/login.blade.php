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
		<form action="/login" method="POST">
			@csrf

            <div>
            <label for="user_name">User name or email</label>
			<input type="text" name="user_name">
            </div>

            <div>
            <label for="password">Password</label>
			<input type="password" name="password">
            </div>

			<input type="submit" value="Login">
		</form>
		<p>Don't have an account yet? <a href="/register">Register here</a></p>
	</body>
</html>