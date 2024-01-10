<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DevController extends Controller
{
    public function stack(){
        return view('dev.stack', [
            
        ]);
    }

    public function references(){
        return view('dev.references', [
            
        ]);
    }
}
