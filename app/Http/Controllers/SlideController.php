<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreslideRequest;
use App\Http\Requests\UpdateslideRequest;
use App\Models\accueil;
use App\Models\slide;
use Illuminate\Http\Request;

class SlideController extends Controller
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

    public function editeSlide(Request $request)
    {
        $rap = slide::findOrFail($request->id);
        $rep = $rap->update([
            'h1' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
            'textbtn' => ['fr' => $request->textbtn_fr, 'en' => $request->textbtn_en, 'ln' => $request->textbtn_ln],
            'extrait' => ['fr' => $request->extrait_fr, 'en' => $request->extrait_en, 'ln' => $request->extrait_ln],
            'page' => $request->page,
        ]);
        if ($rep) {
            return back()->with(['message' => 'La modification est faite avec succès', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Erreur de modification', "type" => "danger"]);
        }
    }
    public function editeImageSlide(Request $request)
    {
        $filenameImg = "";
        $rap = slide::findOrFail($request->id);

        $photo = public_path() . '/storage/' . $rap->image;
        file_exists($photo) ? unlink($photo) : '';

        $file = $request->file('photo');

        $file == '' ? '' : ($filenameImg = 'slide/' . time() . '.' . $file->getClientOriginalName());
        $file == '' ? '' : $file->move('storage/slide', $filenameImg);
        $rep = $rap->update([
            'image' => $filenameImg,
        ]);
        if ($rep) {
            return back()->with(['message' => 'La modification est faite avec succès', "type" => "success"]);
        } else {
            return back()->with(['message' => 'Erreur de modification', "type" => "danger"]);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreslideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreslideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateslideRequest  $request
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateslideRequest $request, slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(slide $slide)
    {
        //
    }
}
