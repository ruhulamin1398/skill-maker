<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Batch;
use App\Models\course;
use App\Models\courseTrainer;
use Illuminate\Http\Request;

class CourseControllernew extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Course List";
        $courses = course::all();
        return view('admin.courses.index', compact('page_name', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Add New Course";
        return view('admin.courses.create', compact('page_name'));
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
            'course_title'       => 'required',
            'image'              => 'required | mimes:jpg,png,jpeg|max:7048',
            'introduction_video' => 'required|mimes:mp4,3gp,mkv |max:20048',
            'description'        => 'required',
            'price'              => 'required'
        ],[
            'course_title.requires'       => 'Please Enter Course Title',
            'image.required'              => 'Please Select Image',
            'image.mimes'                 => 'Please Select Jpg,png,jpeg Type',
            'image.max'                   => 'Please Select Image Less Then 8 Mb',
            'introduction_video.required' => 'Please Select A Video',
            'introduction_video.mimes'    => 'Please Select mp4,3gp,mkv file',
            'introduction_video.max'      => 'Please Select Image Less Then 20 Mb',
            'description.required'        => 'Please Enter Description',
            'price.required'              => 'Please Enter Price'
        ]);

        $course = new course();
        $course->course_title   = $request->course_title;
        $course->price          = $request->price;
        $course->description    = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('course/images/', $fileName);
            $course->image = $fileName;
        } else {
            return $request;
            $course->image = '';
        }

        if ($request->hasFile('introduction_video')) {
            $file = $request->file('introduction_video');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('course/video/', $fileName);
            $course->introduction_video = $fileName;
        } else {
            return $request;
            $course->introduction_video = '';
        }

        $course->save();
        $cbatch = Batch::create(['model'=>course::class,'model_id'=>$course->id]);

        return redirect()->route('courses.index')->with('success','New Course Added Successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        $page_name = "Course Details";
        $trainer = $course->trainers;
        $videos = $course->courseVideo;
        // $chapterVideo = $videos->groupby('chapter');

        // return $chapterVideo;
        return view('admin.courses.show', compact('page_name','course', 'trainer', 'videos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        $page_name = "Update Course Data";

        return view('admin.courses.edit', compact('page_name','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        $this->validate($request, [
            'course_title'       => 'required',
            'image'              => 'mimes:jpg,png,jpeg|max:7048',
            'introduction_video' => 'mimes:mp4,3gp,mkv |max:20048',
            'description'        => 'required',
            'price'              => 'required'
        ],[
            'course_title.requires'       => 'Please Enter Course Title',
            'image.mimes'                 => 'Please Select Jpg,png,jpeg Type',
            'image.max'                   => 'Please Select Image Less Then 8 Mb',
            'introduction_video.mimes'    => 'Please Select mp4,3gp,mkv file',
            'introduction_video.max'      => 'Please Select Image Less Then 20 Mb',
            'description.required'        => 'Please Enter Description',
            'price.required'              => 'Please Enter Price'
        ]);


        $course->course_title   = $request->course_title;
        $course->description    = $request->description;
        $course->price          = $request->price;


        if($request->image == ''){
            // $office->update($request->all());
            // $office->save();
        }else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('course/images/', $fileName);
                $course->image = $fileName;
            } else {
                return $request;
                $course->image = '';
            }
        }

        if($request->introduction_video == ''){
            // $office->update($request->all());
            // $office->save();
        }else{
            if ($request->hasFile('introduction_video')) {
                $file = $request->file('introduction_video');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('course/video/', $fileName);
                $course->introduction_video = $fileName;
            } else {
                return $request;
                $course->introduction_video = '';
            }
        }
        $course->save();
        return redirect()->route('courses.index')->with('success','Course Data Update Successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success','Course Data Delete Successfull');

    }
}
