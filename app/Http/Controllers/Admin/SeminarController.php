<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\seminar;
use App\Models\Batch;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Seminer List";
        $seminar = seminar::all();
        return view('admin.seminar.index', compact('page_name','seminar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Add New Seminar';
        return view('admin.seminar.create', compact('page_name'));
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
            'title'    => 'required',
            'location' => 'required',
            'venue'    => 'required',
            'date'     => 'required',
            'price'    => 'required',
            'status'   => 'required'
        ],[
            'title.required'     => 'Please Enter Seminar Ttle',
            'location.required'  => 'Please Enter Location',
            'venue.required'     => 'Please Enter Venu Name',
            'date.required'      => 'Please Enter Date',
            'price.required'     => 'Please Enter Price',
            'status.required'    => 'Please Select Status'
        ]);

        $seminar = new seminar();
        $seminar->title     = $request->title;
        $seminar->location  = $request->location;
        $seminar->venue     = $request->venue;
        $seminar->date      = $request->date;
        $seminar->price     = $request->price;
        $seminar->status    = $request->status;

        $seminar->save();

        $chat = Chat::create(['model'=>seminar::class,'model_id'=>$seminar->id]);
        $cbatch = Batch::create(['model'=>seminar::class,'model_id'=>$seminar->id]);
        return redirect()->route('seminar.index')->with('success','New Seminar Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(seminar $seminar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(seminar $seminar)
    {
        $page_name = 'Update Seminar Data';
        return view('admin.seminar.edit', compact('page_name', 'seminar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seminar $seminar)
    {
        $this->validate($request, [
            'title'    => 'required',
            'location' => 'required',
            'venue'    => 'required',
            'date'     => 'required',
            'price'    => 'required',

        ]);

        $seminar->update($request->all());
        $seminar->save();
        return redirect()->route('seminar.index')->with('success','Seminar Data Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(seminar $seminar)
    {
        $seminar->delete();
        return redirect()->route('seminar.index')->with('success','Seminar Data Delete Successfull');
    }
}
