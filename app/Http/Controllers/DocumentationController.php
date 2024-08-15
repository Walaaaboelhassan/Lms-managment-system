<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /*
     * Documentation
     * */
    public function maandocumentation()
    {
        return view('documentation.index');
    }
}
