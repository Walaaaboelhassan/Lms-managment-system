<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Maanuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaanuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Maanuser::where('id',Auth::guard('maanuser')->user()->id)->first();
        return view('maanuser.pages.profile',compact('profile'));
    }

    /**
     * Display course .
     *
     * @return \Illuminate\Http\Response
     */
    public function maanusercourse()
    {
        $courses = Course::paginate(10);
        return view('maanuser.pages.courses.course',compact('courses'));
    }

    /**
     * Display course .
     *
     * @return \Illuminate\Http\Response
     */
    public function maanuserinstructor()
    {
        $instructors = Instructor::paginate(10);
        return view('maanuser.pages.instructors.instructor',compact('instructors'));
    }


}
