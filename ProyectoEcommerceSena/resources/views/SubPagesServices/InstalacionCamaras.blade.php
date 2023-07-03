<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instalacion y reparacion de camaras</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
</head>
<body>
  <main>
    <div class="container-servicios">
      <section class="carrusel-servicios">
      <section>
        <h1>Instalacion y reparacion de camaras - Ram-Servis</h1>
          <p>En Ram-Servis, comprendemos la importancia de garantizar la seguridad y protección de tu hogar o negocio. Nuestro servicio de instalación y reparación de cámaras de seguridad ofrece soluciones integrales para ayudarte a monitorear y resguardar tus espacios. Nuestro equipo de expertos en seguridad implementa sistemas de cámaras de alta calidad y brinda servicios de mantenimiento y reparación para garantizar un funcionamiento óptimo.</p>
      </section>
        <div class="slick-carousel">
          <div>
            <img src="{{ asset('img/imgServices/repacamaras/1.webp') }}"
  alt="Antes y despues">
            <figcaption>Seguridad en todo momento</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/repacamaras/2.jpg') }}"
 alt="MacBook Pro como nuevo">
            <figcaption>Monitoreo en tiempo real</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/repacamaras/3.avif') }}"
  alt="Como nos llegan los PCs">
            <figcaption>Instalaciones profesionales</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/repacamaras/4.jpg') }}"
 alt="Experiencia en todas las marcas">
            <figcaption>Experiencia en todas las marcas</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/repacamaras/5.jpg') }}"
 alt="Nunca ha recibido Mantenimiento">
            <figcaption>Nunca ha recibido Mantenimiento</figcaption>
          </div>
        </div>
      </section>
      <section class="informacion">
        <ol>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/repacamaras/6.webp') }}"
  alt="Mantenimiento Preventivo">
                <figcaption>Diseño e instalación de sistemas de cámaras</figcaption>
              </figure>
            </section>
            <p>Nuestro servicio de diseño e instalación de sistemas de cámaras personalizados se adapta a tus necesidades específicas. Evaluamos tus espacios y requerimientos de seguridad para recomendar la mejor configuración de cámaras y ubicaciones estratégicas. Nuestros técnicos altamente capacitados se encargan de la instalación y configuración de las cámaras, asegurando una vigilancia efectiva y un sistema de seguridad confiable.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/repacamaras/7.webp') }}"
  alt="Mantenimiento Correctivo">
                <figcaption>Mantenimiento preventivo y actualización de cámaras</figcaption>
              </figure>
            </section>
            <p>Es fundamental mantener tus cámaras de seguridad en óptimas condiciones. Ofrecemos servicios de mantenimiento preventivo, donde realizamos inspecciones regulares, limpieza de cámaras y ajustes necesarios para garantizar su rendimiento. Además, podemos ayudarte con la actualización de tus cámaras existentes, reemplazando equipos antiguos por modelos más avanzados que ofrezcan características de seguridad mejoradas.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/repacamaras/8.jpg') }}"
 alt="Mantenimiento Predictivo">
                <figcaption>Reparación de cámaras de seguridad</figcaption>
              </figure>
            </section>
            <p> Si tus cámaras de seguridad presentan problemas, nuestro servicio de reparación es la solución. Nuestros técnicos especializados en cámaras de seguridad diagnosticarán y solucionarán cualquier fallo o avería que puedan tener tus cámaras. Ya sea un problema de conectividad, calidad de imagen o configuración, nos encargaremos de reparar tus cámaras para que vuelvan a funcionar correctamente y brinden la seguridad que necesitas.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
        </ol>
      </section>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.slick-carousel').slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    })
  </script>



<div class="container-boton">
  <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank">
      <img class="boton" src="{{ asset('../resources/img/imgServices/servicios/iconWspp.png') }}" alt="">
  </a>
</div>



</body>
</html>
