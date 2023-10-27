@extends('layouts.plantilla')

@section('titulo', 'RegistroLibro')

@section('contenido')

<h1 class="display-1 text-center text-primary fw-bold mt-5">Registro de Libros</h1>

<div div class="container mt-5">
    <div class="card text-center">

        <div class="card-header">
          Registra el Libro
        </div>
    
        <div class="card-body">
            <form>
                <div class="mb-3">
                  <label class="form-label">ISBN:</label>
                  <input type="text" nane="txtISBN" class="form-control">
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Título:</label>
                    <input type="text" name="txtTitulo" class="form-control">
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Autor:</label>
                    <input type="text" name="txtAutor" class="form-control">
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Número de Páginas:</label>
                    <input type="number" name="txtPaginas" class="form-control">
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Editorial:</label>
                    <input type="text" name="txtEditorial" class="form-control">
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Correo de la Editorial:</label>
                    <input type="email" name="txtCorreoEditorial" class="form-control">
                  </div>
          
                <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
        </div>

        <div class="card-footer text-body-secondary mt-5" >
          BibliotecaUPQ© 28 de octubre del 2023
        </div>   <!-- Div del Pie de Pagina-->
    </div> <!-- Div ¿card-->
</div> <!-- Div del cutainer -->


@include('partials.pagination')

@endsection