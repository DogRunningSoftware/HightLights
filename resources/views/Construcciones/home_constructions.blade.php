<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <title>Construcciones de la comunidad</title>
    <style>
        /* Estilos adicionales para la página de construcciones */
        .construcciones {
            display: flex;
            justify-content: space-between;
            padding: 40px 0;
        }

        .construcciones-list {
            width: 70%;
        }

        .construccion {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .construccion h3 {
            margin: 0;
        }

        .construccion a {
            color: #333;
            text-decoration: none;
        }

        .construccion a:hover {
            text-decoration: underline;
        }

        .profile {
            width: 200px;
            text-align: center;
        }

        .profile img {
            width: 100%;
            max-width: 150px;
            border-radius: 50%;
            border: 3px solid #333;
            cursor: pointer;
        }

        /* Resto de tus estilos (menú, botones, etc.) */
    </style>
</head>
<body>
    <header>
        <h1>Construcciones</h1>
        <p>proyectos de construcción en Minecraft por la comunidad</p>
    </header>
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="{{ route('construcciones.home')}}">Proyectos</a></li>
            <li><a href="#">Contacto</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>

                @endauth
            @endif
        </ul>
    </nav>
    <section class="construcciones">
        <div class="construcciones-list">
            <h2>Construcciones</h2>
          
            <div class="construccion">
                <h3><a href=""></a></h3>
                <p>Descripción: </p>
                <p>Fecha de Creación: </p>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Mis Construcciones</p>
    </footer>
</body>
</html>