<?php

namespace App\Http\Controllers;

use App\Post;

// use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    // Protect all routes except for index and show
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        // // Create and save the post (store in database)
        // Post::create([
        //     'user_id' => auth()->user()->id,
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);

        auth()->user()->posts()->save(new Post($request->all()));

        // Sync tags
        $tags = [];
        if (!empty($_POST['tags'])) {
            foreach ($_POST['tags'] as $tag=>$id) {
                array_push($tags, $id);
                $post->tags()->sync($tags);
            }
        }

        // flash-message is a partial that is rendered in app.blade.php
        session()->flash('message', 'Post Created!');

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, Post $post)
    {

        // Shorthand
        $post->update($request->all());

        // flash-message is a partial that is rendered in app.blade.php
        session()->flash('message', 'Post Updated!');

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
