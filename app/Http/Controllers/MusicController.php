<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Music;

class MusicController extends Controller
{
    public function index(){
        $musics = Music::all();

        return view('music', [
            'musics' => $musics
        ]);
    }
}
