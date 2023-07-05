<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
    <script src="https://kit.fontawesome.com/11d65e2e30.js" crossorigin="anonymous"></script>
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
                        <li class="nav__li__subnavbar-li nav__li__subnavbar-li1"><i class="fas fa-plus"></i> ¿Porque Crear una cuenta en ServiTech?</li>
                        <li class="nav__li__subnavbar-li nav__li__subnavbar-li2"><i class="fas fa-plus"></i> ¿Como actualizo y/o modifico mis datos?</li>
                    </ul>
                </li>
                <li class="nav__li-help">Soporte Con ventas y compras
                     <ul class="nav__li__subnavbar-ul">
                        <li class="nav__li__subnavbar-li nav__li__subnavbar-li3"><i class="fas fa-plus"></i> Guia De Compra</li>
                        <li class="nav__li__subnavbar-li nav__li__subnavbar-li4"><i class="fas fa-plus"></i> Protecciones al Comprar</li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container-img container-img1">
        <img src="{{ asset('img/imgHelp/ACTUALIZO.png') }}" alt="">
        <i class="fas fa-times fa-times1"></i>
    </div>

    <div class="container-img container-img2">
        <img src="{{ asset('img/imgHelp/createAccount.png') }}" alt="">
        <i class="fas fa-times fa-times2"></i>
    </div>
    
    <div class="container-img container-img3">
        <img src="{{ asset('img/imgHelp/GuiaCompra.png') }}" alt="">
        <i class="fas fa-times fa-times3"></i>
    </div>
    
    <div class="container-img container-img4">
        <img src="{{ asset('img/imgHelp/PROTECCION.png') }}" alt="">
        <i class="fas fa-times fa-times4"></i>
    </div>


    <script src="{{ asset('js/help.js') }}"></script>
    @include('footer')
</body>
</html>
