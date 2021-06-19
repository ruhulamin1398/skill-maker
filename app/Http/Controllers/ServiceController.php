<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All Service List';
        $service = Service::all();
        return view('admin.service.index', compact('page_name','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Add New Service';
        return view('admin.service.create', compact('page_name'));
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
            'title'         => 'required',
            'sub_title'     => 'required',
            'description'   => 'required',
            'service_image' => 'required | mimes:jpg,png,jpeg|max:7048'
        ],[
            'title.required'            => 'Please Enter Title',
            'sub_title.required'        => 'Please Enter Sub Title',
            'description.required'      => 'Please Enter Description',
            'service_image.required'    => 'Please Select Image',
            'service_image.mimes'       => 'Please Select Jpg,png,jpeg Type',
            'service_image.max'         => 'Please Select Image Less Then 8 Mb'
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;

        if ($request->hasFile('service_image')) {
            $file = $request->file('service_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('service/images/', $fileName);
            $service->service_image = $fileName;
        } else {
            return $request;
            $service->service_image = '';
        }

        $service->save();
        return redirect()->route('service.index')->with('success','Service added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        $page_name = "Update Service Data";
        return view('admin.service.edit', compact('page_name','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $this->validate($request,[
            'title'         => 'required',
            'sub_title'     => 'required',
            'description'   => 'required',
        ]);

        // $service->update($request->all());

        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;

        if($request->service_image == ''){
            // $office->update($request->all());
            // $office->save();
        }else{
            if ($request->hasFile('service_image')) {
                $file = $request->file('service_image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('service/images/', $fileName);
                $service->service_image = $fileName;
            } else {
                return $request;
                $service->service_image = '';
            }

        }
        $service->save();
        return redirect()->route('service.index')->with('success','Service Data Update Successful');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('success','Service Data Delete Successful');

    }
}
