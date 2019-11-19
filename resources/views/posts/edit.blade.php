@extends('layouts.master')
@section('content')
	<form class="col-md-6 col-md-offset-3" action="{{ route('posts.update',['post'=>$post->id]) }}" method="POST">
	@csrf
	@method('PUT')
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
		    <input type="text" class="form-control"  name="title" value="{{ $post->title }}">
		</div>
		<div class="form-group">
		    <label>Content</label>
		    <input type="text" class="form-control" name="content" value="{{ $post->content }}">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Category</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="category_id" >
		    @foreach($categories as $category)
		      <option {{ $category->id == $post->category_id?'selected':''}} value="{{ $category->id }}">{{ $category->name }}</option>
		    @endforeach
		    </select>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection