@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
    </div>

    <div>
        <label for="body">Body</label>
        <textarea id="body" name="body">{{ old('body', $post->body) }}</textarea>
    </div>

    <button type="submit">Update Post</button>
</form>

<form action="{{ route('posts.destroy', $post) }}" method="POST" style="margin-top: 20px;">
    @csrf
    @method('DELETE')

    <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
</form>

@endsection
