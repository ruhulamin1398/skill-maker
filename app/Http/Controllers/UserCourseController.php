<?php

namespace App\Http\Controllers;

use App\Models\BatchPerticipate;
use App\Models\enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{


    public function services(){
        $page_name = 'My Services';
        // $courses = BatchPerticipate::where('user_id',Auth::user()->id)->get();
        $courses = enroll::where('user_id',Auth::user()->id)->get();

        $type="service";
        // return compact('page_name','courses','type');
        return view('user.courses.index',compact('page_name','courses','type'));
        
        
    }

    public function trainings(){
        $page_name = 'My  Trainings';
        $courses = enroll::where('user_id',Auth::user()->id)->get();
        $type="training";
        return view('user.courses.index',compact('page_name','courses','type'));
    }
    //
}
