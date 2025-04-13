<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\Api\UniverseApiController;
use App\Http\Controllers\Api\SuperHeroApiController;
use App\Http\Controllers\Api\GenderApiController;
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

// API Routes
Route::prefix('api')->group(function () {
    Route::get('/universes', [UniverseApiController::class, 'index']);
    Route::get('/universes/{name}', [UniverseApiController::class, 'show']);
    Route::get('/universes/id/{id}', [UniverseApiController::class, 'showById']);
    Route::get('/superheroes', [SuperHeroApiController::class, 'index']);
    Route::get('/superheroes/{name}', [SuperHeroApiController::class, 'show']);
    Route::get('/superheroes/id/{id}', [SuperHeroApiController::class, 'showById']);
    Route::get('/genders', [GenderApiController::class, 'index']);
    Route::get('/genders/{name}', [GenderApiController::class, 'show']);
    Route::get('/genders/id/{id}', [GenderApiController::class, 'showById']);
    Route::get('/superhero-types/id/{id}', [SuperheroTypeApiController::class, 'showById']);
});

require __DIR__.'/auth.php';
