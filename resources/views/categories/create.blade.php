@extends('layouts.master')
@section('content')
	<form class="col-md-6 col-md-offset-3" action="{{ route('categories.store') }}" method="POST">
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
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection