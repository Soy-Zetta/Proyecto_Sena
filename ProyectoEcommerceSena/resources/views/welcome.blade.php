<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>
<body>
    @include('header')
    <main class="main">

        <div class="container-submenu">
            <nav class="nav-submenu">
                <ul class="nav__ul-submenu">
                    <li class="nav__li-submenu"><a href="">Ver descuentos</a></li>
                    <li class="nav__li-submenu"><a href="">Ver todas la categorias</a></li>
                    <li class="nav__li-submenu"><a href="">Productos Internacionales</a></li>
                    <li class="nav__li-submenu"><a href="">Mejores Productos Calificados</a></li>
                </ul>
            </nav>
        </div>


        <div class="container-carrusel">
            <div class="carrusel">
                <a href="#" class="carrusel__item">
                    <p>VER PRODUCTO</p>
                    <img src="{{ asset('img/imgServices/servicios/camaras.jpg') }}" alt="">
                </a>

                <a href="#" class="carrusel__item">
                    <p>VER PRODUCTO</p>
                    <img src="{{ asset('img/imgServices/servicios/ensam.jpg') }}" alt="">
                </a>

                <a href="#" class="carrusel__item">
                    <p>VER PRODUCTO</p>
                    <img src="{{ asset('img/imgServices/servicios/mantenimiento.jpg') }}" alt="">
                </a>

                <a href="#" class="carrusel__item">
                    <p>VER PRODUCTO</p>
                    <img src="{{ asset('img/imgServices/servicios/equiposMoviles.jpg') }}" alt="">
                </a>

                <a href="#" class="carrusel__item">
                    <p>VER PRODUCTO</p>
                    <img src="{{ asset('img/imgServices/servicios/ensambles.jpg') }}" alt="">
                </a>
            </div>
        </div>



        <div class="container-destacados">
            <h2>PRODUCTOS DESTACADOS</h2>
            <div class="container-items">
                <a class="destacado-item" href="">
                <div class="item">
                    <img src="{{ asset('img/logo.png') }}" alt="producto1">
                    <div>
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <div>
                            <h3>TITLE PRODUCT</h3>
                            <p>price</p>
                        </div>
                    </div>
                </a>
                    <a class="destacado-item" href="">
                    <div class="item">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <div>
                            <h3>TITLE PRODUCT</h3>
                            <p>price</p>
                        </div>
                    </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <div>
                            <h3>TITLE PRODUCT</h3>
                            <p>price</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <div class="container-destacados">
            <h2>CATEGORIAS DESTACADAS</h2>
            <div class="container-items">
                <a class="destacado-item" href="">
                <div class="item">
                    <img src="{{ asset('img/logo.png') }}" alt="producto1">
                    <div>
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </div>
                </a>
                <a class="destacado-item" href="">
                <div class="item">
                    <img src="{{ asset('img/logo.png') }}" alt="producto1">
                    <div>
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </div>
                </a>
                <a class="destacado-item" href="">
                <div class="item">
                    <img src="{{ asset('img/logo.png') }}" alt="producto1">
                    <div>
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </div>
                </a>
                <a class="destacado-item" href="">
                <div class="item">
                    <img src="{{ asset('img/logo.png') }}" alt="producto1">
                    <div>
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </main>
    @include('footer')
</body>
</html>

