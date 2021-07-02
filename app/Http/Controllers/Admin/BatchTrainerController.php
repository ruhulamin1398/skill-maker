<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Trainer;
use App\Models\course;
use App\Models\batchTrainer;
use Illuminate\Http\Request;

class BatchTrainerController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\batchTrainer  $batchTrainer
     * @return \Illuminate\Http\Response
     */
    public function show(batchTrainer $batchTrainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\batchTrainer  $batchTrainer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = 'Assign Trainer';
        $course = course::find($id);
        $trainers = Trainer::all();
        $assignedTrainers = $course->trainers;

        $assignedTrainerArray= array();

        foreach($assignedTrainers as $trainer){
            $assignedTrainerArray[$trainer->trainer_id] = 1;
        }
        // return $assignedTrainers;

        return view('admin.batch-trainer.assign', compact('page_name', 'course','trainers', 'assignedTrainers','assignedTrainerArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\batchTrainer  $batchTrainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        foreach ($request->trainer_id as $i => $as) {
            $trainer = new batchTrainer();
            $trainer->batch_id    = $id;
            $trainer->trainer_id  = $request->trainer_id[$i];
            $trainer->save();
        }

        return back()->with('success','New Trainer Added Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\batchTrainer  $batchTrainer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $removeTrainer = batchTrainer::find($id);
        $removeTrainer->delete();
        return back()->with('success','Trainer Remove Successful');
    }
}
