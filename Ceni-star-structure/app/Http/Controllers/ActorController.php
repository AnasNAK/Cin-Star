<?php

namespace App\Http\Controllers;

use App\Models\actor;
use Illuminate\Http\Request;

class ActorController extends Controller
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
    public function store(ActorRequest $request)
    {
        $genre = Actor::create([
            'name' => $request->input('actor'),
        ]);
       return redirect()->back()->with('success', 'Actor added successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActorRequest $request, $id)
    {   
        $actor = Actor::findOrFail($id);
       
        $actor->update([
            'name' => $request->input('actor'),
        ]);
    
        return redirect()->back()->with('success', 'Actor updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $actor = Actor::findOrFail($id);

        $actor->delete();

        return redirect()->back()->with('success', 'Actor deleted successfully!');
    }
}
