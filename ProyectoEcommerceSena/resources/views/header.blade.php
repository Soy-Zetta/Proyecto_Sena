<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="https://kit.fontawesome.com/11d65e2e30.js" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
    <header class="header">
        <div class="header__section1">
            <div class="header__section1__title">
                <img width="70px" src="{{ asset('img/footerIMG/ramserviceLogo.png') }}" class="header__section1__title-h2">
            </div>
            <div class="search-container">
                <input class="header__section1__input" type="search"><i class="fas fa-search"></i>
            </div>
            <div class="header__section1__container-btn">
                <button class="header__menu-mobile-btn btnNavbarOn"><i class="fas fa-bars"></i></button>
                <input class="header__section1__input-mobile" type="search"><i id="icon-search" class="fas fa-search"></i>
                <div>
                    <div>
                        <button class="header__section1__btn1"><i class="fas fa-shopping-cart"></i><a href="#"> Carrito</a></button>
                    </div>
                    <div>
                        <button id="btn-log" class="header__section1__btn2"><i class="fas fa-user"></i><a href="#"> Ingresar</a></button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div>
            @if (Route::has('login'))
                <div class="menu-log" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
        <nav class="nav">
            <button class="header__menu-mobile-btn header__menu-mobile-btnClose"><i class="fas fa-times"></i></button>
            <ul class="nav__ul">

                <li class="nav__li nav__li1"><a href="./">Casa</a></li>
                <li class="nav__li nav__li2"><a href="#">Servicios </a><i class="fas fa-angle-down fa-angle-down2"></i>

                    <ul class="nav__li-act__ul nav__li-act__ul2">
                        <li class="nav__li-act__li nav__li-act__li1"><a href="#"><i class="fas fa-tools"></i> Mantenimiento de pc</a></li>
                        <li class="nav__li-act__li nav__li-act__li2"><a href="#"><i class="fas fa-tools"></i> Mantenimiento de portatil</a></li>
                        <li class="nav__li-act__li nav__li-act__li3"><a href="#"><i class="fas fa-tools"></i> Mantenimiento de celulares</a></li>
                        <li class="nav__li-act__li nav__li-act__li4"><a href="#"><i class="fas fa-tools"></i> Reparacion de Carcasas</a></li>
                        <li class="nav__li-act__li nav__li-act__li5"><a href="#"><i class="fas fa-tools"></i> Arma tu pc</a></li>
                    </ul>

                </li>
                <li class="nav__li nav__li3"><a href="./nosotros">Sobre Nosotros</a></li>
                <li class="nav__li nav__li4"><a href="./shop">Tienda </a><i class="fas fa-angle-down fa-angle-down4"></i>

                    <ul class="nav__li-act__ul nav__li-act__ul4">
                        <li class="nav__li-act__li nav__li-act__li1"><a href="#"><span class="material-symbols-outlined">memory</span> PROCESADOR</a></li>
                        <li class="nav__li-act__li nav__li-act__li2"><a href="#"><i class="fas fa-digital-tachograph"></i> MOTHERBOARD</a></li>
                        <li class="nav__li-act__li nav__li-act__li3"><a href="#"><i class="fas fa-microchip"></i> TARJETA GRAFICA</a></li>
                        <li class="nav__li-act__li nav__li-act__li4"><a href="#"><i class="fas fa-memory"></i> RAM</a></li>
                        <li class="nav__li-act__li nav__li-act__li5"><a href="#"><i class="fas fa-hdd"></i> ALMACENAMIENTO</a></li>
                        <li class="nav__li-act__li nav__li-act__li6"><a href="#"><i class="fas fa-box"></i> CHASIS</a></li>
                        <li class="nav__li-act__li nav__li-act__li7"><a href="#"><i class="fas fa-desktop"></i> MONITORES</a></li>
                        <li class="nav__li-act__li nav__li-act__li8"><a href="#"><i class="fas fa-headset"></i> ACCESORIOS</a></li>
                    </ul>

                </li>
                <li class="nav__li nav__li5"><a href="#">Ayuda y Soporte</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
