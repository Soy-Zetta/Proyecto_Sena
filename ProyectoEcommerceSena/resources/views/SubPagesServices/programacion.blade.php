<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programacion de software y paginas web</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
</head>
<body>
  <main>
    <div class="container-servicios">
      <section class="carrusel-servicios">
      <section>
        <h1>Programacion de software y paginas web - Ram-Servis</h1>
          <p>En Ram-Servis, nos especializamos en programación de software, un proceso creativo y técnico que nos permite desarrollar programas informáticos a medida para satisfacer tus necesidades empresariales. Nuestro equipo de expertos en programación trabaja con dedicación y experiencia para transformar tus ideas en soluciones tecnológicas innovadoras.</p>
      </section>
        <div class="slick-carousel">
          <div>
            <img src="{{ asset('img/imgServices/programacionsoft/1.jpg') }}" alt="Antes y despues">
            <figcaption>Alta experiencia</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/programacionsoft/2.jpg') }}" alt="MacBook Pro como nuevo">
            <figcaption>Administracion de pagina web</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/programacionsoft/3.jpg') }}" alt="Como nos llegan los PCs">
            <figcaption>Ofrecemos paquetes completos</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/programacionsoft/4.jpg') }}" alt="Experiencia en todas las marcas">
            <figcaption>Soluciones efectivas</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/programacionsoft/5.jpg') }}" alt="Nunca ha recibido Mantenimiento">
            <figcaption>Desarrollo de apps</figcaption>
          </div>
        </div>
      </section>
      <section class="informacion">
        <ol>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/programacionsoft/8.jpg') }}" alt="Mantenimiento Preventivo">
                <figcaption>Desarrollo de software a medida</figcaption>
              </figure>
            </section>
            <p>Ofrecemos servicios de desarrollo de software a medida para empresas de todos los tamaños. Nuestro equipo de ingenieros de software altamente calificados trabaja en estrecha colaboración contigo para comprender tus requisitos y diseñar soluciones personalizadas que se ajusten perfectamente a tus necesidades comerciales. Ya sea que necesites un sistema de gestión empresarial, un sistema de seguimiento de inventario o cualquier otra solución a medida, estamos aquí para ayudarte.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/programacionsoft/6.jpg') }}" alt="Mantenimiento Correctivo">
                <figcaption>Desarrollo de aplicaciones móviles</figcaption>
              </figure>
            </section>
            <p>Brindamos soluciones personalizadas para el desarrollo de aplicaciones móviles en plataformas como iOS y Android. Nuestro equipo de expertos en programación crea aplicaciones intuitivas, rápidas y seguras que se adaptan a las necesidades específicas de tu empresa. Desde aplicaciones de comercio electrónico hasta herramientas de productividad, te ayudamos a llevar tu negocio al siguiente nivel en el mundo móvil.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/programacionsoft/7.webp') }}" alt="Mantenimiento Predictivo">
                <figcaption>Consultoría en desarrollo de software</figcaption>
              </figure>
            </section>
            <p>Nuestros consultores en desarrollo de software brindan asesoramiento experto para optimizar tus procesos de desarrollo y mejorar la eficiencia de tus proyectos. Analizamos tus prácticas actuales, identificamos áreas de mejora y te ofrecemos recomendaciones estratégicas para maximizar los resultados. Ya sea que necesites asesoramiento en metodologías ágiles, gestión de proyectos o arquitectura de software, nuestro equipo está listo para ayudarte a alcanzar tus objetivos.</p>
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
      <img class="boton" src="{{ asset('img/imgServices/servicios/iconWspp.png') }}" alt="">
  </a>
</div>



</body>
</html>
