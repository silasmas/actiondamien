<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreaboutRequest;
use App\Models\about;
use App\Models\accueil;
use App\Models\rubrique;
use App\Models\slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
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
     * @param  \App\Http\Requests\StoreaboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function addRubrique(Request $request)
    {
        $por = Validator::make($request->all(), [
            'rubrique' => ['required', 'string', 'unique:rubriques'],
        ]);
        if ($por->passes()) {
            rubrique::create([
                'rubrique' => $request->rubrique,
                'page' => $request->page,
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

    public function addstat(Request $request)
    {

        accueil::create([
            'nbr' => $request->nbr,
            'titre2' => ['fr' => $request->stitre_fr, 'en' => $request->stitre_en, 'ln' => $request->stitre_ln],
            'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
            'rubrique_id' => $request->pageIdst,
        ]);
        return response()->json([
            'reponse' => true,
            'msg' => 'Enrégistrement réussit',
        ]);
    }
    public function addstat2(Request $request)
    {
        accueil::create([
            'maladie' => ['fr' => $request->maladie_fr, 'en' => $request->maladie_en, 'ln' => $request->maladie_ln],
            'nbrpays' => ['fr' => $request->nbrpays_fr, 'en' => $request->nbrpays_en, 'ln' => $request->nbrpays_ln],
            'rubrique_id' => $request->page_id,
        ]);
        return response()->json([
            'reponse' => true,
            'msg' => 'Enrégistrement réussit',
        ]);
    }
    public function addbon(Request $request)
    {

        accueil::create([
            'titre1' => ['fr' => $request->titre1_fr, 'en' => $request->titre1_en, 'ln' => $request->titre1_ln],
            'maladie' => ['fr' => $request->malade_fr, 'en' => $request->malade_en, 'ln' => $request->malade_ln],
            'h1maladie' => ['fr' => $request->h1maladie_fr, 'en' => $request->h1maladie_en, 'ln' => $request->h1maladie_ln],
            'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
            'rubrique_id' => $request->pageId,
        ]);
        return response()->json([
            'reponse' => true,
            'msg' => 'Enrégistrement réussit',
        ]);
    }
    public function addSlide(Request $request)
    {
        $por = Validator::make($request->all(), [
            'extrait_ln' => 'required',
        ]);

        if ($por->passes()) {

            $file = $request->file('image');

            $file == '' ? '' : ($filenameImg = 'slide/' . time() . '.' . $file->getClientOriginalName());
            $file == '' ? '' : $file->move('storage/slide', $filenameImg);

            if ($request->image) {
                slide::create([
                    'h1' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
                    'textbtn' => ['fr' => $request->textbtn_fr, 'en' => $request->textbtn_en, 'ln' => $request->textbtn_ln],
                    'extrait' => ['fr' => $request->extrait_fr, 'en' => $request->extrait_en, 'ln' => $request->extrait_ln],
                    'page' => $request->page,
                    'image' => $filenameImg,
                ]);
                return back()->with(['message' => 'Enregistrement réussi', "type" => "success"]);
            } else {
                return back()->with(['message' => 'Merci de vérifier le formulaire!', "type" => "success"]);
            }
        } else {
            return back()->with(['message' => $por->errors()->first(), "type" => "danger"]);
        }
    }
    public function addhtopial(Request $request)
    {

        $file = $request->file('cover');

        $file == '' ? '' : ($filenameImg = 'hopital/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/hopital', $filenameImg);
        // dd($filenameImg);
        if ($request->cover) {
            accueil::create([
                'titre1' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
                'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
                'rubrique_id' => $request->pageId,
                'cover' => $filenameImg,
            ]);
            return back()->with(['message' => 'Enregistrement réussi', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Merci de vérifier le formulaire!', "type" => "danger"]);
        }
    }
    public function addsupport(Request $request)
    {

        $file = $request->file('cover');

        $file == '' ? '' : ($filenameImg = 'support/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/support', $filenameImg);
        // dd($filenameImg);
        if ($request->cover) {
            accueil::create([
                'titre1' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
                'txtphone' => ['fr' => $request->txtNumber_fr, 'en' => $request->txtNumber_en, 'ln' => $request->txtNumber_ln],
                'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
                'telephone' => $request->telephone,
                'rubrique_id' => $request->pageId,
                'cover' => $filenameImg,
            ]);
            return back()->with(['message' => 'Enregistrement réussi', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Merci de vérifier le formulaire!', "type" => "danger"]);
        }
    }
    public function editbon(Request $request)
    {

        //  dd($request);
        $rap = accueil::findOrFail($request->id);
        $rep = $rap->update([
            'titre1' => ['fr' => $request->titre1_fr, 'en' => $request->titre1_en, 'ln' => $request->titre1_ln],
            'maladie' => ['fr' => $request->malade_fr, 'en' => $request->malade_en, 'ln' => $request->malade_ln],
            'h1maladie' => ['fr' => $request->h1maladie_fr, 'en' => $request->h1maladie_en, 'ln' => $request->h1maladie_ln],
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

    public function editStat(Request $request)
    {
        $rap = accueil::findOrFail($request->id);
        $rep = $rap->update([
            'nbr' => $request->nbr,
            'titre2' => ['fr' => $request->stitre_fr, 'en' => $request->stitre_en, 'ln' => $request->stitre_ln],
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
    public function editMaladie(Request $request)
    {
        $rap = accueil::findOrFail($request->id);
        $rep = $rap->update([
            'maladie' => ['fr' => $request->maladie_fr, 'en' => $request->maladie_en, 'ln' => $request->maladie_ln],
            'nbrpays' => ['fr' => $request->nbrpays_fr, 'en' => $request->nbrpays_en, 'ln' => $request->nbrpays_ln],
            
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $col = $_GET['idv'];
     
        $slide = accueil::find($id);
        if ($slide) {
            // $photo = public_path() . '/storage/' . $slide->image;
            // file_exists($photo) ? unlink($photo) : '';
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
    public function delState($id)
    {
        $col = $_GET['idv'];
     
        $slide = accueil::find($id);
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
    public function delMaladie($id)
    {
        $col = $_GET['idv'];
     
        $slide = accueil::find($id);
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
    public function delHopital($id)
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
    public function edithopital(Request $request)
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

    public function editeImageHopital(Request $request)
    {
        $filenameImg = "";
        $rap = accueil::findOrFail($request->id);

        $photo = public_path() . '/storage/' . $rap->cover;
        file_exists($photo) ? unlink($photo) : '';

        $file = $request->file('cover');

        $file == '' ? '' : ($filenameImg = 'hopital/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/hopital', $filenameImg);
        $rep = $rap->update([
            'cover' => $filenameImg,
        ]);
        if ($rep) {            
            return back()->with(['message' => 'La modification est faite avec succès', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Erreur de modification', "type" => "danger"]);
        }
    }
}
