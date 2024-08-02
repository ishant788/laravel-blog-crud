@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    <a href="{{ route('posts.index') }}">Back to List</a>
@endsection
