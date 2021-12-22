<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;;

use App\Models\chapter; 
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        // return $request;
        $course= course::find($request->course_id) ;
        $chapters= chapter::where('course_id',$request->course_id)-> orderBy('serial') ->get() ;
        return  view('admin.chapters.index',compact('course','chapters'));
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
         $chapter = new chapter;
         $chapter->title = $request->title;
         $chapter->course_id = $request->course_id;
         $chapter->serial = $request->serial;
         $chapter ->save();
         return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,chapter $chapter)
    {
        $chapter->title= $request->title;
        $chapter->serial= $request->serial;
        $chapter->save();
        return back();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(chapter $chapter)
    {
        return "error";
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request  $request
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chapter $chapter)
    {
       

        $chapter->title= $request->title;
        $chapter->serial= $request->serial;
        $chapter->save();
        return back();

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(chapter $chapter)
    {
        $chapter->delete();
        return back();
    }
}
