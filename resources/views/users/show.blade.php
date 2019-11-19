@extends('layouts.master')
@section('content')
    <p>Name:  {{ $user->name }}</p>
    <p>Email:   {{ $user->email }}</p>
	<p>Birthday:  {{ $user->birthday }}</p>
@endsection