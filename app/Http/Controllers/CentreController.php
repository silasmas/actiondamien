<?php

namespace App\Http\Controllers;

use App\Models\centre;
use App\Http\Requests\StorecentreRequest;
use App\Http\Requests\UpdatecentreRequest;

class CentreController extends Controller
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
     * @param  \App\Http\Requests\StorecentreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecentreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function show(centre $centre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function edit(centre $centre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecentreRequest  $request
     * @param  \App\Models\centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecentreRequest $request, centre $centre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function destroy(centre $centre)
    {
        //
    }
}
