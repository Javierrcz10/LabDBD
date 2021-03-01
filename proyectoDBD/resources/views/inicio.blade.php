<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Css only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
    <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                <img src="https://i.imgur.com/no68Ic5.png" alt="" width="30" height="20" class="d-inline-block align-top">
                Feria Online
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="registro" role="button">
                        Registrarse
                    </a>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="inicioSesion" role="button">
                        Iniciar Sesión
                    </a>
                </p>
                </a>
            </div>
        </nav>
        <figure class="text-center">
            <h1>
                Bienvenido
            </h1>
        </figure>
        <figure class="text-center">
            <h4>
                Registrate o inicia sesión en nuestra pagina

            </h4>
        </figure>
        <div class="text-center">
            <img src="https://static.vix.com/es/sites/default/files/l/las_frutas_y_verduras_tambien_fueron_domesticadas.jpg" class="img-thumbnail" alt="imagen" width="70%" height="200px">
        </div>
        
    </body> 
</html>