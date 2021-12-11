<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function index()
    {

        //return view('posts.index');

        $posts = Post::get();
        return view('posts.index', [
            'posts' => $posts
        ]);

        
    }
   
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        //dd(auth()->user()->posts);
        //return view('dashboard');


       $request->user()->posts()->create([
        'body' => $request->body
       ]);

        return back();
        
    }

    
}