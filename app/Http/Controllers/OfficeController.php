<?php

namespace App\Http\Controllers;

use App\Models\office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index(){
        $office = office::all();
        return view('officies', [
            'office' => $office,
        ]);
    }
}
