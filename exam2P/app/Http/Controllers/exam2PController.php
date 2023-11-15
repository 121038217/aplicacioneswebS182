<?php


namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\validadorFormExam2P;
use Illuminate\Http\Request;

class exam2PController extends Controller
{
    public function metodoPrincipal(){ //Metodo para regresar a las vistas
        return view('welcome');
    }
    
    public function metodoGuardarFormulario(validadorFormExam2P $req){

        Alert::success('Registro','Tu registro ha sido exitoso')->persistent(true);

        return redirect('/')->with('confirmacion','Se han gudado los datos');
    }
}
