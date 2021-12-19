<?php

namespace App\Http\Controllers;

use App\Models\ourTeam;
use App\Models\successStory;
use App\Models\Trainer;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index(){
        $ourTeams= ourTeam::orderBy('serial')->get();
        $trainers = Trainer::all();
        return view('ourTeam',compact('ourTeams','trainers') );
    }
}
