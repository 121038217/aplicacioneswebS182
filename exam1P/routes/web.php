<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/','welcome')->name('rutainicio');

Route::view('/vista1','vista1')->name('rutavista1');

Route::view('/vista2','vista2')->name('rutavista2');

Route::view('/vista3','vista3')->name('rutavista3');



//Route::get('/vista3', function () {
  // return view('vista3')->name('rutavista3');
//});