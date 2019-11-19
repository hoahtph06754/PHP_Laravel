@extends('layouts.master')
@section('content')

	<form action="{{ route('auth.login') }}" method="post" class="col-md-8 col-md-offset-2">
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		@csrf
		<div class="form-group">
			<label for="email">Email:</label>
			<input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" />
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input class="form-control" type="password" name="password" id="password" />
		</div>
	
		<div class="form-group">
			<input type="submit" value="Submit" />
		</div>
	</form>
@endsection