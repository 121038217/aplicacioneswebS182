<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

    <title>Formulario</title>
</head>
<body>

    @if(session()->has('Registro'))
    <script>
      Swal.fire({
        'Exitoso',
        'Registro exitoso',
        'success'
      });
    </script>
    @endif

    @if ($errors->any())
    <div class="alert alert-primary">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form method="POST" action="/GuardarFormulario" >
        @csrf

        <div mt-5>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="txtNombre" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('txtNombre') }}">
          </div>
      
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fecha Publicación</label>
          <input type="date" class="form-control" name="txtDate" id="exampleInputPassword1" value="{{ old('txtDate') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No. Comics publicados</label>
            <input type="number" class="form-control" name="txtNumber" id="exampleInputPassword1" value="{{ old('txtNumber') }}">

        </div>

        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        <div class="alert alert-primary" role="alert">
        <a href="/" class="alert-link">Se han guadado los datos</a>
        </div>

    </form>

</body>
</html>