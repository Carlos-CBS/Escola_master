<?php

use App\Http\Controllers\masterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;

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
        return view('dashboard.admin', compact('user'));
    }
    
    return view('dashboard.consultor', compact('user'));
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
    Route::post('/master/create', [masterController::class, 'create'])->name('master.create');
    Route::post('/masters', [masterController::class, 'store'])->name('master.store');

});


require __DIR__.'/auth.php';