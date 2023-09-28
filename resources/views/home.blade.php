
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <title>Inicio</title>

    <style>.home {
    display: flex;
    justify-content: space-between;
    padding: 40px 0;
}

/* Espacio para la foto de perfil */
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

/* Menú desplegable */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Botón para mostrar el perfil */
.show-profile-btn {
    background-color: #333;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    border: none;
    margin-top: 20px;
}

.show-profile-btn:hover {
    background-color: #444;
}</style>
</head>
<body>
    <header>
        <h1>Gestión de Proyectos Minecraft</h1>
        <p>¡Construyendo sueños en bloques!</p>
    </header>
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="{{ route('construcciones.home')}}">Proyectos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="/home">Home</a></li>
        </ul>
    </nav>
    <section class="home">
        <aside class="profile">
        <img  id="profile-image" src="{{ Auth::user()->fot_usu }}" alt="Foto de perfil">
        </form>
            <form  method="POST" action="{{ route('user.updateN')}}">
            @csrf
            <input type="text" name="nom_usu" value="{{ Auth::user()->name }}"></input>
            <button type="submit" >Actualizar nombre</button>
        </form>
        <form  method="POST" action="{{ route('user.updateP')}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="fot_usu" accept="image/*" required></input>
            <button type="submit" >Actualizar foto</button>
        </form>
            <div class="dropdown">
                <button class="dropbtn">Opciones</button>
                <div class="dropdown-content">

                    <form  method="GET" action="{{ route('user.delete')}}">
                    @csrf
                    <button type="submit" >Eliminar cuenta</a>
                    </form>
                    <form  method="POST" action="{{ route('logout') }}">
                    @csrf
                        
                    <button type="submit" >Cerrar Sesión</a>

                    </form>

                </div>
            </div>
        </aside>
        <a href="{{ route('construcciones.create')}}">Nueva construccion</a>
        <a href="{{ route('construcciones.mine')}}">Mis construcciones</a>
        <div class="content">
            <h2>Bienvenido de nuevo,{{ Auth::user()->name }} </h2>
            <!-- Contenido de la página de inicio aquí -->
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Gestión de Proyectos Minecraft</p>
    </footer>
</body>
</html>
