<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){


        return view('home');
    }

    public function about(){

        $name = 'Ugo';
        $lastname = 'de Ughi';
        $colors = ['giallo','rosso','blu'];

        return view('about', compact('name', 'lastname', 'colors'));
    }
}
