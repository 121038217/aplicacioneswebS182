@extends('layouts.plantilla')

@section('titulo', 'Recuerdos')

@section('contenido')

<h1 class="display-1 text-center text-danger">Recuerdos</h1>

<div class="container col-md-6">

@foreach ($consulRecuerdos as $recuerdo)

<div class="card w-75 mb-3 mt-5">
    <div class="card-body">
      <h5 class="card-title fw-semibold">{{ $recuerdo->titulo}} </h5>
      <p class="card-text fst-italic">{{ $recuerdo->fecha}}  </p>
      <p class="card-text fw-lighter">{{ $recuerdo->recuerdo}}  </p>
      <a href="#" class="btn btn-warning">Editar</a>
      <a href="#" class="btn btn-danger">Borrar</a>
    </div>
  </div> <!-- class -->
  
@endforeach

</div><!-- container -->

@endsection