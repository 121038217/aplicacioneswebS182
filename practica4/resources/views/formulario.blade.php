@extends('layouts.plantilla')

@section('titulo','Formulario')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5">Formulario</h1>

<div class="container mt-5 col-md-6"> <!-- mt-5 es: para poner espacio entre el titulo y la tarjeta/ col-md-6 es para poner mas chico el formulario -->
<div class="card"> 

    <div class="card-header text-primary fs-5 fw-semibold text-center">
      Introduce tus recuerdos aqui..
    </div>

    <div class="card-body">

        <form method="POST" action="/guardarRecuerdo"> <!-- Agregamos el metodo POST para guardar-->
          
          @csrf <!-- Generador de token-->

            <div class="mb-3">
              <label class="form-label">Titulo:</label>
              <input type="text" name="txtTitulo class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Recuerdo:</label>
              <input type="password" name="txtRecuerdo" class="form-control">
            </div>

    </div>

    <div class="card-footer text-body-secondary">
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-primary">Guardar Recuerdo</button>
        </div>
    </form> <!-- form para cerrar el formulario -->
    </div>

  </div> <!-- div de la tarjeta-->

</div> <!-- div del container -->

<!-- para comentar es: shif + Alt + ar -->
    
@endsection