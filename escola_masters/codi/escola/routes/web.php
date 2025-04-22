<?php

use App\Http\Controllers\masterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AlumneController;
use App\Http\Controllers\ConsultorController;
use App\Models\Alumne;
use App\Exceptions\ExcepcionPersonalizada;


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
        ]);
    }
    
    return view('dashboard.consultor', ['user' => $user]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/consultor/tabla1', [MasterController::class, 'index'])->name('consultor.taula1');  
    Route::get('/consultor/tabla2', [AlumneController::class, 'index'])->name('consultor.taula2'); 
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
    Route::get('/generatepdf/alumne/{alumne}', [PDFController::class, 'generateAlumnePDF'])->name('pdf.alumne');
    Route::get('/alumnes/{alumne}/edit', [AlumneController::class, 'edit'])->name('alumne.edit');
    Route::put('/alumnes/{alumne}', [AlumneController::class, 'update'])->name('alumne.update');
    Route::delete('/alumnes/{alumne}', [AlumneController::class, 'destroy'])->name('alumne.destroy');

});

Route::get('/test-exception', function() {
    throw new ExcepcionPersonalizada("¡Ups! Algo salió mal.");
});

require __DIR__.'/auth.php';