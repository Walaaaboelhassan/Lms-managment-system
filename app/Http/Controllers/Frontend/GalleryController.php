<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the Gallery information .
     *
     */
    public function maangallery()
    {
        $galleries = Gallery::paginate(12);
        return view('frontend.pages.gallery',compact('galleries'));
    }
}
