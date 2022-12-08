<?php

namespace App\Http\Controllers;

use App\Models\zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        
        $por = Validator::make($request->all(), [
            'zoneName' => ['required', 'string', 'unique:zones,nom'],
        ]);
       // dd($por->passes());
        if ($por->passes()) {
            zone::create([
                'nom' => $request->zoneName,
            ]);
            return response()->json([
                'reponse' => true,
                'msg' => 'Enrégistrement réussit',
            ]);
        } else {
            return response()->json([
                'reponse' => false,
                'msg' => $por->errors()->first(),
            ]);
        }
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
    public function update(Request $request, zone $zone)
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
