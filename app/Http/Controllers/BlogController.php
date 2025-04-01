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

    public function getPrevPost(Request $request)
    {
        $id = $request->query('ID');

        $post = Post::where('is_published', true)->where('id', '<', $id)->orderBy('id', 'desc')->first();
        if (!$post) return response()->json(['error' => 'No previous post found'], 404);

        $previousPost = Post::where('is_published', true)->where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $nextPost = Post::where('is_published', true)->where('id', '>', $post->id)->orderBy('id', 'asc')->first();

        $post->increment('views');

        $output = view('partials.ajax-post', compact('post', 'previousPost', 'nextPost'))->render();
        return response()->json($output);
    }

    public function getNextPost(Request $request)
    {
        $id = $request->query('ID');

        $post = Post::where('is_published', true)->where('id', '>', $id)->orderBy('id', 'asc')->first();
        if (!$post) return response()->json(['error' => 'No next post found'], 404);

        $previousPost = Post::where('is_published', true)->where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $nextPost = Post::where('is_published', true)->where('id', '>', $post->id)->orderBy('id', 'asc')->first();

        $post->increment('views');

        $output = view('partials.ajax-post', compact('post', 'previousPost', 'nextPost'))->render();
        return response()->json(['output' => $output]);
    }
}
