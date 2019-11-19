@extends('layouts.master')
@section('content')
    <p>Title:  {{ $post->title }}</p>
    <p>Content:   {{ $post->content }}</p>
	<p>Category:  {{ $post->category_id }}</p>
	<p>User:  {{ $post->user_id }}</p>
@endsection