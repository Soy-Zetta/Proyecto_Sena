
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
    <br><br>
    <div class="main">
        <form class="form" action="{{ route('clientes.store') }}" method="POST">
            <div class="main__container-title">
                <h1 class="container-title__h1">Registrate xD</h1>
            </div>
            @csrf
            <div class="form__containerInputBnt">
                <div class="container-input">
                    <label for="name">Nombre:</label>
                    <input id="name" class="form__input" placeholder="Ingrese su nombre" type="text" name="nombre" required>
                </div>

                <div class="container-input">
                    <label for="apellido">Apellido:</label>
                    <input id="apellido" class="form__input" placeholder="Ingrese su apellido" type="text" name="apellido" required>
                </div>

                <div class="container-input">
                    <label for="tipo_documento">Tipo de documento:</label>
                    <select class="form__input" id="tipo_documento"  name="tipo_documento" required>
                        <option value="Cedula De Cuidadania">Cédula de Ciudadanía</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="documentacion para venecos">Documentación de extrangeria </option>
                    </select>
                </div>

                <div class="container-input">
                    <label for="num_documento">N° Documento:</label>
                    <input id="num_documento" oninput="javascript: if (this.value.length > 12) this.value = this.value.slice(0, 12);" class="form__input" placeholder="Ingrese su número de documento" type="number" name="num_documento" required>
                </div>


                <div class="container-input">
                    <label for="telefono">Teléfono/Celular:</label>
                    <input id="telefono" class="form__input" placeholder="Ingrese su número de teléfono o celular" type="text" name="telefono" maxlength="10" required>
                </div>

                <div class="container-input">
                    <label for="ciudad_residencia">Ciudad de Residencia:</label>
                    <select class="form__input" id="ciudad_residencia" name="ciudad_residencia" required>
                        <option value="armenia">armenia</option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Cali">Cali</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <!-- Add more cities here -->
                        </select>
                        </div>
            <div class="container-input">
                <label for="direccion">Dirección:</label>
                <input id="direccion" class="form__input" placeholder="Ingrese su dirección" type="text" name="direccion" required>
            </div>

            <div class="container-input">
                <label for="email">Correo:</label>
                <input id="email" class="form__input" placeholder="Ingrese su correo electrónico" type="email" name="email" required>
            </div>

            <div class="container-input">
                <label for="password">Contraseña:</label>
                <input id="password" class="form__input" placeholder="Ingrese su contraseña" type="password" name="contrasena" required>
            </div>

        </div>

        <div>
            <input class="form__input form__input-send" type="submit" value="Registrar">
        </div>

        <div class="container-links">
            <a href="./loginn">¿Ya tienes cuenta?</a>
        </div>
    </form>
</div>