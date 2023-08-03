<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Request;

class GameController extends Controller
{
    // Method to create a new game
    public function createGame()
    {   
        $game = new Game();
        $game->save();

        // Create the game board (10x10 grid)
        $board = [];
        for ($row = 0; $row < 10; $row++) {
            for ($col = 0; $col < 10; $col++) {
                $board[$row][$col] = '';
            }
        }

        return view('game', ['game' => $game, 'board' => $board]);
    }

    // Method to view currently opened/available games
    public function viewGames()
    {
        $games = Game::all();
        return view('games_list', ['games' => $games]);
    }
}
