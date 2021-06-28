<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Frreelancer List";
        $freelancers = freelancer::all();
        return view('admin.freelancers.index', compact('page_name','freelancers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Add New Frrelancer";
        return view('admin.freelancers.create', compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required',
            'location'      => 'required',
            'language'      => 'required',
            'skills'        => 'required',
            'description'   => 'required',
            'image'          => 'required | mimes:jpg,png,jpeg|max:7048'

        ],[
            'name.required'          => 'Please Enter Name',
            'location.required'      => 'Please Enter location',
            'language.required'      => 'Please Enter Language',
            'skills.required'       => 'Please Enter Skills',
            'description.required'  => 'Please Enter Deescription',
            'image.required'    => 'Please Select image',
            'image.mimes'       => 'Please Select Jpg,png,jpeg Type',
            'image.max'         => 'Please Select image Less Then 8 Mb'
        ]);

        $freelancer = new freelancer();
        $freelancer->name        = $request->name;
        $freelancer->location    = $request->location;
        $freelancer->language    = $request->language;
        $freelancer->skills      = $request->skills;
        $freelancer->description = $request->description;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('freelancer/images/', $fileName);
            $freelancer->image = $fileName;
        } else {
            return $request;
            $freelancer->image = '';
        }

        $freelancer->save();
        return redirect()->route('freelancers.index')->with('success','New Freelancer Added Successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function show(freelancer $freelancer)
    {
        $page_name = 'Details';
        return view('admin.freelancers.show',compact('page_name','freelancer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function edit(freelancer $freelancer)
    {
        $page_name = 'Update Freelancer Data';
        return view('admin.freelancers.edit',compact('page_name','freelancer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, freelancer $freelancer)
    {
        $this->validate($request,[
            'name'          => 'required',
            'location'      => 'required',
            'language'      => 'required',
            'skills'        => 'required',
            'description'   => 'required',
            'image'          => 'mimes:jpg,png,jpeg|max:7048'
        ],[
            'name.required'          => 'Please Enter Name',
            'location.required'      => 'Please Enter location',
            'language.required'      => 'Please Enter Language',
            'skills.required'       => 'Please Enter Skills',
            'description.required'  => 'Please Enter Deescription',
            'image.mimes'           => 'Please Select Jpg,png,jpeg Type',
            'image.max'             => 'Please Select image Less Then 8 Mb'
        ]);

        $freelancer->name        = $request->name;
        $freelancer->location    = $request->location;
        $freelancer->language    = $request->language;
        $freelancer->skills      = $request->skills;
        $freelancer->description = $request->description;

        if($request->image == ''){
           //
        }else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('freelancer/images/', $fileName);
                $freelancer->image = $fileName;
            } else {
                return $request;
                $freelancer->image = '';
            }

        }
        $freelancer->save();
        return redirect()->route('freelancers.index')->with('success','Freelancer Data Update Successful');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(freelancer $freelancer)
    {
        $freelancer->delete();
        return redirect()->route('freelancers.index')->with('success','Freelancer Data Delete Successful');

    }
}
