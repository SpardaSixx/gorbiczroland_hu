<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Console;
use App\Models\Game;

class PsController extends Controller
{
    public function consoles(){
        $consoles = Console::all();

        return view('ps.consoles', [
            'consoles' => $consoles
        ]);
    }

    public function games(){
        $games = Game::all();

        return view('ps.games', [
            'games' => $games
        ]);
    }
}
