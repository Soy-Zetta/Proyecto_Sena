<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mantenimiento General</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
</head>
<body>
  <main>
    <div class="container-servicios">
      <section class="carrusel-servicios">
      <section>
        <h1>Mantenimiento General - Ram-Servis</h1>
          <p>En nuestro servicio de Mantenimiento General de PCs, nos encargamos de realizar todas las actividades necesarias para garantizar el correcto funcionamiento de tu equipo de cómputo. Desde la limpieza física hasta la optimización del sistema operativo, nos aseguramos de mejorar su rendimiento y prolongar su vida útil. Confía en nuestros expertos para mantener tu PC en excelentes condiciones.</p>
      </section>
        <div class="slick-carousel">
          <div>
            <img src="{{ asset('img/imgServices/mangeneral/mangeneral1.jpg') }}" alt="Antes y despues">
            <figcaption>Antes y después</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/mangeneral/mangeneral2.jpg') }}" alt="MacBook Pro como nuevo">
            <figcaption>MacBook Pro como nuevo</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/mangeneral/mangeneral3.jpg') }}" alt="Como nos llegan los PCs">
            <figcaption>Como nos llegan los PCs</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/mangeneral/mangeneral4.jpg') }}" alt="Experiencia en todas las marcas">
            <figcaption>Experiencia en todas las marcas</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/mangeneral/mangeneral5.jpg') }}" alt="Nunca ha recibido Mantenimiento">
            <figcaption>Nunca ha recibido Mantenimiento</figcaption>
          </div>
        </div>
      </section>
      <section class="informacion">
        <ol>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/mangeneral/mangeneralcorrec.jpg') }}" alt="Mantenimiento Preventivo">
                <figcaption>Mantenimiento Preventivo</figcaption>
              </figure>
            </section>
            <p>Nuestro servicio de Mantenimiento Preventivo está diseñado para prevenir problemas en tu PC antes de que ocurran. Realizamos limpieza exhaustiva del equipo, verificamos cables y conexiones, actualizamos software y controladores, y hacemos copias de seguridad para garantizar su estabilidad y rendimiento. Confía en nosotros para mantener tu PC funcionando de manera óptima.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/mangeneral/mangeneralpredic.jpg') }}" alt="Mantenimiento Correctivo">
                <figcaption>Mantenimiento Correctivo</figcaption>
              </figure>
            </section>
            <p>Si tu PC presenta algún problema o fallo, nuestro servicio de Mantenimiento Correctivo está aquí para ayudarte. Nuestros expertos identificarán rápidamente la causa del problema y tomarán las medidas necesarias para solucionarlo. Ya sea reparando o reemplazando componentes dañados, nos aseguraremos de que tu PC vuelva a funcionar correctamente en poco tiempo.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/mangeneral/mangeneralpreven.jpg') }}" alt="Mantenimiento Predictivo">
                <figcaption>Mantenimiento Predictivo</figcaption>
              </figure>
            </section>
            <p>En nuestro servicio de Mantenimiento Predictivo, utilizamos herramientas y técnicas avanzadas para monitorear y evaluar el estado de tu PC. De esta manera, podemos detectar posibles problemas antes de que se conviertan en fallas importantes. Con nuestro enfoque proactivo, te ayudaremos a evitar interrupciones y a mantener tu PC en óptimas condiciones.</p>
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
