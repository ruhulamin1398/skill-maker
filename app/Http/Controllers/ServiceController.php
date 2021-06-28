<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = service::all();
        return view('services',[
            'services' => $services,
        ]);
    }

    public function singleService($id){
        $single_service = service::find($id);
        return view('singleService',[
            'service' => $single_service,
        ]);
    }
}
