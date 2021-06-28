<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\seminar;
use App\Models\seminerTrainer;
use Illuminate\Http\Request;

class SeminerTrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///
    }

    public function seminar($id){
        $page_name = "Assign Trainer Into Seminar";
        $seminar = seminar::find($id);
        $trainer = Trainer::all();
        return view('admin.seminar-trainer.index', compact('seminar','trainer','page_name'));
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
            'course_id' => 'required',
            'trainer_id' => 'required'
        ]);

        foreach ($request->trainer_id as $id => $as) {
            $trainer = new seminerTrainer();
            $trainer->course_id = $request->course_id;
            $trainer->trainer_id  = $request->trainer_id[$id];
            $trainer->save();
        }
        return back()->with('success', 'Trainer Assigned Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seminerTrainer  $seminerTrainer
     * @return \Illuminate\Http\Response
     */
    public function show(seminerTrainer $seminerTrainer)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seminerTrainer  $seminerTrainer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $existingTrainers = seminar::find($id)->trainers->first()->trainers;
        return $existingTrainers;
        $seminars = seminar::all();
        $existingTrainerArray = [];
        foreach ($existingTrainers as $existingTrainer) {
            $existingTrainerArray[$existingTrainer->id] = 1;
        }


        $trainers = Trainer::all();
        foreach ($trainers as $trainer) {
            if (isset($existingTrainerArray[$trainer->id])) {
                // echo($trainer->id);
            }
        }


        return compact('existingTrainers', 'trainers');
        $page_name = "Assign Trainer Into Seminar";


        return view('admin.seminar_trainer.index', compact('seminar', 'trainer', 'page_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seminerTrainer  $seminerTrainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seminerTrainer $seminerTrainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seminerTrainer  $seminerTrainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(seminerTrainer $seminerTrainer)
    {
        //
    }
}
