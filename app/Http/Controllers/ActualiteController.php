<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateactualiteRequest;
use App\Models\actualite;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $file = $request->file('cover');

        $file == '' ? '' : ($filenameImg = 'news/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/news', $filenameImg);
        // dd($filenameImg);
        if ($request->cover) {
            actualite::create([
                'titre' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
                'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
                'video' => $request->video,
                'annee' => $request->annee,
                'rubrique_id' => $request->pageId,
                'image' => $filenameImg,
            ]);
            return back()->with(['message' => 'Enregistrement réussi', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Merci de vérifier le formulaire!', "type" => "danger"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\actualite  $actualite
     * @return \Illuminate\Http\Response
     */

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
    public function destroy($id)
    {
        $col = $_GET['idv'];
        $slide = actualite::find($id);
        $photo = public_path() . '/storage/' . $slide->image;
        if($slide->image){

            file_exists($photo) ? unlink($photo) : '';
        }
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
