<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universo;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universes = Universo::all(); // Obtiene todos los universos
        return view('universes.index', compact('universes')); // Pasa los universos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universes.create'); // Retorna la vista para crear un nuevo universo
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Crear un nuevo universo
        $universo = new Universo();
        $universo->name = $request->input('name');
        $universo->description = $request->input('description');
        $universo->save(); // Guarda el universo en la base de datos

        // Redirigir al usuario a la lista de universos con un mensaje de éxito
        return redirect()->route('universes.index')->with('success', 'Universe created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Añadir mensaje de depuración
        \Log::info('ID recibido: ' . $id);
        
        // Buscar el universo con el ID proporcionado - sin cargar relaciones aún
        $universe = Universo::findOrFail($id);
        
        // Añadir más información de depuración
        \Log::info('Universo encontrado: ' . $universe->name);
        
        return view('universes.show', compact('universe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $universe = Universo::findOrFail($id);
        return view('universes.edit', compact('universe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $universe = Universo::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $universe->update($validated);

        return redirect()->route('universes.index')->with('success', 'Universe updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $universe = Universo::findOrFail($id);
        $universe->delete();
        
        return redirect()->route('universes.index')->with('success', 'Universe deleted successfully!');
    }
}


