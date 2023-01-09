<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateprojetRequest;
use App\Models\actualite;
use App\Models\newsletter;
use App\Models\projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.home");
    }
    public function newsletter()
    {
        $newsletter = newsletter::get();
        return view("admin.newsletter", compact("newsletter"));
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
     * @param  \App\Http\Requests\StoreprojetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('cover');

        $file == '' ? '' : ($filenameImg = 'projet/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/projet', $filenameImg);
        // dd($filenameImg);
        if ($request->cover) {
            projet::create([
                'titre' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
                'intituler' => ['fr' => $request->intituler_fr, 'en' => $request->intituler_en, 'ln' => $request->intituler_ln],
                'text' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
                'rubrique_id' => $request->pageId,
                'photo' => $filenameImg,
            ]);
            return back()->with(['message' => 'Enregistrement réussi', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Merci de vérifier le formulaire!', "type" => "danger"]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function editeNews(Request $request)
    {
        $rap = actualite::findOrFail($request->id);
        // dd($rap);
        $rep = $rap->update([
            'titre' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
            'description' => ['fr' => $request->description_fr, 'en' => $request->description_en, 'ln' => $request->description_ln],
            'video' => $request->video,
            'annee' => $request->annee,
            'rubrique_id' => $request->pageId,
        ]);
        if ($rep) {
            return back()->with(['message' => 'La modification est faite avec succès', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Erreur de modification', "type" => "danger"]);
        }
    }
    public function editeImageNews(Request $request)
    {
        $filenameImg = "";
        $rap = actualite::findOrFail($request->id);

        $photo = public_path() . '/storage/' . $rap->image;
        if ($rap->image) {

            file_exists($photo) ? unlink($photo) : '';
        }

        $file = $request->file('photo');

        $file == '' ? '' : ($filenameImg = 'news/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/news', $filenameImg);
        $rep = $rap->update([
            'image' => $filenameImg,
        ]);
        if ($rep) {
            return back()->with(['message' => 'La modification est faite avec succès', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Erreur de modification', "type" => "danger"]);
        }
    }
    // public function edit($id)
    // {
    //     $rap =register::findOrFail($request->id);
    //     $rep= $rap->update([
    //          'etat' => $request->etat,
    //      ]);
    //      if($rep){
    //         return back()->with('message', 'La modification est faite avec succès');
    //      }else{
    //          return back()->with('erreur', 'Erreur du modification');
    //      }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojetRequest  $request
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprojetRequest $request, projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(projet $projet)
    {
        //
    }
}
