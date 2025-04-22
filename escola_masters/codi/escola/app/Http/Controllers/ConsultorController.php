<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;  
use App\Models\Alumne; 

class ConsultorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
        $this->middleware(function ($request, $next) {
            if (auth()->user()->role !== 'Consultor') {
                abort(403, 'Acceso denegado: Solo para consultores');
            }
            return $next($request);
        });
    }

    public function index()
    {
        $user = auth()->user();
        return view('dashboard.consultor', compact('user'));
    }

    public function verTabla1()
    {
        $datos = Master::all();  
        $title = "Listado de Masters/Departamentos";
        $date = now()->format('d/m/Y');
        
        return view('pdf.taula1', [
            'datosTabla1' => $datos, 
            'title' => $title,
            'date' => $date
        ]);
    }

    public function verTabla2()
    {
        $datos = Alumne::with('master')->get(); 
        $title = "Listado de Alumnes/Professors";
        $date = now()->format('d/m/Y');
        
        return view('pdf.taula2', [
            'datosTabla2' => $datos,  
            'title' => $title,
            'date' => $date
        ]);
    }
}