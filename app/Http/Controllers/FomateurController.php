<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FomateurController extends Controller
{
    public function index(){
        return view('formateur');
    }
}
