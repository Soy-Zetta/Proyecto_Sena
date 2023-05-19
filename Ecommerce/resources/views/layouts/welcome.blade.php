<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TITULO</title>
    <link rel="stylesheet" href="{{ asset('../resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('../resources/css/normalize.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/11d65e2e30.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- ESTE ES EL HEADER
        ========================================================= --}}
    <header class="header">
        <div class="header__section1">
            <div class="header__section1__title">
                <h2 class="header__section1__title-h2">RAM SERVI</h2>
            </div>
            <div class="header__section1__container-btn">
                <button class="header__menu-mobile-btn btnNavbarOn"><i class="fas fa-bars"></i></button>{{--
                <input class="header__section1__input" type="search"><i class="fas fa-search"></i> --}}
                <div>
                    <button class="header__section1__btn1"><i class="fas fa-shopping-cart"></i> Carrito</button>
                    <button class="header__section1__btn2"><i class="fas fa-user"></i> Ingresar</button>
                </div>
            </div>
        </div>
        <nav class="nav">
            <button class="header__menu-mobile-btn header__menu-mobile-btnClose"><i class="fas fa-times"></i></button>
            <ul class="nav__ul">
                <li class="nav__li nav__li1"><a href="#">Casa</a></li>
                <li class="nav__li nav__li2"><a href="#">Servicios </a><i class="fas fa-angle-down fa-angle-down2"></i>

                    <ul class="nav__li-act__ul nav__li-act__ul2">
                        <li class="nav__li-act__li nav__li-act__li1"><a href="#"><i class="fas fa-tools"></i> Mantenimiento de pc</a></li>
                        <li class="nav__li-act__li nav__li-act__li2"><a href="#"><i class="fas fa-tools"></i> Mantenimiento de portatil</a></li>
                        <li class="nav__li-act__li nav__li-act__li3"><a href="#"><i class="fas fa-tools"></i> Mantenimiento de celulares</a></li>
                        <li class="nav__li-act__li nav__li-act__li4"><a href="#"><i class="fas fa-tools"></i> Reparacion de Carcasas</a></li>
                        <li class="nav__li-act__li nav__li-act__li5"><a href="#"><i class="fas fa-tools"></i> Arma tu pc</a></li>
                    </ul>

                </li>
                <li class="nav__li nav__li3"><a href="#">Sobre Nosotros</a></li>
                <li class="nav__li nav__li4"><a href="#">Tienda </a><i class="fas fa-angle-down fa-angle-down4"></i>

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

    {{--
        FIN DEL HEADER
        =========================================================
        ESTE ES EL CONTENT
        ========================================================= --}}

    <main class="main">
        <div class="main__container-wspp">
            <button class="main__container-wspp-btn"><span class="main__container-wspp-btn__spanOn">Nesesitas Asesoria?</span><i class="fab fa-whatsapp"></i></button>

        </div>
        <div class="main__container-wspp__chatDiv">
            <button class="main__container-wspp__chatDiv-Close"><i class="fas fa-times"></i></button>
            <h3>CHAT ALRAVETO 3.0</h3>
            <input placeholder="Escribe Tu Mensaje" type="text">
        </div>
        <section class="main__section1">
            <div class="main__section1_container-form">
                <h2>INICIA SESION</h2>
                <form class="main__section1_container-form__form" method="post">
                    <label class="main__section1_container-form__form__label" for="">Usuario:</label>
                    <input class="main__section1_container-form__form__input" placeholder="Usuario" type="text">
                    <label class="main__section1_container-form__form__label" for="">Contraseña:</label>
                    <input class="main__section1_container-form__form__input" placeholder="Contraseña" type="password">
                    <input class="main__section1_container-form__form__input main__section1_container-form__form__input-sbtm" type="submit">
                </form>
            </div>
        </section>
    </main>



    <script src="{{ asset('../resources/js/app.js') }}"></script>
</body>
</html>
