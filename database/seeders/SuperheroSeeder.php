<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superhero;
use App\Models\Universo;
use App\Models\Gender;
use App\Models\SuperHeroType;

class SuperheroSeeder extends Seeder
{
    public function run()
    {
        $superheroes = [
            [
                'name' => 'Spider-Man',
                'real_name' => 'Peter Parker',
                'description' => 'Peter Parker, the friendly neighborhood Spider-Man',
                'universo_id' => Universo::where('name', 'Marvel')->first()->id,
                'gender_id' => Gender::where('name', 'Male')->first()->id,
                'superhero_type_id' => SuperHeroType::where('name', 'Human')->first()->id,
                'powers' => 'Wall-crawling, superhuman strength, spider-sense',
                'affiliation' => 'Avengers'
            ],
            [
                'name' => 'Batman',
                'real_name' => 'Bruce Wayne',
                'description' => 'Bruce Wayne, the Dark Knight',
                'universo_id' => Universo::where('name', 'DC')->first()->id,
                'gender_id' => Gender::where('name', 'Male')->first()->id,
                'superhero_type_id' => SuperHeroType::where('name', 'Human')->first()->id,
                'powers' => 'Peak human physical and mental condition, expert detective',
                'affiliation' => 'Justice League'
            ],
            [
                'name' => 'Wonder Woman',
                'real_name' => 'Diana Prince',
                'description' => 'Diana Prince, the Amazon Princess',
                'universo_id' => Universo::where('name', 'DC')->first()->id,
                'gender_id' => Gender::where('name', 'Female')->first()->id,
                'superhero_type_id' => SuperHeroType::where('name', 'Alien')->first()->id,
                'powers' => 'Superhuman strength, flight, combat expertise',
                'affiliation' => 'Justice League'
            ],
            [
                'name' => 'Black Widow',
                'real_name' => 'Natasha Romanoff',
                'description' => 'Natasha Romanoff, spy and Avenger',
                'universo_id' => Universo::where('name', 'Marvel')->first()->id,
                'gender_id' => Gender::where('name', 'Female')->first()->id,
                'superhero_type_id' => SuperHeroType::where('name', 'Human')->first()->id,
                'powers' => 'Expert spy, martial artist, tactical expert',
                'affiliation' => 'Avengers'
            ],
            [
                'name' => 'Joker',
                'real_name' => 'Unknown',
                'description' => 'The Clown Prince of Crime',
                'universo_id' => Universo::where('name', 'DC')->first()->id,
                'gender_id' => Gender::where('name', 'Male')->first()->id,
                'superhero_type_id' => SuperHeroType::where('name', 'Villain')->first()->id,
                'powers' => 'Criminal mastermind, chemical weapons expert',
                'affiliation' => 'None'
            ],
        ];

        foreach ($superheroes as $superhero) {
            Superhero::create($superhero);
        }
    }
}