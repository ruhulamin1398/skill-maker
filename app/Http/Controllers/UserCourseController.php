<?php

namespace App\Http\Controllers;

use App\Models\BatchPerticipate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{


    public function services(){
        return  BatchPerticipate::where('user_id',Auth::user()->id)->get();
        
    }

    public function trainings(){
        return  BatchPerticipate::where('user_id',Auth::user()->id)->get();
    }
    //
}
