<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\seminar;
use App\Models\Trainer;
use App\Models\SeminarTrainer;
use Illuminate\Http\Request;

class SeminarTrainerController extends Controller
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
     * @param  \App\Models\SeminarTrainer  $seminarTrainer
     * @return \Illuminate\Http\Response
     */
    public function show(SeminarTrainer $seminarTrainer)
    {
          $seminarTrainer->delete() ;
          return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeminarTrainer  $seminarTrainer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = 'Seminar | Assign Trainer';
        $seminar = seminar::find($id);
        $trainers = Trainer::all();
        return view('admin.seminar.assign_trainer', compact('page_name','seminar', 'trainers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SeminarTrainer  $seminarTrainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        foreach ($request->trainer_id as $i => $as) {
            $isExists= SeminarTrainer::where('seminer_id', $id)->where('trainer_id', $request->trainer_id[$i])->first();
            if(is_null( $isExists)){
                $trainer = new SeminarTrainer();
                $trainer->seminer_id = $id;
                $trainer->trainer_id  = $request->trainer_id[$i];
                $trainer->save();
            }

            
        }
        return back()->with('success','New Trainer Added Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeminarTrainer  $seminarTrainer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seminarTrainer = SeminarTrainer::find($id);
        $seminarTrainer->delete() ;
        return back();
    }
}
