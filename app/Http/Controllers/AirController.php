<?php

namespace App\Http\Controllers;

use App\Models\air;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        $por = Validator::make($request->all(), [
            'airName' => ['required', 'string', 'unique:airs,nom'],
            'zoneId' => ['required'],
        ]);
       // dd($por->passes());
        if ($por->passes()) {
            air::create([
                'nom' => $request->airName,
                'zone_id' => $request->zoneId,
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
    public function update(Request $request, air $air)
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
