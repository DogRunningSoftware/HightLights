<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <title>Subir Construcción</title>
    <style>
        /* Estilos adicionales para la página de subir construcciones */
        .subir-construccion {
            display: flex;
            justify-content: space-between;
            padding: 40px 0;
        }

        .formulario-subir {
            width: 70%;
        }

        .formulario-subir form {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .formulario-subir form label {
            display: block;
            margin-bottom: 10px;
        }

        .formulario-subir form input[type="text"],
        .formulario-subir form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }

        .formulario-subir form input[type="hidden"] {
            display: none;
        }

        .formulario-subir form button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Resto de tus estilos (menú, botones, etc.) */
    </style>
</head>
<body>
    <header>
        <h1>Subir Construcción</h1>
        <p>Comparte tus proyectos de construcción en Minecraft</p>
    </header>
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="#">Proyectos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="{{ url('/home') }}">Home</a></li>
        </ul>
    </nav>
    <section class="subir-construccion">
        <div class="formulario-subir">
            <h2>Subir una Construcción</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nombre">Nombre de la Construcción</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="foto1">Foto 1</label>
                <input type="file" id="foto1" name="foto1" accept="image/*" required>

                <label for="foto2">Foto 2</label>
                <input type="file" id="foto2" name="foto2" accept="image/*" value=" ">

                <label for="foto3">Foto 3</label>
                <input type="file" id="foto3" name="foto3" accept="image/*" value=" ">

                <label for="archivo">Archivo de la Construcción</label>
                <input type="file" id="archivo" name="archivo" accept=".zip, .rar" required>

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

                <input type="hidden" id="likes" name="likes" value="0">
                <input type="hidden" id="visitas" name="visitas" value="0">
                <input type="hidden" id="descargas" name="descargas" value="0">

                <button type="submit">Subir Construcción</button>
            </form>
        </div>

    </section>
    <footer>
        <p>&copy; 2023 Subir Construcción</p>
    </footer>
</body>
</html>