<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoPrincipal(){ //Metodo para regresar a las vistas
        return view('welcome');

    }
    public function metodoRegistroLibro(){
        return view('RegistroLibro'); 
    }
    public function metodoGuardar(validadorFormDiario $req){
        
        //return $req->all(); <--Ver token -->
       /* $validated = $req->validate([
            'txtISBN' => 'required|min:13',
            'txtTitulo' => 'required|max:255',
            'txtAutor' => 'required|max:255',
            'txtPaginas' => 'required|max:10000',
            'txtEditorial' => 'required|max:255',
            'txtCorreroEditorial' => 'required|max:150',
        ]);
        */

        Alert::success('Registro','Tu registro ha sido exitoso')->persistent(true);

        return redirect('/RegistroLibro')->with('confirmacion','El libro se guardo en el controlador');
    }

}
