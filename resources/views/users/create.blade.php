@extends('layouts.master')
@section('content')
	<form class="col-md-6 col-md-offset-3" action="{{ route('users.store') }}" method="POST">
			@csrf
			@if($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $errors)
							<li>{{ $errors }}</li>
							@endforeach
						</ul>
					</div>
			@endif
		<div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" placeholder="Alexander" name="name">
		</div>
		<div class="form-group">
		    <label>Email address</label>
		    <input type="email" class="form-control" placeholder="Enter email" name="email">
		</div>
		<div class="form-group">
		    <label>Password</label>
		    <input type="password" class="form-control" placeholder="Password" name="password">
		</div>
		<div class="form-group">
		    <label>Birthday</label>
		    <input type="date" class="form-control" name="birthday">
		</div>
		<div class="form-group">
		    <label>Phone Number</label>
		    <input type="text" class="form-control" placeholder="0378792383" name="phone_number">
		</div>


		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection