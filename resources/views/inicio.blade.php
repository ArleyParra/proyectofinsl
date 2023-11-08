@extends('layout.main')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Bootstrap" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <a class="nav-link active" aria-current="page" href="#">INICIO</a>
    </div>
    <div class="col">
    <a class="nav-link dropdown-toggle" href="{{route("arriendo")}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ARRIENDO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">APARTAMENTO</a></li>
            <li><a class="dropdown-item" href="#">CASA</a></li>
          </ul>
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
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
          <a class="nav-link dropdown-toggle" href="{{route("venta")}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  
  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="Usuario">
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
</div>
  <select class="form-select" aria-label="Default select example">
  <option selected>FILTRO</option>
  <option value="1">Arriendo</option>
  <option value="2">Venta</option>
</select>
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

<h1 class="text-center m-5"> Arriendo Destacados </h1>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/apto_alarcon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartaestudio</h5>
                    <p class="card-text">1 Habitacion</p>
                    <p class="card-text">1 baño</p>
                    <a href="{{("detalle")}}" class="btn btn-primary">INFORMACION</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/apto_estudio_png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartamento</h5>
                    <p class="card-text">2 habitaciones</p>
                    <p class="card-text">1 Baño</p>
                    <p class="card-text">1 parqueadero</p>
                    <a href="#" class="btn btn-primary">INFORMACION</a>
                </div>
            </div>
        </div>
       
        <h1 class="text-center m-5"> Ventas Destacadas </h1>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/apto_alarcon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CASA</h5>
                    <p class="card-text">4 Habitacion</p>
                    <p class="card-text">3 baño</p>
                    <a href="#" class="btn btn-primary">INFORMACION</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/apto_estudio_png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartamento</h5>
                    <p class="card-text">3 habitaciones</p>
                    <p class="card-text">2 Baño</p>
                    <p class="card-text">1 parqueadero</p>
                    <a href="#" class="btn btn-primary">INFORMACION</a>
                </div>
            </div>
        </div>

        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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