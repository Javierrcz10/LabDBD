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
                @forelse($usuarioRoles as $us)
                    @if($us->nombreRol == 'vendedor')
                        <a class="nav-link active end-0" aria-current="page" href="/crearProducto/{{ $usuario->id}}">Crear producto</a>
                        <a href="/crearProducto/{{ $usuario->id}}"><img src="https://image.flaticon.com/icons/png/512/83/83074.png" alt="Crear producto" width="30" height="30" class="d-inline-block align-bottom me-2"></a>
                    @else
                    @endif
                @empty
                @endforelse
                <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $usuario->id}}">Carrito</a>
                <a href="/usuarioProductos/{{ $usuario->id}}"><img src="https://cdn.pixabay.com/photo/2013/07/12/14/53/cart-148964_960_720.png" alt="" width="30" height="30" class="d-inline-block align-bottom me-2"></a>
                <a class="nav-link active" href="/usuarios/{{ $usuario->id }}">Perfil</a>
                <a href="/usuarios/{{ $usuario->id }}"><img src="https://image.flaticon.com/icons/png/512/50/50050.png" alt="Perfil" width="30" height="30" class="d-inline-block align-bottom"></a>
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
                    <img src="https://image.flaticon.com/icons/png/512/50/50050.png" class="img-thumbnail" alt="imagen" width="20%" height="200px">
                    <h2>Usuario: {{ $usuario->nombreUsuario }}</h2> 
                    <h2>Apodo: {{ $usuario->apodoUsuario }}</h2> 
                    <h2>Mail: {{ $usuario->emailUsuario }}</h2> 
                    <h2>Reputacion: {{ $usuario->reputacionUsuario }}</h2> 
                    
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="/editarPerfil/{{ $usuario->id }}" role="button">editar datos</a>
                    <br><br>
                    <h5>Roles del usuario</h5>
                    <ul>
                        @forelse($usuarioRoles as $usuarioRoles)
                                <li>{{ $usuarioRoles->idRol }}{{ $usuarioRoles->nombreRol }}</li>
                            @empty
                                no tiene roles
                            @endforelse
                    </ul>
                    <h6>Postulacion a Rol</h6>
                    <form action="{{route('usuarioRolStore')}}" method="POST">
                        <input type="hidden" name="idUsuario" value= "{{$usuario->id}}">
                        <select name="idRol" class="form-select mb-1" aria-label="Default select example" required>
                            <option selected disabled value="">Selecciona un rol</option>
                            @forelse($roles as $roles)
                                <option value="{{ $roles->id }}">{{ $roles->nombreRol }}</option>
                            @empty
                                no hay roles a postular
                            @endforelse
                        </select>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Postular</button>
                        </div>
                    </form><br>
                    @forelse($usuarioRoles2 as $usuarioRol)
                        @if($usuarioRol->nombreRol == 'vendedor')
                            <h5>Puestos donde trabaja usuario</h5>
                                <ul>
                                    @forelse($usuarioPuestos as $usuarioPuesto)
                                        <li>{{ $usuarioPuesto->NombrePuesto }}</li>
                                    @empty
                                        no tiene roles
                                    @endforelse
                                </ul>
                            <h6>Postulacion a Puesto de Feria</h6>

                            <form action="{{route('usuarioPuestoStore')}}" method="POST">
                                <input type="hidden" name="idUsuario" value= "{{$usuario->id}}">
                                <select name="idPuesto" class="form-select mb-1" aria-label="Default select example" required>
                                    <option selected disabled value="">Selecciona un rol</option>
                                    @forelse($puestoFerias as $puestoFeria)
                                        <option value="{{ $puestoFeria->id }}">{{ $puestoFeria->NombrePuesto }}</option>
                                    @empty
                                        no hay roles a postular
                                    @endforelse
                                </select>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Postular</button>
                                </div>
                            </form>
                        @else
                        @endif
                    @empty
                    @endforelse
                </div>

                <div class="col-3">
                </div>
            </div>
        </div>
    </body>
</html>

<style>
    .margen2{
        margin-top:1%;

    }
</style>