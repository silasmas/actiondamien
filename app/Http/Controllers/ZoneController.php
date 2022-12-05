<?php

namespace App\Http\Controllers;

use App\Models\zone;
use App\Http\Requests\StorezoneRequest;
use App\Http\Requests\UpdatezoneRequest;

class ZoneController extends Controller
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
     * @param  \App\Http\Requests\StorezoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorezoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(zone $zone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatezoneRequest  $request
     * @param  \App\Models\zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatezoneRequest $request, zone $zone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(zone $zone)
    {
        //
    }
}
