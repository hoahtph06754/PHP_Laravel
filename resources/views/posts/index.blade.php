@extends('layouts.master')
@section('content')
	@if(empty($posts))
    <p>no data</p>
      @else
        <table class="table">
          <thead>
            <th>#</th>
            <th>title</th>
            <th>content</th>
            <th>category</th>
            <th>comment</th>
            <th><a href="{{ route('posts.create') }}" class="btn btn-primary">Create</a></th>
          </thead>
          <tbody>
            @foreach($posts as $post)
				<tr>
					<td>{{ $post->id }}</td>
					<td><a href="{{ route('posts.show',['post'=>$post->id]) }}">{{ $post->title }}</a></td>
					<td>{{ $post->content }}</td>
					<td>{{ $post->category->name }}</td>
					<td>{{ $post->comments->count() }}</td>
					<td><a href="{{ route('posts.edit',['post'=>$post->id]) }}" class="btn btn-primary">Update</a></td>
					<td>
						<form action="{{ route('posts.destroy',['post'=>$post->id]) }}" method="POST">
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