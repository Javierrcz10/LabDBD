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
                    
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="inicioSesion" role="button">
                        Iniciar Sesión
                    </a>
                </p>
                </a>
            </div>
        </nav>
        <figure class="text-center">
            <h1>
                Registro
            </h1>
        </figure>
        <figure class="text-center">
            <h4>
                Rellene el formulario

            </h4>

            <div class="container">
                <div class="row">
                  <div class="col-sm">
                     
                  </div>
                  <div class="col-sm">
                    <form action="{{route('usuarioStore')}}" method="POST">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="nombreUsuario" placeholder="nombre">
                          <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating">
                          <input type="text" class="form-control" name="apodoUsuario" placeholder="User">
                          <label for="usuario">Apodo</label>
                        </div>
                        <br>
                      
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="contraseniaUsuario" placeholder="name@example.com">
                          <label for="floatingInput">Contraseña</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="emailUsuario" placeholder="Password">
                          <label for="floatingPassword">Mail</label>
                        </div>
                        <button type="submit" class="btn btn-primary" href="/">Registrar</button>
                      
                    </form>
                  </div>

                  <div class="col-sm">
                    
                  </div>
                </div>
              </div>

           
        
    </body>
</html>