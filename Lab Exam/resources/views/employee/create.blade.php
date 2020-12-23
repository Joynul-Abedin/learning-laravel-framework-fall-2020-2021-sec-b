<!DOCTYPE html>
<html>
<head>
	<title>Create Job</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Create Job</legend>
		<table>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="companyname" value="{{old('companyname')}}"></td>
			</tr>
			<tr>
				<td>Job Title</td>
				<td><input type="text" name="jobtitle" value="{{old('jobtitle')}}"></td>
			</tr>
			<tr>
				<td>Job Location</td>
				<td><input type="text" name="joblocation" value="{{old('joblocation')}}"></td>
			</tr>
			<tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="{{old('salary')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
					 
					<button>
						<a href="{{route('employee.home')}}">
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