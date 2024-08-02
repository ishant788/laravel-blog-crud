<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Basic Blog Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Basic Blog Application</h1>
            <nav>
                <a href="{{ route('posts.index') }}">Home</a>
                <a href="{{ route('posts.create') }}">Create Post</a>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
