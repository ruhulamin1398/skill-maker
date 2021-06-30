<?php

namespace App\Http\Controllers;

use App\Models\seminar;
use App\Models\service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home Page show
    public function index(){
        $service = service::all() -> take(6);
        $seminar = seminar::all() -> take(3);
        return view('index', [
            'service' => $service,
            'seminar' => $seminar,
        ]);
    }
    // home page single service
    public function singleService($id){
        $single_service = service::find($id);
        return view('singleService',[
            'service' => $single_service,
        ]);
    }
}
