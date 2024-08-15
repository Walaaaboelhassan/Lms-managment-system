<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Feedback;
use App\Models\Instructor;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the Web view information .
     *
     */
    public function maanindex()
    {
        return view('frontend.pages.index');
    }
    /**
     * Display a listing of the Home information .
     *
     */
    public function maanhome()
    {
        //get banners information
        $banners        = Banner::all();
        //get courses information
        $courses        = Course::paginate(9);
        //get instructors information
        $instructors    = Instructor::all();
        //get feedbacks information
        $feedbacks    = Feedback::all();

        return view('frontend.pages.home',compact('banners','courses','instructors','feedbacks'));
    }

}
