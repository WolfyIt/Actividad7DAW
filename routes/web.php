<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\GenderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para Universes, Superheroes y Gender
    Route::resource('universes', UniverseController::class);
    Route::resource('superheroes', SuperheroController::class);
    Route::resource('genders', GenderController::class);
});

require __DIR__.'/auth.php';
