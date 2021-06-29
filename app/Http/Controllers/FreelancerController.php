<?php

namespace App\Http\Controllers;

use App\Models\freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    // All freelancer show
    public function index(){
        $freelancer = freelancer::all();
        return view('marketplace',[
            'freelancer' => $freelancer,
        ]);
    }

    // Single Freelancer show
    public function singleFreelancer($id){
        $freelancer = freelancer::find($id);
        return view('freelancerProfile', [
            'freelancer' => $freelancer,
        ]);
    }
}
