<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class masterController extends Controller
{
    public function create() {
        return view('master.create');
}

    public function store(Request $request){
        // $table->id(); // identificador
        // $table->string('nom');
        // $table->integer('hores');
        // $table->string('director');


        // guardar en la base de datos
        $master = Master::create ([
            'nom' => $request->nom,
            'hores' => $request->hores,
            "director" => $request->director,
        ]);

        return $this->index();
    }

    public function index()
    {
        $masters = Master::all();
        return view('master.index', compact($masters));
    }
}
