<?php

namespace App\Http\Controllers;

use App\Models\office;
use Illuminate\Http\Request;

class officeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All office List';
        $office = office::all();
        return view('admin.office.index', compact('page_name','office'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Add New office';
        return view('admin.office.create', compact('page_name'));
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

        $office = new office();
        $office->country        = $request->country;
        $office->location       = $request->location;
        $office->description    = $request->description;
        $office->map_link       = $request->map_link;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('office/images/', $fileName);
            $office->image = $fileName;
        } else {
            return $request;
            $office->image = '';
        }

        $office->save();
        return redirect()->route('office.index')->with('success','New office Added Successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(office $office)
    {
        $page_name = "office Details";
        return view('admin.office.show', compact('office', 'page_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(office $office)
    {
        $page_name = 'Update office Data';
        return view('admin.office.edit', compact('page_name', 'office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, office $office)
    {
        $this->validate($request,[
            'country'       => 'required',
            'location'      => 'required',
            'description'   => 'required',
            'map_link'      => 'required',
        ]);

        // $update = office::find($office);

        $office->country        = $request->country;
        $office->location       = $request->location;
        $office->description    = $request->description;
        $office->map_link       = $request->map_link;

        if($request->image == ''){
            // $office->update($request->all());
            // $office->save();
        }else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('office/images/', $fileName);
                $office->image = $fileName;
            } else {
                return $request;
                $office->image = '';
            }
          
        }
        $office->save();
       
        return redirect()->route('office.index')->with('success','office Data Update Successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(office $office)
    {
        $office->delete();
        return redirect()->route('office.index')->with('success','office Data Delete Successfull');
    }

}
