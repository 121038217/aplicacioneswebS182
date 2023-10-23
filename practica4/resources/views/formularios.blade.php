@extends('layouts.plantilla')

@section('titulo', 'Formularios')

@section('contenido')

<h1 class="display-1 text-center text-danger">Formulario</h1>

<div class="container">

    @if(session()->has('confirmacion'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('confirmacion')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif

    @if($errors->any())

        @foreach ($errors->all() as $error)
            
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endforeach
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="text-center mt-2">Formulario de recuerdos</h5>
        </div>
        <div class="card-body">
            <div class="container">
                <form method="POST" action="/guardarRecuerdo">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Titulo:</label>
                        <input type="text" name="txtTitulo" class="form-control">
                        {{$errors->first('txtTitulo')}}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdo:</label>
                        <input type="text" name="txtRecuerdo" class="form-control">
                        {{$errors->first('txtTitulo')}}
                    </div>
            </div>
        </div>
        <div class="card-footer text-body-secondary">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Guardar Recuerdo</button>
              </div>
        </form>
        </div>
    </div>
</div>


@endsection
