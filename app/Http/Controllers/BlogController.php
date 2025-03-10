<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $trendingPosts = Post::where('is_published', true)->orderBy('views', 'desc')->limit(5)->get();
        $categories = Category::withCount('posts')->get();

        $previousPost = Post::where('is_published', true)->where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $nextPost = Post::where('is_published', true)->where('id', '>', $post->id)->orderBy('id', 'asc')->first();

        $post->increment('views');
        
        return view('blog.show', compact('post', 'trendingPosts', 'categories', 'previousPost', 'nextPost'));
    }
}
