<?php

namespace App\Http\Controllers;

use App\Models\Alumne;
use App\Models\Master;
use Illuminate\Http\Request;

class AlumneController extends Controller
{
    public function create()
    {
        $masters = Master::all();
        return view('alumne.create', compact('masters'));
    }

    public function store(Request $request)
    {
         Alumne::create([
            'nom' => $request->nom,
            'correu' => $request->correu,
            'adreça' => $request->adreça,
            'ciutat' => $request->ciutat,
            'pais' => $request->pais,
            'telefon' => $request->telefon,
            'master_id' => $request->master_id,
        ]);
        return redirect()->route('alumne.index');
    }

    public function index(){
        $alumnes = Alumne::with(['master' => function($query) {
            $query->select('id', 'nom'); 
        }])->get();
        
        return view('alumne.index', ['alumnes' => $alumnes]);
    }

    public function show(Alumne $alumne)
    {
        $alumne->load('master'); // Carga la relación "master" para evitar consultas adicionales
        return view('alumne.show', compact('alumne'));
    }

    public function edit(Alumne $alumne)
    {
        $masters = Master::all();
        return view('alumne.edit', compact('alumne', 'masters'));
    }
    
    public function update(Request $request, Alumne $alumne)
    {
        $alumne->update([
            'nom' => $request->nom,
            'correu' => $request->correu,
            'adreça' => $request->adreça,
            'ciutat' => $request->ciutat,
            'pais' => $request->pais,
            'telefon' => $request->telefon,
            'master_id' => $request->master_id,
        ]);
        return redirect()->route('alumne.index')->with('success', 'Alumne actualitzat correctament!');
    }

    public function destroy(Alumne $alumne)
    {
        $alumne->delete();
        return redirect()->route('alumne.index')->with('success', 'Alumne eliminat correctament!');
    }

}
