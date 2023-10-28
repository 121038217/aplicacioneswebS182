
    @extends('layouts.plantilla')
    @section('contenido')

    <h1 class="display-1 text-center text-primary mt-5 fw-bold">Biblioteca</h1>

    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="https://phantom-elmundo.unidadeditorial.es/5fb08c9e79980ad80b3f8c532d7f10e7/resize/473/f/webp/assets/multimedia/imagenes/2023/10/25/16982562162263.jpg" class="d-block w-100 img-thumbnail" alt="...">
          <div class="carousel-caption d-none d-md-block text-dark ">
            <h5>La gran exposición austriaca sobre el gigante Stefan Zweig llega a Madrid</h5>
            <p><a class="link-dark" href="https://www.elmundo.es/madrid/2023/10/26/65395629e9cf4a6e6d8b45a3.html">Link</a> </p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="https://estaticos.elcolombiano.com/binrepository/848x565/0c0/780d565/none/11101/BLAH/fotojet_43599453_20231026113707.jpg" class="d-block w-100 img-thumbnail" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Detalles de Le dedico mi silencio, la nueva novela de Mario Vargas Llosa</h5>
            <p><a class="link-info" href="https://www.elcolombiano.com/cultura/literatura/de-que-trata-le-dedico-mi-silencio-la-novela-de-mario-vargas-llosa-GL22835506">Link</a> </p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="https://imagenes.elpais.com/resizer/P6uwfGwhKEGltJ5zxQciJiaFBNA=/828x466/cloudfront-eu-central-1.images.arcpublishing.com/prisa/YA3TZASXBJF7TFGGLCSTYY6E7U.jpg" class="d-block w-100 img-thumbnail" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Passes per Palma, de Biel Mesquida: Les lleis de lhospitalitat</h5>
            <p><a class="link-danger" href="https://elpais.com/noticias/literatura/">Link</a> </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    @endsection