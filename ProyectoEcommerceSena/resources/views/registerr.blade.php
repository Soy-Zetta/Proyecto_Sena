<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registerr.css') }}">
</head>
<body>
    @include('header')
    <div class="main">
        <form class="form">
            <div class="main__container-title">
                <h1 class="container-title__h1">Registrate xD</h1>
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

                <div class="container-input">
                    <label for="passLog">Pais: </label>
                    <input id="passLog" class="form__input" placeholder="Ingrese Su Contraseña" type="password">
                </div>

                <div class="container-input">
                    <label for="passLog">Tipo de documento: </label>
                    <select class="form__input">
                        <option value="">--- SELECCIONE UNA OPCION ---</option>
                        <option value="">Cedula De Cuidadania</option>
                        <option value="">Tarjeta de Identidad</option>
                        <option value="">documentacion para venecos</option>
                    </select>
                </div>

                <div class="container-input">
                    <label for="passLog">N° Documento: </label>
                    <input id="passLog" class="form__input" placeholder="Ingrese Su Contraseña" type="password">
                </div>

                <div class="container-input">
                    <label for="passLog">Telefono/Celular: </label>
                    <input id="passLog" class="form__input" placeholder="Ingrese Su Contraseña" type="password">
                </div>
            </div>

            <div>
                <input class="form__input form__input-send" type="submit">
            </div>

            <div class="container-links">
                <a href="./loginn">Ya tienes cuenta?</a>
            </div>
        </form>
    </div>
</body>
</html>
