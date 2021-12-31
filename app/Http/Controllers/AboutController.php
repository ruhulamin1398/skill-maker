<?php

namespace App\Http\Controllers;

use App\Models\ourTeam;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $ourTeams= ourTeam::orderBy('serial')->get();

        return view('about',compact('ourTeams'));
    }
}
