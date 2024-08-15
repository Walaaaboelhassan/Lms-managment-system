<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of  Instructors information .
     *
     */
    public function maaninstructors()
    {
        $instructors = Instructor::paginate(9);
        return view('frontend.pages.instructors',compact('instructors'));
    }
    /**
     * Display a listing of the Instructor information .
     *
     */
    public function maaninstructorSingle(Request $request,Instructor $instructor)
    {
        return view('frontend.pages.instructorsingle',compact('instructor'));
    }
}
