<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // $posts = DB::table('posts')->latest()->get();
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => request('title'),
            'body'  => request('body'),
            'author'=> request('author'),
        ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        // $post = DB::table('posts')->find($id);
        // $post = Post::findOrFail($id);
        $comments = $post->comments()->where('approved',1)->get();
        return view('posts.show',compact(['post','comments']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
