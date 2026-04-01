<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // List all posts
    public function index()
    {
        $posts = Post::latest()->get(); // latest first
        return view('posts.index', compact('posts'));
    }

    // Show create form (uses unified form)
    public function create()
    {
        return view('posts.form'); // no $post
    }

    // Store new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        Post::create($request->only('title', 'body'));

        return redirect('/')->with('success', 'Post created successfully!');
    }

    // Show edit form (uses unified form)
    public function edit(Post $post)
    {
        return view('posts.form', compact('post')); // passes $post for editing
    }

    // Update post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post->update($request->only('title', 'body'));

        return redirect('/')->with('success', 'Post updated successfully!');
    }

    // Delete post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/')->with('success', 'Post deleted successfully!');


    }
    // Show full post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}


