<?php

namespace App\Http\Controllers;

use App\Models\soutenir;
use App\Http\Requests\StoresoutenirRequest;
use App\Http\Requests\UpdatesoutenirRequest;

class SoutenirController extends Controller
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
     * @param  \App\Http\Requests\StoresoutenirRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresoutenirRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\soutenir  $soutenir
     * @return \Illuminate\Http\Response
     */
    public function show(soutenir $soutenir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\soutenir  $soutenir
     * @return \Illuminate\Http\Response
     */
    public function edit(soutenir $soutenir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesoutenirRequest  $request
     * @param  \App\Models\soutenir  $soutenir
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesoutenirRequest $request, soutenir $soutenir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soutenir  $soutenir
     * @return \Illuminate\Http\Response
     */
    public function destroy(soutenir $soutenir)
    {
        //
    }
}
