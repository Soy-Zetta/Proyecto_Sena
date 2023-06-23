<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginn.css') }}">
</head>
<body>
    @include('header')

    {{-- MAIN --}}

    <div class="main">
        <form class="form">
            <div class="main__container-title">
                <h1 class="container-title__h1">INICIA SESIÓN</h1>
            </div>

            <div class="form__containerInputBnt">
                <div class="container-input">
                    <label for="userLog">Correo: </label>
                    <input id="userLog" class="form__input" placeholder="Ingrese Su Correo" type="text">
                </div>
                <div class="container-input">
                    <label for="passLog">Contraseña: </label>
                    <input id="passLog" class="form__input" placeholder="Ingrese Su Contraseña" type="password">
                </div>
                <input class="form__input form__input-send" type="submit">
            </div>

            <div class="container-links">
                <a href="./registerr">Aun no tienes cuenta?</a>
                <a href="#">Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>

    {{-- ENDMAIN --}}

    @include('footer')
</body>
</html>
