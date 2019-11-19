@extends('layouts.master')
@section('content')
	@if(empty($users))
    <p>no data</p>
      @else
        <table class="table">
          <thead>
            <th>#</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Phone_number</th>
            <th>Email</th>
            <th>Role</th>
            <th>Posts</th>
            <th><a href="{{ route('users.create') }}" class="btn btn-primary">Create</a></th>
          </thead>
          <tbody>

            @foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td><a href="{{ route('users.show',['user'=>$user->id]) }}">{{ $user->name }}</a></td>
					<td>{{ $user->birthday }}</td>
					<td>{{ $user->phone_number }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->role }}</td>
					<td>{{ $user->posts->count() }}</td>
					<td><a href="{{ route('users.edit',['user'=>$user->id]) }}" class="btn btn-primary">Update</a></td>
					<td>
						<form action="{{ route('users.destroy',['user'=>$user->id]) }}" method="POST">
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