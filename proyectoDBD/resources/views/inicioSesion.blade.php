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
                </p>
                </a>
            </div>
        </nav>
        <figure class="text-center">
            <h1>
                Inicio de sesión
            </h1>
        </figure>
        <figure class="text-center">
            <h4>
                Ingrese sus datos

            </h4>

            <div class="container">
                <div class="row">
                  <div class="col-sm">
                     
                  </div>
                  <div class="col-sm">
                    <form action="{{route('usuarioSesion')}}" method="GET">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="apodoUsuario" placeholder="User">
                            <label for="usuario">Apodo Usuario</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="contraseniaUsuario" placeholder="name@example.com">
                            <label for="floatingInput">Contraseña</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" >Ingresar</button>
                    </form>
                  </div>
                  <div class="col-sm">
                    
                  </div>
                </div>
              </div>
        
    </body>
</html>