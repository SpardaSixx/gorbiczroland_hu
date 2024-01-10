<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PsController extends Controller
{
    public function consoles(){
        return view('ps.consoles', [
            
        ]);
    }

    public function games(){
        return view('ps.games', [
            
        ]);
    }
}
