<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reparacion equipos moviles</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
<body>
  <main>
    <div class="container-servicios">
      <section class="carrusel-servicios">
      <section>
        <h1>Reparacion equipos moviles - Ram-Servis</h1>
          <p>En Ram-Servis, entendemos lo importante que es tu dispositivo móvil para ti. Nuestro servicio de reparación de equipos móviles está diseñado para brindarte soluciones rápidas y confiables cuando enfrentas problemas con tu smartphone o tablet. Nuestro equipo de técnicos especializados en reparación de dispositivos móviles está capacitado para diagnosticar y solucionar una amplia gama de problemas, desde daños físicos hasta fallas de software, garantizando que tu dispositivo vuelva a funcionar correctamente en poco tiempo.</p>
      </section>
        <div class="slick-carousel">
          <div>
            <img src="{{ asset('img/imgServices/repamovil/1.webp') }}" alt="Antes y despues">
            <figcaption>Todas las marcas</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/repamovil/2.webp') }}" alt="MacBook Pro como nuevo">
            <figcaption>Tenemos todas las herramientas</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/repamovil/3.jpg') }}" alt="Como nos llegan los PCs">
            <figcaption>100% profesional</figcaption>
          </div>
          <div>
            <img  src="{{ asset('img/imgServices/repamovil/4.jpg') }}" alt="Experiencia en todas las marcas">
            <figcaption>Experiencia en todas las marcas</figcaption>
          </div>
          <div>
            <img  src="{{ asset('img/imgServices/repamovil/5.webp') }}" alt="Nunca ha recibido Mantenimiento">
            <figcaption>Repuestos originales</figcaption>
          </div>
        </div>
      </section>
      <section class="informacion">
        <ol>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/repamovil/6.jpg') }}" alt="Mantenimiento Preventivo">
                <figcaption>Reparación de pantallas</figcaption>
              </figure>
            </section>
            <p>Si has dejado caer tu dispositivo y la pantalla se ha dañado, nuestro servicio de reparación de pantallas es la solución perfecta. Nuestros técnicos expertos reemplazarán la pantalla rota con una nueva y original, asegurando una visualización nítida y sin defectos en tu dispositivo. Ya sea que necesites reparar una pantalla de smartphone o tablet, estamos listos para ayudarte.</p>
          </li>
          <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/repamovil/7.jpg') }}" alt="Mantenimiento Correctivo">
                <figcaption>Reparación de componentes internos</figcaption>
              </figure>
            </section>
            <p>Si experimentas problemas de rendimiento, como un dispositivo que se congela o se apaga inesperadamente, es posible que haya un problema con los componentes internos. Nuestros técnicos cuentan con el conocimiento y las herramientas necesarias para diagnosticar y solucionar problemas de hardware, desde baterías agotadas hasta conectores dañados. Realizamos reparaciones precisas y utilizamos componentes de calidad para garantizar un funcionamiento óptimo de tu dispositivo.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/repamovil/8.jpg') }}" alt="Mantenimiento Predictivo">
                <figcaption>Servicio de actualización de software</figcaption>
              </figure>
            </section>
            <p>Si tu dispositivo presenta problemas de funcionamiento debido a errores de software o falta de actualizaciones, nuestro servicio de actualización de software es la solución ideal. Nuestros técnicos pueden realizar actualizaciones de software y resolver problemas de compatibilidad, lo que mejorará el rendimiento de tu dispositivo y te brindará acceso a las últimas características y mejoras de seguridad.</p>
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
