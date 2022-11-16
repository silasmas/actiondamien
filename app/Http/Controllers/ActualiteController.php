<?php

namespace App\Http\Controllers;

use App\Models\actualite;
use App\Http\Requests\StoreactualiteRequest;
use App\Http\Requests\UpdateactualiteRequest;

class ActualiteController extends Controller
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
     * @param  \App\Http\Requests\StoreactualiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreactualiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(actualite $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateactualiteRequest  $request
     * @param  \App\Models\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateactualiteRequest $request, actualite $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(actualite $actualite)
    {
        //
    }
}
