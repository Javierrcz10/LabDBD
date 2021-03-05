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
       
        <a href="/inicio2/{{ $idUsuario}}"><img src="https://www.flaticon.es/svg/vstatic/svg/3081/3081887.svg?token=exp=1614144431~hmac=8d704a208a4e466b3c7785aa17a7a6c3" alt="" width="30" height="20" class="d-inline-block align-top"></a>
            <a class="navbar-brand" href="/inicio2/{{ $idUsuario}}">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $idUsuario}}">carrito</a>
                <a href="/usuarioProductos/{{ $idUsuario}}"><img src="https://www.flaticon.es/svg/vstatic/svg/2121/2121815.svg?token=exp=1614144180~hmac=fbd564c4f791c62b73bcc3361327ae2f" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
                <a class="nav-link" href="/usuarios/{{ $idUsuario}}">perfil</a>
                <a href="/usuarios/{{ $idUsuario}}"><img src="https://www.flaticon.es/svg/vstatic/svg/64/64572.svg?token=exp=1614144250~hmac=cde59deb7b5db0484ffe1086425f367a" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>
        <!-- info del puesto de feria-->
        
        <div class="card">
            <div class="card-body">
            <h5 class="card-title text-center">{{$puestoFerias->NombrePuesto}}</h5>
            <h6 class="card-subtitle mb-2 text-muted text-center">{{$puestoFerias->DescripcionPuesto}}</h6>
            </div>
        </div>
        

        <!-- productos del puesto de feria-->
        <div class="container">
            <div class="col">
            @forelse($productos as $producto)
                <div class="card">
                    <div class="card-body">
                        <h5><a class="nav-link" href="/productos/{{$idUsuario}}/{{$producto->idProducto}}">{{$producto->nombreProducto}}</a></h5>
                        <h5 class="card-title">{{$producto->nombreProducto}}</h5>
                        <p class="card-text">{{$producto->descripcionProducto}}</p>
                    </div>
                </div>
            @empty
            <p>No hay productos con ese nombre</p>
            @endforelse
            </div>
         </div>
    </body>
</html>