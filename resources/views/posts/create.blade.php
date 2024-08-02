@extends('layouts.app')

@section('content')
<h1>Create a New Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
    </div>
    <div>
        <label for="body">Body</label>
        <textarea id="body" name="body">{{ old('body') }}</textarea>
    </div>
    <button type="submit">Create Post</button>
</form>
@endsection
