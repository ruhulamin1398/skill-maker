<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\courseVideo;
use Illuminate\Http\Request;

class CourseVideoController extends Controller
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
        // $this->validate($request,[
        //     'course_id'  => 'required',
        //     'video_title' => 'required',
        //     'video_link' => 'required|mimes:mp4,3gp,mkv |max:20048',
        //     'chapter'    => 'required',
        //     'position'   => 'required'
        // ],[
        //     'video_title.required'=> 'Please Enter Video Title',
        //     'video_link.required' => 'Please Select A Video',
        //     'video_link.mimes'    => 'Please Select mp4,3gp,mkv file',
        //     'video_link.max'      => 'Please Select Image Less Then 20 Mb',
        //     'chapter.required'    => 'Please Enter course Chapter',
        //     'position.required'   => 'Please Enter Video Position'

        // ]);

        // $video = new courseVideo();
        // $video->course_id    = '1';
        // $video->video_title  = $request->video_title;
        // $video->chapter      = $request->chapter;
        // $video->position     = $request->position;

        // if ($request->hasFile('video_link')) {
        //     $file = $request->file('video_link');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = time() . '.' . $extension;
        //     $file->move('course/video/', $fileName);
        //     $$video->video_link = $fileName;
        // } else {
        //     return $request;
        //     $video->video_link = '';
        // }

        // $video->save();
        // return back()->with('success','Course Video Added successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function show(courseVideo $courseVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = "Add New Course Video";
        $course = course::find($id); 
    
        return view('admin.course-video.create', compact('page_name', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\courseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, courseVideo $courseVideo)
    // {
    //     //
    // }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'video_title' => 'required',
            'video_link' => 'required|mimes:mp4,3gp,mkv |max:20048',
            'chapter_id'    => 'required',
            'position'   => 'required'
        ],[
            'video_title.required'=> 'Please Enter Video Title',
            'video_link.required' => 'Please Select A Video',
            'video_link.mimes'    => 'Please Select mp4,3gp,mkv file',
            'video_link.max'      => 'Please Select Image Less Then 20 Mb',
            'chapter.required'    => 'Please Enter course Chapter',
            'position.required'   => 'Please Enter Video Position'
        ]);

        $video = new courseVideo();
        $video->course_id    = $id;
        $video->video_title  = $request->video_title;
        $video->chapter_id      = $request->chapter_id;
        $video->position     = $request->position;

        if ($request->hasFile('video_link')) {
            $file = $request->file('video_link');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('course/video/', $fileName);
            $video->video_link = $fileName;
        } else {
            return $request;
            $video->video_link = '';
        }

        $video->save();

        // return $video;

        return back()->with('success','Course Video Added successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(courseVideo $courseVideo)
    {
        //
    }
}
