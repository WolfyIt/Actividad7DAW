<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;

Route::get('/', function () {
    echo 'hello guys! this is my first laravel aplicattion';
    /*echo '<pre>';
    print_r(Universe::all());
    echo '</pre>';*/

    dump(Universe::all());

    //SELECT * FROM universes
    //return view('welcome');
});

Route::get('/gender', [GenderController::class, 'index']);
