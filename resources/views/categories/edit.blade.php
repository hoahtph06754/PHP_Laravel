@extends('layouts.master')
@section('content')
	<form class="col-md-6 col-md-offset-3" action="{{ route('categories.update',['category'=>$category->id]) }}" method="POST">
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
		    <input type="text" class="form-control"  name="name" value="{{ $category->name }}">
		</div>

		<button type="submit" class="btn btn-primary" >Submit</button>
	</form>
@endsection