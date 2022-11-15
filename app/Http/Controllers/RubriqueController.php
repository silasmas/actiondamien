<?php

namespace App\Http\Controllers;

use App\Models\rubrique;
use App\Http\Requests\StorerubriqueRequest;
use App\Http\Requests\UpdaterubriqueRequest;

class RubriqueController extends Controller
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
     * @param  \App\Http\Requests\StorerubriqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerubriqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function show(rubrique $rubrique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function edit(rubrique $rubrique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterubriqueRequest  $request
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterubriqueRequest $request, rubrique $rubrique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function destroy(rubrique $rubrique)
    {
        //
    }
}
