@extends('layout.master')

@section('content')

<div class="col-lg-8 col-lg-offset-2 global-border">
	<h2 class="title">Create new ToDo Task!</h2>
	<!-- Todo Form Submit -->
	<div class="global-border">
		<form action="{{ route('todo.create') }}" method="POST">
				@csrf
			<div class="form-group">
				<input class="form-control input-lg" name="todo" placeholder="Create your new reminder...">
			</div>
				<button type="submit" class="btn btn-lg btn-warning">Add</button>
		</form>
	</div>

	<!-- Displaying the Todos -->
	<div class="todo-list global-border">
			<h2 class="title">Pending Scheduled Task!</h2>
			<table class="table table-bordered table-striped todo-list-item">
				<tr>
					<th>Sno</th>
					<th>Agenda</th>
					<th>Status</th>
			@foreach($todos as $todo)
			<tr>
				<td> ({{ $loop->index + 1}}) </td>
				<td> 
					{{  $todo->todo }} 
					<a href="{{ route('todo.dump', ['id' => $todo->id]) }}" class="btn btn-danger btn-sm">x</a>
					<a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-sm">update</a> 
				</td>
				<td>
					@if($todo->completed == 0)
					<a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-success">Mark as Completed</a>
					@else
					<div>
						<span class="btn text-style">Completed</span>
						<a href="{{ route('todo.undo', ['id' => $todo->id]) }}" class="btn btn-sm btn-info">undo</a>
					</div>
					@endif
				</td>
			</tr>
			@endforeach
	</div>
</div>


@endsection
