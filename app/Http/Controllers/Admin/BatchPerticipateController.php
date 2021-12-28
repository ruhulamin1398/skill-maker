<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\BatchPerticipate;
use App\Models\course;
use App\Models\enroll;
use App\Models\perticipator;
use Illuminate\Http\Request;

class BatchPerticipateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $page_name = 'Assign Student';
        $batch = Batch::find($request->batch_id);

        $course = course::find($batch->model_id);
        $participators = BatchPerticipate::where('batch_id', $request->batch_id)->get();
        $unAssigned = enroll::where('course_id', $course->id)->where('is_assigned', 0)->get();
        return view('admin.batch-participator.assign', compact('page_name', 'batch', 'course', 'participators', 'unAssigned'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $request;
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
     * @param  \App\Models\BatchPerticipate  $batchPerticipate
     * @return \Illuminate\Http\Response
     */
    public function show( $batchPerticipate_id)
    {
        
        $batchPerticipate =   BatchPerticipate::find($batchPerticipate_id);

          $enroll = enroll::find($batchPerticipate->enroll_id);
          $enroll->is_assigned = 0;
          $enroll->save();
          $batchPerticipate->delete();
          return back();



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BatchPerticipate  $batchPerticipate
     * @return \Illuminate\Http\Response
     */
    public function edit(BatchPerticipate $batchPerticipate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $batch_id)
    {

        if ($request->participator_id) {
            $batch = Batch::find($batch_id);

            foreach ($request->participator_id as $participator_id) {

                $batchPerticipate = new BatchPerticipate;
                $batchPerticipate->participator_id = $participator_id;
                $batchPerticipate->batch_id = $batch_id;
                $batchPerticipate->user_id = perticipator::find($participator_id)->user_id;
                $batchPerticipate->course_id = $batch->course->id;

                $enroll = enroll::where('user_id', $batchPerticipate->user_id)->where('course_id', $batch->course->id)->first();
                $enroll->is_assigned = 1;
                $enroll->save();

                $batchPerticipate->enroll_id = $enroll->id;
                $batchPerticipate->save();
            }
        }

return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BatchPerticipate  $batchPerticipate
     * @return \Illuminate\Http\Response
     */
    public function destroy(BatchPerticipate $batchPerticipate)
    {


        
        //
    }
}
