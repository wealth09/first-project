<?php

namespace App\Http\Controllers; //->stands for the path to the directory

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
        
    }

    public function about() {
        return view('about');
    }

    public function structure() {
        $name = 'John';
        return view('structure')->with('name', $name);
    }

    public function loop() {
        $names = ['John', 'Michael', 'David', 'Jessica'];
        return view('loop', ['names' => $names]);
    }
}
