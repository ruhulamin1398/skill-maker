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
        $courses = course::orderBy('serial')->get(); 
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
            'breadcrumb_image'    => 'required | mimes:jpg,png,jpeg|max:7048', 
            'price'              => 'required'
        ],[
            'course_title.requires'       => 'Please Enter Course Title',
            'image.required'              => 'Please Select Image',
            'image.mimes'                 => 'Please Select Jpg,png,jpeg Type',
            'image.max'                   => 'Please Select Image Less Then 8 Mb',
            'image.breadcrumb_image'      => 'Please Select Image',
            'image.breadcrumb_image'      => 'Please Select Jpg,png,jpeg Type',
            'image.breadcrumb_image'      => 'Please Select Image Less Then 8 Mb',
            'introduction_video.required' => 'Please Select A Video',
            'introduction_video.mimes'    => 'Please Select mp4,3gp,mkv file',
            'introduction_video.max'      => 'Please Select Video Less Then 1 Gb',
            'description.required'        => 'Please Enter Description',
            'price.required'              => 'Please Enter Price'
        ]);

        $course = new course();
        $course->course_title   = $request->course_title;
        $course->price          = $request->price;
        $course->type    = $request->type;
        $course->serial    = $request->serial;
        $course->description    = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = str_replace(' ', '_', $request->course_title).time() . 'image.' . $extension;
            $file->move('course/images/', $fileName);
            $course->image = $fileName;
        } else {
            return "Please select image";
        }
        if ($request->hasFile('breadcrumb_image')) {
            $file = $request->file('breadcrumb_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = str_replace(' ', '_', $request->course_title).time() . 'breadcrumb_image.' . $extension;
            $file->move('course/images/', $fileName);
            $course->breadcrumb_image = $fileName;
        } else {
            return "Please select image";
        }

         

        $course->save();
        // $cbatch = Batch::create(['model'=>course::class,'model_id'=>$course->id]);

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
        
        $course->serial    = $request->serial;


        if($request->image == ''){
            // $office->update($request->all());
            // $office->save();
        }else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = str_replace(' ', '_', $request->course_title).time() . 'image.' . $extension;
                $file->move('course/images/', $fileName);
                $course->image = $fileName;
            } else {
                return "Please select image";
            }
        }

        if($request->breadcrumb_image == ''){
            // $office->update($request->all());
            // $office->save();
        }else{
            if ($request->hasFile('breadcrumb_image')) {
                $file = $request->file('breadcrumb_image');
                $extension = $file->getClientOriginalExtension();
                $fileName = str_replace(' ', '_', $request->course_title).time() . 'breadcrumb_image.' . $extension;
                $file->move('course/images/', $fileName);
                $course->breadcrumb_image = $fileName;
            } else {
                return "Please select image";
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
