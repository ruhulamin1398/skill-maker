<?php

namespace App\Http\Controllers;

use App\Models\enroll;
use App\Http\Requests\StoreenrollRequest;
use App\Http\Requests\UpdateenrollRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ///
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    return $request;
        $card = array();

        $enroll = new enroll;
        $enroll->perticipator_id = Auth::user()->id;
        $enroll->course_id = $request->course_id;
        $enroll->seminar_id = $request->seminar_id;
        $enroll->user_id = Auth::user()->id;
        $enroll->price = $request->price;
        $enroll->payment_method = $request->payment_method;
        $enroll->payment_Comment = $request->payment_Comment;
        $enroll->is_due = 0;

        $enroll->save();
        return $enroll;

        return redirect(route('redirect'));
        // return view('enroll', compact('card'));
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
