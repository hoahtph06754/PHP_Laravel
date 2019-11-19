@extends('layouts.master')
@section('content')
	<form class="col-md-6 col-md-offset-3" action="{{ route('comments.update',['comment'=>$comment->id]) }}" method="POST">
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
		    <label>Content</label>
		    <input type="hidden" name="id" value="{{ $comment ['id'] }}">
		    <input type="text" class="form-control" name="content" value="{{ $comment->content }}" >
		</div>	

		<button type="submit" class="btn btn-primary" >Submit</button>
	</form>
@endsection