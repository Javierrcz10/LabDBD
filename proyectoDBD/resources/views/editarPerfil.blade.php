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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
       
        <a href="/inicio2/{{ $usuario->id }}"><img src="https://cdn.pixabay.com/photo/2013/07/13/01/22/vegetables-155616_960_720.png" alt="" width="90" height="60" class="d-inline-block align-top me-1"></a>
            <a class="navbar-brand" href="/inicio2/{{ $usuario->id }}">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $usuario->id}}">Carrito</a>
                <a href="/usuarioProductos/{{ $usuario->id}}"><img src="https://cdn.pixabay.com/photo/2013/07/12/14/53/cart-148964_960_720.png" alt="" width="30" height="30" class="d-inline-block align-bottom me-2"></a>
                <a class="nav-link" href="/usuarios/{{ $usuario->id }}">Perfil</a>
                <a href="/usuarios/{{ $usuario->id }}"><img src="https://image.flaticon.com/icons/png/512/50/50050.png" alt="" width="30" height="30" class="d-inline-block align-bottom"></a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>
        <figure >
            <h4 class="text-center">
                Editar datos
            </h4>
            <br>
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                     
                  </div>
                  <div class="col-sm">
                    <form action="{!! route('usuarioUpdate',['id' => $usuario->id]) !!}" method="POST">
                      @method('PUT')
                      <div class="mb-3">
                          <label for="floatingInput">Nombre</label>
                          <input type="text" class="form-control" name="nombreUsuario" placeholder="{{ $usuario->nombreUsuario }}">
                        </div>
                        <div >
                          <label for="usuario">Apodo</label>
                          <input type="text" class="form-control" name="apodoUsuario" placeholder="{{ $usuario->apodoUsuario }}">
                        </div>
                        <br>
                      
                      <div class="mb-3">
                          <label for="floatingInput">Contraseña</label>
                          <input type="text" class="form-control" name="contraseniaUsuario" placeholder="nueva contraseña">

                        </div>
                        <div class="mb-3">
                          <label for="floatingPassword">Mail</label>
                          <input type="text" class="form-control" name="emailUsuario" placeholder="{{ $usuario->emailUsuario }}">
                        </div>
                        <button type="submit" class="btn btn-success" href="/">Guardad cambios</button>
                      
                    </form>
                  </div>

                  <div class="col-sm">
                    
                  </div>
                </div>
              </div>
    </body>
</html>