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
           
            <a href="/inicio2/{{ $id}}"><img src="https://www.flaticon.es/svg/vstatic/svg/3081/3081887.svg?token=exp=1614144431~hmac=8d704a208a4e466b3c7785aa17a7a6c3" alt="" width="30" height="20" class="d-inline-block align-top"></a>
                <a class="navbar-brand" href="/inicio2/{{ $id}}">Feria online</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav position-absolute end-0">
                    <a class="nav-link active end-0" aria-current="page" href="/usuarioProductos/{{ $id}}">carrito</a>
                    <a href="/usuarioProductos/{{ $id}}"><img src="https://www.flaticon.es/svg/vstatic/svg/2121/2121815.svg?token=exp=1614144180~hmac=fbd564c4f791c62b73bcc3361327ae2f" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
                    <a class="nav-link" href="/usuarios/{{ $id}}">perfil</a>
                    <a href="/usuarios/{{ $id}}"><img src="https://www.flaticon.es/svg/vstatic/svg/64/64572.svg?token=exp=1614144250~hmac=cde59deb7b5db0484ffe1086425f367a" alt="" width="20" height="40" class="d-inline-block align-bottom"></a>
                    &nbsp &nbsp &nbsp
                </div>
                </div>
            </div>
            </nav>
                </p>
                </a>
            </div>
        </nav>
        <figure class="text-center">
            <h1>
                Debito
            </h1>
        </figure>
        <figure class="text-center">
            <h4>
                Ingrese sus datos de facturación
                
            </h4>
            <br>
            <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="tipoPago" placeholder="name@example.com" value="Debito">
                    <label for="floatingInputGrid">Tipo Pago</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <select class="form-select" id="nombreBanco" aria-label="Floating label select example">
                      <option selected>Elija en este menu</option>
                      <option value="1">Banco Santander</option>
                      <option value="2">Banco BCI</option>
                      <option value="3">Banco Estado</option>
                      <option value="4">Banco Falabella</option>
                      <option value="5">Banco del Desarrollo</option>
                      <option value="6">Banco Corpbanca</option>
                      <option value="7">Banco Consorcio</option>

                    </select>
                    <label for="nombreBanco">Nombre del banco</label>
                  </div>
                </div>
              </div>
              <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ultimosDigitos" placeholder="name@example.com">
                        <label for="floatingInput">ultimosDigitos</label>
                    </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <select class="form-select" id="tipoCuenta" aria-label="Floating label select example">
                      <option selected>Abra este menu</option>
                      <option value="1">Cuenta Corriente</option>
                      <option value="2">Cuenta ahorro</option>
                      <option value="3">Cuenta Vista</option>
                    </select>
                    <label for="tipoCuenta">Tipo de cuenta</label>
                  </div>
                </div>
              </div>



              <div class="container">
                <div class="row">
                  <div class="col-sm">
                   
                  </div>
                  <div class="col-sm">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#" role="button">
                        Pagar
                    </a>
                  </div>
                  <div class="col-sm">
                
                  </div>
                </div>
              </div>
           
            
          
    </body>
    </html>