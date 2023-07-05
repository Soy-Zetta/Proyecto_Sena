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
                <img width="70px" src="{{ asset('img/logo.png') }}" class="header__section1__title-h2">
            </div>
            <div class="header__section1__container-btn">
                <button class="header__menu-mobile-btn btnNavbarOn"><i class="fas fa-bars"></i></button>
                <input class="header__section1__input-mobile" type="search"><i id="icon-search"
                    class="fas fa-search"></i>
                <div>
                    <div>
                        <button class="header__section1__btn1"><a href="./cart"><i class="fas fa-shopping-cart"></i></a></button>
                    </div>
                    
                </div>
            </div>
        </div>
        <nav class="nav">
            <button class="header__menu-mobile-btn header__menu-mobile-btnClose"><i class="fas fa-times"></i></button>
            <ul class="nav__ul">
                <li class="nav__li nav__li1"><a href="./">Inicio</a></li>
                <li class="nav__li nav__li2"><a href="./servicios">Servicios </a></li>
                <li class="nav__li nav__li3"><a href="./nosotros">Sobre Nosotros</a></li>
                <li class="nav__li nav__li4"><a href="./shop">Tienda </a></li>
                <li class="nav__li nav__li5"><a href="./ayuda-y-soporte">Ayuda y Soporte</a></li>
                @if (Auth::check())
                    <a class="nav__li" href="{{ route('perfil.index') }}" class="btn btn-primary">Mi cuenta</a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav__li" type="submit" class="btn btn-danger">Cerrar sesión</button>
                    </form>
                @else
                    <div>
                        <li class="nav__li" id="btn-log" class="header__section1__btn2">
                            <a href="./register">Registrarme</a>
                        </li>
                        <span>ó</span>
                        <li class="nav__li" id="btn-log" class="header__section1__btn2">
                            <a href="./login">Iniciar Sesión</a>
                        </li>
                    </div>
                @endif
            </ul>
        </nav>
    </header>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
