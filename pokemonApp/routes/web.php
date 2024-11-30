<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PokemonController;
use App\Models\Pokemon;

Route::resource('pokemons', PokemonController::class);

