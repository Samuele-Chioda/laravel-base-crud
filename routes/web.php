<?php

use App\Http\Controllers\Guest\PageController as GuestPageController;
use App\Http\Controllers\Guest\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestPageController::class, 'index'])->name('guest.home');

// Rotte per i Pokemon
Route::get('/pokemons', [PokemonController::class, 'index'])->name('pokemons.index');
Route::get('/pokemons/{id}', [PokemonController::class, 'show'])->name('pokemons.show');
