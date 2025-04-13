<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SuperHeroType;
use Illuminate\Http\Request;

class SuperheroTypeApiController extends Controller
{
    public function index()
    {
        $types = SuperHeroType::all();
        return response()->json([
            'status' => 'success',
            'data' => $types
        ]);
    }

    public function show($name)
    {
        $type = SuperHeroType::where('name', 'like', "%$name%")->first();

        if (!$type) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tipo de superhéroe no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $type
        ]);
    }

    public function showById($id)
    {
        $type = SuperHeroType::find($id);

        if (!$type) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tipo de superhéroe no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $type
        ]);
    }
}