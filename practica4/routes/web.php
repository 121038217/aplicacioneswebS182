<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

Route::get('/',[diarioController::clase,'metodoInicio'] )->name('apodoInicio'); 
//Agregamos el metodo de la primera vista
Route::get('Formulario',[diarioController::clase,'metodoFormulario'] )->name('apodoFormulario'); 

Route::get('Recuerdos',[diarioController::clase,'metodoRecuerdos'] )->name('apodoRecuerdos'); 


//Route::get('/', function () {
  //  return view('welcome');
//});
