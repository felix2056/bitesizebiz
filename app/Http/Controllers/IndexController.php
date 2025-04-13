<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'your_name' => 'required',
                'your_email' => 'required|email',
                'your_phone' => 'nullable|numeric',
                'your_subject' => 'nullable',
                'your_message' => 'required',
            ]);

            $data = $request->all();

            Mail::to('devshah1103@gmail.com')->send(new ContactForm($data));

            return redirect()->back()->with('success', 'Message sent successfully');
        }

        return view('contact');
    }

    public function blog()
    {
        $posts = Post::where('is_published', true)->get();
        $categories = Category::withCount('posts')->get();

        return view('blog', compact('posts', 'categories'));
    }
}
