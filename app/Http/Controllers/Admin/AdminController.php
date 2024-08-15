<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the Dashboard.
     *
     */

    public function naandashboard()
    {
        if (Auth::user()->user_type!=0){
            return view('admin.pages.dashboard') ;

        }else{
            return view('admin.pages.dashboardinstructor') ;
        }

    }
}
