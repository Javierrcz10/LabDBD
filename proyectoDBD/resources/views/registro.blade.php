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
                <a class="navbar-brand" href="#">
                <img src="https://i.imgur.com/no68Ic5.png" alt="" width="30" height="20" class="d-inline-block align-top">
                Feria Online
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="/" role="button">
                        Inicio
                    </a>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#login" role="button">
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
                     Ingrese sus datos, todos son obligatorios
                     
                  </div>
                  <div class="col-sm">
                    <div class="form-floating mb-3">
                        <input type="User" class="form-control" id="floatingInput" placeholder="nombre">
                        <label for="floatingInput">Nombre</label>
                      </div>
                      <div class="form-floating">
                        <input type="User" class="form-control" id="usuario" placeholder="User">
                        <label for="usuario">Apodo</label>
                      </div>
                      
                  </div>
                  <div class="col-sm">
                    
                  </div>
                </div>
              </div>

              <!--segundo recuadro de 2-->

              <div class="container">
                <div class="row mb-3">
                  <div class="col-sm">
                    <br>
                    <br>
                    <br> 
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="inicio2" role="button">
                        Registrar
                    </a>
                  </div>
                  <div class="col-sm">
                    <br>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                      </div>
                  </div>
                  <div class="col-sm">
                    
                  </div>
                </div>
              </div>
        
    </body>
</html>