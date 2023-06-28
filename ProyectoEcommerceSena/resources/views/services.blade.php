@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICIOS</title>
     <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
 </head>
 <body>



<div class="container_all">

  <div class="cover">
        <div class="container_cover">
            <div class="container_info">
                <h1>CATALOGO</h1>
                <h2>DE SERVICIOS</h2>
                <p>En ram-servis contamos con un gran portafolio de servicios</p>
            </div>

            <div class="container_vector">
                <img src="{{ asset('img/imgServices/servicios/logo-ram.png') }}" >
            </div>
        </div>
    </div>

</div>

<div class="container">

    <div class="card">
        <img src="{{ asset('img/imgServices/servicios/mantenimiento.jpg') }}">
        <div class="contenido">
            <h3>Mantenimiento General</h3>
            <a href="./servicios/mantenimiento-general">
                <button class="contratar">Contratar </button>
            </a>
        </div>
    </div>

    <div class="card">
            <img src="{{ asset('img/imgServices/servicios/programacion.jpg') }}">
        <div class="contenido">
            <h3>Programacion en Software y Paginas Web</h3>
            <a href="./servicios/programacion">
            <button class="contratar">Contratar </button>
            </a>
        </div>
    </div>

    <div class="card">
            <img src="{{ asset('img/imgServices/servicios/equiposMoviles.jpg') }}">
        <div class="contenido">
            <h3>Reparacion en Equipos Moviles</h3>
            <a href="./servicios/reparacionMovil">
            <button class="contratar">Contratar </button>
            </a>
        </div>
    </div>

    <div class="card">
            <img src="{{ asset('img/imgServices/servicios/camaras.jpg') }}">
        <div class="contenido">
            <h3>Intalacias y Reparacion de Camaras </h3>
            <a href="./servicios/InstalacionCamaras">
                <button class="contratar">Contratar </button>
            </a>
        </div>
    </div>

    <div class="card">
            <img src="{{ asset('img/imgServices/servicios/ensam.jpg') }}">
        <div class="contenido">
            <h3>Ensambles de Equipos</h3>
            <a href="./servicios/EnsambleEquipos">
                <button class="contratar">Contratar </button>
            </a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('img/imgServices/servicios/reparacionBisagras.jpg') }}">
        <div class="contenido">
            <h3>Reparacion de Bisagras, Componentes</h3>
            <a href="./servicios/ReparacionBisagras">
                <button class="contratar">Contratar </button>
            </a>
        </div>
    </div>
</div>

<div class="container-boton">
  <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank">
      <img class="boton" src="{{ asset('img/imgServices/servicios/iconWspp.png') }}" alt="">
  </a>
</div>

</body>
</html>

@include('footer')
