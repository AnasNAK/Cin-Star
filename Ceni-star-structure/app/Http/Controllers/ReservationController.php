<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\chairs;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        try {
            $salle = $film->salle;
            $chairs = $salle->chairs()->with('reservations')->get();
            return view('client.reservation', compact('film', 'salle', 'chairs'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }




public function reserve(Request $request, $chairId)
{
    $filmId = $request->input('film_id');

    $userId = Auth::id();

    $reservation = new Reservation();
    $reservation->film_id = $filmId; 
    $reservation->chair_id = $chairId;
    $reservation->user_id = $userId; 

    $chair = chairs::find($chairId);
    $chair->status = 1; 

    $reservation->save();
    $chair->save();

   
    return redirect()->back()->with('success', 'Chair reserved successfully!');
}

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
