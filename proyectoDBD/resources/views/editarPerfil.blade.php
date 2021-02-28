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
       
        <a href="/inicio2/{{ $usuario->id }}"><img src="https://www.flaticon.es/svg/vstatic/svg/3081/3081887.svg?token=exp=1614144431~hmac=8d704a208a4e466b3c7785aa17a7a6c3" alt="" width="30" height="20" class="d-inline-block align-top"></a>
            <a class="navbar-brand" href="/inicio2/{{ $usuario->id }}">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $usuario->id}}">carrito</a>
                <a href="/usuarioProductos/{{ $usuario->id}}"><img src="https://www.flaticon.es/svg/vstatic/svg/2121/2121815.svg?token=exp=1614144180~hmac=fbd564c4f791c62b73bcc3361327ae2f" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
                <a class="nav-link" href="/usuarios/{{ $usuario->id }}">perfil</a>
                <a href="/usuarios/{{ $usuario->id }}"><img src="https://www.flaticon.es/svg/vstatic/svg/64/64572.svg?token=exp=1614144250~hmac=cde59deb7b5db0484ffe1086425f367a" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
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
                        <button type="submit" class="btn btn-primary" href="/">Editar</button>
                      
                    </form>
                  </div>

                  <div class="col-sm">
                    
                  </div>
                </div>
              </div>
    </body>
</html>