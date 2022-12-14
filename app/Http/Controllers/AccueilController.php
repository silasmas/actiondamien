<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreaccueilRequest;
use App\Http\Requests\UpdateaccueilRequest;
use App\Models\accueil;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.gHome');
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
     * @param  \App\Http\Requests\StoreaccueilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaccueilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function show(accueil $accueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function edit(accueil $accueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaccueilRequest  $request
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaccueilRequest $request, accueil $accueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(accueil $accueil)
    {
        //
    }
}
