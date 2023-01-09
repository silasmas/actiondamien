<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatesoutenirRequest;
use App\Models\accueil;
use App\Models\soutenir;
use Illuminate\Http\Request;

class SoutenirController extends Controller
{
    public function delSupport($id)
    {
        $col = $_GET['idv'];
        $slide = accueil::find($id);
        $photo = public_path() . '/storage/' . $slide->cover;
        file_exists($photo) ? unlink($photo) : '';
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
    public function editSupport(Request $request)
    {

        $rap = accueil::findOrFail($request->id);
        $rep = $rap->update([
            'titre1' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
            'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],

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

    public function editeImageSupport(Request $request)
    {
        $filenameImg = "";
        $rap = accueil::findOrFail($request->id);

        $photo = public_path() . '/storage/' . $rap->cover;
        file_exists($photo) ? unlink($photo) : '';

        $file = $request->file('cover');

        $file == '' ? '' : ($filenameImg = 'support/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/support', $filenameImg);
        $rep = $rap->update([
            'cover' => $filenameImg,
        ]);
        if ($rep) {
            return back()->with(['message' => 'La modification est faite avec succès', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Erreur de modification', "type" => "danger"]);
        }
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
