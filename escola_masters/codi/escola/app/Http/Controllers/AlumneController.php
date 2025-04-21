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
            'master' => $request->master,
        ]);
        return redirect()->route('alumne.index');
    }

    public function index(){
        $alumnes = Alumne::all();
        
        foreach ($alumnes as $alumne) {
            $alumne->masterObj = Master::find($alumne->master);
        }
        
        return view('alumne.index', ['alumnes' => $alumnes]);
    }

    public function show(Alumne $alumne)
    {
        $alumne->load('master'); // Carga la relación "master" para evitar consultas adicionales
        return view('alumne.show', compact('alumne'));
    }

    public function destroy(Alumne $alumne)
    {
        $alumne->delete();
        return redirect()->route('alumne.index')->with('success', 'Alumne eliminat correctament!');
    }

}
