<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Materi extends Controller
{
    public function panduan(){
        return view('panduan');
    }
    public function kikd(){
        return view('kidkd');
    }
}
