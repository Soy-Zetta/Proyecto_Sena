<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('css/sobre-nosotros.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="descrip.transition" content="En esta pagina encontraras informacion detallada de nuestra empresa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <title>Nosotros</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre-nosotros.css') }}">

</head>
<body>

    @include('header')

    <div class="contenedor">
       <div>
            <h1 class="titulo">Sobre Nosotros</h1>
        </div>

        <div class="empresa">
            <div>
                <h2 ><span> EMPRESA</span></h2>
            </div>

            <div class="imgempresa">
            </div>

            <div class="textempresa">
                <p>Somos <span>SERVI TECH</span>  una tienda virtual colombiana, fundada por jóvenes estudiantes que quieren hacer de tu vida más fácil, nos enfocamos en la venta, importación y distribución de componentes de cómputo para tú empresa.</p>
            </div>
        </div>
        <div class="mision"><div> <h2 ><span> MISION</span></h2></div><div class="imgmision"></div><div class="textmision">En <span>SERVI TECH</span> queremos ser la empresa por excelencia en todo lo relacionado en los Servicios de cómputo, llegar a los usuarios con ideas e innovación para la solución de sus problemas.</div></div>
        <div class="vision"> <div> <h2 > <span> VISION</span></h2></div><div class="imgvision"></div><div class="textvision">En <span>SERVI TECH</span> queremos ser para el año 2030 la tienda virtual N° 1 por excelencia en el ámbito de asesoría, venta y un servicio que cumpla con las expectativas de sus clientes.</div></div>
        <div class="tequipo"style="centrado"><h1>NUESTRO EQUIPO</h1></div>
        <div class="equipo"></div>
    </div>
    <div class="contacto-container">
                        <h2><strong>Contáctanos</strong></h2>
                        <form action="procesar_formulario.php" method="POST">
                          <label for="nombre" >Nombre:</label>
                          <input type="text" id="nombre" name="nombre" required>
                      
                          <label for="correo">Correo electrónico:</label>
                          <input type="email" id="correo" name="correo" required>
                      
                          <label for="telefono">Teléfono:</label>
                          <input type="tel" id="telefono" name="telefono" required>
                      
                          <label for="mensaje">Mensaje:</label>
                          <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                          <br>
                          </br>
                          <input type="submit" value="Enviar">
                        </form>
                        <div class="datos-contacto">
                          <h2><strong>Detalles de contacto:</strong></h2>
                          <h4><strong>Dirección:</strong> Calle 52 N° 9-55 <br>Cali, Colombia</br>
                          <h2><strong>Whatsapp:</strong></h2>
                          <div class="whatsapp">
                          <p class="tel">312 000 0000</p>
                          </div>
                        </div>
    </div>
</body>
</html>
