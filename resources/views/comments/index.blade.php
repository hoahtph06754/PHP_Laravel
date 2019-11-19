@extends('layouts.master')
@section('content')
	@if(empty($comments))
	@else
        <table class="table">
          <thead>
            <th>#</th>
            <th>Content</th>
            <th>user name</th>
            <th>post name</th>
            <th><a href="{{ route('comments.create') }}" class="btn btn-primary">Create</a></th>
          </thead>
          <tbody>
            @foreach($comments as $comment)
				<tr>
					<td>{{ $comment->id }}</td>
					<td><a href="{{ route('comments.show',['comment'=>$comment->id]) }}">{{ $comment->content }}</a></td>
					<td>{{ $comment->user->name }}</td>
					<td>{{ $comment->post->title }}</td>
					<td><a href="{{ route('comments.edit',['comment'=>$comment->id]) }}" class="btn btn-primary">Update</a></td>
					<td>
						<form action="{{ route('comments.destroy',['comment'=>$comment->id]) }}" method="POST">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" value="delete">Delete</button>
						</form>
					</td>
				</tr>             
              
            @endforeach
          </tbody>
        </table>
      @endif
@endsection