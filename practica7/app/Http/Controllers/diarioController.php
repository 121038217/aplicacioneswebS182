<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoPrincipal(){ //Metodo para regresar a las vistas
        return view('welcome');

    }
    public function metodoRegistroLibro(){
        return view('RegistroLibro'); 
    }


}
