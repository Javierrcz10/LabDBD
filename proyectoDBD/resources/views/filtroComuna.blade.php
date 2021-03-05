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
       
        <a href="/"><img src="https://www.flaticon.es/svg/vstatic/svg/3081/3081887.svg?token=exp=1614144431~hmac=8d704a208a4e466b3c7785aa17a7a6c3" alt="" width="30" height="20" class="d-inline-block align-top"></a>
            <a class="navbar-brand" href="/">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/">carrito</a>
                <a href="/"><img src="https://www.flaticon.es/svg/vstatic/svg/2121/2121815.svg?token=exp=1614144180~hmac=fbd564c4f791c62b73bcc3361327ae2f" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
                <a class="nav-link" href="/">perfil</a>
                <a href="/"><img src="https://www.flaticon.es/svg/vstatic/svg/64/64572.svg?token=exp=1614144250~hmac=cde59deb7b5db0484ffe1086425f367a" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>
        <!-- busqueda-->
        <nav class="navbar navbar-light float-center">
            <div class="container">
                <form class="d-flex">
                    <select name ="comuna" class="form-select me-2" id="Default select example">
                        <option selected value="">Seleccione comuna</option>
                        @foreach($comunas as $comuna)
                            <option value="{{$comuna->id}}">{{$comuna->nombreComuna}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <!-- cards con los puestos de feria-->
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
        @forelse ($puestoFeria as $puestoFeria)
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$puestoFeria->NombrePuesto}}</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button class="btn btn-outline-success">Ir al puesto</button>
              </div>
            </div>
        @empty
        <p>No hay puestos de feria</p>
        @endforelse
          </div>
        </div>
    </body>
</html>