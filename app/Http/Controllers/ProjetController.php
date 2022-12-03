<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateprojetRequest;


class ProjetController extends Controller
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
    public function edit(projet $projet)
    {
        //
    }

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
