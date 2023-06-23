<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ensamble de equipos</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
<body>
  <main>
    <div class="container-servicios">
      <section class="carrusel-servicios">
      <section>
        <h1>Ensamble de equipos - Ram-Servis</h1>
          <p>En Ram-Servis, nos especializamos en el ensamble de equipos PCs personalizados para satisfacer las necesidades específicas de nuestros clientes. Nuestro servicio de ensamble de equipos PCs ofrece soluciones a medida, garantizando un rendimiento óptimo y confiabilidad. Nuestro equipo de expertos en hardware trabaja con pasión y precisión para ensamblar PCs de alta calidad que se ajusten a tus requisitos y presupuesto.</p>
      </section>
        <div class="slick-carousel">
          <div>
            <img src="{{ asset('img/imgServices/ensamble/1.jpg') }}" alt="Antes y despues">
            <figcaption>Los mejores componentes</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/ensamble/2.jpg') }}" alt="MacBook Pro como nuevo">
            <figcaption>Renovamos tu pc</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/ensamble/3.jpg') }}" alt="Como nos llegan los PCs">
            <figcaption>Actulizacion de procesador</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/ensamble/4.jpg') }}" alt="Experiencia en todas las marcas">
            <figcaption>Experiencia en todas las marcas</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/ensamble/5.webp') }}" alt="Nunca ha recibido Mantenimiento">
            <figcaption>Cambio de board</figcaption>
          </div>
        </div>
      </section>
      <section class="informacion">
        <ol>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/ensamble/6.jpg') }}" alt="Mantenimiento Preventivo">
                <figcaption>Diseño y ensamble de PCs a medida</figcaption>
              </figure>
            </section>
            <p>Nuestro servicio de diseño y ensamble de PCs a medida te brinda la oportunidad de obtener un equipo que se adapte perfectamente a tus necesidades. Trabajamos contigo para comprender tus requisitos y preferencias, y luego seleccionamos cuidadosamente los componentes de hardware adecuados para construir un PC potente y eficiente. Ya sea para juegos, diseño gráfico o tareas intensivas de procesamiento, podemos crear la configuración ideal para ti.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/ensamble/7.jpeg') }}" alt="Mantenimiento Correctivo">
                <figcaption>Actualización y mejora de PCs existentes</figcaption>
              </figure>
            </section>
            <p>Si ya tienes un PC pero deseas mejorar su rendimiento, nuestro servicio de actualización y mejora es ideal para ti. Realizamos una evaluación exhaustiva de tu PC actual y te asesoramos sobre las mejores opciones de actualización. Desde la instalación de un nuevo procesador o tarjeta gráfica hasta la ampliación de la memoria RAM o la actualización del almacenamiento, optimizamos tu PC existente para obtener un rendimiento mejorado y una experiencia más fluida.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/ensamble/8.jpg') }}"alt="Mantenimiento Predictivo">
                <figcaption>Servicio de mantenimiento y reparación de PCs</figcaption>
              </figure>
            </section>
            <p>Además del ensamble, ofrecemos servicios de mantenimiento y reparación para asegurarnos de que tu PC funcione sin problemas. Realizamos limpiezas regulares, verificaciones de hardware y solucionamos cualquier problema de funcionamiento que puedas enfrentar. Ya sea una falla en el sistema operativo, problemas de conectividad o un fallo del hardware, nuestros técnicos capacitados están listos para resolverlo.</p>
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
