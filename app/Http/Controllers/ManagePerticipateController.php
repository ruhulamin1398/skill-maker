<?php

namespace App\Http\Controllers;

use App\Models\managePerticipate;
use Illuminate\Http\Request;

class ManagePerticipateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All Perticiper List';
        $perticipate = managePerticipate::all();
        return view('admin.perticipate.index', compact('page_name','perticipate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'New Perticipate';
        return view('admin.perticipate.create', compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'father_name' => 'required',
            'number'      => 'required',
            'email'       => 'required',
            'pasport'     => 'required',
            'city'        => 'required',
            'country'     => 'required',
            'occopation'  => 'required',
            'training'    => 'required',
            'enablers'    => 'required',
            'payment_type' => 'required'
        ],[
            'name.required'    => 'Please Enter Name',
            'father_name.required'  => 'Please Enter Father Name',
            'number.required'       => 'Please Enter Phone Numebr',
            'email.required'        => 'Please Enter Email',
            'pasport.required'      => 'Please Enter Your Pasport Number',
            'city.required'         => 'Please Enter City Name',
            'country.required'      => 'Please Enter Country Name',
            'occopation.required'   => 'Please Enter Your Occopation',
            'training.required'     => 'Please Enter Trainig Name',
            'enablers.required'     => 'Please Enter Enablers from',
            'payment_type.required' => 'Please Select Payment Type'

        ]);

        $perticipate = new managePerticipate();
        $perticipate->name         = $request->name;
        $perticipate->father_name  = $request->father_name;
        $perticipate->number       = $request->number;
        $perticipate->email        = $request->email;
        $perticipate->pasport	   = $request->pasport;
        $perticipate->city         = $request->city;
        $perticipate->country      = $request->country;
        $perticipate->occopation   = $request->occopation;
        $perticipate->training     = $request->training;
        $perticipate->enablers     = $request->enablers;
        $perticipate->payment_type = $request->payment_type;

        $perticipate->save();
        return redirect()->route('perticipate.index')->with('success','Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\managePerticipate  $managePerticipate
     * @return \Illuminate\Http\Response
     */
    public function show(managePerticipate $managePerticipate)
    {
        $page_name = 'Perticiper Details';
        return view('admin.perticipate.show', compact('page_name','managePerticipate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\managePerticipate  $managePerticipate
     * @return \Illuminate\Http\Response
     */
    public function edit(managePerticipate $managePerticipate)
    {
        $page_name = 'Perticiper Details Update';
        dd($managePerticipate);
        return view('admin.perticipate.edit', compact('page_name','managePerticipate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\managePerticipate  $managePerticipate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, managePerticipate $managePerticipate)
    {
        $this->validate($request, [
            'name'        => 'required',
            'father_name' => 'required',
            'number'      => 'required',
            'email'       => 'required',
            'pasport'     => 'required',
            'city'        => 'required',
            'country'     => 'required',
            'occopation'  => 'required',
            'training'    => 'required',
            'enablers'    => 'required',
            'payment_type' => 'required'
        ]);
        $managePerticipate->update($request->all());
        $managePerticipate->save();
        return redirect()->route('perticipate.index')->with('success','Perticpar Data Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\managePerticipate  $managePerticipate
     * @return \Illuminate\Http\Response
     */
    public function destroy(managePerticipate $managePerticipate)
    {
        $managePerticipate->delete();
    
        return redirect()->route('perticipate.index')->with('success','Perticpar Data Delete Successfull');
    }
}
