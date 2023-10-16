<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

//Ruta Individuales para Controlador
/*
Route::get('/',[diarioController::class,'metodoInicio'] )->name('apodoInicio'); 
//Agregamos el metodo de la primera vista
Route::get('formulario',[diarioController::class,'metodoFormulario'] )->name('apodoFormulario'); 

Route::get('recuerdos',[diarioController::class,'metodoRecuerdos'] )->name('apodoRecuerdos'); 
*/

//Rutas Agrupadas tipo Controlador
Route::controller(diarioController::class)->group(function (){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('formulario','metodoFormulario')->name('apodoFormulario');
    Route::get('recuerdos','metodoRecuerdos')->name('apodoRecuerdos');
});



/*
Route::view('/','welcome')->name('rutaInicio');
Route::view('formulario','formulario')->name('rutaFormulario');
Route::view('recuerdos','recuerdos')->name('rutaRecuerdos');

*/
