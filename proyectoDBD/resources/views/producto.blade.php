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
       
        <a href="/inicio2/{{ $idUsuario}}"><img src="https://cdn.pixabay.com/photo/2013/07/13/01/22/vegetables-155616_960_720.png" alt="" width="90" height="60" class="d-inline-block align-top me-1"></a>
            <a class="navbar-brand" href="/inicio2/{{ $idUsuario}}">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $idUsuario}}">Carrito</a>
                <a href="/usuarioProductos/{{ $idUsuario}}"><img src="https://cdn.pixabay.com/photo/2013/07/12/14/53/cart-148964_960_720.png" alt="" width="30" height="30" class="d-inline-block align-bottom me-2"></a>
                <a class="nav-link" href="/usuarios/{{ $idUsuario }}">Perfil</a>
                <a href="/usuarios/{{ $idUsuario }}"><img src="https://image.flaticon.com/icons/png/512/50/50050.png" alt="" width="30" height="30" class="d-inline-block align-bottom"></a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                </div>
                
                <div class="col-sm margen2">
                    @if($message != NULL)
                        <div class="alert alert-success margen" role="alert">
                            {{$message}}
                        </div>
                    @else
                    @endif
                    <h1 class="color">{{ $producto->nombreProducto }}</h1>
                    <div class="row">
                        <div class="col-1">
                            <h1>$</h1>
                        </div>
                        <div class="col-11">
                            <h1>{{ $producto->precioProducto }}</h1>
                        </div>
                    </div>
                    <h1 class="ui-pdp-title">{{ $producto->descripcionProducto }}</h1>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Tienda</th>
                            <th scope="col">Stock en {{ $unidadMedida->tipoUnidad }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($productoPuesto as $productoPuesto)
                                <tr>
                                    <td>{{ $productoPuesto->NombrePuesto }}</td>
                                    <td>{{ $productoPuesto->cantidad }}</td>
                                </tr>
                            @empty
                                no hay vendedor
                            @endforelse
                        </tbody>
                    </table>
                <div class="col-sm margen">
                </div>
                <form action="{{route('usuarioProductoStore')}}" method="POST">
                        <input type="hidden" name="idUsuario" value= "{{$idUsuario}}">
                        <input type="hidden" name="idProducto" value= "{{$producto->id}}">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Agregar al carrito</button>
                        </div>
                    </form>
                </div>

                <div class="col-3">
                </div>
            </div>
        </div>
    </body>
</html>

<style>
    .color{
        color: #5B516D;
    }
    .ui-pdp-title {
        margin-top:1%;
        color: rgba(0,0,0,.8);
        font-size: 22px;
        font-weight: 600;
        padding-bottom: 8px;
        line-height: 1.18;
        padding-right: 10px;
        word-break: break-word;
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
    }
    .price-tag {
        font-size: 252px;
        font-weight: 600;
        overflow: visible;
        display: inline-block;
        vertical-align: text-bottom;
    }
    .margen{
        margin-left:25%;
        margin-right:25%;
    }
</style>