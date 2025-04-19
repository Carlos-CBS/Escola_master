<?php

namespace App\Http\Controllers;

use App\Models\Llibre;
use Illuminate\Http\Request;

class LlibreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $llibres = Llibre::all();
        return view('llibre.index', compact('llibres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('llibre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titol' => 'required|string|max:255',
            'autor' => 'required|string',
            'isbn' => 'required|string|unique:llibres,isbn',
            'any_publicacio' => 'required|integer|min:1900'
        ]);
    
        Llibre::create($request->all());
    
        return redirect()->route('llibre.index')
            ->with('success', 'Llibre afegit correctament!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Llibre $llibre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Llibre $llibre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Llibre $llibre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Llibre $llibre)
    {
        //
    }
}
