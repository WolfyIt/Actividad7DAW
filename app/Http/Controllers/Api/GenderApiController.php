<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderApiController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return response()->json([
            'status' => 'success',
            'data' => $genders
        ]);
    }

    public function show($name)
    {
        $gender = Gender::where('name', 'like', "%$name%")->first();

        if (!$gender) {
            return response()->json([
                'status' => 'error',
                'message' => 'Género no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $gender
        ]);
    }

    public function showById($id)
    {
        $gender = Gender::find($id);

        if (!$gender) {
            return response()->json([
                'status' => 'error',
                'message' => 'Género no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $gender
        ]);
    }
}