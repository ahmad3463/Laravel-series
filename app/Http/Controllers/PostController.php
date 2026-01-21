<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function post(Request $req){
     $req->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string'
     ]);

     Post::create([
        'title' => $req->title,
        'body' => $req->body
     ]);

     return redirect()->back()->with('Success', 'Post Created Successfully');
    }


    public function show(){
        $posts = Post::all();
        return view('post', compact('posts'));
    }
}
