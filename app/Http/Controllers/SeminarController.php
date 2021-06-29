<?php

namespace App\Http\Controllers;

use App\Models\seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index(){
        $seminar = seminar::all();
        return view('seminer', [
            'seminar' => $seminar,
        ]);
    }
}
