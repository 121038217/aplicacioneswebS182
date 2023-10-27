@extends('layouts.plantilla')

@section('titulo', 'RegistroLibro')

@section('contenido')

<h1 class="display-1 text-center text-primary fw-bold mt-5">Registro de Libros</h1>

<div div class="container mt-5">
  
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

    <div class="card text-center">

        <div class="card-header">
          Registra el Libro
        </div>

        <div class="card-body">
            <form method="POST" action="/GuardarRegistroLibro"> <!-- Agregamos el metodo POST para guardar el formulario-->
              
              @csrf <!-- Generador de Token -->
              
              <div class="mb-3">
                  <label class="form-label">ISBN:</label>
                  <input type="number" nane="ISBN" class="form-control" value="{{old('ISBN')}}">
                  {{$errors->first('ISBN')}}
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Título:</label>
                    <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
                    {{$errors->first('txtTitulo')}}
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Autor:</label>
                    <input type="text" name="txtAutor" class="form-control" value="{{old('txtAutor')}}">
                    {{$errors->first('txtAutor')}}
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Número de Páginas:</label>
                    <input type="number" name="txtPaginas" class="form-control" value="{{old('txtPaginas')}}">
                    {{$errors->first('txtPaginas')}}
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Editorial:</label>
                    <input type="text" name="txtEditorial" class="form-control" value="{{old('txtEditorial')}}">
                    {{$errors->first('txtEditorial')}}
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Correo de la Editorial:</label>
                    <input type="email" name="txtCorreoEditorial" class="form-control" value="{{old('txtCorreoEditorial')}}">
                    {{$errors->first('txtCorreroEditorial')}}
                  </div>
          
              <div classs="card-footer text-body-secondary">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
            </div>

        </div>
    </div> <!-- Div ¿card-->
</div> <!-- Div del cutainer -->
@include('partials.pagination')

@endsection