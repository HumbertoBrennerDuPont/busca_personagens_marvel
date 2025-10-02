<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

// Rota principal - apenas busca
Route::get('/', [CharacterController::class, 'search']);
Route::get('/character/search', [CharacterController::class, 'search'])->name('character.search');