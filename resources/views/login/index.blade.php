  
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post">
		@csrf
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="Submit" value="submit">
				<a href="/register"> Signup</a>
			</td>
		</tr>
	</table>
	</form>

	<br>
	{{session('msg')}}
	<br>

	@foreach ($errors as $error)
		{{$error}} <br>
	@endforeach
</body>
</html>