<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperHeroType extends Model
{
    use HasFactory;

    protected $table = 'superhero_types'; // Asegúrate de que coincida con la migración

    protected $fillable = ['name'];

    /**
     * Get the superheroes for the type.
     */
    public function superheroes()
    {
        return $this->hasMany(Superhero::class, 'superhero_type_id');
    }
}


