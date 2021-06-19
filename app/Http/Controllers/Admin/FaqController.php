<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All Faq List';
        $faq = faq::all();
        return view('admin.faq.index', compact('page_name', 'faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Add New Faq';
        return view('admin.faq.create', compact('page_name'));
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
            'question'  => 'required',
            'answere'   => 'required'
        ],[
            'question.required'  => 'Please Enter Question',
            'answere.required'   => 'Please  Enter Question Answere'
        ]);

        $faq = new faq();
        $faq->question = $request->question;
        $faq->answere  = $request->answere;

        $faq->save();
        return redirect()->route('faq.index')->with('success','New Faq Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq)
    {
        $page_name = 'Update Faq Data';
        return view('admin.faq.edit', compact('page_name','faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq)
    {
        $this->validate($request,[
            'question'  => 'required',
            'answere'   => 'required'
        ]);

        $faq->update($request->all());
        $faq->save();
        return redirect()->route('faq.index')->with('success','Faq Data Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success','Faq Data Delete Successfull');
    }
}
