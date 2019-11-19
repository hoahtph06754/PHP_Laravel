<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
	<form action="{{ route('profile.update',['id'=>Auth::id()]) }}" method="POST"  class="col-md-4 offset-4 mt-5">
		@csrf
		@if (Session::has('success'))
			<p class="p-3 bg-success">{{session('success')}}</p>
		@endif
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{ $profile->name }}">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" value="{{ $profile->email }}">
		</div>
		<div class="form-group">
			<label>Birthday</label>
			<input type="date" name="birthday" class="form-control" value="{{ $profile->birthday }}">
		</div>
		<div class="form-group">
			<label>Phone Number</label>
			<input type="text" name="phone_number" class="form-control" value="{{ $profile->phone_number }}">
		</div>
		<button type="submit" class="btn btn-success">update</button>
	</form>
</body>
</html>