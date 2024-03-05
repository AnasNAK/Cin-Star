<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Actor;
use App\Models\Salle;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function search(Request $request)
    {
        $searchData = $request->input('search');
        $filmsSearch = Film::where('name', 'like', '%' . $searchData . '%')
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

        return view('client.home', compact('filmsSearch','searchData'));
    }

    
    /**
     * statistic for admin
     */
    public function statistic(){
       $MostBookedMovies = Film::select('films.name', DB::raw('COUNT(reservations.id) AS bookings_count'))
            ->leftJoin('reservations', 'films.id', '=', 'reservations.film_id')
            ->groupBy('films.id')
            ->orderByDesc('bookings_count')
            ->limit(3)
            ->get();
            return view('admin.home', compact('MostBookedMovies'));
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

    public function filmDashboard()
    {
        $films = Film::with('genre', 'salle', 'actor');
        $genres = Genre::all();
        $actors = Actor::all();
        $salles = Salle::all();
        return view('admin.films', compact('films', 'genres', 'actors', 'salles'));
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
        $validatedData = $request->validate([
            'movieName' => ['required', 'string', 'max:255'],
            'broadcatsingHour' => ['required', 'string'],
            'genre' => ['required'],
            'salle' => ['required'],
        ]);

        $newFilm = Film::create([
            'name' => $validatedData['movieName'],
            'hour' => $validatedData['broadcatsingHour'],
            'genre_id' => $validatedData['genre'],
            'salle_id' => $validatedData['salle'],
        ]);

        $newFilm->actor()->attach($request->actors);

        return redirect()->back()->with('success', 'film added successfully!');

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
