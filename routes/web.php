<?php

use App\Http\Controllers\AuthUser;
use App\Http\Controllers\Home;
use App\Http\Controllers\Materi;
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
Route::get('/videopanduan', [Materi::class, 'videopanduan'])->name('videopanduan');
Route::get('/deskripsipanduan', [Materi::class, 'deskripsipanduan'])->name('deskripsipanduan');
Route::get('/kikd', [Materi::class, 'kikd'])->name('kikd');
Route::get('/register', [AuthUser::class, 'registerview'])->name('register');
Route::post('/postregister', [AuthUser::class, 'postregister'])->name('postregister');
Route::get('/login', [AuthUser::class, 'loginview'])->name('loginview');
Route::post('/loginpost', [AuthUser::class, 'loginpost'])->name('login');
Route::get('/logout', [AuthUser::class, 'logout'])->name('logout');
