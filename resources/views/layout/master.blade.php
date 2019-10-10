<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ToDo Reminder Project</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">

    <!-- Todo Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Todo Script -->
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('header')

</head>
<body>
	@if(Session::has('create'))
		<div class="alert alert-primary">
			{{ Session::get('create') }}
		</div>
	@elseif(Session::has('dump'))
		<div class="alert alert-danger">
			{{ Session::get('dump') }}
		</div>
	@elseif(Session::has('error'))
		<div class="alert alert-danger">
			{{ Session::get('error') }}
		</div>
	@elseif(Session::has('update'))
		<div class="alert alert-info">
			{{ Session::get('update')}}
		</div>
	@elseif(Session::has('completed'))
		<div class="alert alert-success">
			{{ Session::get('completed') }}
		</div>

	@elseif(Session::has('undo'))
		<div class="alert alert-warning">
			{{ Session::get('undo') }}
		</div>
	@endif

	@yield('content')

	@stack('footer')

</body>
</html>