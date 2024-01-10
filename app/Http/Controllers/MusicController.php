<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    public function index(){
        return view('music', [
            
        ]);
    }
}
