<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SuperHero;
use Illuminate\Http\Request;

class SuperHeroApiController extends Controller
{
    public function index()
    {
        $superheroes = SuperHero::with(['universe', 'gender', 'superheroType'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $superheroes
        ]);
    }

    public function show($name)
    {
        $superhero = SuperHero::with(['universe', 'gender', 'superheroType'])
            ->where('name', 'like', "%$name%")
            ->first();

        if (!$superhero) {
            return response()->json([
                'status' => 'error',
                'message' => 'Superhéroe no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $superhero
        ]);
    }

    public function showById($id)
    {
        $superhero = SuperHero::with(['universe', 'gender', 'superheroType'])
            ->find($id);

        if (!$superhero) {
            return response()->json([
                'status' => 'error',
                'message' => 'Superhéroe no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $superhero
        ]);
    }
}