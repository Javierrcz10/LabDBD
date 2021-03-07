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
                <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $id}}">carrito</a>
                <a href="/usuarioProductos/{{ $id}}"><img src="https://cdn.pixabay.com/photo/2013/07/12/14/53/cart-148964_960_720.png" alt="" width="30" height="30" class="d-inline-block align-bottom me-2"></a>
                <a class="nav-link" href="/usuarios/{{ $id}}">Perfil</a>
                <a href="/usuarios/{{ $id}}"><img src="https://image.flaticon.com/icons/png/512/50/50050.png" alt="" width="30" height="30" class="d-inline-block align-bottom"></a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav><br><br>
        <figure >
            <h4 class="text-center">
                Crear Producto
            </h4><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                </div>

                <div class="col-sm margen2">
                <form action="{!! route('productoStore',['id' => $id]) !!}" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nombreProducto" placeholder="nombre">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="descripcionProducto" placeholder="descripcion">
                        <label for="usuario">Descripcion</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="precioProducto" placeholder="precio">
                        <label for="floatingInput">Precio producto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="cantidad" placeholder="precio">
                        <label for="floatingInput">Cantidad</label>
                    </div>
                    <select name="idUnidad" class="form-select mb-3" aria-label="Default select example" required>
                        <option selected disabled value="">Selecciona una unidad de medida</option>
                        @forelse($unidadMedida as $unidadMedida)
                            <option value="{{ $unidadMedida->id }}">{{ $unidadMedida->tipoUnidad }}</option>
                        @empty
                            no hay unidades de medida
                        @endforelse
                    </select>
                    <select name="idPuesto" class="form-select mb-3" aria-label="Default select example" required>
                        <option selected disabled value="">Selecciona un Puesto</option>
                        @forelse($usuarioPuestos as $usuarioPuestos)
                            <option value="{{ $usuarioPuestos->idPuesto }}">{{ $usuarioPuestos->NombrePuesto }}</option>
                        @empty
                            usuario no tiene puestos
                        @endforelse
                    </select>
                    <button type="submit" class="btn btn-primary" href="/">Crear</button>
                    
                    </form>
                </div>

                <div class="col-3">
                </div>
    </body>
</html>