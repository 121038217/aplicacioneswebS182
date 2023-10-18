<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function  metodoInicio(){
        return view('welcome'); // estos metodos nos van a regresar una vista
    }

    public function  metodoFormulario(){
        return view('formulario');
    }

    public function  metodoRecuerdos(){
        return view('recuerdos');
    }
// El metodo guardar necesita una variable de tipo request
    public function  metodoGuardar(Request $req){
        echo"<p>";
            echo $req->path();
            echo " - ";
            echo $req->method();
            echo " - ";
            echo $req->ip();
            echo " - ";
            echo $req->url();
        echo"<p>";
    }

}
