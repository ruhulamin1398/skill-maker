<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ourTeam;
use Illuminate\Http\Request;
class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Members";
        $ourTeams = ourTeam::all();
        return view('admin.ourTeam.index', compact('page_name','ourTeams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'New Team Member';
        return view('admin.ourTeam.create', compact('page_name'));
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

        $ourTeam = new  ourTeam;
        $ourTeam->name              = $request->name;
        $ourTeam->location          = $request->location;
        $ourTeam->short_desctiption = $request->short_desctiption;
        $ourTeam->long_description  = $request->long_description;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('ourTeam/images/', $fileName);
            $ourTeam->image = $fileName;
        } else {
            return $request;
            $ourTeam->image = '';
        }

        $ourTeam->serial  = $request->serial;
        $ourTeam->save();
        return redirect()->route('our-teams.index')->with('success','Team Member added Successful');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ourTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function show(ourTeam $ourTeam)
    {
        $page_name = "Success Story Details";
        return view('admin.our-teams.index.show', compact('ourTeam', 'page_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ourTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(ourTeam $ourTeam)
    {
        $page_name = "Update Member Data";
        return view('admin.ourTeam.edit', compact('page_name','ourTeam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ourTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ourTeam $ourTeam)
    {
       
        // $this->validate($request,[
        //     'name'                => 'required',
        //     'location'            => 'required',
        //     'short_desctiption'   => 'required',
        //     'long_description'    => 'required',
        //     'image'               => 'required | mimes:jpg,png,jpeg|max:7048'
        // ],[
        //     'name.required'               => 'Please Enter Name',
        //     'location.required'           => 'Please Enter Address',
        //     'short_desctiption.required'  => 'Please Enter Short Description',
        //     'long_description.required'   => 'Please Enter Long Description',
        //     'image.required'              => 'Please Select Image',
        //     'image.mimes'                 => 'Please Select Jpg,png,jpeg Type',
        //     'image.max'                   => 'Please Select Image Less Then 8 Mb'
        // ]);
        // return $request;
        $ourTeam->name              = $request->name;
        $ourTeam->location          = $request->location;
        $ourTeam->short_desctiption = $request->short_desctiption;
        $ourTeam->long_description  = $request->long_description;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('ourTeam/images/', $fileName);
            $ourTeam->image = $fileName;
        } 

        $ourTeam->serial  = $request->serial;

        $ourTeam->save();
        return redirect()->route('our-teams.index')->with('success','Data Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ourTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(ourTeam $ourTeam)
    {
        $ourTeam->delete();
        return redirect()->route('our-teams.index')->with('success','Data Delete Successful');

    }
}
