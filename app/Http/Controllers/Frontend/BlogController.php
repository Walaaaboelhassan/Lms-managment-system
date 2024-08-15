<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the Blog information .
     *
     */
    public function maanblog()
    {
        $blogs = Blog::paginate(10);
        return view('frontend.pages.blog',compact('blogs'));
    }
    /**
     * Display a listing of the Single Blog information .
     *
     */
    public function maanblogsingle(Blog $blog)
    {
        $recentblogs = Blog::latest()->take(5)->get();
        return view('frontend.pages.blogsingle',compact('blog','recentblogs'));
    }
}
