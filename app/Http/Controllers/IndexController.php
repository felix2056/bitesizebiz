<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', true)->get();
        $categories = Category::withCount('posts')->get();

        return view('index', compact('posts', 'categories'));
    }
}
