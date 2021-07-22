<?php

namespace App\Http\Controllers;

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
            return redirect()->route('videopanduan');
        }
        return view('register');
    }
    public function postregister(Request $request){
        $code = $request->code_referral;
        $code_ref = User::where('code_referral', $code)->value('code_referral');
        dd($code_ref);
        try{
            $user = new User;
            $user->level = 'siswa';
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->remember_token = Str::random(40);
            $code = $request->code_referral;
            if($request->code_referral==DB::table('users')->where('code_refferal', $code)){
                return redirect()->route('register')->with('gagal', 'Code referral tidak ditemukan');
            }
            $user->save();
            Auth::login($user);
            return redirect()->route('videopanduan');
        }
        catch(Exception $e){
            // dd($e->getMessage());
            return redirect()->route('register')->with('gagal', 'Email sudah ada terdaftar');
        }

    }
    public function loginview(){
        if(Auth::user()){
            return redirect()->route('videopanduan');
        }
        return view('login');
    }
    public function loginpost(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('videopanduan');
        }
        return redirect()->route('loginview')->with('gagal', 'Anda tidak terdaftar');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
