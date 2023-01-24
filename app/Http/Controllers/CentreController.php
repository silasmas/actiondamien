<?php

namespace App\Http\Controllers;

use App\Models\centre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        $por = Validator::make($request->all(), [
            'centreName' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'adresse' => ['required', 'string'],
            'airId' => ['required'],
        ]);
       // dd($por->passes());
        if ($por->passes()) {
            centre::create([
                'nom' => $request->centreName,
                'phone' => $request->phone,
                'adresse' => $request->adresse,
                'air_id' => $request->airId,
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
    public function update(Request $request, centre $centre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $slide = centre::find($id);
            if ($slide) {
                $slide->delete();
                if ($slide) {
                    return response()->json([
                        'reponse' => true,
                        'msg' => 'Suppression Réussie.',
                    ]);
                }
            } else {
                return response()->json([
                    'reponse' => false,
                    'msg' => 'Aucun enregistrement trouver',
                ]);
            }

    }
}
