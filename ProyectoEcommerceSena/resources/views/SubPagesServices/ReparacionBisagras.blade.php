<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reparacion de bisagras de Laptops</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
</head>
<body>
  <main>
    <div class="container-servicios">
      <section class="carrusel-servicios">
      <section>
        <h1>Reparacion de bisagras de Laptops - Ram-Servis</h1>
          <p>En Ram-Servis, entendemos que las bisagras de portátiles son componentes cruciales para su funcionamiento y durabilidad. Nuestro servicio de reparación de bisagras de portátiles se enfoca en solucionar problemas relacionados con bisagras dañadas, sueltas o quebradas. Nuestro equipo de técnicos especializados en reparación de portátiles trabaja diligentemente para brindarte soluciones rápidas y eficientes, asegurando que tu portátil vuelva a funcionar correctamente.</p>
      </section>
        <div class="slick-carousel">
          <div>
            <img src="{{ asset('img/imgServices/biasgras/1.jpg') }}" alt="Antes y despues">
            <figcaption>Antes y después</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/biasgras/2.webp') }}" alt="MacBook Pro como nuevo">
            <figcaption>Gamers</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/biasgras/3.jpg') }}" alt="Como nos llegan los PCs">
            <figcaption>Como nos llegan los PCs</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/biasgras/4.webp') }}" alt="Experiencia en todas las marcas">
            <figcaption>Experiencia en todas las marcas</figcaption>
          </div>
          <div>
            <img src="{{ asset('img/imgServices/biasgras/5.webp') }}" alt="Nunca ha recibido Mantenimiento">
            <figcaption>Nunca ha recibido Mantenimiento</figcaption>
          </div>
        </div>
      </section>
      <section class="informacion">
        <ol>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/biasgras/6.jpg') }}" alt="Mantenimiento Preventivo">
                <figcaption>Reemplazo de bisagras</figcaption>
              </figure>
            </section>
            <p>Nuestro servicio de reemplazo de bisagras está diseñado para corregir problemas graves de bisagras dañadas o quebradas. Nuestros técnicos expertos desmontarán cuidadosamente tu portátil, retirarán las bisagras defectuosas y las reemplazarán con bisagras nuevas y de alta calidad. Realizamos esta reparación con precisión para garantizar que las nuevas bisagras brinden estabilidad y funcionalidad a largo plazo.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/biasgras/7.jpg') }}" alt="Mantenimiento Correctivo">
                <figcaption>Ajuste y apriete de bisagras</figcaption>
              </figure>
            </section>
            <p>Si notas que las bisagras de tu portátil están sueltas o desalineadas, nuestro servicio de ajuste y apriete de bisagras puede solucionar ese problema. Nuestros técnicos ajustarán y asegurarán las bisagras de tu portátil para restaurar su estabilidad y asegurar un movimiento suave de la pantalla. Este servicio es ideal para prevenir problemas más graves y extender la vida útil de tu portátil.</p>
            <a href="https://wa.me/3117087472?text=Quiero%20contratar%20un%20servicio%20%20" target="_blank"><button class="contratar">Contratar</button></a>
          </li>
          <li>
            <section>
              <figure>
                <img src="{{ asset('img/imgServices/biasgras/8.webp') }}" alt="Mantenimiento Predictivo">
                <figcaption>Lubricación y mantenimiento de bisagras</figcaption>
              </figure>
            </section>
            <p>Con el tiempo, las bisagras de los portátiles pueden volverse rígidas o difíciles de mover. Nuestro servicio de lubricación y mantenimiento de bisagras aborda este problema. Aplicamos lubricantes especializados para asegurar que las bisagras se deslicen suavemente, reducir el desgaste y prevenir futuros problemas. También realizamos una limpieza minuciosa para eliminar el polvo y la suciedad acumulada que pueda afectar el funcionamiento de las bisagras.</p>
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
