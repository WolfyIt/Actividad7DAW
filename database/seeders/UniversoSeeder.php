<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversoSeeder extends Seeder
{
    public function run()
    {
        DB::table('universos')->insert([
            [
                'name' => 'Marvel',
                'description' => 'The Marvel Universe is a fictional shared universe where the stories in most American comic book titles and other media published by Marvel Comics take place.'
            ],
            [
                'name' => 'DC',
                'description' => 'The DC Universe is the fictional shared universe where most stories in American comic book titles published by DC Comics occur.'
            ]
        ]);
    }
}
