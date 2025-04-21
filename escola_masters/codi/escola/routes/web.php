<?php

use App\Http\Controllers\masterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AlumneController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\LlibreController;
use App\Http\Controllers\ProfessorController;

use App\Models\Alumne;
use App\Models\Llibre;
use App\Models\Professor;
use App\Models\Jugador;


Route::get('/', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('info');
})->name('info');

use App\Models\User;

Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->role === 'Administrador') {
        return view('dashboard.admin', [
            'user' => $user,
            'alumne' => Alumne::first(),
            'llibre' => Llibre::first(),
            'professor' => Professor::first(),
            'jugador' => Jugador::first(),
        ]);
    }
    
    return view('dashboard.consultor', ['user' => $user]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index'); 
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/masters', [masterController::class, 'index'])->name('master.index');
    Route::get('/master/create', [masterController::class, 'create'])->name('master.create');
    Route::post('/masters', [masterController::class, 'store'])->name('master.store');
    Route::get('/master/{master}', [masterController::class, 'data'])->name('master.data');
    Route::delete('/masters/{master}', [masterController::class, 'destroy'])->name('master.destroy');

    Route::get('/master/edit/{master}', [masterController::class, 'edit'])->name('master.edit');
    Route::put('/master/{master}', [masterController::class, 'update'])->name('master.update');

    Route::get('/generatepdf/{master}', [PDFController::class, 'generatePDF'])->name('pdf.taula1');

    Route::get('alumnes/create', [AlumneController::class, 'create'])->name('alumne.create');
    Route::get('alumnes', [AlumneController::class, 'index'])->name('alumne.index');
    Route::post('alumnes', [AlumneController::class, 'store'])->name('alumne.store');
    Route::get('/alumnes/{alumne}', [AlumneController::class, 'show'])->name('alumne.show');
    
    Route::get('llibres/create', [LlibreController::class, 'create'])->name('llibre.create');
    Route::get('llibres', [LlibreController::class, 'index'])->name('llibre.index');
    Route::post('llibres', [LlibreController::class, 'store'])->name('llibre.store');
    Route::get('/llibres/{llibre}', [LlibreController::class, 'show'])->name('llibre.show');

    Route::get('professors/create', [ProfessorController::class, 'create'])->name('professor.create');
    Route::get('professors', [ProfessorController::class, 'index'])->name('professor.index');
    Route::post('professors', [ProfessorController::class, 'store'])->name('professor.store');
    Route::get('/professors/{professor}', [ProfessorController::class, 'show'])->name('professor.show');

    Route::get('jugadors/create', [JugadorController::class, 'create'])->name('jugador.create');
    Route::get('jugadors', [JugadorController::class, 'index'])->name('jugador.index');
    Route::post('jugadors', [JugadorController::class, 'store'])->name('jugador.store');
    Route::get('/jugadors/{jugador}', [JugadorController::class, 'show'])->name('jugador.show');


    Route::get('/generatepdf/alumne/{alumne}', [PDFController::class, 'generateAlumnePDF'])->name('pdf.alumne');
    Route::get('/generatepdf/llibre/{llibre}', [PDFController::class, 'generateLlibrePDF'])->name('pdf.llibre');
    Route::get('/generatepdf/professor/{professor}', [PDFController::class, 'generateProfessorPDF'])->name('pdf.professor');
    Route::get('/generatepdf/jugador/{jugador}', [PDFController::class, 'generateJugadorPDF'])->name('pdf.jugador');

});

Route::get('/jugador', function () {
    $jugador = Jugador::first();  
    return view('jugador.index', compact('jugador'));
});

Route::get('/professor', function () {
    $professor = Professor::first(); 
    return view('professor.index', compact('professor'));
});

Route::get('/llibre', function () {
    $llibre = Llibre::first();
    return view('llibre.index', compact('llibre'));
}); 

require __DIR__.'/auth.php';