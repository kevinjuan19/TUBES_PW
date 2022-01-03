<?php

namespace App\Http\Controllers;

use App\Film;
use App\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Film::all();
        //include_once - nama folder di view akan mengambil index di folder faculty
        return view('film.index', [
            'films' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //menambahkan data
        $data = Genre::all();
        return view('film.create',[
            'genres'=>$data
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
            'judul' => 'required|string|max:100',
            'sutradara' => 'required|string|max:100',
            'durasi' => 'required|string|max:100',
            'genre_id' => 'required|string|max:100'
        ])->validate();
        $film = new Film($data);
        $film->save();
        return redirect(route('filmList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
        $data = Genre::all();
        return view('film.edit', [
            'genres' => $data,
            'film' => $film
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        //
        $data = validator($request->all(), [
            'judul' => 'required|string|max:100',
            'sutradara' => 'required|string|max:100',
            'durasi' => 'required|string|max:100',
            'genre_id' => 'required|string|max:100'
        ])->validate();
        $film->judul = $data['judul'];
        $film->sutradara = $data['sutradara'];
        $film->durasi = $data['sutradara'];
        $film->genre_id = $data['genre_id'];
        $film->save();
        return redirect(route('filmList'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
        $film->delete();
        return redirect(route('filmList'));
    }
}
