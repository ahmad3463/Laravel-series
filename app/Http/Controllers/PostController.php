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
    

    public function postlist(){
        $posts = Post::all();
        return view('post-list', compact('posts'));
    }

    public function singlepost($id){
        $post = Post::findOrFail($id);
        return view('single-post', compact('post'));
    }


    public function edit(Post $post)
{
    return view('Edit-post', compact('post'));  
}

public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'body'  => 'required|string',
    ]);

    $post->update($request->only('title','body'));

    return redirect()->route('postlist')->with('success', 'Post updated!');

}

}
