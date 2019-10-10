@extends('layout.master')

@section('content')

<div class="col-lg-8 col-lg-offset-2 global-border">
	<h2 class="title">Rescheduled your task!</h2>
	<!-- Todo Form Submit -->
	<div class="global-border">
		<form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="POST">
				@csrf
			<div class="form-group">
				<input class="form-control input-lg" name="todo" value="{{$todo->todo}}">
			</div>
				<button type="submit" class="btn btn-lg btn-warning">Update</button>
		</form>
	</div>

@endsection