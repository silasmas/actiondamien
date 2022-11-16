<?php

namespace App\Http\Controllers;

use App\Models\vision;
use App\Http\Requests\StorevisionRequest;
use App\Http\Requests\UpdatevisionRequest;

class VisionController extends Controller
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
     * @param  \App\Http\Requests\StorevisionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevisionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function show(vision $vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function edit(vision $vision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevisionRequest  $request
     * @param  \App\Models\vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevisionRequest $request, vision $vision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function destroy(vision $vision)
    {
        //
    }
}
