<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\seminar;
use App\Models\service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home Page show
    public function index(){

 

        // return urlencode("dfasf sadfasdfasdf");
        $services =  course::where('type','service')->orderBy('serial')->get() -> take(6);
        $trainings =  course::where('type','training')->orderBy('serial')->get() -> take(6);
        $seminars = seminar::all() -> take(3);
        return view('index', [
            'services' => $services,
            'seminars' => $seminars,
            'trainings' => $trainings,
        ]);
    }
 
}
