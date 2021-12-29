<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\perticipator;
use Illuminate\Http\Request;

class PerticipatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All Perticipator List';
        $perticipator =  perticipator::all();
        return view('admin.perticipators.index', compact('page_name','perticipator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'New Perticipator';
        return view('admin.perticipators.create', compact('page_name'));   
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
            'enablers.required'     => 'Please Enter Skillmaker from',
            'payment_type.required' => 'Please Select Payment Type'

        ]);

        $perticipators = new perticipator();
        $perticipators->name         = $request->name;
        $perticipators->father_name  = $request->father_name;
        $perticipators->number       = $request->number;
        $perticipators->email        = $request->email;
        $perticipators->pasport	   = $request->pasport;
        $perticipators->city         = $request->city;
        $perticipators->country      = $request->country;
        $perticipators->occopation   = $request->occopation;
        $perticipators->training     = $request->training;
        $perticipators->enablers     = $request->enablers;
        $perticipators->payment_type = $request->payment_type;

        $perticipators->save();
        return redirect()->route('perticipators.index')->with('success','Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perticipator  $perticipator
     * @return \Illuminate\Http\Response
     */
    public function show(perticipator $perticipator)
    {
        $page_name = 'Perticipator Details';
        return view('admin.perticipators.show', compact('page_name','perticipator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perticipator  $perticipator
     * @return \Illuminate\Http\Response
     */
    public function edit(perticipator $perticipator)
    {
        // return $perticipator;
        $page_name = 'Perticiper Details Update';
        return view('admin.perticipators.edit', compact('page_name','perticipator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perticipator  $perticipator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perticipator $perticipator)
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
        $perticipator->update($request->all());
        $perticipator->save();
        return redirect()->route('perticipators.index')->with('success','perticipator Data Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perticipator  $perticipator
     * @return \Illuminate\Http\Response
     */
    public function destroy(perticipator $perticipator)
    {
        $perticipator->delete();
        return redirect()->route('perticipators.index')->with('success','perticipator Data Delete Successfull');
    
    }
}
