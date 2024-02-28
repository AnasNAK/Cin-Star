<?php

namespace App\Http\Controllers;

use App\Models\genre;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;

class GenreController extends Controller
{

    public function filterFilms(Genre $genre)
    {
        $films = Film::whereHas('genre', function ($query) use ($genre) {
            $query->where('id', $genre->id);
        })->get();

        return view('client.home', compact('films'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenreRequest $request)
    {
        $genre = Genre::create([
            'name' => $request->input('genre'),
        ]);
        redirect()->back()->with('success', 'Genre added successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        //
    }
}
