
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <title>Gestión de Proyectos Minecraft</title>
</head>

<body>
    <header>
        <h1>Gestión de Proyectos Minecraft</h1>
        <p>¡Construyendo sueños en bloques!</p>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
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
    <section class="hero">
        <h2>Bienvenido a nuestra plataforma de gestión de proyectos en Minecraft</h2>
        <p>Encuentra inspiración, colabora con otros jugadores y administra tus proyectos de construcción.</p>
        <a href="#" class="btn">Empezar</a>
    </section>
    <section class="features">
        <div class="feature">
            <h3>Explora Proyectos</h3>
            <p>Descubre proyectos emocionantes creados por la comunidad Minecraft.</p>
        </div>
        <div class="feature">
            <h3>Colabora</h3>
            <p>Únete a proyectos existentes o inicia uno propio y trabaja en equipo.</p>
        </div>
        <div class="feature">
            <h3>Gestiona Recursos</h3>
            <p>Lleva un registro de tus recursos y progreso en cada proyecto.</p>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Gestión de Proyectos Minecraft</p>
    </footer>
</body>
</html>
