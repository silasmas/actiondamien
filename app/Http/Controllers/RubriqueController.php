<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerubriqueRequest;
use App\Http\Requests\UpdaterubriqueRequest;
use App\Models\rubrique;
use App\Models\slide;

class RubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("admin.gHome");
    }
    public function news()
    {

        return view("admin.gNews");
    }
    public function temoignages()
    {

        return view("admin.gTemoignage");
    }
    public function carthographie()
    {

        return view("admin.gCarte");
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
     * @param  \App\Http\Requests\StorerubriqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerubriqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function show(rubrique $rubrique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function edit(rubrique $rubrique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterubriqueRequest  $request
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterubriqueRequest $request, rubrique $rubrique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $col = $_GET['idv'];
        $slide = slide::find($col);
        if ($slide) {
            $photo = public_path() . '/storage/' . $slide->image;
            file_exists($photo) ? unlink($photo) : '';
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
