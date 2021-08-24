<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home(){
        // $collection = collect([
        //     ['nama' => 'sutijah', 'code_ref' => '1234'],
        //     ['nama' => 'setoyo', 'code_ref' => '4321']
        // ]);
        // $guru = $collection->random();
        // dd($guru);
        return view('home');
    }
    public function about(){
        return view('about');
    }
}
