<?php

namespace App\Http\Controllers;

use App\Film;
use App\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Studio::all();
        //include_once - nama folder di view akan mengambil index di folder faculty
        return view('studio.index', [
            'studios' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menambahkan data
        $data = Film::all();
        return view('studio.create',[
            'films' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = validator($request->all(), [
            'studio' => 'required|string|max:100',
            'film_id' => 'required|string|max:100'
        ])->validate();
        $studio = new Studio($data);
        $studio->save();
        return redirect(route('studioList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show(Studio $studio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        //
        $data = Film::all();
        return view('studio.edit', [
            'studio' => $studio,
            'films' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        //
        $data = validator($request->all(), [
            'studio' => 'required|string|max:100',
            'film_id' => 'required|string|max:100'
        ])->validate();
        $studio->studio = $data['studio'];
        $studio->film_id = $data['film_id'];
        $studio->save();
        return redirect(route('studioList'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        //
        $studio->delete();
        return redirect(route('studioList'));
    }
}
