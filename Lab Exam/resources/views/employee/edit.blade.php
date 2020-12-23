<!DOCTYPE html>
<html>
<head>
	<title>Edit Job</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Edit Job</legend>
		<table>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="companyname" value="{{$companyname}}"></td>
			</tr>
			<tr>
				<td>Job Title</td>
				<td><input type="text" name="jobtitle" value="{{$jobtitle}}"></td>
			</tr>
			<tr>
				<td>Job Location</td>
				<td><input type="text" name="joblocation" value="{{$joblocation}}"></td>
			</tr>
			<tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="{{$salary}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
					 
					<button>
						<a href="{{route('employee.joblist')}}">
							Back
						</a>
					</button>
					 
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
	<div>
		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
	</div>
</body>
</html>