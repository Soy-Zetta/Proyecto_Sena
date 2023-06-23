<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="{{ asset('normalize.css') }}">
</head>
<body>
    @include('header')
    <main class="main">
        <div class="container-destacados">
            <h2>PRODUCTOS DESTACADOS</h2>
            <div class="container-items">
                <a class="destacado-item" href="">
                <div class="item1">
                    <img src="{{ asset('img/logo.png') }}" alt="producto1">
                    <div>
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item1">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item1">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item1">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="container-destacados">
            <h2>CATEGORIAS DESTACADAS</h2>
            <div class="container-items">
                <a class="destacado-item" href="">
                <div class="item1">
                    <img src="{{ asset('img/logo.png') }}" alt="producto1">
                    <div>
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item1">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item1">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </a>
                <a class="destacado-item" href="">
                    <div class="item1">
                        <img src="{{ asset('img/logo.png') }}" alt="producto1">
                        <h3>TITLE PRODUCT</h3>
                        <p>price</p>
                    </div>
                </a>
            </div>
        </div>
    </main>
    @include('footer')
</body>
</html>

