<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatetemoignageRequest;
use App\Models\temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemoignageController extends Controller
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
     * @param  \App\Http\Requests\StoretemoignageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $por = Validator::make($request->all(), [
            'lien' => ['required', 'string', 'url'],
        ]);
        if ($por->passes()) {
            temoignage::create([
                'lien' => $request->lien,
                'description' => ["fr"=>$request->description_fr,"en"=>$request->description_en,"ln"=>$request->description_ln],
                'rubrique_id' => $request->pageId,
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
    public function addSensibilisation(Request $request)
    {
        $filenameImg = "";
        $file = $request->file('photo');
        // dd($file);
        $file == '' ? '' : ($filenameImg = 'sensibilisation/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/sensibilisation', $filenameImg);

        if ($request->photo) {
            temoignage::create([
                'titre' => ['fr' => $request->titre_fr, 'en' => $request->titre_en, 'ln' => $request->titre_ln],
                'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
                'rubrique_id' => $request->page_id,
                'photo' => $filenameImg,
            ]);
            return back()->with(['message' => 'Enregistrement réussi', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Merci de vérifier le formulaire!', "type" => "danger"]);
        }

    }

    public function editVideo(Request $request)
    {
        $rap = temoignage::find($request->id);
        $rep = $rap->update([
            'lien' =>$request->lien,
            'description' => ["fr"=>$request->description_fr,"en"=>$request->description_en,"ln"=>$request->description_ln],
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
    public function editTem(Request $request)
    {
        $rap = temoignage::findOrFail($request->id);
        $rep = $rap->update([
            'titre' => ['fr' => $request->titre_fr, 'en' => $request->titre_en, 'ln' => $request->titre_ln],
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
    public function editeImageSens(Request $request)
    {
        $filenameImg = "";
        $rap = temoignage::findOrFail($request->id);

        $photo = public_path() . '/storage/' . $rap->image;
        if ($rap->image) {

            file_exists($photo) ? unlink($photo) : '';
        }

        $file = $request->file('photo');

        $file == '' ? '' : ($filenameImg = 'support/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/support', $filenameImg);
        $rep = $rap->update([
            'photo' => $filenameImg,
        ]);
        if ($rep) {
            return back()->with(['message' => 'La modification est faite avec succès', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Erreur de modification', "type" => "danger"]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetemoignageRequest  $request
     * @param  \App\Models\temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetemoignageRequest $request, temoignage $temoignage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $col = $_GET['idv'];
        $slide = temoignage::find($col);
        if ($slide) {
            $photo = public_path() . '/storage/' . $slide->image;
            if($slide->image){

                file_exists($photo) ? unlink($photo) : '';
            }
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
