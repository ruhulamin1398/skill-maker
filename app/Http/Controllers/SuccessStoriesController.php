<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessStoriesController extends Controller
{
    public function index(){
        return view('successStories');
    }
}
