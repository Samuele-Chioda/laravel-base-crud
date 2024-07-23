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
            [
                'name' => 'Rattata',
                'type' => 'Normal',
                'level' => 5,
                'image' => 'https://img.pokemondb.net/artwork/rattata.jpg'
            ],
            [
                'name' => 'Sandshrew',
                'type' => 'Ground',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/sandshrew.jpg'
            ],
            [
                'name' => 'Vulpix',
                'type' => 'Fire',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/vulpix.jpg'
            ],
            [
                'name' => 'Oddish',
                'type' => 'Grass',
                'level' => 4,
                'image' => 'https://img.pokemondb.net/artwork/oddish.jpg'
            ],
            [
                'name' => 'Growlithe',
                'type' => 'Fire',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/growlithe.jpg'
            ],
            [
                'name' => 'Poliwag',
                'type' => 'Water',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/poliwag.jpg'
            ],
            [
                'name' => 'Abra',
                'type' => 'Psychic',
                'level' => 10,
                'image' => 'https://img.pokemondb.net/artwork/abra.jpg'
            ],
            [
                'name' => 'Machop',
                'type' => 'Fighting',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/machop.jpg'
            ],
            [
                'name' => 'Bellsprout',
                'type' => 'Grass',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/bellsprout.jpg'
            ],
            [
                'name' => 'Tentacool',
                'type' => 'Water',
                'level' => 9,
                'image' => 'https://img.pokemondb.net/artwork/tentacool.jpg'
            ],
            [
                'name' => 'Geodude',
                'type' => 'Rock',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/geodude.jpg'
            ],
            [
                'name' => 'Ponyta',
                'type' => 'Fire',
                'level' => 9,
                'image' => 'https://img.pokemondb.net/artwork/ponyta.jpg'
            ],
            [
                'name' => 'Slowpoke',
                'type' => 'Water',
                'level' => 10,
                'image' => 'https://img.pokemondb.net/artwork/slowpoke.jpg'
            ],
            [
                'name' => 'Magnemite',
                'type' => 'Electric',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/magnemite.jpg'
            ],
            [
                'name' => 'Farfetch’d',
                'type' => 'Normal',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/farfetchd.jpg'
            ],
            [
                'name' => 'Seel',
                'type' => 'Water',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/seel.jpg'
            ],
            [
                'name' => 'Grimer',
                'type' => 'Poison',
                'level' => 5,
                'image' => 'https://img.pokemondb.net/artwork/grimer.jpg'
            ],
            [
                'name' => 'Shellder',
                'type' => 'Water',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/shellder.jpg'
            ],
            [
                'name' => 'Gastly',
                'type' => 'Ghost',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/gastly.jpg'
            ],
            [
                'name' => 'Drowzee',
                'type' => 'Psychic',
                'level' => 9,
                'image' => 'https://img.pokemondb.net/artwork/drowzee.jpg'
            ],
            [
                'name' => 'Krabby',
                'type' => 'Water',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/krabby.jpg'
            ],
            [
                'name' => 'Voltorb',
                'type' => 'Electric',
                'level' => 5,
                'image' => 'https://img.pokemondb.net/artwork/voltorb.jpg'
            ],
            [
                'name' => 'Exeggcute',
                'type' => 'Grass',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/exeggcute.jpg'
            ],
            [
                'name' => 'Cubone',
                'type' => 'Ground',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/cubone.jpg'
            ],
            [
                'name' => 'Koffing',
                'type' => 'Poison',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/koffing.jpg'
            ],
            [
                'name' => 'Rhyhorn',
                'type' => 'Ground',
                'level' => 9,
                'image' => 'https://img.pokemondb.net/artwork/rhyhorn.jpg'
            ],
            [
                'name' => 'Horsea',
                'type' => 'Water',
                'level' => 6,
                'image' => 'https://img.pokemondb.net/artwork/horsea.jpg'
            ],
            [
                'name' => 'Staryu',
                'type' => 'Water',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/staryu.jpg'
            ],
            [
                'name' => 'Scyther',
                'type' => 'Bug',
                'level' => 10,
                'image' => 'https://img.pokemondb.net/artwork/scyther.jpg'
            ],
            [
                'name' => 'Electabuzz',
                'type' => 'Electric',
                'level' => 11,
                'image' => 'https://img.pokemondb.net/artwork/electabuzz.jpg'
            ],
            [
                'name' => 'Magmar',
                'type' => 'Fire',
                'level' => 10,
                'image' => 'https://img.pokemondb.net/artwork/magmar.jpg'
            ],
            [
                'name' => 'Pinsir',
                'type' => 'Bug',
                'level' => 11,
                'image' => 'https://img.pokemondb.net/artwork/pinsir.jpg'
            ],
            [
                'name' => 'Tauros',
                'type' => 'Normal',
                'level' => 12,
                'image' => 'https://img.pokemondb.net/artwork/tauros.jpg'
            ],
            [
                'name' => 'Magikarp',
                'type' => 'Water',
                'level' => 3,
                'image' => 'https://img.pokemondb.net/artwork/magikarp.jpg'
            ],
            [
                'name' => 'Lapras',
                'type' => 'Water',
                'level' => 12,
                'image' => 'https://img.pokemondb.net/artwork/lapras.jpg'
            ],
            [
                'name' => 'Ditto',
                'type' => 'Normal',
                'level' => 7,
                'image' => 'https://img.pokemondb.net/artwork/ditto.jpg'
            ],
            [
                'name' => 'Eevee',
                'type' => 'Normal',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/eevee.jpg'
            ],
            [
                'name' => 'Porygon',
                'type' => 'Normal',
                'level' => 9,
                'image' => 'https://img.pokemondb.net/artwork/porygon.jpg'
            ],
            [
                'name' => 'Omanyte',
                'type' => 'Rock',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/omanyte.jpg'
            ],
            [
                'name' => 'Kabuto',
                'type' => 'Rock',
                'level' => 8,
                'image' => 'https://img.pokemondb.net/artwork/kabuto.jpg'
            ],
            [
                'name' => 'Aerodactyl',
                'type' => 'Rock',
                'level' => 12,
                'image' => 'https://img.pokemondb.net/artwork/aerodactyl.jpg'
            ],
        ];

        DB::table('pokemons')->insert($pokemons);
    }
}
