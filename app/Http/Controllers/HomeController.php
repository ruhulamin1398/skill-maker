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
        $service = course::where('type','service') -> take(6);
        $trainings = course::where('type','trainings') -> take(6);
        $seminar = seminar::all() -> take(3);
        return view('index', [
            'service' => $service,
            'seminar' => $seminar,
            'trainings' => $trainings,
        ]);
    }
 
}
