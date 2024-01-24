<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stack;
use App\Models\Reference;

class DevController extends Controller
{
    public function stack(){
        $stacks = Stack::all();

        return view('dev.stack', [
            'stacks' => $stacks    
        ]);
    }

    public function references(){
        $references = Reference::all();

        return view('dev.references', [
            'references' => $references
        ]);
    }
}
