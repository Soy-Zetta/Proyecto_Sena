<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
</head>
<body>
    @include('header')

    <div class="main">
        <div class="container-title">
            <h1 class="container-title__h1">CENTRO DE AYUDA Y SOLUCIONES</h1>
        </div>

        <div class="container-search">
            <input class="container-search__input" type="text" placeholder="Buscar en ayuda y soporte">
        </div>

        <nav class="nav-help">
            <ul class="nav__ul-help">
                <li class="nav__li-help">Soporte General
                     <ul class="nav__li__subnavbar-ul">
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> ¿Porque Crear una cuenta en ServiTech?</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> ¿Como actualizo y/o modifico mis datos?</li>
                {{--    <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> ¿Como creo mi cuenta en ServiTech?</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> ¿Como recupero mi contraseña?</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> ¿como elimino mi cuenta?</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> ¿Que son los cupones?</li>    --}}
                    </ul>
                </li>

                <li class="nav__li-help">Soporte Con ventas y compras
                     <ul class="nav__li__subnavbar-ul">
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> Guia De Compra</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> Protecciones al Comprar</li>
                    {{--    <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> Devoluciones</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> Metodos de pago</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> Envio y entrega</li>
                        <li class="nav__li__subnavbar-li"><i class="fas fa-plus"></i> Facturacion</li> --}}
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container-info">
        <div class="info">
            <h4>Guia de compra</h4>
            <p>
                ¡Bienvenido a nuestra página de ventas de PC! Aquí encontrarás todo lo que necesitas para armar tu equipo ideal. Nuestra amplia selección de productos te ofrece las últimas tecnologías en componentes de alta calidad. Desde procesadores y tarjetas gráficas hasta memorias RAM y discos duros, tenemos todo lo que necesitas para potenciar tu experiencia informática.
                Explora nuestro catálogo y descubre las marcas más reconocidas del mercado. Trabajamos con fabricantes de renombre que ofrecen productos confiables y de alto rendimiento. Además, puedes filtrar los resultados según tus preferencias, ya sea por marca, precio o características específicas.
                Nuestro objetivo es brindarte una experiencia de compra excepcional.
                Por eso, nuestro equipo de expertos está disponible para responder a tus preguntas y asesorarte en la elección de los componentes adecuados para tu PC. Nos apasiona la tecnología y queremos compartir nuestro conocimiento contigo.
                Una vez que hayas seleccionado los productos deseados, puedes realizar tu compra de forma segura y sencilla.

                Utilizamos métodos de pago confiables y protegidos para garantizar la seguridad de tus transacciones. Además, ofrecemos opciones de envío rápidas y eficientes para que recibas tus productos en tiempo récord.
                En nuestra página de ventas de PC, también encontrarás recursos adicionales, como guías de ensamblaje, recomendaciones de configuraciones y consejos para optimizar el rendimiento de tu equipo. Queremos que disfrutes al máximo de tu experiencia informática y saques el máximo provecho de tus componentes.
                ¡No esperes más y visita nuestra página de ventas de PC! Estamos emocionados de ser parte de tu proyecto informático y ayudarte a encontrar los componentes perfectos para construir tu PC de ensueño. No dudes en contactarnos si necesitas asistencia adicional. ¡Estamos aquí para ayudarte!
            </p>

            <br><br>
            <p>
            Para actualizar tus datos en Servitech, sigue estos pasos:
                <nav>
                    <ul>
                        <li>Inicia sesión en tu cuenta.</li>
                        <li>Busca la sección de "Mi perfil" o "Configuración de cuenta".</li>
                        <li>Modifica los campos necesarios, como nombre, correo electrónico, dirección, etc.</li>
                        <li>Guarda los cambios.</li>
                        <li>Verifica la actualización en tu perfil.</li>
                        <li>Si necesitas ayuda, nuestro equipo de atención al cliente está disponible para asistirte.<a href="">Aqui!</a></li>
                    </ul>
                </nav>



</p>









            <div class="closeSubMenu"><i class="fas fa-times"></i></div>
        </div>
    </div>

    <script src="{{ asset('js/help.js') }}"></script>
    @include('footer')
</body>
</html>
