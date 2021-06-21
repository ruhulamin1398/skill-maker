<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\buycourse;
use Illuminate\Http\Request;

class BuycourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'My Courses';
        $cousre = buycourse::all();
        return view('admin.buycourses.index', compact('page_name','cousre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Buy New Course';
        return view('admin.buycourses.create', compact('page_name'));
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
            'userID'     => 'required',
            'courseID'   => 'required',
            'assignID'   => 'required',
            'price'      => 'required',
            'comment'    => 'required'
        ],[
            'price.required' => 'Please Enter Price',
            'comment.required' => 'Please Enter Comment'
        ]);

        $buycourse = new buycourse();

        $buycourse->userID   = $request->userID;
        $buycourse->courseID = $request->courseID;
        $buycourse->assignID = $request->assignID;
        $buycourse->price    = $request->price;
        $buycourse->status   = '0';
        $buycourse->comment  = $request->comment;

        $buycourse->save();
        return back()->with('success','Course Buy Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buycourse  $buycourse
     * @return \Illuminate\Http\Response
     */
    public function show(buycourse $buycourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buycourse  $buycourse
     * @return \Illuminate\Http\Response
     */
    public function edit(buycourse $buycourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buycourse  $buycourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buycourse $buycourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buycourse  $buycourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(buycourse $buycourse)
    {
        //
    }
}
