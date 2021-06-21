<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Support List";
        $support = support::all();
        return view('admin.supports.index', compact('page_name','support'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Add New Support';
        return view('admin.supports.create', compact('page_name'));
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
          'title'         => 'required',
          'description'   => 'required',  
          'phone'         => 'required',
          'facebook'      => 'required',
          'email'         => 'required'
        ],[
            'title.required'       => 'Please Enter Title',
            'description.required' => 'Please Enter Description',
            'phone.required'       => 'Please Enter Phone Number',
            'facebook.required'    => 'Please Enter facebook List',
            'email.required'       => 'Please Enter Email'
        ]);

        $support = new support();
        $support->title       = $request->title;
        $support->description = $request->description;
        $support->phone       = $request->phone;
        $support->facebook    = $request->facebook;
        $support->email       = $request->email;

        $support->save();
        return redirect()->route('supports.index')->with('success', 'Support Data Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\support  $support
     * @return \Illuminate\Http\Response
     */
    public function show(support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(support $support)
    {
        $page_name = 'Update Support Data';
        return view('admin.supports.edit', compact('page_name','support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, support $support)
    {
        $this->validate($request, [
            'title'         => 'required',
            'description'   => 'required',  
            'phone'         => 'required',
            'facebook'      => 'required',
            'email'         => 'required'
        ]);

        $support->update($request->all());
        $support->save();
        return redirect()->route('supports.index')->with('success','Data Save Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(support $support)
    {
        $support->delete();
        return redirect()->route('supports.index')->with('success','Data Delete Successful');
    }
}
