<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Trainer List";
        $trainer = Trainer::all();

        return view('admin.trainers.index', compact('page_name','trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Add New Trainer";
        return view('admin.trainers.create', compact('page_name'));
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
            'name'           => 'required',
            'email'          => 'required',
            'phone'          => 'required',
            'last_education' => 'required',
            'current_work'   => 'required',
            'address'        => 'required',
            'image'          => 'required | mimes:jpg,png,jpeg|max:7048'
        ],[
            'name.required'           => 'Please Enter Name',
            'email.required'          => 'Please Enter Email',
            'phone.required'          => 'Please Enter Phone Number',
            'last_education.required' => 'Please Enter Last Educcation',
            'current_work.required'   => 'Please Enter Current Work',
            'address.required'        => 'Please Enter Address',
            'image.required'         => 'Please Select Image',
            'image.mimes'            => 'Please Select Jpg,png,jpeg Type',
            'image.max'              => 'Please Select Image Less Then 8 Mb'
        ]);

        $trainer = new Trainer();
        $trainer->name           = $request->name;
        $trainer->email          = $request->email;
        $trainer->phone          = $request->phone;
        $trainer->last_education = $request->last_education;
        $trainer->current_work   = $request->current_work;
        $trainer->address        = $request->address;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('trainer/images/', $fileName);
            $trainer->image = $fileName;
        } else {
            return $request;
            $trainer->image = '';
        }

        $trainer->save();
        return redirect()->route('trainers.index')->with('success','New Trainer Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        $page_name = "Trainer Details";
        $courses = $trainer->courses;
        $seminars = $trainer->seminars;
        // return $seminars;
        return view('admin.trainers.show', compact('trainer', 'page_name', 'courses','seminars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        $page_name = 'Update Trainer Data';
        return view('admin.trainers.edit', compact('page_name', 'trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $this->validate($request,[
            'name'           => 'required',
            'email'          => 'required',
            'phone'          => 'required',
            'last_education' => 'required',
            'current_work'   => 'required',
            'address'        => 'required',
            'image'          => 'required | mimes:jpg,png,jpeg|max:7048'
        ]);
        $trainer->name           = $request->name;
        $trainer->email          = $request->email;
        $trainer->phone          = $request->phone;
        $trainer->last_education = $request->last_education;
        $trainer->current_work   = $request->current_work;
        $trainer->address        = $request->address;

        if($request->image == ''){

        }else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('trainer/images/', $fileName);
                $trainer->image = $fileName;
            } else {
                return $request;
                $trainer->image = '';
            }

        }
        $trainer->save();
        return redirect()->route('trainers.index')->with('success',' Trainer Data Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect()->route('trainers.index')->with('success',' Trainer Data Delete Successful');
    }
}
