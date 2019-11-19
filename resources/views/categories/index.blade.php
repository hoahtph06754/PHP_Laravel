@extends('layouts.master')
@section('content')
	@if(empty($categories))
	@else
        <table class="table">
          <thead>
            <th>#</th>
            <th>Name</th>
            <th>user name</th>
            <th><a href="{{ route('categories.create') }}" class="btn btn-primary">Create</a></th>
          </thead>
          <tbody>
            @foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td><a href="{{ route('categories.show',['category'=>$category->id]) }}">{{ $category->name }}</a></td>
					<td>{{ $category->user->name }}</td>
					<td><a href="{{ route('categories.edit',['category'=>$category->id]) }}" class="btn btn-primary">Update</a></td>
					<td>
						<form action="{{ route('categories.destroy',['category'=>$category->id]) }}" method="POST">
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