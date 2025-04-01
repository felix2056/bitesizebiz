<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        $posts = Post::where('is_published', true)->get();
        $categories = Category::withCount('posts')->get();

        return view('blog', compact('posts', 'categories'));
    }
}
