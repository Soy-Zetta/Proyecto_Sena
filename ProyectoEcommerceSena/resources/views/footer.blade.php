<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pie de pagina</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#"><img src="{{ asset('img/logoCompleto.png') }}" alt="Logo-ram-servis"></a>
            </figure>
        </div>

        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Somos un grupo de estudiantes enfocados a la programacion de software y esta ecommerce es nuestro proyecto final   </p>
        </div>

        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>

    <div class="grupo-1-1">
        <div class="box">
            <figure>
                <img src="{{ asset('img/footerIMG/senaLogo.png') }}" alt="Logo-sena">
                <img src="{{ asset('img/footerIMG/amdLogo.png') }}" alt="Logo amd">
                <img src="{{ asset('img/footerIMG/intelLogo.png') }}" alt="Logo intel">
                <img src="{{ asset('img/footerIMG/nvidiaLogo.png') }}" alt="Logo nivia">
                <img src="{{ asset('img/footerIMG/coolerMasterLogo.png') }}" alt="Logo cooler master">
                <img src="{{ asset('img/footerIMG/asusLogo.png') }}" alt="asus">
                <img src="{{ asset('img/footerIMG/reoublicaLogo.png') }}" alt="republica gamer">
                <img src="{{ asset('img/footerIMG/msiLogo.png') }}" alt="msi">
            </figure>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Tpc117</b> - Todos los Derechos Reservados.</small>
    </div>
    </footer>
</body>
</html>
