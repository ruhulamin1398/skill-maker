<?php

namespace App\Http\Controllers;

use App\Models\successStory;
use Illuminate\Http\Request;

class SuccessStoriesController extends Controller
{
    public function index(){
        $stories = successStory::all();
        return view('successStories', [
            'stories' => $stories,
        ]);
    }
}
