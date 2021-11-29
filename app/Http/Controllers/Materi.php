<?php

namespace App\Http\Controllers;

use App\Models\Mencoba_1;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Throwable;

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
        $rand = rand(1,10);
        if($soal==null){
            $soal = Mencoba_1::find(1);
            $koreksi = null;
            $percobaan = 0;
            return view('persamaan_linear_dua_variabel.spldv_page3', compact('soal', 'koreksi', 'percobaan', 'rand'));
        }
        if(session()->get('koreksi')){
            $koreksi = session()->get('koreksi');
            $percobaan = session()->get('percobaan');
            return view('persamaan_linear_dua_variabel.spldv_page3', compact('soal', 'koreksi', 'percobaan', 'rand'));
        }else{
            $koreksi = null;
            $percobaan = 0;
            return view('persamaan_linear_dua_variabel.spldv_page3', compact('soal', 'koreksi', 'percobaan', 'rand'));
        }



    }
    public function post_latihan(Request $request){
        $request->validate([
            'x1_1' => 'required',
            'x1_2' => 'required',
            'y1_1' => 'required',
            'y1_2' => 'required',
            'x2_1' => 'required',
            'x2_2' => 'required',
            'y2_1' => 'required',
            'y2_2' => 'required',
            'titik_potong_1' => 'required',
            'titik_potong_2' => 'required'
        ]);
        $jawaban = Mencoba_1::find($request->id);
        $koreksi = (object) array();
        $array = collect([]);
        $benar = 0;
        if ($jawaban->jawaban_x_1_1==$request->x1_1) {
            // $koreksi_array = collect(['jawaban_x_1_1' => true]);
            $array->put('jawaban_x_1_1', true);
            $benar = $benar + 1;
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
            $benar = $benar + 1;
        }else{
            $array->put('jawaban_x_1_2', false);
        }
        if ($jawaban->jawaban_y_1_1==$request->y1_1){
            $array->put('jawaban_y_1_1', true);
            $benar = $benar + 1;
        }else{
            $array->put('jawaban_y_1_1', false);
        }
        if ($jawaban->jawaban_y_1_2==$request->y1_2){
            $array->put('jawaban_y_1_2', true);
            $benar = $benar + 1;
        }else{
            $array->put('jawaban_y_1_2', false);
        }
        if ($jawaban->jawaban_x_2_1==$request->x2_1){
            $array->put('jawaban_x_2_1', true);
            $benar = $benar + 1;
        }else{
            $array->put('jawaban_x_2_1', false);
        }
        if ($jawaban->jawaban_x_2_2==$request->x2_2){
            $array->put('jawaban_x_2_2', true);
            $benar = $benar + 1;
        }else{
            $array->put('jawaban_x_2_2', false);
        }
        if ($jawaban->jawaban_y_2_1==$request->y2_1){
            $array->put('jawaban_y_2_1', true);
            $benar = $benar + 1;
        }else{
            $array->put('jawaban_y_2_1', false);
        }
        if ($jawaban->jawaban_y_2_2==$request->y2_2){
            $array->put('jawaban_y_2_2', true);
            $benar = $benar + 1;
        }else{
            $array->put('jawaban_y_2_2', false);
        }
        if ($jawaban->titik_potong_1==$request->titik_potong_1){
            $array->put('titik_potong_1', true);
            $benar = $benar + 1;
        }else{
            $array->put('titik_potong_1', false);
        }
        if ($jawaban->titik_potong_2==$request->titik_potong_2){
            $array->put('titik_potong_2', true);
            $benar = $benar + 1;
        }else{
            $array->put('titik_potong_2', false);
        }
        $koreksi= collect($array);
        $percobaan = $request->percobaan + 1;
        $rand = rand(1,10);
        if($benar == 10){
            return redirect()->route('spldv_3', $request->id)->withInput()->with('koreksi', $koreksi)->with('percobaan', $percobaan)->with('benar','Jawaban anda benar');
        }
        return redirect()->route('spldv_3', $request->id)->withInput()->with('koreksi', $koreksi)->with('percobaan', $percobaan)->with('rand', $rand);
    }
    public function pembahasan_mencoba_1(Request $request){
        // $url = url()->previous();
        // $url = str_replace(url('/'), '', url()->previous());

        // $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
        $jawaban = Mencoba_1::find($request->id);
        // if($id==1 && $route=='spldv_3'){
        //     return view('persamaan_linear_dua_variabel.page3_pembahasan.3_1pembahasan')->with('jawaban', $jawaban);
        // }
        // if($id==2 && $route=='spldv_3'){
        //     return view('persamaan_linear_dua_variabel.page3_pembahasan.3_2pembahasan')->with('jawaban', $jawaban);
        // }
        // if($id==3 && $route=='spldv_3'){
        //     return view('persamaan_linear_dua_variabel.page3_pembahasan.3_2pembahasan')->with('jawaban', $jawaban);
        // }
        try{
            if($request->id==1 && $request->percobaan>3){
                return view('persamaan_linear_dua_variabel.page3_pembahasan.3_1pembahasan')->with('jawaban', $jawaban);
            }
            if($request->id==2 && $request->percobaan>3){
                return view('persamaan_linear_dua_variabel.page3_pembahasan.3_1pembahasan')->with('jawaban', $jawaban);
            }
            if ($request->id==3 && $request->percobaan>3) {
                return view('persamaan_linear_dua_variabel.page3_pembahasan.3_1pembahasan')->with('jawaban', $jawaban);
            }
        }catch(Exception){
            return redirect()->route('spldv_3', 1);
        }

    }
}
