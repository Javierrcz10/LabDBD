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
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#carrito" role="button">
                        Carrito
                    </a>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#perfil" role="button">
                        Perfil
                    </a>
                </p>
                </a>
            </div>
        </nav>
        <!-- busqueda-->
        <nav class="navbar navbar-light float-xxl-end">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Producto" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <!-- cards con los productos-->
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button class="btn btn-outline-success">Ir al puesto</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button class="btn btn-outline-success">Ir al puesto</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                <button class="btn btn-outline-success">Ir al puesto</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button class="btn btn-outline-success">Ir al puesto</button>
            </div>
            </div>
        </div>
    </body>
</html>