@extends('layouts.master')
@section('content')
	<form class="col-md-6 col-md-offset-3" action="{{ route('users.update',['user'=>$user->id]) }}" method="POST">
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
	@method('PUT')
		<div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control"  name="name" value="{{ $user->name }}">
		</div>
		<div class="form-group">
		    <label>Email address</label>
		    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
		</div>
		<div class="form-group">
		    <label>Birthday</label>
		    <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
		</div>
		<div class="form-group">
		    <label>Phone Number</label>
		    <input type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}">
		</div>


		<button type="submit" class="btn btn-primary" >Submit</button>
	</form>
@endsection