<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

//Ruta Individuales para Controlador
Route::get('/',[diarioController::class,'metodoInicio'] )->name('apodoInicio'); 
Route::get('/formulario',[diarioController::class,'metodoFormulario'] )->name('apodoFormulario'); 
Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'] )->name('apodoRecuerdos'); 
//Agregamos una cuarta ruta que sea POST 
Route::post('/guardarRecuerdo',[diarioController::class,'metodoGuardar'] )->name('guardar'); 

/*
//Rutas Agrupadas tipo Controlador
Route::controller(diarioController::class)->group(function (){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('formularios','metodoFormulario')->name('apodoFormulario');
    Route::get('recuerdos','metodoRecuerdos')->name('apodoRecuerdos');
});

/*
Route::view('/','welcome')->name('rutaInicio');
Route::view('formulario','formulario')->name('rutaFormulario');
Route::view('recuerdos','recuerdos')->name('rutaRecuerdos');

*/
