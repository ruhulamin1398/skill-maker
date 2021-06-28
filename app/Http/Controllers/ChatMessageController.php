<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\chatMessage;
use App\Models\Chat;
use App\Models\seminar;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function show(chatMessage $chatMessage)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(chatMessage $chatMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chatMessage $chatMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(chatMessage $chatMessage)
    {
        //
    }
}
