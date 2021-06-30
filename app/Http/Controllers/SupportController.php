<?php

namespace App\Http\Controllers;

use App\Models\support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    // Support Show
    public function index(){
        $support = support::all();
        return view('support', [
            'support' => $support,
        ]);
    }
}
