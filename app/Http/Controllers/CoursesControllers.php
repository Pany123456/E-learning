<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesControllers extends Controller
{
    public function index(){
        return view('cours');
    }
}
