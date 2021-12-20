<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = course::where('type','service')->get();
        return view('services',[
            'services' => $services,
        ]);
       
    }

     // home page single service
     public function singleService($id){
        $single_service = course::find($id);
        return view('singleService',[
            'service' => $single_service,
        ]);
    }
}
