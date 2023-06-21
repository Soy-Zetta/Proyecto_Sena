<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    @include('header')

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
    <script src="{{ asset('js/app.js') }}"></script>
    @include('footer')
</body>
</html>
