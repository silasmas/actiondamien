<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\slide;
use Illuminate\Http\Request;
use App\Http\Requests\StoreaboutRequest;
use App\Models\rubrique;
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

        rubrique::create([
            'rubrique' => $request->rubrique,
            'page' => $request->page,
        ]);
        return response()->json([
            'reponse' => true,
            'msg' => 'Enrégistrement réussit',
        ]);
    }
    public function addSlide(Request $request)
    {
        $por = Validator::make($request->all(), [
            // 'image' => 'required|image|max:1024',
            // 'h1_fr' => 'required',
            // 'h1_en' => 'required',
            // 'h1_ln' => 'required',
            // 'textbtn_fr' => 'required',
            // 'textbtn_en' => 'required',
            // 'textbtn_ln' => 'required',
            // 'page' => 'required',
            // 'extrait_fr' => 'required',
            // 'extrait_en' => 'required',
            'extrait_ln' => 'required',
        ]);

        if ($por->passes()) {

            $file = $request->file('image');

            $file == '' ? '' : ($filenameImg = 'slide/' . time() . '.' . $file->getClientOriginalName());
            $file == '' ? '' : $file->move('storage/slide', $filenameImg);


            if ($request->image) {
                slide::create([
                    'h1' => ['fr' => $request->h1_fr, 'en' => $request->h1_en, 'ln' => $request->h1_ln],
                    'textbtn' =>  ['fr' => $request->textbtn_fr, 'en' => $request->textbtn_en, 'ln' => $request->textbtn_ln],
                    'extrait' =>  ['fr' => $request->extrait_fr, 'en' => $request->extrait_en, 'ln' => $request->extrait_ln],
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(about $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaboutRequest  $request
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaboutRequest $request, about $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $about)
    {
        //
    }
}
