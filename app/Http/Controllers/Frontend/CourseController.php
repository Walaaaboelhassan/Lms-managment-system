<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Coursecategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the Course information .
     *
     */
    public function maancourse()
    {
        $courses = Course::paginate(9);
        return view('frontend.pages.course',compact('courses'));
    }
    /**
     * Display a listing of the Single Course information .
     *
     */
    public function maancourseSingle(Course $course)
    {
        //get course category name
        $category       = Coursecategory::where('id',$course->category_id)->value('name');
        //get related course
        $courses        = Course::where('category_id',$course->category_id)->get();
        //get related course
        $recentcourses  = Course::latest()->take(3)->get();
        //get course category course
        $coursecategories  = Coursecategory::get();
        //return $category ;
        return view('frontend.pages.coursesingle',compact('course','category','courses','recentcourses','coursecategories'));
    }
}
