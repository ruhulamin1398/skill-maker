<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Http\Requests\StorebranchRequest;
use App\Http\Requests\UpdatebranchRequest;

class BranchController extends Controller
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
     * @param  \App\Http\Requests\StorebranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebranchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebranchRequest  $request
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebranchRequest $request, branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(branch $branch)
    {
        //
    }
}
