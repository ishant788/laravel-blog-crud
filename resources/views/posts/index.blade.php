@extends('layouts.app')

@section('content')
<h1>All Posts</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($posts->isEmpty())
    <p>No posts available.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post) }}">View</a>
                        <a href="{{ route('posts.edit', $post) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
