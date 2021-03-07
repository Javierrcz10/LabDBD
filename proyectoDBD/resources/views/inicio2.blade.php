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
       
        <a href="/inicio2/{{ $id}}"><img src="https://cdn.pixabay.com/photo/2013/07/13/01/22/vegetables-155616_960_720.png" alt="" width="90" height="60" class="d-inline-block align-top me-1"></a>
            <a class="navbar-brand" href="/inicio2/{{ $id}}">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $id}}">Carrito</a>
                <a href="/usuarioProductos/{{ $id}}"><img src="https://cdn.pixabay.com/photo/2013/07/12/14/53/cart-148964_960_720.png" alt="Carrito compra" width="30" height="30" class="d-inline-block align-bottom me-2"></a>
                <a class="nav-link active" href="/usuarios/{{ $id}}">Perfil</a>
                <a href="/usuarios/{{ $id}}"><img src="https://image.flaticon.com/icons/png/512/50/50050.png" alt="" width="30" height="30" class="d-inline-block align-bottom"></a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>

        <div class="container-fluid">
                    @if($message != NULL)
                        <div class="alert alert-success margen3" role="alert">
                            {{$message}}
                        </div>
                    @else
                    @endif
            <div class="row">
                <div class="col-sm margen">
                <a href="/filtrarProducto/{{ $id}}" class="btn btn-primary" role="button" data-bs-toggle="button">filtrar por producto</a>
                </div>
                <div class="col-sm margen">
                <a href="/filtroComuna/{{$id}}" class="btn btn-primary" role="button" data-bs-toggle="button">filtrar por comuna</a>
                </div>
            </div>
            <div class="row">

                    <div class="text-center">
                        <img src="https://static.vix.com/es/sites/default/files/l/las_frutas_y_verduras_tambien_fueron_domesticadas.jpg" class="img-thumbnail" alt="imagen" width="70%" height="200px">
                    </div>
            </div>
        </div>

                
    </body>
</html>

<style>
    .margen{
        margin-left:20%;
        margin-top:1%;
        margin-bottom:1%;
    }
    .margen2{
        margin-top:1%;
    }
    .margen3{
        margin-left:25%;
        margin-right:25%;
    }
</style>