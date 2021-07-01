<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\course;
use Illuminate\Http\Request;

class BatchController extends Controller
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
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = 'Add New Batch';
        $course   = course::find($id);
        $batches  = Batch::all();

        // return $count;
        return view('admin.batches.create',compact('page_name','course','batches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'batch_name'  => 'required',
            'description' => 'required'
        ],[
            'batch_name.required'   => 'Please Enter Batch Name',
            'description.required'  => 'Please Enter Description'
        ]);

        $batch = new Batch();
        $batch->model_id    = $id;
        $batch->model       = course::class;
        $batch->batch_name  = $request->batch_name;
        $batch->description = $request->description;
        // $batch = Batch::create(['model'=>course::class,'model_id'=>$id]);

        $batch->save();
        return back()->with('success','New Bacth Added Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        //
    }
}
