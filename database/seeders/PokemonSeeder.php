<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = [
            [
                'name' => 'Pikachu',
                'type' => 'Electric',
                'level' => 10,
                'image' => 'https://img.pokemondb.net/artwork/pikachu.jpg'
            ],
            [
                'name' => 'Charmander',
                'type' => 'Fire',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/charmander.jpg'
            ],
            [
                'name' => 'Squirtle',
                'type' => 'Water',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/squirtle.jpg'
            ],
            [
                'name' => 'Bulbasaur',
                'type' => 'Grass',
                'level' => 9,
                'image' => 'https://img.pokemondb.net/artwork/bulbasaur.jpg'
            ],
            [
                'name' => 'Jigglypuff',
                'type' => 'Fairy',
                'level' => 5,
                'image' => 'https://img.pokemondb.net/artwork/jigglypuff.jpg'
            ],
            [
                'name' => 'Meowth',
                'type' => 'Normal',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/meowth.jpg'
            ],
            [
                'name' => 'Psyduck',
                'type' => 'Water',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/psyduck.jpg'
            ],
            [
                'name' => 'Snorlax',
                'type' => 'Normal',
                'level' => 12,
                'image' => 'https://img.pokemondb.net/artwork/snorlax.jpg'
            ],
            [
                'name' => 'Eevee',
                'type' => 'Normal',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/eevee.jpg'
            ],
            [
                'name' => 'Gengar',
                'type' => 'Ghost',
                'level' => 15,
                'image' => 'https://img.pokemondb.net/artwork/gengar.jpg'
            ],
        ];

        DB::table('pokemons')->insert($pokemons);
    }
}
