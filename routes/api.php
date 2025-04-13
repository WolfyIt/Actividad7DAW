<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UniverseApiController;
use App\Http\Controllers\Api\SuperHeroApiController;
use App\Http\Controllers\Api\GenderApiController;

Route::get('/universes', [UniverseApiController::class, 'index']);
Route::get('/universes/{name}', [UniverseApiController::class, 'show']);
Route::get('/universes/id/{id}', [UniverseApiController::class, 'showById']);
Route::get('/superheroes', [SuperHeroApiController::class, 'index']);
Route::get('/superheroes/{name}', [SuperHeroApiController::class, 'show']);
Route::get('/superheroes/id/{id}', [SuperHeroApiController::class, 'showById']);
Route::get('/genders', [GenderApiController::class, 'index']);
Route::get('/genders/{name}', [GenderApiController::class, 'show']);
Route::get('/genders/id/{id}', [GenderApiController::class, 'showById']);
Route::get('/superhero-types', [SuperheroTypeApiController::class, 'index']);
Route::get('/superhero-types/{name}', [SuperheroTypeApiController::class, 'show']);
Route::get('/superhero-types/id/{id}', [SuperheroTypeApiController::class, 'showById']);