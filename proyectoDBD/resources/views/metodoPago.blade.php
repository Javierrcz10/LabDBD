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
        <figure class="text-center">
            <h1>
                Metodo de Pago
            </h1>
        </figure>
        <figure class="text-center">
            <h4>
                Elija si desea cancelar con debito o credito
                
            </h4>
            <br>
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                  
                    <img src="https://cdn.pixabay.com/photo/2020/09/21/21/30/credit-card-5591300_960_720.png" class="img-fluid" alt="imagen" width="72%" height="200px">
                    <br>
                    <br>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="/debito/{{$id}}" role="button">
                        Elegir debito
                    </a>
                    
                  </div>
                  <div class="col-sm">
                    <img src="https://cdn.pixabay.com/photo/2016/05/03/12/19/credit-card-1369111_960_720.png" class="img-fluid" width="72%" height="200px" alt="Tarjeta credito" >
                    <br>
                    <br>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="/credito/{{$id}}" role="button">
                        Elegir credito
                    </a>
                  </div>
                 
                </div>
              </div>
        
           
            
          
    </body>
    </html>