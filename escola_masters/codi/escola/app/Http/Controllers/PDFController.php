<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Master;
use App\Models\Jugador;
use App\Models\Alumne;
use App\Models\Llibre;
use App\Models\Professor;

    
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Master $master)
    {    
        $data = [
            'title' => 'Datos del master en pdf',
            'date' => date('m/d/Y'),
            'master' => $master
        ]; 
              
        $pdf = PDF::loadView('pdf.taula1', $data);
       
        return $pdf->download($master->nom . '_' . date('m-d-Y') . 'pdf');
    }
    public function generateAlumnePDF(Alumne $alumne)
    {
        $data = [
            'title' => 'Datos del alumno',
            'date' => date('m/d/Y'),
            'alumne' => $alumne->load('master')
        ];
        
        $pdf = Pdf::loadView('pdf.taula2', $data);
        return $pdf->download("alumne_{$alumne->nom}_" . date('m-d-Y') . '.pdf');
    }
}
