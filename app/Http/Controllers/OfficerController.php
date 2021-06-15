<?php

namespace App\Http\Controllers;

use App\Models\officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All Officer List';
        $officer = officer::all();
        return view('admin.officer.index', compact('page_name','officer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Add New Officer';
        return view('admin.officer.create', compact('page_name'));
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
                'country'       => 'required',
                'location'      => 'required',
                'description'   => 'required',
                'map_link'      => 'required',
                'image'         => 'required | mimes:jpg,png,jpeg|max:7048'
            ],[
                'country.required'       => 'Please Enter country Name',
                'location.required'      => 'Please Enter Location',
                'description.required'   => 'Please Enter Description',
                'map_link.required'      => 'Please Enter Map Link',
                'image.required'         => 'Please Select Image',
                'image.mimes'            => 'Please Select Jpg,png,jpeg Type',
                'image.max'              => 'Please Select Image Less Then 8 Mb'
            ]);

            $officer = new officer();
            $officer->country        = $request->country;
            $officer->location       = $request->location;
            $officer->description    = $request->description;
            $officer->map_link       = $request->map_link;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('officer/images/', $fileName);
                $officer->image = $fileName;
            } else {
                return $request;
                $officer->image = '';
            }
    
            $officer->save();
            return redirect()->route('officer.index')->with('success','New Officer Added Successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function show(officer $officer)
    {
        $page_name = "Officer Details";
        return view('admin.officer.show', compact('officer', 'page_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function edit(officer $officer)
    {
        $page_name = 'Update Officer Data';
        return view('admin.officer.edit', compact('page_name', 'officer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, officer $officer)
    {
        $this->validate($request,[
            'country'       => 'required',
            'location'      => 'required',
            'description'   => 'required',
            'map_link'      => 'required',
        ]);

        $officer->update($request->all());
        $officer->save();
        return redirect()->route('officer.index')->with('success','Officer Data Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(officer $officer)
    {
        $officer->delete();
        return redirect()->route('officer.index')->with('success','Officer Data Delete Successfull');
    }
}
