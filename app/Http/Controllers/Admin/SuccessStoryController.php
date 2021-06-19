<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\successStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Success Story";
        $story = successStory::all();
        return view('admin.success_story.index', compact('page_name','story'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Add New Success Story';
        return view('admin.success_story.create', compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'                => 'required',
            'location'            => 'required',
            'short_desctiption'   => 'required',
            'long_description'    => 'required',
            'image'               => 'required | mimes:jpg,png,jpeg|max:7048'
        ],[
            'name.required'               => 'Please Enter Name',
            'location.required'           => 'Please Enter Address',
            'short_desctiption.required'  => 'Please Enter Short Description',
            'long_description.required'   => 'Please Enter Long Description',
            'image.required'              => 'Please Select Image',
            'image.mimes'                 => 'Please Select Jpg,png,jpeg Type',
            'image.max'                   => 'Please Select Image Less Then 8 Mb'
        ]);

        $story = new successStory();
        $story->name              = $request->name;
        $story->location          = $request->location;
        $story->short_desctiption = $request->short_desctiption;
        $story->long_description  = $request->long_description;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('success_story/images/', $fileName);
            $story->image = $fileName;
        } else {
            return $request;
            $story->image = '';
        }

        $story->save();
        return redirect()->route('success_story.index')->with('success','New Success Story added Successful');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\successStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function show(successStory $successStory)
    {
        $page_name = "Success Story Details";
        return view('admin.success_story.show', compact('successStory', 'page_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\successStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function edit(successStory $successStory)
    {
        $page_name = "Update Success Story Data";
        return view('admin.success_story.edit', compact('page_name','successStory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\successStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, successStory $successStory)
    {
        $this->validate($request,[
            'name'                => 'required',
            'location'            => 'required',
            'short_desctiption'   => 'required',
            'long_description'    => 'required',
        
        ]);

        $successStory->update($request->all());

        $successStory->save();
        return redirect()->route('success_story.index')->with('success','Data Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\successStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function destroy(successStory $successStory)
    {
        $successStory->delete();
        return redirect()->route('success_story.index')->with('success','Data Delete Successful');

    }
}
