<?php

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

Route::view('/', 'template.template');
Route::view('/login', 'template.login');
// Route::get('/', 'Home@halaman_awal')->name('halaman_awal');
Route::get('/Materi', 'Materi@materi')->name('materi');
