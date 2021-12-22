<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(){
      

        $course = course::where('type','training')->orderBy('serial')->get();
        return view('training', [
            'course' => $course,
        ]);
    }




    public function singleTraining($id){
        $single_training = course::find($id);
        return view('singleCourses',[
            'training' => $single_training,
        ]);
    }


}
