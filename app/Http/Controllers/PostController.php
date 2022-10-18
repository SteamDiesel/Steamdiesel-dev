<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    /**
     * Index of all Blog Posts
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select(['id', 'title', 'slug', 'paragraph', 'updated_at'])->where('is_published', '=', true)->get();

        return Inertia::render('Blog/Index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the blog post
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        // return $post;
        $post->increment('views');
        return Inertia::render('Blog/Post', [
            'post' => $post
        ]);
    }
}
