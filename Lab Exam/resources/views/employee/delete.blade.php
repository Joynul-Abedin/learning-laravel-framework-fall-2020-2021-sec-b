<!DOCTYPE html>
<html>
<head>
	<title>Delete Job</title>
</head>
<body>
	<a href="{{route('employee.joblist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<br>
	<form method="post">
		<table border="1">
			<tr>
				<td>Company Name</td>
				<td>{{$companyname}}</td>
			</tr>
			<tr>
				<td>Job Title</td>
				<td>{{$jobtitle}}</td>
			</tr>
			<tr>
				<td>Job Location</td>
				<td>{{$joblocation}}</td>
			</tr>
			<tr>
				<td>Salary</td>
				<td>{{$salary}}</td>
			</tr>
			<tr>
				<td colspan="2">
					<h1>Are you sure?</h1><br>
					<input type="submit" name="submit" value="Yes">
					<button>
						<a href="{{route('employee.joblist')}}">No</a>
					</button>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>