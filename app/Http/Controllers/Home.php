<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
}
