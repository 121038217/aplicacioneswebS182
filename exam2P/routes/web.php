<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exam2PController;

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

Route::get('/',[exam2PController::class,'metodoPrincipal'])->name('Principal');

Route::post('GuardarFormulario',[Exam2PController::class,'metodoGuardarFormulario'])->name('GuardarFomulario');
