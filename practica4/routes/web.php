<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\controllerCRUDd;



// ruta controllerCRUD
Route::get('/recuerdo/create',[controllerCRUDd::class,'create'])->name('recuerdo.create');  
Route::post('/recuerdo',[controllerCRUDd::class,'store'])->name('recuerdo.store');
Route::get('/recuerdo',[controllerCRUDd::class,'index'])->name('recuerdo.index');

Route::get('/', [diarioController::class, 'metodoInicio'])->name('Inicio');


/* Route::controller(diarioController ::class)->group(function(){

    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/formularios', 'metodoFormularios')->name('apodoFormularios');
    Route::get('/recuerdos', 'metodoRecuerdos')->name('apodoRecuerdos');

}); */

/* Route::view('/', 'welcome');

Route::view('/formularios', 'formularios');

Route::view('/recuerdos', 'recuerdos'); */