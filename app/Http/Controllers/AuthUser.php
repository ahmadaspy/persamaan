<?php

namespace App\Http\Controllers;

use App\Models\NilaiSiswa;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthUser extends Controller
{
    public function registerview(){
        if(Auth::user()){
            if(Auth::user()->level == 'siswa'){
                return redirect()->route('videopanduan');
            }
            if(Auth::user()->level == 'guru'){
                return redirect()->route('nilai_siswa');
            }
        }
        return view('register');
    }
    public function postregister(Request $request){
        $code = $request->code_referral;
        $nama_guru = User::where('code_referral', $code)->where('level','guru')->value('name');
        if($nama_guru!=null){
            try{
                $user = new User;
                $user->level = 'siswa';
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = $request->password;
                $user->remember_token = Str::random(40);
                $user->nama_guru = $nama_guru;
                $user->save();
                NilaiSiswa::insert(['siswa_id'=>$user->id]);
                Auth::login($user);
                return redirect()->route('videopanduan');
            }
            catch(Exception){
                // dd($e->getMessage());
                return redirect()->route('register')->withInput()->with('gagal', 'Email sudah ada terdaftar');
            }
        }else{
            return redirect()->route('register')->withInput()->with('gagal', 'Kode Referral tidak ditemukan');
        }
    }
    public function loginview(){
        if(Auth::user() == null){
            return view('login');
        }
        if(Auth::user()->level == 'siswa'){
            return redirect()->route('videopanduan');
        }
        if(Auth::user()->level == 'guru'){
            return redirect()->route('nilai_siswa');
        }
    }
    public function loginpost(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            if(Auth::user()->level == 'guru'){
                return redirect()->route('nilai_siswa');
            }
            return redirect()->route('videopanduan');
        }
        return redirect()->route('loginview')->with('gagal', 'Anda tidak terdaftar')->withInput();
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
