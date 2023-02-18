<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Load Home Page
    public function index(){    
        return view('frontend.index');
    }


    // Load Project Mariosofa
    public function project_mariosofa(){    
        return view('frontend.projects.project_mariosofa');
    }

}
