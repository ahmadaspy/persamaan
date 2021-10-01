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
    public function spldv_1(){
        $jawaban = array(
            0 => 'tidak termasuk',
            1 => 'tidak termasuk',
            2 => 'termasuk',
            3 => 'termasuk'
        );
        $penjelasan = array(
            0 => 'tidak termasuk karena tidak memenuhi persamaan linear dua variabel, hanya ada satu variabel dengan kata lain ini merupakan persamaaan linear satu variabel',
            1 => 'tidak termasuk karena ini merupakan pertidaksamaan linear dua variabel',
            2 => 'termasuk hal ini merupakan suatu bentuk persamaan linear dua variabel karena adanya dua variabel',
            3 => 'termasuk bentuk dari persmaan linear dua variabel, karena variabel bisa saja huruf apa saja'
        );
        return view('persamaan_linear_dua_variabel.spldv_page1', compact('jawaban', 'penjelasan'));
    }
    public function spldv_2(){
        return view('persamaan_linear_dua_variabel.spldv_page2');
    }
    public function spldv_3(){
        return view('persamaan_linear_dua_variabel.spldv_page3');
    }
}
