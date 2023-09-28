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
            <li><a href="{{ route('construcciones.home')}}">Proyectos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="{{ url('/home') }}">Home</a></li>
        </ul>
    </nav>
    <section class="subir-construccion">
        <div class="formulario-subir">
            <h2>Subir una Construcción</h2>
            <form action="{{ route('construcciones.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label for="nombre">Nombre de la Construcción</label>
                    <input type="text" id="nom_con" name="nom_con" required>
                    @error('nom_con')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    <label >Foto 1</label>
                    <input type="file" id="foto1" name="fot1_con" accept="image/*" required>
                    @error('fot1_con')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    <label >Foto 2</label>
                    <input type="file" id="foto2" name="fot2_con" accept="image/*" required>
                    @error('fot2_con')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <label>Foto 3</label>

                    <input type="file" id="foto3" name="fot3_con" accept="image/*" required>
                    @error('fot3_con')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               
                    <label for="archivo">Archivo de la Construcción</label>
                    <input type="file" id="archivo" name="con_con" accept=".zip, .rar" required>
                    @error('con_con')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="txt_con" rows="4" required></textarea>

                    <input type="hidden" id="likes" name="lik_con" value="0">
                    <input type="hidden" id="visitas" name="vis_con" value="0">
                    <input type="hidden" id="descargas" name="des_con" value="0">
                    <input type="hidden"  name="est_con" value="Activa">

                    <button type="submit">Subir Construcción</button>
            </form>
        </div>

    </section>
    <footer>
        <p>&copy; 2023 Subir Construcción</p>
    </footer>
</body>
</html>