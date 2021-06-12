  
<!DOCTYPE html>
<html>
<head>
	<title>User Edit</title>
</head>
<body>
     
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
    
    <h3> User Details</h3>
	<form method="get">
    <table>
		<tr>
            <td>ID</td>
			<td><input type="text" name="id" value="{{$user['id']}}"></td>
        </tr>
        <tr>
			<td>Name</td>
            <td><input type="text" name="username" value="{{$user['username']}}"></td>
        </tr>
        <tr>
            <td>Password</td>
			<td><input type="text" name="password" value="{{$user['password']}}"></td>
        </tr>
        <tr>
			<td>Email</td>
            <td><input type="email" name="email" value="{{$user['email']}}"></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="type" value="{{$user['type']}}"></td>
		</tr>
        </table>
        </form>
        <input type="submit" name="edit" value="Update">
</body>
</html>