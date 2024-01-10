<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BoozeController extends Controller
{
    public function index(){
        return view('booze', [
            
        ]);
    }
}
