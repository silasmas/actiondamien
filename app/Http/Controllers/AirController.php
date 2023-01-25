<?php

namespace App\Http\Controllers;

use App\Models\air;
use App\Models\centre;
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

    public function editAir(Request $request)
    {
        $rap = air::find($request->id);
        $rep = $rap->update([
            'nom' =>$request->airName,
            'zone_id' =>$request->zoneId,
        ]);
        if ($rep) {
            return response()->json([
                'reponse' => true,
                'msg' => 'La modification est faite avec succès',
            ]);
        } else {
            return response()->json([
                'reponse' => false,
                'msg' => 'Erreur de modification',
            ]);
        }
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
    public function destroy($id)
    {
        $verify = centre::where("air_id",$id)->first();

        if ($verify) {
            return response()->json([                
                'reponse' => false,
                'msg' => 'Impossible de supprimer cette aire de santé, car il a au moins un centre de santé attaché à elle',
            ]);
        } else {
            $slide = air::find($id);
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
}
