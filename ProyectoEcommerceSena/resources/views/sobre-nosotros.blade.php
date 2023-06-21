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

</head>
<body>

    @include('header')

    <div class="contenedor">
       <div>
            <h1 class="titulo">Sobre Nosotros</h1>
        </div>

        <div class="whatsapp">
            <p class="tel">Contactanos 312-0000000 / 315-1111111.</p>
        </div>

        <div class="empresa">
            <div>
                <h2 ><span> EMPRESA</span></h2>
            </div>

            <div class="imgempresa">
            </div>

            <div class="textempresa">
                <p>Somos <span>RAM SERVIS</span>  una tienda virtual colombiana, fundada por jóvenes estudiantes que quieren hacer de tu vida más fácil, nos enfocamos en la venta, importación y distribución de componentes de cómputo para tú empresa.</p>
            </div>
        </div>
        <div class="mision"><div> <h2 ><span> MISION</span></h2></div><div class="imgmision"></div><div class="textmision">En <span>RAM SERVIS</span> queremos ser la empresa por excelencia en todo lo relacionado en los Servicios de cómputo, llegar a los usuarios con ideas e innovación para la solución de sus problemas.</div></div>
        <div class="vision"> <div> <h2 > <span> VISION</span></h2></div><div class="imgvision"></div><div class="textvision">En <span>RAM SERVIS</span> queremos ser para el año 2030 la tienda virtual #1l por excelencia en el ámbito de asesoría, venta y un servicio que cumpla con las expectativas de sus clientes.</div></div>
        <div class="tequipo"><h1>NUESTRO EQUIPO</h1></div>
        <div class="equipo"></div>
    </div>
</body>
</html>
