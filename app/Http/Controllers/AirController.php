<?php

namespace App\Http\Controllers;

use App\Models\air;
use App\Http\Requests\StoreairRequest;
use App\Http\Requests\UpdateairRequest;

class AirController extends Controller
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
     * @param  \App\Http\Requests\StoreairRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreairRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\air  $air
     * @return \Illuminate\Http\Response
     */
    public function show(air $air)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\air  $air
     * @return \Illuminate\Http\Response
     */
    public function edit(air $air)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateairRequest  $request
     * @param  \App\Models\air  $air
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateairRequest $request, air $air)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\air  $air
     * @return \Illuminate\Http\Response
     */
    public function destroy(air $air)
    {
        //
    }
}
