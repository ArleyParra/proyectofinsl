@extends('layout.main')

@section('formulario')
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Interés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $celular = $_POST["celular"];
    $interes = $_POST["interes"];

    // Aquí puedes realizar acciones con los datos, como almacenarlos en una base de datos o enviar un correo electrónico

    // Por ahora, solo mostramos un mensaje de confirmación
    echo "<p style='text-align: center;'>Gracias, $nombre, nos pondremos en contacto contigo pronto. Tu número de celular es: $celular. Estás interesado en: $interes.</p>";
}
?>

<div>
    <h2>Formulario de Interés</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="celular">Número de Celular:</label>
        <input type="text" name="celular" pattern="[0-9]+" required>

        <label for="interes">Interesado en:</label>
        <textarea name="interes" rows="4" required></textarea>

        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>

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