<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseApiController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return response()->json([
            'status' => 'success',
            'data' => $universes
        ]);
    }

    public function show($name)
    {
        $universe = Universe::where('name', 'like', "%$name%")->first();

        if (!$universe) {
            return response()->json([
                'status' => 'error',
                'message' => 'Universo no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $universe
        ]);
    }

    public function showById($id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json([
                'status' => 'error',
                'message' => 'Universo no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $universe
        ]);
    }
}