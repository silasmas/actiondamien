<?php

namespace App\Http\Controllers;

use App\Models\air;
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
    public function editZone(Request $request)
    {
        $rap = zone::find($request->id);
        $rep = $rap->update([
            'nom' =>$request->lien,
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
    public function destroy($id)
    {
        $verify = air::where("zone_id",$id)->first();

        if ($verify) {
            return response()->json([
                'reponse' => false,
                'msg' => 'Impossible de supprimer cette zone, car il a au moins un air de santé attaché à elle',
            ]);
        } else {
            $slide = zone::find($id);
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
