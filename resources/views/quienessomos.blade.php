@extends('layout.quienes_somos')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Bootstrap" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ARRIENDO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">APARTAMENTO</a></li>
            <li><a class="dropdown-item" href="#">CASA</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            VENTA
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">APARTAMENTO</a></li>
            <li><a class="dropdown-item" href="#">CASA</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">BUSCAR</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/contactenos.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/covid_info.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/portada.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/portada_2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col">
      MISION
    </div>
    <div class="contenido">
    En nuestra inmobiliaria, nos comprometemos a ofrecer servicios de excelencia a nuestros clientes, 
    brindando asesoramiento profesional, transparencia y dedicación en cada transacción inmobiliaria. Buscamos superar las expectativas, 
    facilitando la adquisición, venta o alquiler de propiedades, con un enfoque centrado en las necesidades individuales de cada cliente 
    y contribuyendo así al logro de sus sueños y metas inmobiliarias.
    </div>
    <div class="col">
      VISION
    </div>
    <div class="contenido">
    Nos visualizamos como la inmobiliaria líder en nuestro mercado, reconocida por nuestra integridad, ética profesional y compromiso con la satisfacción del cliente.
     Buscamos innovar constantemente, utilizando tecnologías emergentes y estrategias vanguardistas para mejorar la experiencia inmobiliaria. Aspiramos a ser referentes en la industria, 
     manteniendo altos estándares de calidad y siendo un punto de apoyo confiable para aquellos que buscan realizar transacciones inmobiliarias exitosas y satisfactorias.
    </div>
  </div>
</div>
<footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
  <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
          <span class="fs-5">INMOBILIARIA ROJAS VALBUENA</span>
        </a>
      
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>ENCUENTRA</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="/">ARRIENDO</a></li>
          <li class="mb-2"><a href="/docs/5.3/">VENTA</a></li>
          <li class="mb-2"><a href="https://icons.getbootstrap.com/">QUIENES SOMOS</a></li>
         </ul>
      </div>

      <div class="col-6 col-lg-2 mb-3">
        <h5>CONTACTO</h5>
        <ul class="list-unstyled small">
          <li class="mb-2">CARRERA 22 N° 33 - 56 </li>
          <li class="mb-2">BARRIO CENTRO </li>
          <li class="mb-2">3167499204 - 3164390921</li>
          <li class="mb-2">6458850</li>
          <li class="mb-2">jackelinerojasvalbuena@gmail.com</li>
        </ul>
      </div>
      
</footer>

@endsection