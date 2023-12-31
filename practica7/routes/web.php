<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController; 
use App\Http\Controllers\controllerCRUDd;

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
 // Agregamos el metodo a nuestras vistas
Route::get('/',[diarioController::class,'metodoPrincipal'])->name('Principal');
Route::get('RegistroLibro',[diarioController::class,'metodoRegistroLibro'])->name('RegistroLibro');
//Agregamos el metodo guardar
Route::post('GuardarRegistroLibro',[diarioController::class,'metodoGuardar'])->name('GuardarRegistroLibro');
//Rutas ControllerCRUDd
Route::get('recuerdo/create',[controllerCRUDd::class,'create'])->name('recuerdo.create');
Route::post('recuerdo',[controllerCRUDd::class,'store'])->name('recuerdo.create');
