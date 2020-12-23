<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<br>
	<form method="post" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Create User</legend>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{old('username')}}"></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{old('email')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>