<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stack;
use App\Models\Reference;

class MainController extends Controller
{
    public function home(){
        $references = Reference::orderBy('year', 'desc')->get();

        return view('home', [
            'references' => $references
        ]);
    }
    
    public function stack(){
        $frontend = Stack::where('type', 'frontend')->orderBy('ordering', 'asc')->get();
        $backend = Stack::where('type', 'backend')->orderBy('ordering', 'asc')->get();
        $other = Stack::where('type', 'other')->orderBy('ordering', 'asc')->get();

        return view('stack', [
            'frontend' => $frontend,
            'backend' => $backend,
            'other' => $other,
        ]);
    }

    public function references(){
        $references = Reference::orderBy('year', 'desc')->get();

        return view('references', [
            'references' => $references
        ]);
    }

    public function cv(){
        $frontend = Stack::where('type', 'frontend')->orderBy('ordering', 'asc')->get();
        $backend = Stack::where('type', 'backend')->orderBy('ordering', 'asc')->get();
        $other = Stack::where('type', 'other')->orderBy('ordering', 'asc')->get();

        return view('cv', [
            'frontend' => $frontend,
            'backend' => $backend,
            'other' => $other,
        ]);
    }

    public function contact(){
        return view('contact', []);
    }
}
