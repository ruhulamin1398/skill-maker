<?php

namespace App\Http\Controllers;

use App\Models\enroll;
use App\Http\Requests\StoreenrollRequest;
use App\Http\Requests\UpdateenrollRequest;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $card = array();
        if($request->service_id){
            // return $request->service_id;
        }
        else{
           return  abort(404);
        }


        return redirect(route('login'));
        return view('enroll',compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreenrollRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreenrollRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function show(enroll $enroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function edit(enroll $enroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateenrollRequest  $request
     * @param  \App\Models\enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateenrollRequest $request, enroll $enroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(enroll $enroll)
    {
        //
    }
}
