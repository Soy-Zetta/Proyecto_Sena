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
                        <li class="nav__li__subnavbar-li">¿Porque Crear una cuenta en ServiTech?</li>
                        <li class="nav__li__subnavbar-li">¿Como actualizo y/o modifico mis datos?</li>
                        <li class="nav__li__subnavbar-li">¿Como creo mi cuenta en ServiTech?</li>
                        <li class="nav__li__subnavbar-li">¿Como recupero mi contraseña?</li>
                        <li class="nav__li__subnavbar-li">¿como elimino mi cuenta?</li>
                        <li class="nav__li__subnavbar-li">¿Que son los cupones?</li>{{--
                        <li class="nav__li__subnavbar-li">¿para que son los cupones?</li>
                        <li class="nav__li__subnavbar-li">¿como conseguir cupones?</li> --}}
                    </ul>
                </li>

                <li class="nav__li-help">Soporte Con ventas y compras

                    <ul class="nav__li__subnavbar-ul">
                        <li class="nav__li__subnavbar-li">Guia De Compra</li>
                        <li class="nav__li__subnavbar-li">Protecciones al Comprar</li>
                        <li class="nav__li__subnavbar-li">Devoluciones</li>
                        <li class="nav__li__subnavbar-li">Metodos de pago</li>
                        <li class="nav__li__subnavbar-li">Envio y entrega</li>
                        <li class="nav__li__subnavbar-li">Facturacion</li>
                    </ul>

                </li>
            </ul>
        </nav>
    </div>

    @include('footer')
</body>
</html>
