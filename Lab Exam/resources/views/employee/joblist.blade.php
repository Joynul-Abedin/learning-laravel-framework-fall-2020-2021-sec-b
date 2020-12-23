<!DOCTYPE html>
<html>
<head>
	<title>Job List</title>
</head>
<body>
	<a href="{{route('employee.home')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Company Name</td>
			<td>Job Title</td>
			<td>Job Location</td>
			<td>Salary</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($jobs); $i++)
			<tr>
				<td>{{$jobs[$i]['id']}}</td>
				<td>{{$jobs[$i]['companyname']}}</td>
				<td>{{$jobs[$i]['jobtitle']}}</td>
				<td>{{$jobs[$i]['joblocation']}}</td>
				<td>{{$jobs[$i]['salary']}}</td>
				<td>
					<a href="{{route('employee.editjob', $jobs[$i]['id'])}}">Edit </a> |
					<a href="{{route('employee.deletejob', $jobs[$i]['id'])}}">Delete </a> 
				</td>
			</tr>
		@endfor

	</table>
</body>
</html>