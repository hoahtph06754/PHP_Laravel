@extends('layouts.master')
@section('content')
	<form class="col-md-6 col-md-offset-3" action="{{ route('posts.store') }}" method="POST">
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
		    <label>Title</label>
		    <input type="text" class="form-control"  name="title">
		</div>
		<div class="form-group">
		    <label>Content</label>
		    <input type="text" class="form-control" name="content">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">category</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
		      @foreach($categories as $category)
		      	<option value="{{ $category->id }}">{{ $category->name}}</option>
		      @endforeach
		    </select>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection