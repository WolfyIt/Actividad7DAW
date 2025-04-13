<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'real_name',
        'description',
        'universo_id',
        'gender_id',
        'superhero_type_id',
        'powers',
        'affiliation'
    ];

    /**
     * Get the universe that owns the superhero.
     */
    public function universe()
    {
        return $this->belongsTo(Universo::class, 'universo_id');
    }

    /**
     * Get the gender that owns the superhero.
     */
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    /**
     * Get the type that owns the superhero.
     */
    public function superheroType()
    {
        return $this->belongsTo(SuperHeroType::class, 'superhero_type_id');
    }
}