<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\additionalSetting;
use App\Http\Requests\StoreadditionalSettingRequest;
use App\Http\Requests\UpdateadditionalSettingRequest;
use Illuminate\Http\Request;

class AdditionalSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $page_name = 'Additional Content';
        $settings = additionalSetting::latest()->get();

        return view('admin.additionalSetting.index', compact('page_name','settings'));
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
     * @param  \App\Http\Requests\StoreadditionalSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadditionalSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\additionalSetting  $additionalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(additionalSetting $additionalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\additionalSetting  $additionalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(additionalSetting $additionalSetting)
    {
        
        $page_name = "Update Content";
        return view('admin.additionalSetting.edit', compact('page_name','additionalSetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  /Illuminate\Http\Request  $request
     * @param  \App\Models\additionalSetting  $additionalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, additionalSetting $additionalSetting)
    {
        $additionalSetting->page=  $request->page;
        $additionalSetting->key=  $request->key;
        $additionalSetting->value=  $request->value;
        $additionalSetting->save();
        return redirect(route('additional-settings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\additionalSetting  $additionalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(additionalSetting $additionalSetting)
    {
        //
    }
}
