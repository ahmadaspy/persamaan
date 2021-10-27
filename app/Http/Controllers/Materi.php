<?php

namespace App\Http\Controllers;

use App\Models\Mencoba_1;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Materi extends Controller
{
    public function videopanduan(){
        return view('videopanduan');
    }
    public function deskripsipanduan(){
        return view('deskripsipanduan');
    }
    public function kikd(){

        // if (url()->previous()==route('kikd')) {
        //     return redirect()->route('videopanduan');
        // }
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
    public function spldv_3($id){
        $soal = Mencoba_1::find($id);
        if(session()->get('koreksi')){
            $koreksi = session()->get('koreksi');
            $percobaan = session()->get('percobaan');
            return view('persamaan_linear_dua_variabel.spldv_page3', compact('soal', 'koreksi', 'percobaan'));
        }else{
            $koreksi = null;
            $percobaan = 0;
            return view('persamaan_linear_dua_variabel.spldv_page3', compact('soal', 'koreksi', 'percobaan'));
        }


    }
    public function post_latihan(Request $request){
        $jawaban = Mencoba_1::find($request->id);
        $koreksi = (object) array();
        $array = collect([]);
        if ($jawaban->jawaban_x_1_1==$request->x1_1) {
            // $koreksi_array = collect(['jawaban_x_1_1' => true]);
            $array->put('jawaban_x_1_1', true);

        }else{
            ;
            // array_push($koreksi_array, 'jawaban_x_1_1', false);
            // $koreksi_array->put('jawaban_x_1_1' , false);
            // $koreksi = Arr::add($koreksi, 'jawaban_x_1_1', false);
            // $koreksi_array = collect(['jawaban_x_1_1' => false]);
            $array->put('jawaban_x_1_1', false);
        }
        if ($jawaban->jawaban_x_1_2==$request->x1_2){
            $array->put('jawaban_x_1_2', true);
        }else{
            $array->put('jawaban_x_1_2', false);
        }
        if ($jawaban->jawaban_y_1_1==$request->y1_1){
            $array->put('jawaban_y_1_1', true);
        }else{
            $array->put('jawaban_y_1_1', false);
        }
        if ($jawaban->jawaban_y_1_2==$request->y1_2){
            $array->put('jawaban_y_1_2', true);
        }else{
            $array->put('jawaban_y_1_2', false);
        }
        $koreksi= collect($array);
        $percobaan = $request->percobaan + 1;
        return redirect()->route('spldv_3', $request->id)->withInput()->with('koreksi', $koreksi)->with('percobaan', $percobaan);
    }
}
