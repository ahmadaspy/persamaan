<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Materi extends Controller
{
    public function videopanduan(){
        return view('videopanduan');
    }
    public function deskripsipanduan(){
        return view('deskripsipanduan');
    }
    public function kikd(){
        return view('kidkd');
    }
}
