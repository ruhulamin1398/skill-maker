<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\seminarParticipators;
use App\Http\Requests\StoreseminarParticipatorsRequest;
use App\Http\Requests\UpdateseminarParticipatorsRequest;
use App\Models\seminar;
use App\Models\User;

class SeminarParticipatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreseminarParticipatorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreseminarParticipatorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seminarParticipators  $seminarParticipators
     * @return \Illuminate\Http\Response
     */
    public function show(seminarParticipators $seminarParticipators)
    {
        //
    }
  
    public function edit($id)
    {
        $page_name = 'Seminar | Add Participators';
        $seminar = seminar::find($id);
        $participators = User::role('student')->get();
        return  $participators;
        
        return view('admin.seminar.assign_trainer', compact('page_name','seminar', 'trainers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateseminarParticipatorsRequest  $request
     * @param  \App\Models\seminarParticipators  $seminarParticipators
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateseminarParticipatorsRequest $request, seminarParticipators $seminarParticipators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seminarParticipators  $seminarParticipators
     * @return \Illuminate\Http\Response
     */
    public function destroy(seminarParticipators $seminarParticipators)
    {
        //
    }
}
