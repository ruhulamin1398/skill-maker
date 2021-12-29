<?php

namespace App\Http\Controllers;

use App\Models\enroll;
use App\Http\Requests\StoreenrollRequest;
use App\Http\Requests\UpdateenrollRequest;
use App\Models\perticipator;
use App\Models\seminarParticipators;
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
            // return Auth::user();
        $card = array();

        $enroll = new enroll;
        
        $enroll->course_id = $request->course_id;
        $enroll->seminar_id = $request->seminar_id;
        $enroll->user_id = Auth::user()->id;
        $enroll->price = $request->price;
        $enroll->payment_method = $request->payment_method;
        $enroll->payment_Comment = $request->payment_Comment;
        $enroll->is_due = 0;
     
        $participator= perticipator::where('user_id',Auth::user()->id)->first();
        if(is_null($participator)){
            $participator= new perticipator;
            $participator->user_id = Auth::user()->id;
            $participator->name = Auth::user()->name;
            $participator->email = Auth::user()->email;
            $participator->save();
        }

        $enroll->participator_id = $participator->id;
        $enroll->save();

        // added him as participant 
        if ($enroll->seminar_id) {

            $seminarParticipators =  new seminarParticipators;
            $seminarParticipators->seminar_id =   $request->seminar_id;
            $seminarParticipators->participator_id = $enroll->participator_id;
            $seminarParticipators->save();
            $enroll->is_assigned = 1;
            $enroll->save();
        }
        return redirect(route('redirection'));
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
