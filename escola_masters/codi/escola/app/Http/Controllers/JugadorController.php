<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadors = Jugador::all();
        return view('jugador.index', compact('jugadors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'equip' => 'required|string|max:50',
            'posicio' => 'required|string|max:50',
            'gols' => 'required|integer|min:0'
        ]);

        Jugador::create($request->all());

        return redirect()->route('jugador.index')
            ->with('success', 'Jugador creat correctament!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        //
    }
}
