<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booze;

class BoozeController extends Controller
{
    public function index(){
        $boozes = Booze::all();

        return view('booze', [
            'boozes' => $boozes
        ]);
    }
}
