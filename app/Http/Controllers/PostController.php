<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');

    }
    

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        Post::create($validateData);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    
}
