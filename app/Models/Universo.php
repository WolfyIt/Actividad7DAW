<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Relación con Superhero
    public function superheroes()
    {
        return $this->hasMany(Superhero::class);
    }
}




