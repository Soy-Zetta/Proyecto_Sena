@include('header')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/editCliente.css') }}">
    <script src="https://kit.fontawesome.com/11d65e2e30.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="#" class="container-profile">
        <i class="fas fa-user"></i>
        <div class="container-profile__container-text">
            <h1>nombre del usuario xD</h1>
            <p>Estas en el nivel 3 <span>Mercado puntos</span></p>
        </div>
    </a>

    <div class="container-dates">
        <a href="#" class="container-dates__container-date">
            <div class="container-dates__container-date--modify">
                <i class="fas fa-user"></i>
                <div>
                    <h3>Mis Datos</h3>
                    <p>Valida Tus Datos</p>
                </div>
            </div>

            <div class="container-dates__container-date__container-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="#" class="container-dates__container-date">
            <div class="container-dates__container-date--modify">
                <i class="fas fa-shield-alt"></i>
                <div>
                    <h3>Seguridad</h3>
                    <p>Tienes Configuraciones Pendientes</p>
                </div>
            </div>
            
            <div class="container-dates__container-date__container-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="#" class="container-dates__container-date">
            <div class="container-dates__container-date--modify">
                <i class="fas fa-credit-card"></i>
                <div>
                    <h3>Tarjeta</h3>
                    <p>Tarjetas guardadas en tu cuenta</p>
                </div>
            </div>
            
            <div class="container-dates__container-date__container-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="#" class="container-dates__container-date">
            <div class="container-dates__container-date--modify">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h3>Direcciones</h3>
                    <p>Direcciones guardadas en tu cuenta</p>
                </div>
            </div>
            
            <div class="container-dates__container-date__container-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="#" class="container-dates__container-date">
            <div class="container-dates__container-date--modify">
                <i class="fas fa-user-shield"></i>
                <div>
                    <h3>Privacidad</h3>
                    <p>Preferencia y contro sobre el uso de tus datos</p>
                </div>
            </div>
            
            <div class="container-dates__container-date__container-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="#" class="container-dates__container-date">
            <div class="container-dates__container-date--modify">
                <i class="fas fa-comment-alt"></i>
                <div>
                    <h3>Comunicaciones</h3>
                    <p>Elige que tipo de informacion quieres recibir</p>
                </div>
            </div>
            
            <div class="container-dates__container-date__container-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="#" class="container-dates__container-date">
            <div class="container-dates__container-date--modify">
                <i class="far fa-plus-square"></i>
                <div>
                    <h3>Suscripciones</h3>
                    <p>Gestiona tus suscripciones</p>
                </div>
            </div>
            
            <div class="container-dates__container-date__container-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div>
</body>
</html>

@include('footer')