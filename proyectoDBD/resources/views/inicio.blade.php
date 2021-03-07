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
       
        <a href="/"><img src="https://cdn.pixabay.com/photo/2013/07/13/01/22/vegetables-155616_960_720.png" alt="" width="90" height="60" class="d-inline-block align-top me-1"></a>
            <a class="navbar-brand" href="/">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/registro">Registrarse</a>
                
                <a class="nav-link active" href="/inicioSesion">Iniciar Sesión</a>
                
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>
        @if($message != null) 
            <div class="alert alert-success margen" role="alert">
                {{$message}}
            </div>
        @else
        @endif
        
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
            <img src="https://static.vix.com/es/sites/default/files/l/las_frutas_y_verduras_tambien_fueron_domesticadas.jpg" class="img-thumbnail" alt="imagen frutas y verduras" width="70%" height="200px">
        </div>
        
    </body> 
</html>

<style>
    .margen{
        margin-left:25%;
        margin-right:25%;
    }
    
</style>