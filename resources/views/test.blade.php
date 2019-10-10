@extends('layout.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Testing file</title>
</head>
<body>
	<table class="table table-striped table-bordered">
	<tr>
		<td>Index</td>
		<td>Todo</td>
		<td>Completed></td>
	</tr>
	@foreach($todos as $todo)
		<tr>
			<td>$todo->id</td>
			<td>$todo->todo</td>
			<td>$todo->completed</td>
		</tr>
	@endforeach
	</table>
</body>
</html>


