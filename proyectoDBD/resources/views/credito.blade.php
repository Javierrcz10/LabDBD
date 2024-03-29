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
                <a href="/usuarioProductos/{{ $id}}"><img src="https://image.flaticon.com/icons/png/512/83/83074.png" alt="" width="30" height="30" class="d-inline-block align-bottom me-2"></a>
                <a class="nav-link" href="/usuarios/{{ $id}}">perfil</a>
                <a href="/usuarios/{{ $id}}"><img src="https://image.flaticon.com/icons/png/512/50/50050.png" alt="" width="30" height="30" class="d-inline-block align-bottom"></a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>
        <figure class="text-center">
            <h1>
                Credito
            </h1>
        </figure>
        <figure class="text-center">
            <h4>
                Ingrese sus datos de facturación
                
            </h4>
            <br>
          <div>
            <form action="{{route('metPago')}}" method="POST">
            <input type="hidden" name="idUsuario" value= "{{$id}}">
            <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" name ="tipoPago" class="form-control" id="tipoPago" placeholder="Debito" value="Credito" disabled>
                    <label for="floatingInputGrid">Tipo Pago</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <select name= "nombreBanco" class="form-select" id="nombreBanco" aria-label="Floating label select example">
                      <option selected value ="">Elija en este menu</option>
                      <option value="Mastercard">Mastercard</option>
                      <option value="Visa">Visa</option>
                      <option value="American Express">American Express</option>
                      <option value="Maestro">Maestro</option>
                    </select>
                    <label for="nombreBanco">Tipo de Tarjeta</label>
                  </div>
                </div>
              </div>
              <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="ultimosDigitos" placeholder="name@example.com">
                        <label for="floatingInput">ultimosDigitos</label>
                    </div>
                    <div class="form-floating">
                    <input type="number" name ="precio" class="form-control" id="tipoPago" placeholder="precio" value="{{$total}}" disabled>
                    <label for="floatingInputGrid">Precio Total</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                  <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="numeroTarjeta" placeholder="numero">
                        <label for="floatingInput">Numero de la tarjeta</label>
                  </div>
                </div>
              </div>



              <div class="container">
                <div class="row">
                  <div class="col-sm">
                   
                  </div>
                  <div class="col-sm">
                    
                    <input type="hidden" name="idUsuario" value= "{{$id}}">
                    <input type="hidden" name="tipoPago" value= "Credito">
                    <input type="hidden" name="totalPago" value= "{{$total}}">
                    <button type="submit" class="btn btn-primary" href="boleta{{$id}}">Pagar</button>
              </form>
              </div>
                  </div>
                  <div class="col-sm">
                
                  </div>
                </div>
              </div>
           
            
          
    </body>
    </html>