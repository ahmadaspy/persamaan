<?php

use App\Http\Controllers\AuthUser;
use App\Http\Controllers\Home;
use App\Http\Controllers\Materi;
use App\Http\Controllers\Guru;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'template.template');
// Route::view('/login', 'template.login');
// Route::view('/home', 'home');
Route::get('/', [Home::class, 'home'])->name('home');
Route::get('/about', [Home::class, 'about'])->name('about');
Route::group(['middleware' => ['auth', 'Checklevel:siswa']], function(){
    Route::get('/videopanduan', [Materi::class, 'videopanduan'])->name('videopanduan');
    Route::get('/deskripsipanduan', [Materi::class, 'deskripsipanduan'])->name('deskripsipanduan');
    Route::get('/kikd', [Materi::class, 'kikd'])->name('kikd');
    Route::get('/persamaanlinearduavariabel_page1', [Materi::class, 'spldv_1'])->name('spldv_1');
    Route::get('/persamaanlinearduavariabel_page2', [Materi::class, 'spldv_2'])->name('spldv_2');
    Route::get('/persamaanlinearduavariabel_page3/{id}', [Materi::class, 'spldv_3'])->name('spldv_3');
    Route::post('/persamaanlinearduavariabel_page3/post', [Materi::class, 'post_latihan'])->name('post_latihan');
    Route::post('/pembahasan', [Materi::class, 'pembahasan_mencoba_1'])->name('pembahasan_mencoba_1');
    Route::get('/koordinat_geogebra', function(){
        return view('persamaan_linear_dua_variabel.spldv_page3_koordinat_geogebra');
    })->name('koordinat_geogebra');
    route::get('/persamaanlinearduavariabel_subtitusi_page1', function(){
        return view('persamaan_linear_dua_variabel.Metode Subtitusi.teori_page_1');
    })->name('subtitusi_spldv_1');
    // route::get('/persamaanlinearduavariabel_subtitusi_page2/{id}', [Materi::class, 'spldv_subtitusi_2'])->name('subtitusi_spldv_1');
});
Route::group(['middleware' => ['auth', 'Checklevel:guru']],function(){
    Route::get('/nilai_siswa', [Guru::class, 'nilaisiswa'])->name('nilai_siswa');
});
Route::get('/register', [AuthUser::class, 'registerview'])->name('register');
Route::post('/postregister', [AuthUser::class, 'postregister'])->name('postregister');
Route::get('/login', [AuthUser::class, 'loginview'])->name('loginview');
Route::post('/loginpost', [AuthUser::class, 'loginpost'])->name('login');
Route::get('/logout', [AuthUser::class, 'logout'])->name('logout');
