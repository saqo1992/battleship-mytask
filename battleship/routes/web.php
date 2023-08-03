<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route to create a new game
Route::get('/game/create', [GameController::class, 'createGame']);

// Route to view currently opened/available games
Route::get('/games', [GameController::class, 'viewGames']);

// Route to join a game
Route::get('/game/{gameId}/join', [PlayerController::class, 'joinGame']);

// Route to set up ships on the board
Route::post('/player/{playerId}/setup', [PlayerController::class, 'setupShips']);

// Route to play the game
Route::get('/game/{gameId}/play', [PlayerController::class, 'playGame'])->name('game.play');

// Route to handle attacks
Route::post('/player/{playerId}/attack', [PlayerController::class, 'attack']);