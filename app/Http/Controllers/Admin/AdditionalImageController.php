<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\additionalImage;
use App\Http\Requests\StoreadditionalImageRequest;
use App\Http\Requests\UpdateadditionalImageRequest;
use Illuminate\Http\Request;

class AdditionalImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //additionalImages
        $page_name = 'Additional Images';
        $files = additionalImage::all();

        return view('admin.additionalImages.index', compact('page_name','files'));


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
     * @param  \App\Http\Requests\StoreadditionalImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadditionalImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\additionalImage  $additionalImage
     * @return \Illuminate\Http\Response
     */
    public function show(additionalImage $additionalImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\additionalImage  $additionalImage
     * @return \Illuminate\Http\Response
     */
    public function edit(additionalImage $additionalImage)
    {
      
        $page_name = "Update Image";
        return view('admin.additionalImages.edit', compact('page_name','additionalImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request   $request
     * @param  \App\Models\additionalImage  $additionalImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, additionalImage $additionalImage)
    {
     $this->validate($request,[
            'page'                => 'required', 
            'title'                 => 'required',
        ],[
            'page.required'               => 'Please Enter Page Name',
            'title.required'               => 'Please Enter Title',
        ]);


        $additionalImage->page= $request-> page;
        $additionalImage->dimension= $request-> dimension;
        $additionalImage->title= $request-> title; 


        if ($request->hasFile('link')) {
            $file = $request->file('link');

             
            // rename('images/'.$additionalImage->link, 'images/'.$additionalImage->link.'.old');


            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/', $fileName);
            $additionalImage->link = 'images/'.$fileName;
        } 
        $additionalImage->save();

        return redirect(route('additional-images.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\additionalImage  $additionalImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(additionalImage $additionalImage)
    {
        //
    }
}
