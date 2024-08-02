<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve all posts from the database
        $posts = Post::all();
        
        // Return the view with the list of posts
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        // Create a new post using the validated data
        Post::create($request->only(['title', 'body']));

        // Redirect to the posts index with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        // Update the post with the validated data
        $post->update($request->only(['title', 'body']));

        // Redirect to the posts index with a success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        // Delete the post
        $post->delete();

        // Redirect to the posts index with a success message
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
