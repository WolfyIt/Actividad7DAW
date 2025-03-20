<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Universo;
use App\Models\SuperHeroType;
use App\Models\Gender;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        // Obtener todas las listas necesarias para la vista
        $universes = Universo::all();
        $types = SuperHeroType::all();
        $genders = Gender::all(); // Se añade esta línea

        // Pasar las variables a la vista
        return view('superheroes.create', compact('universes', 'types', 'genders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'real_name' => 'required|string|max:255',
            'universe_id' => 'required|exists:universos,id',  // Cambia 'universes' por 'universos'
            'type_id' => 'required|exists:superhero_types,id',
            'gender_id' => 'required|exists:genders,id',
            'powers' => 'required|string',
            'affiliation' => 'nullable|string|max:255',
        ]);

        Superhero::create($validated);

        return redirect()->route('superheroes.index');
    }


    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        $genders = Gender::select('id', 'name')->get();
        $universes = Universo::select('id', 'name')->get();
        $types = SuperHeroType::select('id', 'name')->get(); // Usar el modelo en lugar de lista estática

        return view('superheroes.edit', compact('superhero', 'genders', 'universes', 'types'));
    }

    public function update(Request $request, Superhero $superhero)
    {
    // Validar los datos enviados desde el formulario
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'powers' => 'required|string',
        'origin' => 'nullable|string|max:255', // Incluye origin
        'universe_id' => 'required|exists:universos,id',
        'type_id' => 'required|exists:superhero_types,id',
        'gender_id' => 'required|exists:genders,id',
    ]);

    // Actualizar el superhéroe con los datos validados
    $superhero->update($validated);

    // Redirigir al índice
    return redirect()->route('superheroes.index');
    }
    
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }   
    
}