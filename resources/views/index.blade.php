
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Gestión de Proyectos Minecraft</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Encabezado */
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

header h1 {
    font-size: 36px;
}

/* Navegación */
nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

/* Sección de héroe */
.hero {
    background-image: url('minecraft_bg.jpg'); /* Reemplaza 'minecraft_bg.jpg' con la ruta de tu imagen de fondo */
    background-size: cover;
    background-position: center;
    text-align: center;
    color: #fff;
    padding: 100px 0;
}

.hero h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #444;
}

/* Sección de características */
.features {
    display: flex;
    justify-content: space-around;
    padding: 40px 0;
}

.feature {
    text-align: center;
}

.feature h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

/* Pie de página */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}
</style>
<body>
    <header>
        <h1>Gestión de Proyectos Minecraft</h1>
        <p>¡Construyendo sueños en bloques!</p>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Proyectos</a></li>
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
