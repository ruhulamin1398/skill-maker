<?php

namespace App\Http\Controllers;

use App\Models\successStory;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index(){
        $stories = successStory::all();
        return view('successStories',compact('stories') );
    }
}
