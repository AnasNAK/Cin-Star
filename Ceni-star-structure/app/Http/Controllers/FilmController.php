<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function search(Request $request)
{
    $searchData = $request->input('search');
    $film = Film::where('name', 'like', '%' . $searchData . '%')
                 ->orWhereHas('genre', function ($query) use ($searchData) {
                     $query->where('name', 'like', '%' . $searchData . '%');
                 })
                 ->orWhereHas('actor', function ($query) use ($searchData) {
                     $query->where('name', 'like', '%' . $searchData . '%');
                 })
                 ->orWhereHas('salle', function ($query) use ($searchData) {
                     $query->where('name', 'like', '%' . $searchData . '%');
                 })
                 ->get();

    return view('client.home', compact('film'));
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::inRandomOrder()->limit(10)->get();
        $genres = Genre::all();
        return view('client.home', compact('films','genres'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(film $film)
    {
        //
    }
}
