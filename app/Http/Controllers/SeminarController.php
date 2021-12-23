<?php

namespace App\Http\Controllers;

use App\Models\seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index(){
        $seminar = seminar::where('status',0)->orderByDesc('date')->get();
        return view('seminer', [
            'seminar' => $seminar,
        ]);
    }


    public function singleSeminar($id){
        $seminar = seminar::find($id);
        return view('singleSeminar',compact('seminar'));
    }
    
}
